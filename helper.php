<?php
/* پنل شیشه ای سلف بات اویل لاین ۷ و ۸ ادیت بشه انلاین مود یادتون نره*/
ob_start();
error_reporting(0);
date_default_timezone_set('Asia/Tehran');
require_once 'mp_patch.php';

$Sudo ="6876561727";
define('API_KEY','8558496344:AAHbdYTPUGIVhHqAkcjhROarI0A-EAYxNHU');
ini_set("log_errors","off");

function bot($method,$datas=[]){$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);$res = curl_exec($ch);
if(curl_error($ch)){var_dump(curl_error($ch));}else{return json_decode($res);}}

function GetMe(){return Bot('getMe');}
$bot = GetMe();
$botid = getMe() -> result -> username;
$botname = getMe() -> result -> first_name;
$botusername = getMe() -> result -> username;

$update = json_decode(file_get_contents('php://input'));
$message = $update->message ?? null;
$chat_id = $message?->chat?->id;
$message_id = $message?->message_id;
$from_id = $message?->from?->id;
$fromid = $update->callback_query?->from?->id;
$firstname = $update->callback_query?->from?->first_name;
$textmessage = $message?->text ?? '';
$inline = $update->inline_query?->query ?? '';
$chatsid = $update->callback_query?->from?->id;
$data = $update->callback_query?->data;
$inline_message_id = $update->callback_query?->inline_message_id;
$re_id = $update->message?->reply_to_message?->from?->id;
$rt = $update->message?->reply_to_message;
$replyid = $update->message?->reply_to_message?->message_id;
$edit = $update->edited_message?->text;
$message_edit_id = $update->edited_message?->message_id;
$chat_edit_id = $update->edited_message?->chat?->id;
$edit_for_id = $update->edited_message?->from?->id;
$membercall = $update->callback_query?->id;

/* Aʜʀɪᴍᴀɴ ᴛᴇᴀᴍ 
@mrsilent09*/

$partmode=file_get_contents("part.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$timename1=file_get_contents("timename1.txt");
$timename2=file_get_contents("timename2.txt");
$timebio1=file_get_contents("timebio1.txt");
$timepic =file_get_contents("timepic.txt");
$timebio2=file_get_contents("timebio2.txt");
$bioen=file_get_contents("bioen.txt");
$biofa=file_get_contents("biofa.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$dataa = json_decode(file_get_contents("data.json"),true);
$dataa = is_array($dataa) ? $dataa : [];
$typing = $dataa['typing'] ?? null;
$History= $dataa['History'] ?? null;
$game = $dataa['game'] ?? null;
$lockpv1= $dataa['lockpv1'] ?? null;
$tas= $dataa['tas'] ?? null;
$voice = $dataa['voice'] ?? null;
$video = $dataa['video'] ?? null;
$pokermode = $dataa['poker'] ?? null;
$markreadmode = $dataa['markread'] ?? null;
$echomode = $dataa['echo'] ?? null;
$funnymode = $dataa['funny'] ?? null;
$lockgpmode = $dataa['lockgp'] ?? null;
$lockpvmode = $dataa['lockpv'] ?? null;
$gamepvmode = $dataa['gamepv'] ?? null;
$pvtypingmode = $dataa['pvtyping'] ?? null;
$photomode = $dataa['photo'] ?? null;
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();


if(strpos($inline,'kosnell_') !== false ) {
$inlin = str_replace("kosnell_","",$inline);
bot("answerInlineQuery",[
"inline_query_id"=>$update->inline_query->id,
"results"=>json_encode([[
"type"=>"article",
"id"=>base64_encode(rand(5,555)),
"title"=>"Hᴇʟᴘᴇʀ Sᴇʟғ
",
"input_message_content"=>["parse_mode"=>"MarkDown","message_text"=>"Pᴀɴᴇʟ Sᴇɴᴅ ғᴏʀ Yᴏᴜ . . . !"],
"reply_markup"=>["inline_keyboard"=>[
[["text"=>"❕ₗₒcₖ ₘₒdₑₛ ","callback_data"=>"lockmode"],
["text"=>" ❗️ₗₒcₖ ₐcₜᵢₒₙₛ ","callback_data"=>"lockactions"]],
[["text"=>"✘ ","callback_data"=>"exit"]],
[["text"=>"💻 sᴇʟғ ʜᴇʟᴘ ","callback_data"=>"Help"],
["text"=>"📚 ₛₜₐₜᵤₛ ","callback_data"=>"Stats"]],
[["text"=>"⌚️ ₜᵢₘₑ ₗᵢₛₜ ","callback_data"=>"times"]],]]]])]);}



if($data == "back" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
bot("editmessagetext", [
"text"=>"
Mᴀɴᴀɢᴇʀ Pᴀɴᴇʟ Sᴇʟғ

","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"❗️ₗₒcₖ ₘₒdₑₛ ","callback_data"=>"lockmode"],
["text"=>"❕ₗₒcₖ ₐcₜᵢₒₙₛ ","callback_data"=>"lockactions"]],
[["text"=>"✘ ","callback_data"=>"exit"]],
[["text"=>"💻 sᴇʟғ ʜᴇʟᴘ ","callback_data"=>"Help"],
["text"=>"📚 ₛₜₐₜᵤₛ ","callback_data"=>"Stats"]],
[["text"=>"⌚️ ₜᵢₘₑ ₗᵢₛₜ ","callback_data"=>"times"]],]])]);}


