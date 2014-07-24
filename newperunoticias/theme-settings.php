 l=0;l<h;l++){
var m=g[l];
if(%_IsSmi(m)){
if(m>0){
i=(m>>11)+(m&0x7ff);
}else{
i=g[++l]-m;
}
}else{
j[0]=m;
j[1]=i;
lastMatchInfoOverride=j;
var o=
%_CallFunction(k,m,i,a,c);
g[l]=((typeof(%IS_VAR(o))==='string')?o:NonStringToString(o));
i+=m.length;
}
}
}else{
var k=%GetDefaultReceiver(c);
for(var l=0;l<h;l++){
var m=g[l];
if(!%_IsSmi(m)){
lastMatchInfoOverride=m;
var o=%Apply(c,k,m,0,m.length);
g[l]=((typeof(%IS_VAR(o))==='string')?o:NonStringToString(o));
}
}
}
var q=%StringBuilderConcat(g,g.length,a);
d.length=0;
reusableReplaceArray=d;
return q;
}
function StringReplaceNonGlobalRegExpWithFunction(a,b,c){
var d=DoRegExpExec(b,a,0);
if((d===null)){
b.lastIndex=0;
return a;
}
var g=d[3];
var h=%_SubString(a,0,g);
var i=d[4];
var j=((d)[0])>>1;
var k;
var l=%GetDefaultReceiver(c);
if(j==1){
var m=%_SubString(a,g,i);
k=%_CallFunction(l,m,g,a,c);
}else{
var o=new InternalArray(j+2);
for(var q=0;q<j;q++){
o[q]=CaptureString(a,d,q);
}
o[q]=g;
o[q+1]=a;
k=%Apply(c,l,o,0,q+2);
}
h+=k;
return h+%_SubString(a,i,a.length);
}
function StringSearch(a){
if((this==null)&&!(%_IsUndetectableObject(this)))throw MakeTypeError('called_on_null_or_undefined',["String.prototype.search"]);
var b;
if((typeof(a)==='string')){
b=%_GetFromCache(0,a);
}else if((%_IsRegExp(a))){
b=a;
}else{
b=new $RegExp(a);
}
var c=DoRegExpExec(b,((typeof(%IS_VAR(this))==='string')?this:NonStringToString(this)),0);
if(c){
return c[3];
}
return-1;
}
function StringSlice(a,b){
if((this==null)&&!(%_IsUndetectableObject(this)))throw MakeTypeError('called_on_null_or_undefined',["String.prototype.slice"]);
var c=((typeof(%IS_VAR(this))==='string')?this:NonStringToString(this));
var d=c.length;
var g=(%_IsSmi(%IS_VAR(a))?a:%NumberToInteger(ToNumber(a)));
var h=d;
if(!(b===(void 0))){
h=(%_IsSmi(%IS_VAR(b))?b:%NumberToInteger(ToNumber(b)));
}
if(g<0){
g+=d;
if(g<0){
g=0;
}
}else{
if(g>d){
return'';
}
}
if(h<0){
h+=d;
if(h<0){
return'';
}
}else{
if(h>d){
h=d;
}
}
if(h<=g){
return'';
}
return %_SubString(c,g,h);
}
function StringSplitJS(a,b){
if((this==null)&&!(%_IsUndetectableObject(this)))throw MakeTypeError('called_on_null_or_un