if($data == "Stats" && $fromid == "$Sudo"){

if (strpos(PHP_OS, 'L') !== false or strpos(PHP_OS, 'l') !== false) { $a = file_get_contents("/proc/meminfo");
 $b = explode('MemTotal:', $a);
 $b = $b[1] ?? '';
 $stats = explode(' kB', $b);
 $stats = ($stats[0] ?? 0) / 1024 / 1024;
if ($stats != 0) {$mem_total = $stats . 'GB';
} else { $mem_total = 'No Access';}} else {$mem_total = '!';}
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
bot("editmessagetext", ["text"=>"━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ sᴛᴀᴛᴜs ɪs :
━─┄┄┄┄┄┄┄┄┄┄┄─━
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"ᴘᴀʀᴛ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$partmode","callback_data"=>"text"]],
[["text"=>"ᴛɪᴍᴇ1","callback_data"=>"text"],["text"=>"$timename1","callback_data"=>"text"]],
[["text"=>"ᴛɪᴍᴇ2","callback_data"=>"text"],["text"=>"$timename2","callback_data"=>"text"]],
[["text"=>"ᴛɪᴍᴇᴘɪᴄ","callback_data"=>"text"],["text"=>"$timepic","callback_data"=>"text"]],
[["text"=>"ᴛɪᴍᴇʙɪᴏ1","callback_data"=>"text"],["text"=>"$timebio1","callback_data"=>"text"]],
[["text"=>"ᴛɪᴍᴇʙɪᴏ2","callback_data"=>"text"],["text"=>"$timebio2","callback_data"=>"text"]],
[["text"=>"Hɪsᴛᴏʀʏ","callback_data"=>"text"],["text"=>"$History","callback_data"=>"text"]],
[["text"=>"ᴍᴜᴛᴇᴘᴠ","callback_data"=>"text"],["text"=>"$lockpv1","callback_data"=>"text"]],
[["text"=>"Tᴀs ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$tas","callback_data"=>"text"]],
[["text"=>"ʙɪᴏ ᴇɴɢʟɪsɪ","callback_data"=>"text"],["text"=>"$bioen","callback_data"=>"text"]],
[["text"=>"ʙɪᴏ ғᴀʀsɪ","callback_data"=>"text"],["text"=>"$biofa","callback_data"=>"text"]],
[["text"=>"ᴇᴄʜᴏ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$echomode","callback_data"=>"text"]],
[["text"=>"ᴍᴀʀᴋʀᴇᴀᴅ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$markreadmode","callback_data"=>"text"]],
[["text"=>"ᴘʜᴏᴛᴏ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$photomode","callback_data"=>"text"]],
[["text"=>"ʙᴏʟᴅ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$boldmode","callback_data"=>"text"]],
[["text"=>"ᴘᴏᴋᴇʀ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$pokermode","callback_data"=>"text"]],
[["text"=>"ʟᴏᴄᴋɢᴘ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$lockgpmode","callback_data"=>"text"]],
[["text"=>"ʟᴏᴄᴋᴘᴠ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$lockpvmode","callback_data"=>"text"]],
[["text"=>"ғᴜɴɴʏ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$funnymode","callback_data"=>"text"]],
[["text"=>"ɢᴀᴍᴇᴘᴠ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$gamepvmode","callback_data"=>"text"]],
[["text"=>"ᴘᴠᴛʏᴘɪɴɢ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$pvtypingmode","callback_data"=>"text"]],
[["text"=>"ɪᴛᴀʟɪᴄ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$italicmode","callback_data"=>"text"]],
[["text"=>"ᴄᴏᴅɪɴɢ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$codingmode","callback_data"=>"text"]],
[["text"=>"ᴅᴇʟᴇᴛᴇᴅ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$deletedmode","callback_data"=>"text"]],
[["text"=>"ʜᴀsʜᴛᴀɢ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$hashtagmode","callback_data"=>"text"]],
[["text"=>"ᴍᴇɴᴛɪon ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$mentionmode","callback_data"=>"text"]],
[["text"=>"ᴍᴇɴᴛɪon2 ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$mention2mode","callback_data"=>"text"]],
[["text"=>"ᴜɴᴅᴇʀʟɪɴᴇ ᴍᴏᴅᴇ","callback_data"=>"text"],["text"=>"$underlinemode","callback_data"=>"text"]],
[["text"=>"ᴀᴄᴛɪon ᴛʏᴘᴇ","callback_data"=>"text"],["text"=>"$typing","callback_data"=>"text"]],
[["text"=>"ᴀᴄᴛɪon ɢᴀᴍᴇ","callback_data"=>"text"],["text"=>"$game","callback_data"=>"text"]],
[["text"=>"ᴀᴄᴛɪon ᴠᴏɪᴄᴇ","callback_data"=>"text"],["text"=>"$voice","callback_data"=>"text"]],
[["text"=>"ᴀᴄᴛɪon ᴠɪᴅᴇᴏ","callback_data"=>"text"],["text"=>"$video","callback_data"=>"text"]],
[["text"=>"➲ ᴘɪɴɢ","callback_data"=>"text"],["text"=>"$load[0]","callback_data"=>"text"]],
[["text"=>"➲ ᴍᴇᴍᴏʀʏ ᴜsɪɴɢ","callback_data"=>"text"],["text"=>"$mem_using","callback_data"=>"text"]],
[["text" => "<- 𝚋𝚊𝚌𝚔 ->","callback_data" => "back"]],]])]);}


if($data == "exit" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
bot("editmessagetext", [
"text"=>" Cʟᴏsᴇ Tʜᴇ Aᴅᴍɪɴ Pᴀɴᴇʟ ","inline_message_id"=>$inline_message_id,
'parse_mode'=>"html"]);}

if($data == "text" && $fromid == "$Sudo"){bot('answercallbackquery', ['callback_query_id' =>$membercall,
'text' => "ᴛʜɪs sᴇᴄᴛɪon ᴄᴀɴ ɴᴏᴛ ʙᴇ ᴄʜᴀɴɢᴇᴅ\n\nᴄʜᴀɴɴᴇʟ : @R0BOTICPHP\nᴄʀᴇᴀᴛᴏʀ :@mrsilent09\nʙᴏᴛ ɴᴀᴍᴇ : $botname
ʙᴏᴛ ᴜsᴇʀɴᴀᴍᴇ : @$botid
",'show_alert' =>true]);}




//====
if($data == "times" && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    bot("editmessagetext", [
    "text"=>"
Sᴇɴᴅ Hᴇʟᴘ Tɪᴍᴇ
    ","inline_message_id"=>$inline_message_id,
    'parse_mode'=>"MarkDown",
    "reply_markup"=>json_encode([
    "inline_keyboard"=>[
    [["text"=>"⌚️𝘁𝗶𝗺𝗲 𝗲𝘀𝗺","callback_data"=>"timename"],
    ["text"=>"⌚️𝘁𝗶𝗺𝗲 𝗯𝗶𝗼","callback_data"=>"timebio"]],
    [["text"=>"⌚️𝘁𝗶𝗺𝗲𝗽𝗶𝗰","callback_data"=>"timephoto"]],
    [["text"=>"⌚️𝗯𝗶𝗼 𝗳𝗼𝗻𝘁","callback_data"=>"biofont"]],
    [["text"=>"<- 𝚋𝚊𝚌𝚔 ->","callback_data"=>"back"]],]])]);}
//====







if($data == "Help" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
bot("editmessagetext", [
"text"=>"━─┄┄┄┄┄┄┄┄┄┄┄─━
Hᴇʟᴘᴇʀ Sᴇʟғ
━─┄┄┄┄┄┄┄┄┄┄┄─━
1 - بخش کاربردی php
━─┄┄┄┄┄┄┄┄┄┄┄─━
2 - بخش  مود ها  php
━─┄┄┄┄┄┄┄┄┄┄┄─━
3 - بخش اکشن ها php
━─┄┄┄┄┄┄┄┄┄┄┄─━
4 - بخش فان ها  php
━─┄┄┄┄┄┄┄┄┄┄┄─━
5 - بخش ساعت php
━─┄┄┄┄┄┄┄┄┄┄┄─━
6 - بخش مدیریت php
━─┄┄┄┄┄┄┄┄┄┄┄─━
7 - بخش پاسخ ها php
━─┄┄┄┄┄┄┄┄┄┄┄─━","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"¹","callback_data"=>"1"],
["text"=>"²","callback_data"=>"2"]],
[["text"=>"³","callback_data"=>"3"],
["text"=>"⁴","callback_data"=>"4"]],
[["text"=>"⁵","callback_data"=>"5"],
["text"=>"⁶","callback_data"=>"6"]],
[["text"=>"⁷","callback_data"=>"7"]],
[["text"=>"<- 𝚋𝚊𝚌𝚔 ->","callback_data"=>"back"]],]])]);}

if($data == "1" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
bot("editmessagetext", [
"text"=>"━─┄┄┄┄┄┄┄┄┄┄┄─━
**بـــخـــش کـــاربـــردی :**
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/info ` [UserName] یا [UserID]
• *دریافت اطلاعات کاربر *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/gpinfo `
• *دریافت اطلاعات گروه *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/flood ` [Count] [Text]
• *ارسال اسپم یک متن به تعداد دلخواه*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/save ` [Reply]
• *سیو کردن پیام و محتوا  در پیوی خود ربات *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/id ` [reply]
• *دریافت ایدی عددی کابر *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `left ` 
• * خروج از گپ  *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `!php ` Code
• *اجرای کد های زبان PHP *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `whois ` Domain
• *دریافت اطلاعات دامنه مورد نظر *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `scr ` Url
• *دریافت اسکرین شات از سایت مورد نظر *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `ping ` Url
• *دریافت پینگ سایت مورد نظر *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `brc ` Url
• *ساخت QR برای لینک مورد نظر*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `git ` (username/project) or (Url)
• *دانلود فایل فشرده یک سورس از گیتهاب*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `user ` UserID
• *منشن کردن یک شخص از طریق آیدی عددی*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `tarix` 
• *دریافت تاریخ شمی *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `miladi` 
• *دریافت تاریخ میلادی *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `setbio` [text]
• *تغییر بیوگرافی شما *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `setuser` [text]
• *تغییر ایدی شما*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `setfname`[text]
• *تغییر اسم شما*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `setlname`[text]
• *تغییر نام خانوادگی شما*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `spam`
• *اسپم فحش*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `Attack`
• *اتک بصورت فوروارد*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `clean all` [پاکسازی کلی]
• *پاکسازی پیام های گروه*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `delchat` replay
• *پاکسازی پیام های یک شخص در گروه*
━─┄┄┄┄┄┄┄┄┄┄┄─━
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode(["inline_keyboard"=>[
[["text"=>"ッ 1","callback_data"=>"1"],
["text"=>"ッ 2","callback_data"=>"2"],
["text"=>"ッ 3","callback_data"=>"3"],
["text"=>"ッ 4","callback_data"=>"4"],
["text"=>"ッ 5","callback_data"=>"5"],
["text"=>"ッ 6","callback_data"=>"6"],
["text"=>"ッ 7","callback_data"=>"7"]],
[["text"=>"<- 𝚋𝚊𝚌𝚔 ->","callback_data"=>"back"]],]])]);}

if($data == "2" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
bot("editmessagetext", [
"text"=>"
━─┄┄┄┄┄┄┄┄┄┄┄─━
• **بـــَـــخـــشِ مـــُـــود هـــا : **
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `part ` on یا off
• *حالت حرف به حرف نوشتن *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `poker` on یا off
• * حالت پوکر  *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `hashtag ` on یا off
• *حالت نوشتن متن با هشتگ *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `lockgp ` on یا off
• * قفل گروه ولی باید ادمین باشی *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `italic ` on یا off
• *حالت نوشتن متن به صورت کج *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `echo ` on یا off
• * حالت طوطی *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `History` on یا off
• *فعال کردن قفل تاریخچه*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `tas` on یا off
• *حدث زدن تاس*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `mutepv` on یا off
• *فعال کردن قفل پیوی*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `coding ` on یا off
• *حالت نوشتن متن به صورت تکی و کدینگ *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `underline ` on یا off
• *حالت نوشتن متن به صورت زیر خط دار *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `funny ` on یا off
• * حالت خندیدن *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `deleted ` on یا off
• *حالت نوشتن متن به صورت خط خورده *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `bold ` on یا off
• *حالت نوشتن متن به صورت ضخیم *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `mention ` on یا off
• *حالت نوشتن متن با منشن کردن روی آیدی اکانت *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `mention2 ` on یا off
• *حالت نوشتن متن با منشن کردن روی آیدی اکانت فرد ریپلای شده *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `reverse ` on یا off
• *حالت نوشتن متن به صورت معکوس*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `online ` on یا off
• *حالت همیشه آنلاین*
━─┄┄┄┄┄┄┄┄┄┄┄─━","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode(["inline_keyboard"=>[
[["text"=>"ッ 1","callback_data"=>"1"],
["text"=>"ッ 2","callback_data"=>"2"],
["text"=>"ッ 3","callback_data"=>"3"],
["text"=>"ッ 4","callback_data"=>"4"],
["text"=>"ッ 5","callback_data"=>"5"],
["text"=>"ッ 6","callback_data"=>"6"],
["text"=>"ッ 7","callback_data"=>"7"]],
[["text"=>"<- 𝚋𝚊𝚌𝚔 ->","callback_data"=>"back"]],]])]);}

if($data == "3" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
bot("editmessagetext", [
"text"=>"━─┄┄┄┄┄┄┄┄┄┄┄─━
• **بـــَـــخـــشِ اکـــشـــن هـــا : **
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `ac type ` on یا off
• *اکشن ارسال وضعیت درحال نوشتن*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `ac voice ` on یا off
• *اکشن وضعیت درحال ارسال صدا*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `ac video ` on یا off
• *اکشن وضعیت درحال ارسال ویدئو*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `ac game ` on یا off
• *اکشن وضعیت درحال بازی کردن*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `gamepv ` on یا off
• * حالت بازی در پیوی *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `photo` on یا off
• * حالت عکس در گروه *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `pvtyping` on یا off
• *حالت ارسال تایپ در پیوی*
━─┄┄┄┄┄┄┄┄┄┄┄─━
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode(["inline_keyboard"=>[
[["text"=>"ッ 1","callback_data"=>"1"],
["text"=>"ッ 2","callback_data"=>"2"],
["text"=>"ッ 3","callback_data"=>"3"],
["text"=>"ッ 4","callback_data"=>"4"],
["text"=>"ッ 5","callback_data"=>"5"],
["text"=>"ッ 6","callback_data"=>"6"],
["text"=>"ッ 7","callback_data"=>"7"]],
[["text"=>"<- 𝚋𝚊𝚌𝚔 ->","callback_data"=>"back"]],]])]);}

if($data == "4" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
bot("editmessagetext", [
"text"=>"━─┄┄┄┄┄┄┄┄┄┄┄─━
• **بـــَـــخـــشِ فــــــان : **
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/music ` [TEXT]
• *موزیک درخواستی *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `jh`
• * جرعت حقیقت*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `join` @ ایدی
• *جوین به یک گروه یا کانال*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `leave` @ ایدی
• *لفت به یک گروه یا کانال*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/gif ` [Text]
• *گیف درخاستی *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/pic ` [Text]
• *عکس درخاستی *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `cor pic`
• * امار کرونا *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/apk ` [Text]
• *برنامه درخاستی *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/like ` [Text]
• *گذاشتن دکمه شیشه ای لایک زیر متن *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/upload ` [URL]
• *اپلود فایل از لینک *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/meme ` [Text]
• *ویس درخاستی از ربات پرشین میم *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/giff ` [Text]
• *گیف درخاستی با متن دلخواه *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `font ` [Text]
• *ساخت فونت اسم لاتین شما با 125 مدل مختلف *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `fafont ` [Text]
• *ساخت فونت اسم فارسی شما با 10 مدل مختلف *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `age ` (Y)(M)(D)
• *درخاست محاسبه سن شما *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `rem`
• *پاکسازی تاریخچه پیوی *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `rem1`
• *پاکسازی پیام های پیوی ریپلای*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `rev ` [Text]
• *معکوس کردن جمله شما*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `logo` [Text]
• *ساخت لوگو *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `meane ` [Text]
• *دریافت معانی کلمات فارسی*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `kalame ` [Level]
• *دریافت بازی از ربات کلمه*
• (مبتدی|ساده|متوسط|سخت|وحشتناک)
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `fal`
• *دریافت فال حافظ*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `fackecnt`[text]
• *دریافت اکانت فیک*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `ok` replay
• *ذخیره عکس زمان دار در سیو مسیج*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `ebcode` [text]
• *انکد کردن یه تیکه کد*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `decode` [text]
• *دیکد کردن یه تیکه کد*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/icon ` [Text]
• *آیکون با کلمه درخاستی و شکلک رندوم*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/lid ` [ID]
• *برای دریافت لینک آیکون مورد نظر در پیوی خودتان*
━─┄┄┄┄┄┄┄┄┄┄┄─━
Mᴇᴍ Usᴀɢᴇ : **$mem_using** ᴍɢ
━─┄┄┄┄┄┄┄┄┄┄┄─━
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode(["inline_keyboard"=>[
[["text"=>"ッ 1","callback_data"=>"1"],
["text"=>"ッ 2","callback_data"=>"2"],
["text"=>"ッ 3","callback_data"=>"3"],
["text"=>"ッ 4","callback_data"=>"4"],
["text"=>"ッ 5","callback_data"=>"5"],
["text"=>"ッ 6","callback_data"=>"6"],
["text"=>"ッ 7","callback_data"=>"7"]],
[["text"=>"<- 𝚋𝚊𝚌𝚔 ->","callback_data"=>"back"]],]])]);}

if($data == "5" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
bot("editmessagetext", [
"text"=>"━─┄┄┄┄┄┄┄┄┄┄┄─━
• *بـــخـــش ساعت :*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `timename1 ` on یا off
• *ساعت کنار اسم*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `timename2` on یا off
• *ساعت کنار اسم*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `timebio1` on یا off
• *ساعت کنار بیو گرافی*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `timebio2` on یا off
• *ساعت کنار بیو گرافی*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `timepic` on یا off
• *ساعت روی پروفایل*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `biofa` on یا off
• *فونت فارسی به همراه ساعت*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `bioen` on یا off
• *فونت انگلیسی همراه ساعت*
━─┄┄┄┄┄┄┄┄┄┄┄─━
Mᴇᴍ Usᴀɢᴇ : **$mem_using** ᴍɢ
━─┄┄┄┄┄┄┄┄┄┄┄─━
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode(["inline_keyboard"=>[
[["text"=>"ッ 1","callback_data"=>"1"],
["text"=>"ッ 2","callback_data"=>"2"],
["text"=>"ッ 3","callback_data"=>"3"],
["text"=>"ッ 4","callback_data"=>"4"],
["text"=>"ッ 5","callback_data"=>"5"],
["text"=>"ッ 6","callback_data"=>"6"],
["text"=>"ッ 7","callback_data"=>"7"]],
[["text"=>"<- 𝚋𝚊𝚌𝚔 ->","callback_data"=>"back"]],]])]);}

 if($data == "6" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
bot("editmessagetext", [
"text"=>"━─┄┄┄┄┄┄┄┄┄┄┄─━
• *بـــخـــش مــدیــریــت :*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `bot ` (on) یا (off)
• *خاموش و روشن کردن ربات *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `ping `
• *دریافت وضعیت ربات *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `block ` (UserName) یا Rreply)
• *بلاک کردن شخصی خاص در ربات *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `unblock ` (UserName) یا Rreply)
• *آزاد کردن شخصی خاص از بلاک در ربات *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `/restart`
• *برای 0 کردن حافظه *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `status `
• *دریافت وضعیت مود ها و . . . *
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `setenemy ` (Reply) or (InPV)
• *افزودن یک کاربر به لییست دشمنان*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `delenemy ` (Reply) or (InPV)
• *حذف یک کاربر به لیست دشمنان*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `enemylist`
• *نمایش لیست دشمنان*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `cleanenemylist`
• *پاکسازی لیست دشمنان*
• ┅┅━━━━ • ━━━━┅┅ • 
Mᴇᴍ Usᴀɢᴇ : **$mem_using** ᴍɢ
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode(["inline_keyboard"=>[
[["text"=>"ッ 1","callback_data"=>"1"],
["text"=>"ッ 2","callback_data"=>"2"],
["text"=>"ッ 3","callback_data"=>"3"],
["text"=>"ッ 4","callback_data"=>"4"],
["text"=>"ッ 5","callback_data"=>"5"],
["text"=>"ッ 6","callback_data"=>"6"],
["text"=>"ッ 7","callback_data"=>"7"]],
[["text"=>"<- 𝚋𝚊𝚌𝚔 ->","callback_data"=>"back"]],]])]);}

if($data == "7" && $fromid == "$Sudo"){
bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
bot("editmessagetext", [
"text"=>"━─┄┄┄┄┄┄┄┄┄┄┄─━
• **بـــَـــخـــشِ پاسسخ خودکار : **
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `setanswer` text + text
• *تنظیم پاسخ گویی خودکار*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `delanswer` text
• *پاک کردن کلمه پاسخ خودکار*
━─┄┄┄┄┄┄┄┄┄┄┄─━
➲ `clean answers ` 
• *پاکسازی پاسخ ها*
━─┄┄┄┄┄┄┄┄┄┄┄─━
","inline_message_id"=>$inline_message_id,
'parse_mode'=>"MarkDown",
"reply_markup"=>json_encode(["inline_keyboard"=>[
[["text"=>"ッ 1","callback_data"=>"1"],
["text"=>"ッ 2","callback_data"=>"2"],
["text"=>"ッ 3","callback_data"=>"3"],
["text"=>"ッ 4","callback_data"=>"4"],
["text"=>"ッ 5","callback_data"=>"5"],
["text"=>"ッ 6","callback_data"=>"6"],
["text"=>"ッ 7","callback_data"=>"7"]],
[["text"=>"<- 𝚋𝚊𝚌𝚔 ->","callback_data"=>"back"]],]])]);}

function lockmode($reloadid){

$partmode=file_get_contents("part.txt");
$timename = file_get_contents("timename.txt");
$hashtagmode=file_get_contents("hashtag.txt");
$mentionmode=file_get_contents("mention.txt");
$boldmode=file_get_contents("bold.txt");
$italicmode=file_get_contents("italic.txt");
$underlinemode=file_get_contents("underline.txt");
$deletedmode=file_get_contents("deleted.txt");
$mention2mode = file_get_contents("mention2.txt");
$codingmode = file_get_contents("coding.txt");
$onlinemode = file_get_contents("online.txt");
$reversemode = file_get_contents("reversemode.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();
$dataa = json_decode(file_get_contents("data.json"),true);
$pokermode = $dataa['poker'];
$History = $dataa['History'];
$lockpv1= $dataa['lockpv1'];
$tas = $dataa['tas'];
$lockpvmode = $dataa['lockpv'];
$echomode = $dataa['echo'];
$markreadmode = $dataa['markread'];
$lockgpmode = $dataa['lockgp'];
$pvtypingmode = $dataa['pvtyping'];
$gamepvmode = $dataa['gamepv'];
$funnymode = $dataa['funny'];
$photomode = $dataa['photo'];
$inlinebutton = json_encode([
    "inline_keyboard"=>[
[["text"=>"ᴘᴏᴋᴇʀ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$pokermode","callback_data"=>"pokermode"]],
[["text"=>"Hɪsᴛᴏʀʏ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$History","callback_data"=>"History"]],
[["text"=>"ᴛᴀs ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$tas","callback_data"=>"tas"]],
[["text"=>"ᴍᴜᴛᴇᴘᴠ","callback_data"=>"text"],
["text"=>"$lockpv1","callback_data"=>"lockpv1"]],
[["text"=>"ɢᴀᴍᴇᴘᴠ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$gamepvmode","callback_data"=>"gamepvmode"]],
[["text"=>"ᴘᴠᴛʏᴘɪɴɢ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$pvtypingmode","callback_data"=>"pvtypingmode"]],
[["text"=>"ғᴜɴɴʏ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$funnymode","callback_data"=>"funnymode"]],
[["text"=>"ʟᴏᴄᴋɢᴘ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$lockgpmode","callback_data"=>"lockgpmode"]],
[["text"=>"ʟᴏᴄᴋᴘᴠ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$lockpvmode","callback_data"=>"lockpvmode"]],
[["text"=>"ᴇᴄʜᴏ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$echomode","callback_data"=>"echomode"]],
[["text"=>"ᴍᴀʀᴋʀᴇᴀᴅ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$markreadmode","callback_data"=>"markreadmode"]],
[["text"=>"ᴘᴀʀᴛ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$partmode","callback_data"=>"partmode"]],
[["text"=>"ʙᴏʟᴅ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$boldmode","callback_data"=>"boldmode"]],
[["text"=>"ᴘʜᴏᴛᴏ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$photomode","callback_data"=>"photomode"]],
[["text"=>"ɪᴛᴀʟɪᴄ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$italicmode","callback_data"=>"italicmode"]],
[["text"=>"ᴄᴏᴅɪɴɢ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$codingmode","callback_data"=>"codingmode"]],
[["text"=>"ᴅᴇʟᴇᴛᴇᴅ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$deletedmode","callback_data"=>"deletedmode"]],
[["text"=>"ʜᴀsʜᴛᴀɢ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$hashtagmode","callback_data"=>"hashtagmode"]],
[["text"=>"ᴍᴇɴᴛɪᴏɴ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$mentionmode","callback_data"=>"mentionmode"]],
[["text"=>"ᴍᴇɴᴛɪᴏɴ2 ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$mention2mode","callback_data"=>"mention2mode"]],
[["text"=>"ᴜɴᴅᴇʀʟɪɴᴇ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$underlinemode","callback_data"=>"underlinemode"]],
[["text"=>"ʀᴇᴠᴇʀsᴇ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$reversemode","callback_data"=>"reversemode"]],
[["text"=>"ᴏɴʟɪɴᴇ ᴍᴏᴅᴇ","callback_data"=>"text"],
["text"=>"$onlinemode","callback_data"=>"onlinemode"]],
[["text"=>"• ┅┅━━ • ━━┅┅ •  ","callback_data"=>"text"]],
[["text"=>"➲ ᴘɪɴɢ","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],
[["text"=>"➲ ᴍᴇᴍᴏʀʏ ᴜsɪɴɢ","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],
[["text" => "<- 𝚋𝚊𝚌𝚔 ->", "callback_data" => "back"]],]]);
    bot("editmessagetext", [
"text"=>"
━─┄┄┄┄┄┄┄┄┄┄┄─━
Yᴏᴜ ᴄᴀɴ on Oʀ off ʏᴏᴜʀ Mᴏᴅᴇs :
━─┄┄┄┄┄┄┄┄┄┄┄─━
",
    "inline_message_id"=>$reloadid,
    "parse_mode"=>"MarkDown",
    'reply_markup'=>$inlinebutton,]);
}

function timename($reloadid){
	$timename2 = file_get_contents("timename2.txt");
$timename1 = file_get_contents("timename1.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();
$inlinebutton = json_encode([
    "inline_keyboard"=>[
[["text"=>"𝘁𝗶𝗺𝗲𝗻𝗮𝗺𝗲１","callback_data"=>"text"],
["text"=>"$timename1","callback_data"=>"timename1"]],
[["text"=>"𝘁𝗶𝗺𝗲𝗻𝗮𝗺𝗲 ➋","callback_data"=>"text"],
["text"=>"$timename2","callback_data"=>"timename2"]],
[["text"=>"• ┅┅━━ • ━━┅┅ •  ","callback_data"=>"text"]],
[["text"=>"➲ ᴘɪɴɢ","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],
[["text"=>"➲ ᴍᴇᴍᴏʀʏ ᴜsɪɴɢ","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],
[["text" => "<- 𝚋𝚊𝚌𝚔 ->", "callback_data" => "back"]],]]);
    bot("editmessagetext", [
"text"=>"
━─┄┄┄┄┄┄┄┄┄┄┄─━
Yᴏᴜ ᴄᴀɴ on Oʀ off ʏᴏᴜʀ Mᴏᴅᴇs :
━─┄┄┄┄┄┄┄┄┄┄┄─━
",
    "inline_message_id"=>$reloadid,
    "parse_mode"=>"MarkDown",
    'reply_markup'=>$inlinebutton,]);
}
function timebio($reloadid){
	$timebio1= file_get_contents("timebio1.txt");
$timebio2= file_get_contents("timebio2.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();
$inlinebutton = json_encode([
    "inline_keyboard"=>[
[["text"=>"⌚𝗕𝗜𝗢１","callback_data"=>"text"]],
[["text"=>"$timebio1","callback_data"=>"timebio1"]],
[["text"=>"⌚𝗕𝗜𝗢 ➋","callback_data"=>"text"]],
[["text"=>"$timebio2","callback_data"=>"timebio2"]],
[["text"=>"• ┅┅━━ • ━━┅┅ •  ","callback_data"=>"text"]],
[["text"=>"➲ ᴘɪɴɢ","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],
[["text"=>"➲ ᴍᴇᴍᴏʀʏ ᴜsɪɴɢ","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],
[["text" => "<- 𝚋𝚊𝚌𝚔 ->", "callback_data" => "back"]],]]);
    bot("editmessagetext", [
"text"=>"
━─┄┄┄┄┄┄┄┄┄┄┄─━
Yᴏᴜ ᴄᴀɴ on Oʀ off ʏᴏᴜʀ Mᴏᴅᴇs :
━─┄┄┄┄┄┄┄┄┄┄┄─━
",
    "inline_message_id"=>$reloadid,
    "parse_mode"=>"MarkDown",
    'reply_markup'=>$inlinebutton,]);
}
function biofont($reloadid){
	$bioen= file_get_contents("bioen.txt");
$biofa= file_get_contents("biofa.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();
$inlinebutton = json_encode([
    "inline_keyboard"=>[
[["text"=>"📚 𝗯𝗶𝗼 𝗲𝗻𝗴𝗹𝗶𝘀𝗶","callback_data"=>"text"]],
[["text"=>"$bioen","callback_data"=>"bioen"]],
[["text"=>"📚𝗯𝗶𝗼 𝗳𝗮𝗿𝘀𝗶","callback_data"=>"text"]],
[["text"=>"$biofa","callback_data"=>"biofa"]],
[["text"=>"• ┅┅━━ • ━━┅┅ •  ","callback_data"=>"text"]],
[["text"=>"➲ ᴘɪɴɢ","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],
[["text"=>"➲ ᴍᴇᴍᴏʀʏ ᴜsɪɴɢ","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],
[["text" => "<- 𝚋𝚊𝚌𝚔 ->", "callback_data" => "back"]],]]);
    bot("editmessagetext", [
"text"=>"
━─┄┄┄┄┄┄┄┄┄┄┄─━
Yᴏᴜ ᴄᴀɴ on Oʀ off ʏᴏᴜʀ Mᴏᴅᴇs :
━─┄┄┄┄┄┄┄┄┄┄┄─━
",
    "inline_message_id"=>$reloadid,
    "parse_mode"=>"MarkDown",
    'reply_markup'=>$inlinebutton,]);
}

function timephoto($reloadid){
$timepic= file_get_contents("timepic.txt");
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();
$inlinebutton = json_encode([
    "inline_keyboard"=>[
[["text"=>"🕘 𝘁𝗶𝗺𝗲𝗽𝗶𝗰","callback_data"=>"text"]],
[["text"=>"$timepic","callback_data"=>"timepic"]],
[["text"=>"• ┅┅━━ • ━━┅┅ •  ","callback_data"=>"text"]],
[["text"=>"➲ ᴘɪɴɢ","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],
[["text"=>"➲ ᴍᴇᴍᴏʀʏ ᴜsɪɴɢ","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],
[["text" => "<- 𝚋𝚊𝚌𝚔 ->", "callback_data" => "back"]],]]);
    bot("editmessagetext", [
"text"=>"
━─┄┄┄┄┄┄┄┄┄┄┄─━
Yᴏᴜ ᴄᴀɴ on Oʀ off ʏᴏᴜʀ Mᴏᴅᴇs :
━─┄┄┄┄┄┄┄┄┄┄┄─━
",
    "inline_message_id"=>$reloadid,
    "parse_mode"=>"MarkDown",
    'reply_markup'=>$inlinebutton,]);
}

function lockactions($reloadid){
$dataa = json_decode(file_get_contents("data.json"),true);
$typing = $dataa['typing'];
$game = $dataa['game'];
$voice = $dataa['voice'];
$video = $dataa['video'];
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$load = sys_getloadavg();

$inlinebutton = json_encode([
    "inline_keyboard"=>[
[["text"=>"➲ ᴀᴄᴛɪon ᴛʏᴘᴇ","callback_data"=>"text"],
["text"=>"$typing","callback_data"=>"typing"]],
[["text"=>"➲ ᴀᴄᴛɪon ɢᴀᴍᴇ","callback_data"=>"text"],
["text"=>"$game","callback_data"=>"game"]],
[["text"=>"➲ ᴀᴄᴛɪon ᴠᴏɪᴄᴇ","callback_data"=>"text"],
["text"=>"$voice","callback_data"=>"voice"]],
[["text"=>"➲ ᴀᴄᴛɪon ᴠɪᴅᴇᴏ","callback_data"=>"text"],
["text"=>"$video","callback_data"=>"video"]],
[["text"=>"• ┅┅━━━ • ━━━┅┅ •  ","callback_data"=>"text"]],
[["text"=>"➲ ᴘɪɴɢ","callback_data"=>"text"],
["text"=>"$load[0]","callback_data"=>"text"]],
[["text"=>"➲ ᴍᴇᴍᴏʀʏ ᴜsɪɴɢ","callback_data"=>"text"],
["text"=>"$mem_using","callback_data"=>"text"]],
[["text" => "➲ ʙᴀᴄᴋ ", "callback_data" => "back"]],]]);
    bot("editmessagetext", [
"text"=>"
━─┄┄┄┄┄┄┄┄┄┄┄─━
Yᴏᴜ ᴄᴀɴ on Oʀ off ʏᴏᴜʀ Aᴄᴛɪons :
━─┄┄┄┄┄┄┄┄┄┄┄─━
",
    "inline_message_id"=>$reloadid,
    "parse_mode"=>"MarkDown",
    'reply_markup'=>$inlinebutton,]);
}


 

if($data == 'lockmode' && $fromid == "$Sudo"){
    $id = str_replace("lockmode","",$data);
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);lockmode($inline_message_id);
}
if($data == 'lockactions' && $fromid == "$Sudo"){
    $id = str_replace("lockactions","",$data);
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);lockactions($inline_message_id);
}
if($data == 'timename' && $fromid == "$Sudo"){
    $id = str_replace("timename","",$data);
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);timename($inline_message_id);
}
if($data == 'timebio' && $fromid == "$Sudo"){
    $id = str_replace("timebio","",$data);
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);timebio($inline_message_id);
}
if($data == 'biofont' && $fromid == "$Sudo"){
    $id = str_replace("biofont","",$data);
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);biofont($inline_message_id);
}
if($data == 'timephoto' && $fromid == "$Sudo"){
    $id = str_replace("timephoti","",$data);
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);timephoto($inline_message_id);
}


if($data == 'partmode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($partmode == "on"){
      file_put_contents('part.txt', 'off');
        lockmode($inline_message_id);
    }
    if($partmode == "off"){
      file_put_contents('part.txt', 'on');
        lockmode($inline_message_id);
    }
}
if($data == 'timepic' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($timepic == "on"){
      file_put_contents('timepic.txt', 'off');
        timephoto($inline_message_id);
    }
    if($timepic == "off"){
      file_put_contents('timepic.txt', 'on');
        timephoto($inline_message_id);
    }
}
if($data == 'timename1' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($timename1 == "on"){
      file_put_contents('timename1.txt', 'off');
        timename($inline_message_id);
    }
    if($timename1 == "off"){
      file_put_contents('timename1.txt', 'on');
        timename($inline_message_id);
    }
}

if($data == 'timename2' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($timename2 == "on"){
      file_put_contents('timename2.txt', 'off');
        timename($inline_message_id);
    }
    if($timename1 == "off"){
      file_put_contents('timename2.txt', 'on');
        timename($inline_message_id);
    }
}

if($data == 'timebio1' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($timebio1 == "on"){
      file_put_contents('timebio1.txt', 'off');
        timebio($inline_message_id);
    }
    if($timebio1 == "off"){
      file_put_contents('timebio1.txt', 'on');
        timebio($inline_message_id);
    }
}
if($data == 'timebio2' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($timebio2 == "on"){
      file_put_contents('timebio2.txt', 'off');
        timebio($inline_message_id);
    }
    if($timebio2 == "off"){
      file_put_contents('timebio2.txt', 'on');
        timebio($inline_message_id);
    }
}
if($data == 'bioen' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($bioen== "on"){
      file_put_contents('bioen.txt', 'off');
        biofont($inline_message_id);
    }
    if($bioen == "off"){
      file_put_contents('bioen.txt', 'on');
        biofont($inline_message_id);
    }
}
if($data == 'biofa' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($biofa== "on"){
      file_put_contents('biofa.txt', 'off');
        biofont($inline_message_id);
    }
    if($biofa == "off"){
      file_put_contents('biofa.txt', 'on');
        biofont($inline_message_id);
    }
}
if($data == 'hashtagmode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($hashtagmode == "on"){
      file_put_contents('hashtag.txt', 'off');
        lockmode($inline_message_id);
    }
    if($hashtagmode == "off"){
      file_put_contents('hashtag.txt', 'on');
        lockmode($inline_message_id);
    }
}
if($data == 'mentionmode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($mentionmode == "on"){
      file_put_contents('mention.txt', 'off');
        lockmode($inline_message_id);
    }
    if($mentionmode == "off"){
      file_put_contents('mention.txt', 'on');
        lockmode($inline_message_id);
    }
}
if($data == 'boldmode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($boldmode == "on"){
      file_put_contents('bold.txt', 'off');
        lockmode($inline_message_id);
    }
    if($boldmode == "off"){
      file_put_contents('bold.txt', 'on');
        lockmode($inline_message_id);
    }
}
if($data == 'italicmode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($italicmode == "on"){
      file_put_contents('italic.txt', 'off');
        lockmode($inline_message_id);
    }
    if($italicmode == "off"){
      file_put_contents('italic.txt', 'on');
        lockmode($inline_message_id);
    }
}
if($data == 'underlinemode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($underlinemode == "on"){
      file_put_contents('underline.txt', 'off');
        lockmode($inline_message_id);
    }
    if($underlinemode == "off"){
      file_put_contents('underline.txt', 'on');
        lockmode($inline_message_id);
    }
}
if($data == 'deletedmode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($deletedmode == "on"){
      file_put_contents('deleted.txt', 'off');
        lockmode($inline_message_id);
    }
    if($deletedmode == "off"){
      file_put_contents('deleted.txt', 'on');
        lockmode($inline_message_id);
    }
}
if($data == 'mention2mode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($mention2mode == "on"){
      file_put_contents('mention2.txt', 'off');
        lockmode($inline_message_id);
    }
    if($mention2mode == "off"){
      file_put_contents('mention2.txt', 'on');
        lockmode($inline_message_id);
    }
}
if($data == 'codingmode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($codingmode == "on"){
      file_put_contents('coding.txt', 'off');
        lockmode($inline_message_id);
    }
    if($codingmode == "off"){
      file_put_contents('coding.txt', 'on');
        lockmode($inline_message_id);
    }
}
if($data == 'onlinemode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($onlinemode == "on"){
      file_put_contents('online.txt', 'off');
        lockmode($inline_message_id);
    }
    if($onlinemode == "off"){
      file_put_contents('online.txt', 'on');
        lockmode($inline_message_id);
    }
}
if($data == 'reversemode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($reversemode == "on"){
      file_put_contents('reversemode.txt', 'off');
        lockmode($inline_message_id);
    }
    if($reversemode == "off"){
      file_put_contents('reversemode.txt', 'on');
        lockmode($inline_message_id);
    }
}
if($data == 'typing' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($typing == "on"){
        $dataa['typing'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockactions($inline_message_id);
    }
    if($typing == "off"){
        $dataa['typing'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockactions($inline_message_id);
    }
}
if($data == 'game' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($typing == "on"){
        $dataa['game'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockactions($inline_message_id);
    }
    if($game == "off"){
        $dataa['game'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockactions($inline_message_id);
    }
}
if($data == 'voice' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($voice == "on"){
        $dataa['voice'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockactions($inline_message_id);
    }
    if($voice == "off"){
        $dataa['voice'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockactions($inline_message_id);
    }
}
if($data == 'video' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($video == "on"){
        $dataa['video'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockactions($inline_message_id);
    }
    if($video == "off"){
        $dataa['video'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockactions($inline_message_id);
    }
}
if($data == 'pokermode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($pokermode == "on"){
        $dataa['poker'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
    if($pokermode == "off"){
        $dataa['poker'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
}
if($data == 'echomode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($echomode == "on"){
        $dataa['echo'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
    if($echomode == "off"){
        $dataa['echo'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
}
if($data == 'markreadmode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($markreadmode == "on"){
        $dataa['markread'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
    if($markreadmode == "off"){
        $dataa['markread'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
}
if($data == 'lockgpmode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($lockgpmode == "on"){
        $dataa['lockgp'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
    if($lockgpmode == "off"){
        $dataa['lockgp'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
}
if($data == 'lockpvmode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($lockpvmode == "on"){
        $dataa['lockpv'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
    if($lockpvmode == "off"){
        $dataa['lockpv'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
}
if($data == 'funnymode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($funnymode == "on"){
        $dataa['funny'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
    if($funnymode == "off"){
        $dataa['funny'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
}
if($data == 'gamepvmode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($gamepvmode == "on"){
        $dataa['gamepv'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
    if($gamepvmode == "off"){
        $dataa['gamepv'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
}
if($data == 'pvtypingmode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($pvtypingmode == "on"){
        $dataa['pvtyping'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
    if($pvtypingmode == "off"){
        $dataa['pvtyping'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
}
if($data == 'photomode' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($photomode == "on"){
        $dataa['photo'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
    if($photomode == "off"){
        $dataa['photo'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
}
if($data == 'History' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($History == "on"){
        $dataa['History'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
    if($History == "off"){
        $dataa['History'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
}
if($data == 'tas' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($tas == "on"){
        $dataa['tas'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
    if($tas == "off"){
        $dataa['tas'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
}
if($data == 'lockpv1' && $fromid == "$Sudo"){
    bot("answerCallbackQuery",["callback_query_id"=>$update->callback_query->id,"text"=>"نویسنده سلف @mrsilent09 🧑‍💻"]);
    if($lockpv1== "on"){
        $dataa['lockpv1'] = "off";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
    if($lockpv1 == "off"){
        $dataa['lockpv1'] = "on";
        file_put_contents("data.json", json_encode($dataa));
        lockmode($inline_message_id);
    }
}
