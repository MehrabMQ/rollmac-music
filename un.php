<?php
/*نسخه دیتا بیس سلف اویل
لاین های 98.268.269 ادیت بشه کد دیتا بیس اخر سورس مشاهده کنید*/
date_default_timezone_set('Asia/Tehran');


if (!is_dir('files')) {
  mkdir('files');
}

               if (!file_exists('online.txt')) {
  file_put_contents('online.txt', 'off');
}
if (!file_exists('timepic.txt')) {
            file_put_contents('timepic.txt', 'off');
}
if (!file_exists('part.txt')) {
            file_put_contents('part.txt', 'off');
}
if (!file_exists('timename.txt')) {
          file_put_contents('timename.txt', 'off');
}
if (!file_exists('timename1.txt')) {
        file_put_contents('timename1.txt', 'off');
}
if (!file_exists('part.txt')) {
               file_put_contents('part.txt', 'off');
}
if (!file_exists('timename2.txt')) {
      file_put_contents('timename2.txt', 'off');
}
if (!file_exists('timebio1.txt')) {
       file_put_contents('timebio1.txt', 'off');
}
if (!file_exists('timebio2.txt')) {
        file_put_contents('timebio2.txt', 'off');
}
if (!file_exists('bioen.txt')) {
             file_put_contents('bioen.txt', 'off');
}
if (!file_exists('biofa.txt')) {
             file_put_contents('biofa.txt', 'off');
}
if (!file_exists('hashtag.txt')) {
           file_put_contents('hashtag.txt', 'off');
}
if (!file_exists('mention.txt')) {
           file_put_contents('mention.txt', 'off');
}
if (!file_exists('bold.txt')) {
                file_put_contents('bold.txt', 'off');
}
if (!file_exists('bod.txt')) {
               file_put_contents('bod.txt', 'off');
}
if (!file_exists('italic.txt')) {
              file_put_contents('italic.txt', 'off');
}
if (!file_exists('underline.txt')) {
         file_put_contents('underline.txt', 'off');
}
if (!file_exists('deleted.txt')) {
             file_put_contents('deleted.txt', 'off');
}
if (!file_exists('mention2.txt')) {
          file_put_contents('mention2.txt', 'off');
}
if (!file_exists('coding.txt')) {
              file_put_contents('coding.txt', 'off');
}

if (!file_exists('reversemode.txt')) {
        file_put_contents('reversemode.txt', 'off');
}
if (!file_exists('data.json')) {
  file_put_contents('data.json', '{"power":"on","adminStep":"","markread":"off","History":"off","timepic":"off","tas":"off","lockpv":"off","timename1":"off","timename2":"off","timebio1":"off","timebio2":"off","bioen":"off","biofa":"off","typing":"off","pvtyping":"off","photo":"off","funny":"off","echo":"off","lockpv1":"off","lockgp":"off","gamepv":"off","poker":"off","voice":"off","video":"off","game":"off","enemies":[],"answering":[]}');
}
error_reporting(E_ALL);

ini_set('display_errors', '1');
ini_set('memory_limit', '-1');
ini_set('max_execution_time', '0');
ini_set('display_startup_errors', '1');

if (!file_exists('madeline.php')) {
  copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
if (!defined('HAD_MADELINE_PHAR')) {
  $madelinePath = 'madeline.php';
  $madelineRealPath = realpath($madelinePath) ?: $madelinePath;
  $includedFiles = array_map('realpath', get_included_files());
  if (!in_array($madelineRealPath, $includedFiles, true)) {
    require_once $madelinePath;
  }
}
require_once 'mp_patch.php';
include 'jdf.php';

use \danog\MadelineProto\API;
use \danog\Loop\Generic\GenericLoop;
use \danog\MadelineProto\EventHandler;
use \danog\MadelineProto\Settings;
use \danog\MadelineProto\Shutdown;

class XHandler extends EventHandler
{
  const Report = ' bjihvv'; // ایدی 

  public function getReportPeers()
  {
    return [self::Report];
  }

  public function genLoop()
  {
    /*
       yield $this->account->updateStatus([
            'offline' => false
        ]);
       yield $this->messages->sendMessage([
            'peer'    => self::Admins[0],
            'message' => 'Generic Loop Start At : ' . date('H:i:s')
        ]);*/
    if (file_get_contents('online.txt') == 'on') {
      yield  $this->account->updateStatus(['offline' => false]);
    }
    date_default_timezone_set('Asia/Tehran');
    $timae = date("i");
    if ($timae == "20" or $timae == "40" or $timae == "00") {
      sleep(60);
      yield $this->restart();
    }
    if(file_get_contents('timepic.txt') == 'on') {
yield $this->photos->updateProfilePhoto(['remove']);
     $time = date("H:i");
     copy("https://bcassetcdn.com/asset/logo/e7b2b2cb-aed9-4ca2-b4bc-61d4414d891b/logo?v=4&text=$time", 'time.jpg');
    
     yield $this->photos->uploadProfilePhoto(['file' => 'time.jpg']);

Unlink ('time.jpg');
    }
      if (file_get_contents('timename1.txt') == 'on') {
      date_default_timezone_set('Asia/Tehran');
      $time = date("H:i");
      $fonts =  [["₀", "¹", "₂", "³", "₄", "⁵", "₆", "⁷", "₈", "⁹"],
	    ["0", "❶", "❷", "❸", "❹", "❺", "❻", "❼", "❽", "❾"],
	    ["0", "➀", "➁", "➂", "➃", "➄", "➅", "➆", "➇", "➈"],
        ["⁰", "₁", "²", "₃", "⁴", "₅", "⁶", "₇", "⁸", "₉"]];
      $time = date("H:i");
      $time2 = str_replace(range(0, 9), $fonts[array_rand($fonts)], date("H•i"));
      $day_number = jdate('j');
      $month_number = jdate('n');
      $year_number = jdate('y');
      $day_name = jdate('l');

      yield $this->account->updateProfile(['last_name' => "◜ $time2 ◞"]);
    }
    if (file_get_contents('timename2.txt') == 'on') {
      date_default_timezone_set('Asia/Tehran');
      $time = date("H:i");
      $fonts = [
        ["𝟶", "𝟷", "𝟸", "𝟹", "𝟺", "𝟻", "𝟼", "𝟽", "𝟾", "𝟿"],
        ["𝟬", "𝟭", "𝟮", "𝟯", "𝟰", "𝟱", "𝟲", "𝟳", "𝟴", "𝟵"]
      ];
      $time = date("H:i");
      $time2 = str_replace(range(0, 9), $fonts[array_rand($fonts)], date("H•i"));
      $day_number = jdate('j');
      $month_number = jdate('n');
      $year_number = jdate('y');
      $day_name = jdate('l');

      yield $this->account->updateProfile(['last_name' => " $time2  "]);
    }
    if (file_get_contents('timebio1.txt') == 'on') {
      date_default_timezone_set('Asia/Tehran');
      $time = date("H:i");
      $fonts = [["₀", "¹", "₂", "³", "₄", "⁵", "₆", "⁷", "₈", "⁹"],
	    ["0", "❶", "❷", "❸", "❹", "❺", "❻", "❼", "❽", "❾"],
	    ["0", "➀", "➁", "➂", "➃", "➄", "➅", "➆", "➇", "➈"],
        ["⁰", "₁", "²", "₃", "⁴", "₅", "⁶", "₇", "⁸", "₉"]];
      $time = date("H:i");
      $time2 = str_replace(range(0, 9), $fonts[array_rand($fonts)], date("H:i"));
      $day_number = jdate('j');
      $month_number = jdate('n');
      $year_number = jdate('y');
      $day_name = jdate('l');

      yield $this->account->updateProfile(['about' => "⌚️𝙏𝙄𝙈𝙀 ◜ $time2 ◞ "]);
    }
    if (file_get_contents('timebio2.txt') == 'on') {
      date_default_timezone_set('Asia/Tehran');
      $time = date("H:i");
      $fonts = [
        ["𝟶", "𝟷", "𝟸", "𝟹", "𝟺", "𝟻", "𝟼", "𝟽", "𝟾", "𝟿"],
        ["𝟬", "𝟭", "𝟮", "𝟯", "𝟰", "𝟱", "𝟲", "𝟳", "𝟴", "𝟵"]
      ];
      $time = date("H:i");
      $time2 = str_replace(range(0, 9), $fonts[array_rand($fonts)], date("H𖢊i"));
      $day_number = jdate('j');
      $month_number = jdate('n');
      $year_number = jdate('y');
      $day_name = jdate('l');

      yield $this->account->updateProfile(['about' => "⌚️𝐑𝐎𝐁𝐎𝐓𝐈𝐂 𝐏𝐇𝐏 $time2 🕚"]);
    }
    if (file_get_contents('bioen.txt') == 'on') {
      date_default_timezone_set('Asia/Tehran');
      $time = date("H:i");
      $fonts = [
        ["𝟶", "𝟷", "𝟸", "𝟹", "𝟺", "𝟻", "𝟼", "𝟽", "𝟾", "𝟿"],
        ["𝟬", "𝟭", "𝟮", "𝟯", "𝟰", "𝟱", "𝟲", "𝟳", "𝟴", "𝟵"]
      ];
      $time = date("H:i");
      $time2 = str_replace(range(0, 9), $fonts[array_rand($fonts)], date("H:i"));
      $day_number = jdate('j');
      $month_number = jdate('n');
      $year_number = jdate('y');
      $day_name = jdate('l');

      yield $this->account->updateProfile(['about' => "Your prying hour $time2 was recorded  "]);
    }
    if (file_get_contents('biofa.txt') == 'on') {
      date_default_timezone_set('Asia/Tehran');
      $time = date("H:i");
      $fonts = [
        ["𝟶", "𝟷", "𝟸", "𝟹", "𝟺", "𝟻", "𝟼", "𝟽", "𝟾", "𝟿"],
        ["𝟘", "𝟙", "𝟚", "𝟛", "𝟜", "𝟝", "𝟞", "𝟟", "𝟠", "𝟡"]
      ];
      $time = date("H:i");
      $time2 = str_replace(range(0, 9), $fonts[array_rand($fonts)], date("H•i"));
      $day_number = jdate('j');
      $month_number = jdate('n');
      $year_number = jdate('y');
      $day_name = jdate('l');

      yield $this->account->updateProfile(['about' => "😄 فضولی شما در ساعت $time2 ثبت شد :) "]);
    }
    return 60000;
  }

  public function onStart()
  {
    $genLoop = new GenericLoop([$this, 'genLoop'], 'update Status');
    $genLoop->start();
  }

  public function onUpdateNewChannelMessage($update)
  {
    yield $this->onUpdateNewMessage($update);
  }

  public function onUpdateNewMessage($update)
  {
    if (time() - $update['message']['date'] > 2) {
      return;
    }
    /*
final public function getLocalContents(string $path): Amp\Promise
    {
        return Amp\File\get($path);
    }
*/
    try {
      $msgOrig   = $update['message']['message'] ?? '';
      $messageId = $update['message']['id'] ?? 0;
      $fromId    = $update['message']['from_id']['user_id'] ?? 0;
      $replyToId = $update['message']['reply_to']['reply_to_msg_id'] ?? 0;
      $peer      = yield $this->getID($update);
      $me = yield $this->get_self();
      $admin = $me['id'];
      $data = json_decode(file_get_contents("data.json"), true);
      $data = is_array($data) ? $data : [];
      $data['enemies'] = $data['enemies'] ?? [];
      $data['answering'] = $data['answering'] ?? [];
      $chID = yield $this->get_info($update);
      $type3 = $chID['type'];

      $step = $data['adminStep'];
      $op = @$update['pts'];
      $url = "https://aiven.ir/Self2"; // آدرس پوشه ای که سورس داخلشه رو بزارید
      $helper = "@Testinger655bot"; // آیدی ربات هلپر همراه با @            
      $partmode = file_get_contents("part.txt");
      $timename = file_get_contents("timename.txt");
      $timename1 = file_get_contents("timename1.txt");
      $timename2 = file_get_contents("timename2.txt");
      $timpic = file_get_contents("timepic.txt");
      $timebio1 = file_get_contents("timebio1.txt");
      $timebio2 = file_get_contents("timebio2.txt");
      $bioen = file_get_contents("bioen.txt");
      $biofa = file_get_contents("biofa.txt");
      $hashtagmode = file_get_contents("hashtag.txt");
      $mentionmode = file_get_contents("mention.txt");
      $boldmode = file_get_contents("bold.txt");
      $italicmode = file_get_contents("italic.txt");
      $underlinemode = file_get_contents("underline.txt");
      $deletedmode = file_get_contents("deleted.txt");
      $mention2mode = file_get_contents("mention2.txt");
      $codingmode = file_get_contents("coding.txt");
      $reversemode = file_get_contents("reversemode.txt");
      $onlinemode = file_get_contents("online.txt");
      $dastoorat =
        [
          "رهنما",
          "help",
          "ریستارت",
          "restart",
          "مصرف",
          "وضعیت",
          "status",
          "ماشین",
          "شمارت",
          "شماره ی",
          "num",
          "number",
          "tas on",
          "شماره",
          "بکیرم",
          "قلب",
          "echo on",
          "gamepv on",
          "pvtyping on",
          "part on",
          "photo on",
          "hashtag on",
          "bold on",
          "lockgp on",
          "funny on",
          "lockpv on",
          "lockpv1 on",
          " History on",
          "poker on",
          "italic on",
          "markread on",
          "timepic on",
          "bot on",
          "mention on",
          "underline on",
          "deleted on",
          "mention2 on",
          "bot on",
          "/help",
          "پینگ",
          "ربات",
          "time name off",
          "gamepv on",
          "part off",
          "echo off",
          "poker off",
          "markread off",
          "hashtag off",
          "bot off",
          "mention off",
          "bold off",
          "italic off",
          "lockgp off",
          " History off",
          "lockpv off",
          "photo off",
          "tas off",
          "lockpv1 off",
          "funny off",
          "pvtyping off",
          "underline off",
          "deleted off",
          "mention2 off",
          "coding off",
          "reverse on",
          "timepic off",
          "reverse off",
          "coding on",
    
        ];
               if ($fromId == $admin) {
               if (preg_match('/^[\/\#\!\.]?(ping|ربات)$/si', $msgOrig)) {
               yield $this->messages->editMessage([
              'peer'       => $peer,
              'message'    => "ʸᵒᵘʳ ʳᵒᵇᵒᵗ 𖢊 ᶤᶳ [ᵒᶰˡᶤᶰᵉ](https://t.me/bjihvv)",  /* دست نزنید از کار میفته */
              'parse_mode' => 'markdown',
               'no_webpage' => true
             , 'id' => $messageId
            ]);
            }elseif (preg_match('/^[\/\#\!\.]?(restart|ریستارت)$/si', $msgOrig)) {
          yield $this->messages->sendMessage([
            'peer'            => $peer,
            'message'         => '❗️ربات شما با موفقیت ریست شد ✅',

          ]);
          yield $this->restart();
        } elseif (preg_match("/^[\/\#\!]?(bot) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(bot) (on|off)$/si", $msgOrig, $m);
          $data['power'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗯𝗼𝘁 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(part) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(part) (on|off)$/si", $msgOrig, $m);
          file_put_contents('part.txt', $m[2]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗽𝗮𝗿𝘁 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(poker) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(poker) (on|off)$/si", $msgOrig, $m);
          $data['poker'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗽𝗼𝗸𝗲𝗿 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(funny) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(funny) (on|off)$/si", $msgOrig, $m);
          $data['funny'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield $this->messages->sendMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗳𝘂𝗻𝗻𝘆 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(photo) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(photo) (on|off)$/si", $msgOrig, $m);
          $data['photo'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗽𝗵𝗼𝘁𝗼 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        }if (preg_match("/^[\/\#\!]?(timename1) (on|off)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(timename1) (on|off)$/i", $msgOrig, $m);
          file_put_contents('timename1.txt', $m[2]);
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝘁𝗶𝗺𝗲𝗻𝗮𝗺𝗲1 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
         }
        if (preg_match("/^[\/\#\!]?(timename2) (on|off)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(timename2) (on|off)$/i", $msgOrig, $m);
          file_put_contents('timename2.txt', $m[2]);
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝘁𝗶𝗺𝗲𝗻𝗮𝗺𝗲2 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        }
        if (preg_match("/^[\/\#\!]?(timebio1) (on|off)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(timebio1) (on|off)$/i", $msgOrig, $m);
          file_put_contents('timebio1.txt', $m[2]);
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝘁𝗶𝗺𝗲𝗯𝗶𝗼1 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        }
        if (preg_match("/^[\/\#\!]?(timebio2) (on|off)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(timebio2) (on|off)$/i", $msgOrig, $m);
          file_put_contents('timebio2.txt', $m[2]);
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝘁𝗶𝗺𝗲𝗯𝗶𝗼2 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀$m[2]"]);
        }
        if (preg_match("/^[\/\#\!]?(bioen) (on|off)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(bioen) (on|off)$/i", $msgOrig, $m);
          file_put_contents('bioen.txt', $m[2]);
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗯𝗶𝗼𝗲𝗻 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        }
        if (preg_match("/^[\/\#\!]?(timepic) (on|off)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(timepic) (on|off)$/i", $msgOrig, $m);
         file_put_contents('timepic.txt', $m[2]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝘁𝗶𝗺𝗲𝗽𝗶𝗰 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
                    }
        if (preg_match("/^[\/\#\!]?(biofa) (on|off)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(biofa) (on|off)$/i", $msgOrig, $m);
          file_put_contents('biofa.txt', $m[2]);
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗯𝗶𝗼𝗳𝗮 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(echo) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(echo) (on|off)$/si", $msgOrig, $m);
          $data['echo'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ❗️𝙚𝙘𝙝𝙤 𝙣𝙤𝙬 𝙞𝙨 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(hashtag) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(hashtag) (on|off)$/si", $msgOrig, $m);
          file_put_contents('hashtag.txt', $m[2]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗵𝗮𝘀𝗵𝘁𝗮𝗴 𝗺𝗼𝗱𝘄  𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(mention) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(mention) (on|off)$/si", $msgOrig, $m);
          file_put_contents('mention.txt', $m[2]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗺𝗲𝗻𝘁𝗶𝗼𝗻 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(mention2) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(mention2) (on|off)$/si", $msgOrig, $m);
          file_put_contents('mention2.txt', $m[2]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗺𝗲𝗻𝘁𝗶𝗼𝗻2 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(underline) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(underline) (on|off)$/si", $msgOrig, $m);
          file_put_contents('underline.txt', $m[2]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝘂𝗻𝗱𝗲𝗿𝗹𝗶𝗻𝗲 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(bold) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(bold) (on|off)$/si", $msgOrig, $m);
          file_put_contents('bold.txt', $m[2]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝙗𝙤𝙡𝙙 𝙢𝙤𝙙𝙚 𝙣𝙤𝙬 𝙞𝙨 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(italic) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(italic) (on|off)$/si", $msgOrig, $m);
          file_put_contents('italic.txt', $m[2]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗶𝘁𝗮𝗹𝗶𝗰𝗸 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(coding) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(coding) (on|off)$/si", $msgOrig, $m);
          file_put_contents('coding.txt', $m[2]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗰𝗼𝗱𝗶𝗻𝗴 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(deleted) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(deleted) (on|off)$/si", $msgOrig, $m);
          file_put_contents('deleted.txt', $m[2]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗱𝗲𝗹𝗲𝘁𝗲𝗱 𝗺𝗼𝗱𝗲 𝗻??𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(tas) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(tas) (on|off)$/si", $msgOrig, $m);
          $data['tas'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝘁𝗮𝘀 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(markread) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(markread) (on|off)$/si", $msgOrig, $m);
          $data['markread'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗺𝗮𝗿𝗸𝗿𝗲𝗮𝗱 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(reverse) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(reverse) (on|off)$/si", $msgOrig, $m);
          file_put_contents('reversemode.txt', $m[2]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗿𝗲𝘀𝗲𝘃𝗲𝗿 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(online) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(online) (on|off)$/si", $msgOrig, $m);
          file_put_contents('online.txt', $m[2]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗼𝗻𝗹𝗶𝗻𝗲 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(ac type) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(ac type) (on|off)$/si", $msgOrig, $m);
          $data['typing'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝘁𝗵𝗲 𝘁𝘆𝗽𝗲 𝗮𝗰𝘁𝗶𝗼𝗻 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(gamepv) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(gamepv) (on|off)$/si", $msgOrig, $m);
          $data['gamepv'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗴𝗮𝗺𝗲𝗶𝗻𝗴 𝗽𝘃 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(pvtyping) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(pvtyping) (on|off)$/si", $msgOrig, $m);
          $data['pvtyping'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗽𝘃 𝘁𝘆𝗽𝗶𝗻𝗴 𝗻𝗼𝘄 𝗶𝘀 $m[2]", 'parse_mode' => 'html']);
        } elseif (preg_match("/^[\/\#\!]?(lockgp) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(lockgp) (on|off)$/si", $msgOrig, $m);
          $data['lockgp'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗹𝗼𝗰𝗸𝗴𝗽 𝗻𝗼𝘄 𝗶𝘀 $m[2]", 'parse_mode' => 'html']);
        } elseif (preg_match("/^[\/\#\!]?(mutepv) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(mutepv) (on|off)$/si", $msgOrig, $m);
          $data['lockpv1'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗺𝘂𝘁𝗲𝗽𝘃 𝗻𝗼𝘄 𝗶𝘀 $m[2]", 'parse_mode' => 'html']);
        } elseif (preg_match("/^[\/\#\!]?(lockpv) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(lockpv) (on|off)$/si", $msgOrig, $m);
          $data['lockpv'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗹𝗼𝗰𝗸𝗽𝘃 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(History) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(History) (on|off)$/si", $msgOrig, $m);
          $data['History'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝗵𝗶𝘀𝘁𝗼𝗿𝘆 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(ac video) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(ac video) (on|off)$/si", $msgOrig, $m);
          $data['video'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝘁𝗵𝗲 𝘃𝗶𝗱𝗲𝗼 𝗮𝗰𝘁𝗶𝗼𝗻 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(ac game) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(ac game) (on|off)$/si", $msgOrig, $m);

          $data['game'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝘁𝗵𝗲 𝗴𝗮𝗺𝗲 𝗮𝗰𝘁𝗶𝗼𝗻 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif (preg_match("/^[\/\#\!]?(ac voice) (on|off)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(ac voice) (on|off)$/si", $msgOrig, $m);
          $data['voice'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️𝘁𝗵𝗲 𝘃𝗼𝗶𝗰𝗲 𝗮𝗰𝘁𝗶𝗼𝗻 𝗻𝗼𝘄 𝗶𝘀 $m[2]"]);
        } elseif ($msgOrig == 'help' or $msgOrig == 'Help' or $msgOrig == 'راهنما') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ !"]);
          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' =>
            "
𝐕-𝟔
➲Hᴇʟᴘ Sᴇʟғ Eᴠɪʟ
➲`self`
• ┅┅━━━━ • ━━━━┅┅ • 
➲`mnghelp`
➲`toolshelp`
• ┅┅━━━━ • ━━━━┅┅ • 
➲`modehelp`
➲`Answering`
• ┅┅━━━━ • ━━━━┅┅ • 
➲`achelp`
➲`timer`
• ┅┅━━━━ • ━━━━┅┅ • 
➲`profhelp`
➲`help2`
• ┅┅━━━━ • ━━━━┅┅ • 
➲ ᴍᴇᴍ ᴜsᴀɢᴇ : **$mem_using** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ • 
╲\ 
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ
      \╲
• ┅┅━━━━ • ━━━━┅┅ • 
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
",
            'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId, 'disable_web_page_preview' => true
          ]);
        } elseif ($msgOrig == 'help2' or $msgOrig == 'Help2' or $msgOrig == 'راهنما 2') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ !"]);
          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' =>
            "
𝐕-𝟔
➲Hᴇʟᴘ Sᴇʟғ Eᴠɪʟ
➲` zaman`
• ┅┅━━━━ • ━━━━┅┅ • 
➲`Attackpc`
➲`funhelp`
• ┅┅━━━━ • ━━━━┅┅ • 
➲`game`
➲`game2`
• ┅┅━━━━ • ━━━━┅┅ • 
➲`game3`
• ┅┅━━━━ • ━━━━┅┅ • 
➲`panel`
➲ ᴍᴇᴍ ᴜsᴀɢᴇ : **$mem_using** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ • 
╲\ 
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ
      \╲
• ┅┅━━━━ • ━━━━┅┅ • 
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
",
            'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId, 'disable_web_page_preview' => true
          ]);
        } elseif ($msgOrig == '/modehelp' or $msgOrig == 'modehelp' or $msgOrig == 'رهنمای مود') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴍᴏᴅᴇ ʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ !"]);
          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' =>
            "
𝐕-𝟔
➲ Mᴏᴅᴇ Hᴇʟᴘ
• ┅┅━━━━ • ━━━━┅┅ •
➲`part` on یا off 
➲`echo` on یا off
• ┅┅━━━━ • ━━━━┅┅
➲`poker` on یا off
➲`funny` on یا off
• ┅┅━━━━ • ━━━━┅┅
➲`lockgp` on or off
➲`lockpv` on or off
• ┅┅━━━━ • ━━━━┅┅ •
➲`History` on یا off
➲`mutepv` on یا off
• ┅┅━━━━ • ━━━━┅┅ •
➲`tas` on یا off
➲`hashtag` on یا off
• ┅┅━━━━ • ━━━━┅┅ •
➲`italic` on یا off
➲`coding` on یا off
• ┅┅━━━━ • ━━━━┅┅ •
➲`underline` on یا off 
➲`deleted` on یا off
• ┅┅━━━━ • ━━━━┅┅ •
➲`bold` on یا off
➲`mention` on یا off
• ┅┅━━━━ • ━━━━┅┅ •
➲`mention2`on یا off
➲`reverse` on یا off
• ┅┅━━━━ • ━━━━┅┅ •
➲`online` on یا off
➲ ᴍᴇᴍ ᴜsᴀɢᴇ :  **$mem_using** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
",
            'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId, 'disable_web_page_preview' => true
          ]);
        } elseif ($msgOrig == 'Answering' or $msgOrig == 'Answerhelp' or $msgOrig == 'رهنمای آنسور') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴀɴsᴡᴇʀ ʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ !"]);
          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' =>
            "
𝐕-𝟔
➲Aɴsᴡᴇʀ Sᴇʟғ Eᴠɪʟ 
• ┅┅━━━━ • ━━━━┅┅ •  
➲`setanswer `
• ┅┅━━━━ • ━━━━┅┅ •  
➲`delanswer`
➲`clean answers`
• ┅┅━━━━ • ━━━━┅┅ •  
➲ ᴍᴇᴍ ᴜsᴀɢᴇ : **$mem_using** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\  
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ 
      \╲
• ┅┅━━━━ • ━━━━┅┅ •  
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
",
            'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId, 'disable_web_page_preview' => true
          ]);
        } elseif ($msgOrig == '/achelp' or $msgOrig == 'achelp' or $msgOrig == 'رهنمای اکشن') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴀᴄᴛɪᴏɴ ʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ !"]);
          yield $this->messages->sendMessage([
            'peer' => $peer, 'message' =>
            "
𝐕-𝟔
➲Eᴄʜᴇʟᴘ
• ┅┅━━━━ • ━━━━┅┅ •
➲`gamepv` on یا off
➲`ac type` on یا off 
• ┅┅━━━━ • ━━━━┅┅ •
➲`ac voice` on یا off 
➲`ac video` on یا off 
• ┅┅━━━━ • ━━━━┅┅ •
➲`ac game` on یا off 
➲`photo` on یا off
• ┅┅━━━━ • ━━━━┅┅ •  
➲`pvtyping` on یا off
➲`phot` on یا off
• ┅┅━━━━ • ━━━━┅┅ •  
➲ ᴍᴇᴍ ᴜsᴀɢᴇ :  **$mem_using** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
",
            'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId, 'disable_web_page_preview' => true
          ]);
        } elseif ($msgOrig == 'zaman' or $msgOrig == 'zaman' or $msgOrig == 'راهنمای زمان') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴢᴀᴍᴀɴ ʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ!"]);
          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' =>
            "
𝐕-𝟔
➲ Zᴀᴍᴀɴ Hᴇʟᴘ
• ┅┅━━━━ • ━━━━┅┅ •
➲`timename1` on یا off
➲`timename2` on یا off 
• ┅┅━━━━ • ━━━━┅┅ •
➲`timebio1` on یا off 
➲`timebio2` on یا off 
• ┅┅━━━━ • ━━━━┅┅ •
➲`bioen` on یا off
• ┅┅━━━━ • ━━━━┅┅ •  
➲`biofa` on یا off
➲`timepic` on یا off
• ┅┅━━━━ • ━━━━┅┅ •  
دوستان توجه کنید این قسمت دستور bioen یا biofa  با تایم های بالا فرق میکنید !

اگر قصد فعال کردن این دو کدو دارید حتما کد تایم بیو رو افلاین کنید سپس این دستورو انلاین کنید
• ┅┅━━━━ • ━━━━┅┅ •  
➲ ᴍᴇᴍ ᴜsᴀɢᴇ :  **$mem_using** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
",
            'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId, 'disable_web_page_preview' => true
          ]);
        }
        //============== Fun Help User ==============
        elseif ($msgOrig == '/funhelp' or $msgOrig == 'funhelp' or $msgOrig == 'رهنمای فان') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ғᴜɴ ʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ !"]);
          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' =>
            "
𝐕-𝟔
➲ғUɴ Hᴇʟᴘ
• ┅┅━━━━ • ━━━━┅┅
➲`music` [TEXT] 
➲`bazi` [TEXT]
• ┅┅━━━━ • ━━━━┅┅ •
➲`logo` [TEXT]
➲`encode` TEXT]
• ┅┅━━━━ • ━━━━┅┅ •
➲`fackecnt`[TEXT]
• ┅┅━━━━ • ━━━━┅┅ •
➲`decode` [TEXT]
➲`joke` [TEXT]
• ┅┅━━━━ • ━━━━┅┅ •
➲`jh` 
➲`weather`اب هوا
• ┅┅━━━━ • ━━━━┅┅ •
➲`gif`[Text] 
➲`pic`[Text] 
• ┅┅━━━━ • ━━━━┅┅ •
➲`ok` ذخیره عکس زمان دار
➲`rem` پاکسازی تاریخچه
• ┅┅━━━━ • ━━━━┅┅ •
➲`rem1` پاکسازی پیام پیوی با ریپلای
• ┅┅━━━━ • ━━━━┅┅ •
➲`apk`[Text] 
➲`prox `پروکسی
• ┅┅━━━━ • ━━━━┅┅ •
➲`like` [Text] 
• ┅┅━━━━ • ━━━━┅┅ •
➲`upload` [URL] 
➲`meme`[Text] 
• ┅┅━━━━ • ━━━━┅┅ •
➲`giff` [Text]
➲`font` [Text] 
• ┅┅━━━━ • ━━━━┅┅ •
➲`fafont` [Text
➲`age` (Y)(M)(D)
• ┅┅━━━━ • ━━━━┅┅ •
➲`rev` [Text] 
• ┅┅━━━━ • ━━━━┅┅ •
➲`meane` [Text] 
➲`kalame` [Level] 
• ┅┅━━━━ • ━━━━┅┅ •
➲`fal`
➲`icon`[Text] 
• ┅┅━━━━ • ━━━━┅┅ •
➲`id`
➲ ᴍᴇᴍ ᴜsᴀɢᴇ : **$mem_using** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
",
            'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId, 'disable_web_page_preview' => true
          ]);
        } elseif ($msgOrig == '/profhelp' or $msgOrig == 'profhelp' or $msgOrig == 'راهنمای اکانت') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴇᴄɴᴀᴍᴇʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ !"]);
          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' =>
            "
𝐕-𝟔
➲Eᴄɴᴀᴍᴇ Hᴇʟᴘ
• ┅┅━━━━ • ━━━━┅┅
➲`setbio` [TEXT] 
• ┅┅━━━━ • ━━━━┅┅ •
➲`setfname` Text] 
➲`setlname` [Text] 
• ┅┅━━━━ • ━━━━┅┅ •
➲`setuser`[Text] 
➲ ᴍᴇᴍ ᴜsᴀɢᴇ : **$mem_using** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
",
            'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId, 'disable_web_page_preview' => true
          ]);
        } elseif ($msgOrig == 'timer' or $msgOrig == 'timer' or $msgOrig == 'رهنما تایمر') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴛɪᴍᴇʀ ʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ !"]);
          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' =>
            "
𝐕-𝟔
➲Tɪᴍᴇʀ Hᴇʟᴘ
• ┅┅━━━━ • ━━━━┅┅
➲`tarix`
➲`miladi`
• ┅┅━━━━ • ━━━━┅┅ •
➲`corona`
➲`time`
• ┅┅━━━━ • ━━━━┅┅ •
➲`crn` iran + آمار کرونا
• ┅┅━━━━ • ━━━━┅┅ •
➲`tag` در گپ
➲`amozesh`
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴍᴇᴍ ᴜsᴀɢᴇ : **$mem_using** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
",
            'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId, 'disable_web_page_preview' => true
          ]);
        } elseif ($msgOrig == '/Attackpc' or $msgOrig == 'Attackpc' or $msgOrig == 'راهنمای اتک') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴀᴛᴛᴀᴄᴋʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ !"]);
          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' =>
            "
𝐕-𝟔
➲Aᴛᴛᴀᴄᴋʜᴇʟᴘ
• ┅┅━━━━ • ━━━━┅┅ •
➲`spam`
➲`Attack`
• ┅┅━━━━ • ━━━━┅┅ •
➲`NumberEn`
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴍᴇᴍ ᴜsᴀɢᴇ :  **$mem_using** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
",
            'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId, 'disable_web_page_preview' => true
          ]);
        }
        //============== Manage Help User ==============
        elseif ($msgOrig == '/mnghelp' or $msgOrig == 'mnghelp' or $msgOrig == 'رهنمای مدیریت') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴍᴀɴᴀɢᴇ ʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ !"]);
          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' =>
            "
𝐕-𝟔
➲Mᴀɴɢʜᴘ
➲`bot`[on] یا [off] 
• ┅┅━━━━ • ━━━━┅┅ •
➲`/test`
➲`left`
• ┅┅━━━━ • ━━━━┅┅ •
➲`join`text
➲`leave`text
• ┅┅━━━━ • ━━━━┅┅ •
➲`ping`
➲`/config`
• ┅┅━━━━ • ━━━━┅┅ •
➲`block` [UserName] یا Rreply] 
➲`unblock`[UserName] یا Rreply] 
• ┅┅━━━━ • ━━━━┅┅ •
➲`restart`
➲`clean all`
• ┅┅━━━━ • ━━━━┅┅ •
➲`delchat`[Rreply در Gp]
• ┅┅━━━━ • ━━━━┅┅ •
➲`status`
• ┅┅━━━━ • ━━━━┅┅ •
➲`setenemy` (Reply) or (InPV)
➲`delenemy`(Reply) or (InPV)
• ┅┅━━━━ • ━━━━┅┅ •
➲`enemylist`
➲`cleanenemylist`
• ┅┅━━━━ • ━━━━┅┅ •
➲ᴍᴇᴍ ᴜsᴀɢᴇ : **$mem_using** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
",
            'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId, 'disable_web_page_preview' => true
          ]);
        }
        //============== Help User ==============
        elseif ($msgOrig == '/toolshelp' or $msgOrig == 'toolshelp' or $msgOrig == 'رهنمای کاربردی') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴛᴏᴏʟs ʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ !"]);
          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' =>
            "
𝐕-𝟔
➲Tᴏᴏʟs Hᴇʟᴘ
• ┅┅━━━━ • ━━━━┅┅ •
➲`info` [UserName] یا [UserID] 
• ┅┅━━━━ • ━━━━┅┅ •= 
➲`gpinfo`
➲`flood` [Count] [Text]
• ┅┅━━━━ • ━━━━┅┅ •
➲`save` [Reply] 
➲`id`[reply] 
• ┅┅━━━━ • ━━━━┅┅ •
➲`!php` Code 
➲`whois` Domain 
• ┅┅━━━━ • ━━━━┅┅ •
➲`scr Url `
➲`ping Url`
• ┅┅━━━━ • ━━━━┅┅ •
➲`brc` Url
➲`git` (username/project) or (Url)
• ┅┅━━━━ • ━━━━┅┅ •
➲`user`UserID
➲ᴍᴇᴍ ᴜsᴀɢᴇ :  **$mem_using** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
",
            'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId, 'disable_web_page_preview' => true
          ]);
        }
        //\\\\\\\\\\\\\\\\\\\\\\\
        elseif ($msgOrig == "panel" or $msgOrig == "/panel" or $msgOrig == "پنلل") {
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴘᴀɴᴇʟ sᴇɴᴅ ғᴏʀ ʏᴏᴜ . . . !", 'parse_mode' => 'MarkDown']);
          $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => $helper, 'peer' => $peer, 'query' => "kosnell_", 'offset' => '0']);
          $results = $messages_BotResults['results'] ?? [];
          $query_id = $messages_BotResults['query_id'] ?? null;
          $query_res_id = ($results[0] ?? [])['id'] ?? null;
          yield  $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $messageId, 'query_id' => $query_id, 'id' => "$query_res_id"]);
        } elseif ($msgOrig == '/game' or $msgOrig == 'game' or $msgOrig == 'بازی') {
          $load = sys_getloadavg();
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴏᴘᴇɴ ᴛʜᴇ help game . . . !", 'parse_mode' => 'MarkDown']);

          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' => "
𝐕-𝟔
• ┅┅━━━━🅶🅰🅼🅴 🅿🅻🆈🅴━━━━┅┅ •
•➲آدم فضایی
• ┅┅━━━━ • ━━━━┅┅ •  
•➲موشک
•➲پول
• ┅┅━━━━ • ━━━━┅┅ •  
•➲خزوخیل
•➲روح
• ┅┅━━━━ • ━━━━┅┅ •  
•➲بوس
•➲بوس
• ┅┅━━━━ • ━━━━┅┅ •  
•➲برم خونه
•➲شکست عشقی
• ┅┅━━━━ • ━━━━┅┅ •  
•➲عقاب
•➲حموم
• ┅┅━━━━ • ━━━━┅┅ •  
️ •➲آپدیت
•➲بکشش
• ┅┅━━━━ • ━━━━┅┅ •  
•➲مسجد
•➲کوسه
• ┅┅━━━━ • ━━━━┅┅ •  
•➲بارون
•➲شب خوش
• ┅┅━━━━ • ━━━━┅┅ •  
•➲برم بخابم
•➲بادکنک
• ┅┅━━━━ • ━━━━┅┅ •  
•➲فوتبال
•➲فیشینگ
• ┅┅━━━━ • ━━━━┅┅ •  
•➲کارتو تضمی
•➲غرقش کن
• ┅┅━━━━ • ━━━━┅┅ •  
•➲فضانورد
•➲بزن قدش
• ┅┅━━━━ • ━━━━┅┅ •  
•➲عشقمی
•➲فاک
• ┅┅━━━━ • ━━━━┅┅ •  
•➲شمارش
•➲ماشین
• ┅┅━━━━ • ━━━━┅┅ •  
•➲موتور
•➲پنالتی
• ┅┅━━━━ • ━━━━┅┅ •  
•➲تاس
•➲روانی
• ┅┅━━━━ • ━━━━┅┅ •  
•➲ساک
•➲جق
• ┅┅━━━━ • ━━━━┅┅ •  
•➲عشق 
• ┅┅━━━━ • ━━━━┅┅ •  
•➲بمیر کرونا
•➲انگش
• ┅┅━━━━ • ━━━━┅┅ •  
•➲خخخ
•➲لبخند بزن
• ┅┅━━━━ • ━━━━┅┅ •  
•➲جقیم
•➲ریدیم
• ┅┅━━━━ • ━━━━┅┅ •  
•➲کون سفید
• ┅┅━━━━ • ━━━━┅┅ •  
•➲مربع 2
•➲مکعب
• ┅┅━━━━ • ━━━━┅┅ •  
•➲رقص
•➲خار
• ┅┅━━━━ • ━━━━┅┅ •  
•➲گلب
• ┅┅━━━━ • ━━━━┅┅ •  
•➲مربع2
•➲قلب2
• ┅┅━━━━ • ━━━━┅┅ •  
•➲رقص2
•➲کیر2
• ┅┅━━━━ • ━━━━┅┅ •  
•➲بکیرم2
•➲زنبور2
• ┅┅━━━━ • ━━━━┅┅ •  
•➲بکن تو کونش
•➲زنبور
• ┅┅━━━━ • ━━━━┅┅ •  
•➲قلبمی
• ┅┅━━━━ • ━━━━┅┅ •  
•➲حملههه
Rᴀʙᴀᴛsᴀᴢ : #Qarazihin
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •
",
            'parse_mode' => 'markdown', 'disable_web_page_preview' => true
          ]);
        } elseif ($msgOrig == '/game2' or $msgOrig == 'game2' or $msgOrig == '2بازی') {
          $load = sys_getloadavg();
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴏᴘᴇɴ ᴛʜᴇ help game . . . !", 'parse_mode' => 'MarkDown']);

          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' => "
𝐕-𝟔
• ┅┅━━━━🅶🅰🅼🅴 2 ??🅻????━━━━┅┅ •
•➲صصکی
• ┅┅━━━━ • ━━━━┅┅ •  
•➲هک کن
•➲هلیکوپتر
• ┅┅━━━━ • ━━━━┅┅ •  
•➲خخخ
•➲جر
• ┅┅━━━━ • ━━━━┅┅ •  
•➲سلم
•➲چطوری
• ┅┅━━━━ • ━━━━┅┅ •  
•➲بای
•➲عجق
• ┅┅━━━━ • ━━━━┅┅ •  
️ •➲تپش
•➲هزارپا
• ┅┅━━━━ • ━━━━┅┅ •  
•➲اوخی
•➲قهرم
• ┅┅━━━━ • ━━━━┅┅ •  
•➲تتلو
•➲قلبز
• ┅┅━━━━ • ━━━━┅┅ •  
•➲عجق
•➲کون
• ┅┅━━━━ • ━━━━┅┅ •  
•➲لایک
• ┅┅━━━━ • ━━━━┅┅ •  
•➲بپر بالا
•➲فاک
• ┅┅━━━━ • ━━━━┅┅ •  
•➲شمارم
•➲دیک
• ┅┅━━━━ • ━━━━┅┅ •  
•➲کصخل
•➲کصننت
• ┅┅━━━━ • ━━━━┅┅ •  
•➲کل
•➲صگ
• ┅┅━━━━ • ━━━━┅┅ •  
•➲بکیرمم
•➲لبخند بزن
Rᴀʙᴀᴛsᴀᴢ : #Qarazihin
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •
",
            'parse_mode' => 'markdown', 'disable_web_page_preview' => true
          ]);
        } elseif ($msgOrig == '/game3' or $msgOrig == 'game3' or $msgOrig == '3بازی') {
          $load = sys_getloadavg();
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴏᴘᴇɴ ᴛʜᴇ help game . . . !", 'parse_mode' => 'MarkDown']);

          yield  $this->messages->sendMessage([
            'peer' => $peer, 'message' => "
𝐕-𝟔
• ┅┅━━━━🅶🅰🅼🅴 3 🅿🅻🆈🅴━━━━┅┅ •
•➲لامپ
• ┅┅━━━━ • ━━━━┅┅ •  
•➲زارت
•➲بکنش
• ┅┅━━━━ • ━━━━┅┅ •  
•➲گوه بخور
•➲🖕
• ┅┅━━━━ • ━━━━┅┅ •  
•➲بکشش2
•➲بکشش3
• ┅┅━━━━ • ━━━━┅┅ •  
•➲پرو قلب
•➲تانک
• ┅┅━━━━ • ━━━━┅┅ •  
Rᴀʙᴀᴛsᴀᴢ : #Qarazihin
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •
",
            'parse_mode' => 'markdown', 'disable_web_page_preview' => true
          ]);
        }
        //============== Time Name Mode ==============
        elseif ($msgOrig == 'ماشین' or $msgOrig == 'car') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣________________🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣_______________🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣______________🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣_____________🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣____________🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣___________🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣__________🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣_________🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣________🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣_______🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣______🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣____🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣___🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣__🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💣_🏎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💥BOOM💥']);
        } elseif ($msgOrig == 'موتور' or $msgOrig == 'motor' or $msgOrig == 'شوتور') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚧___________________🛵']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚧_________________🛵']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚧_______________🛵']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚧_____________🛵']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚧___________🛵']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚧_________🛵']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚧_______🛵']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚧_____🛵']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚧____🛵']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚧__🛵']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚧_🛵']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚧🛵']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'وای تصادف شد']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'وای موتورم بـگا رف']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ریدم تو موتورم']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💥BOOM💥']);
        } elseif ($msgOrig == 'پنالتی' or $msgOrig == 'فوتبال') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️





😐          ⚽️
?? 
👖
////////////////////
"]);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️




😐
👕       ⚽️
👖
////////////////////
"]);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️




😐
👕 ⚽️
👖
////////////////////
"]);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️



⚽️
😐
👕 
👖
////////////////////
"]);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️

⚽️


😐
👕 
👖
////////////////////
"]);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⚽️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️




😐
👕 
👖
////////////////////
"]);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
////////////////////
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⚽️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️
⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️



💭Gooooooooolllllllll       
😐
👕 
👖
////////////////////
"]);
        } elseif ($msgOrig == 'تانک' or $msgOrig == 'tank') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".        (҂_´)
         <,︻╦̵̵ ╤─ ҉     ~  •
█۞███████]▄▄▄▄▄▄▄▄▄▄▃ ●●"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".        (҂_´)
         <,︻╦̵̵ ╤─ ҉     ~  •
█۞███████]▄▄▄▄▄▄▄▄▄▄▃ ●●●●
▂▄▅█████████▅▄▃▂…"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".        (҂_´)
         <,︻╦̵̵ ╤─ ҉     ~  •
█۞███████]▄▄▄▄▄▄▄▄▄▄▃ ●●●●●
▂▄▅█████████▅▄▃▂…
[███████████████████]"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".        (҂_´)
         <,︻╦̵̵ ╤─ ҉     ~  •
█۞███████]▄▄▄▄▄▄▄▄▄▄▃ ●●●●●●●
▂▄▅█████████▅▄▃▂…
[███████████████████]
◥⊙▲⊙▲⊙▲⊙▲⊙▲⊙▲⊙"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "تانک رو دیدی؟؟🤔"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "دیگه نمیبینی😆"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💥🔥بوم💥🔥"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".        (҂`_´)
         <,︻╦̵̵ ╤─ ҉     ~  •
█۞███████]▄▄▄▄▄▄▄▄▄▄▃ 💥●●●●●●●●●●●
▂▄▅█████████▅▄▃▂…
[███████████████████]
◥⊙▲⊙▲⊙▲⊙▲⊙▲⊙▲⊙"]);
        } elseif ($msgOrig == 'بکشش3' or $msgOrig == '/Bokoshesh') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐                     •🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐                    • 🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐                  •   🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐                •     🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐              •       🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐            •         🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐           •          🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐         •            🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐       •              🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐     •                🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐   •                  🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐 •                    🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐•                     🔫
"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😵                       🔫😏
"]);
        } elseif ($msgOrig == 'کون') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠏⠄⠄⠄⠄⠄⠸⣿⣿⣿⣿⣿⡿⢟⣣⣀"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠄⠄⠄⠄⢹⣿⣿⣿⣿⣿⣿⣿⣿⠁⠄
⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠏⠄⠄⠄⠄⠄⠸⣿⣿⣿⣿⣿⡿⢟⣣⣀"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "⢠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⠄⠄⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⠄
⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠄⠄⠄⠄⢹⣿⣿⣿⣿⣿⣿⣿⣿⠁⠄
⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠏⠄⠄⠄⠄⠄⠸⣿⣿⣿⣿⣿⡿⢟⣣⣀"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠛⠑⣿⣮⣝⣛⠿⠿⣿⣿⣿⣿⠄
⢠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⠄⠄⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⠄
⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠄⠄⠄⠄⢹⣿⣿⣿⣿⣿⣿⣿⣿⠁⠄
⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠏⠄⠄⠄⠄⠄⠸⣿⣿⣿⣿⣿⡿⢟⣣⣀"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "⠄⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠣⣿⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠛⠑⣿⣮⣝⣛⠿⠿⣿⣿⣿⣿⠄
⢠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⠄⠄⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⠄
⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠄⠄⠄⠄⢹⣿⣿⣿⣿⣿⣿⣿⣿⠁⠄
⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠏⠄⠄⠄⠄⠄⠸⣿⣿⣿⣿⣿⡿⢟⣣⣀"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "⠄⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢸⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠣⣿⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠛⠑⣿⣮⣝⣛⠿⠿⣿⣿⣿⣿⠄
⢠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⠄⠄⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⠄
⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠄⠄⠄⠄⢹⣿⣿⣿⣿⣿⣿⣿⣿⠁⠄
⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠏⠄⠄⠄⠄⠄⠸⣿⣿⣿⣿⣿⡿⢟⣣⣀"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "⠄⠄⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⠄⣱⣾⣿⣿⣿⣿⣿⣿⠄
⠄⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢸⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠣⣿⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠛⠑⣿⣮⣝⣛⠿⠿⣿⣿⣿⣿⠄
⢠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⠄⠄⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⠄
⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠄⠄⠄⠄⢹⣿⣿⣿⣿⣿⣿⣿⣿⠁⠄
⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠏⠄⠄⠄⠄⠄⠸⣿⣿⣿⣿⣿⡿⢟⣣⣀"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "⠄⠄⠄⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⠙⡅⣿⠚⣡⣴⣿⣿⣿⡆⠄
⠄⠄⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⠄⣱⣾⣿⣿⣿⣿⣿⣿⠄
⠄⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢸⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠣⣿⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠛⠑⣿⣮⣝⣛⠿⠿⣿⣿⣿⣿⠄
⢠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⠄⠄⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⠄
⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠄⠄⠄⠄⢹⣿⣿⣿⣿⣿⣿⣿⣿⠁⠄
⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠏⠄⠄⠄⠄⠄⠸⣿⣿⣿⣿⣿⡿⢟⣣⣀"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "⠄⠄⠄⠄⣼⣿⣿⣿⣿⣿⣿⣿⣿⣶⣌⡛⢿⣽⢘⣿⣷⣿⡻⠏⣛⣀⠄⠄
⠄⠄⠄⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⠙⡅⣿⠚⣡⣴⣿⣿⣿⡆⠄
⠄⠄⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⠄⣱⣾⣿⣿⣿⣿⣿⣿⠄
⠄⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢸⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠣⣿⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠛⠑⣿⣮⣝⣛⠿⠿⣿⣿⣿⣿⠄
⢠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⠄⠄⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⠄
⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠄⠄⠄⠄⢹⣿⣿⣿⣿⣿⣿⣿⣿⠁⠄
⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠏⠄⠄⠄⠄⠄⠸⣿⣿⣿⣿⣿⡿⢟⣣⣀"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "⠄⠄⠄⢹⠣⣛⣣⣭⣭⣭⣁⡛⠻⢽⣿⣿⣿⣿⢻⣿⣿⣿⣽⡧⡄⠄⠄⠄
⠄⠄⠄⠄⣼⣿⣿⣿⣿⣿⣿⣿⣿⣶⣌⡛⢿⣽⢘⣿⣷⣿⡻⠏⣛⣀⠄⠄
⠄⠄⠄⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⠙⡅⣿⠚⣡⣴⣿⣿⣿⡆⠄
⠄⠄⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⠄⣱⣾⣿⣿⣿⣿⣿⣿⠄
⠄⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢸⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠣⣿⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠛⠑⣿⣮⣝⣛⠿⠿⣿⣿⣿⣿⠄
⢠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⠄⠄⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⠄
⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠄⠄⠄⠄⢹⣿⣿⣿⣿⣿⣿⣿⣿⠁⠄
⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠏⠄⠄⠄⠄⠄⠸⣿⣿⣿⣿⣿⡿⢟⣣⣀"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "⠄⠄⠸⣿⣿⢣⢶⣟⣿⣖⣿⣷⣻⣮⡿⣽⣿⣻⣖⣶⣤⣭⡉⠄⠄⠄⠄⠄
⠄⠄⠄⢹⠣⣛⣣⣭⣭⣭⣁⡛⠻⢽⣿⣿⣿⣿⢻⣿⣿⣿⣽⡧⡄⠄⠄⠄
⠄⠄⠄⠄⣼⣿⣿⣿⣿⣿⣿⣿⣿⣶⣌⡛⢿⣽⢘⣿⣷⣿⡻⠏⣛⣀⠄⠄
⠄⠄⠄⣼⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⠙⡅⣿⠚⣡⣴⣿⣿⣿⡆⠄
⠄⠄⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⠄⣱⣾⣿⣿⣿⣿⣿⣿⠄
⠄⢀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢸⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠣⣿⣿⣿⣿⣿⣿⣿⣿⣿⠄
⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠛⠑⣿⣮⣝⣛⠿⠿⣿⣿⣿⣿⠄
⢠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⠄⠄⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⣿⡟⠄
⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠇⠄⠄⠄⠄⢹⣿⣿⣿⣿⣿⣿⣿⣿⠁⠄
⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠏⠄⠄⠄⠄⠄⠸⣿⣿⣿⣿⣿⡿⢟⣣⣀"]);
        } elseif ($msgOrig == 'بپر بالا') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".          ▄▌▐▀▀▀▀▀▀▀▀▀▀▀▀▀▌
.  ▄▄ █ gan gan bia bala brim 
███▌█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▌
▀(@)▀▀▀(@)(@)▀▀▀(@)▀
— — — — — — — — — — — — "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".          ▄▌▐▀▀▀▀▀▀▀▀▀▀▀▀▀▌
.  ▄▄ █ gan gan bia bala brim 
███▌█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▌
▀(@)▀▀▀(@)(@)▀▀▀(@)▀
- — — — — — — — — — — — — "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".          ▄▌▐▀▀▀▀▀▀▀▀▀▀▀▀▀▌
.  ▄▄ █ gan gan bia bala brim 
███▌█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▌
▀(@)▀▀▀(@)(@)▀▀▀(@)▀
-- — — — — — — — — — — — —"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".          ▄▌▐▀▀▀▀▀▀▀▀▀▀▀▀▀▌
.  ▄▄ █ gan gan bia bala brim 
███▌█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▌
▀(@)▀▀▀(@)(@)▀▀▀(@)▀
— — — — — — — — — — — — "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".          ▄▌▐▀▀▀▀▀▀▀▀▀▀▀▀▀▌
.  ▄▄ █ gan gan bia bala brim 
███▌█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▌
▀(@)▀▀▀(@)(@)▀▀▀(@)▀
- — — — — — — — — — — — — "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".          ▄▌▐▀▀▀▀▀▀▀▀▀▀▀▀▀▌
.  ▄▄ █ gan gan bia bala brim 
███▌█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▌
▀(@)▀▀▀(@)(@)▀▀▀(@)▀
-- — — — — — — — — — — — —"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".          ▄▌▐▀▀▀▀▀▀▀▀▀▀▀▀▀▌
.  ▄▄ █ gan gan bia bala brim 
███▌█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▌
▀(@)▀▀▀(@)(@)▀▀▀(@)▀
— — — — — — — — — — — — "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".          ▄▌▐▀▀▀▀▀▀▀▀▀▀▀▀▀▌
.  ▄▄ █ gan gan bia bala brim 
███▌█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▌
▀(@)▀▀▀(@)(@)▀▀▀(@)▀
- — — — — — — — — — — — — "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ".          ▄▌▐▀▀▀▀▀▀▀▀▀▀▀▀▀▌
.  ▄▄ █ gan gan bia bala brim 
███▌█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▌
▀(@)▀▀▀(@)(@)▀▀▀(@)▀
-- — — — — — — — — — — — —"]);
        } elseif ($msgOrig == '🖕' or $msgOrig == 'fuck') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "              \             \ ' "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "            \              (
              \             \ ' "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "          \                _.•´
            \              (
              \             \ ' "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "         \                         /
          \                _.•´
            \              (
              \             \ ' "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "        ('(   (   (   (  ¯~/'  ' /
         \                         /
          \                _.•´
            \              (
              \             \ ' "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "          /'/   /    /  /     /¨¯\
        ('(   (   (   (  ¯~/'  ' /
         \                         /
          \                _.•´
            \              (
              \             \ ' "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "             /´¯/'   '/´¯¯•¸
          /'/   /    /  /     /¨¯\
        ('(   (   (   (  ¯~/'  ' /
         \                         /
          \                _.•´
            \              (
              \             \ ' "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "                     /    /
             /´¯/'   '/´¯¯•¸
          /'/   /    /  /     /¨¯\
        ('(   (   (   (  ¯~/'  ' /
         \                         /
          \                _.•´
            \              (
              \             \ ' "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "                        /   /
                     /    /
             /´¯/'   '/´¯¯•¸
          /'/   /    /  /     /¨¯\
        ('(   (   (   (  ¯~/'  ' /
         \                         /
          \                _.•´
            \              (
              \             \ ' "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " .                        /¯)
                        /   /
                     /    /
             /´¯/'   '/´¯¯•¸
          /'/   /    /  /     /¨¯\
        ('(   (   (   (  ¯~/'  ' /
         \                         /
          \                _.•´
            \              (
              \             \ ' "]);
        } elseif ($msgOrig == 'قلب' or $msgOrig == 'پرو قلب') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '❤️❤️❤️❤️❤️❤️
❤️❤️❤️❤️❤️❤️
❤️❤️💛💛❤️❤️
❤️❤️💛💛❤️❤️
❤️❤️❤️❤️❤️❤️
❤️❤️❤️❤️❤️❤️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '❤️❤️❤️❤️❤️❤️
❤️💚💚💚💚❤️
❤️💚💛💛💚❤️
❤️💚💛💛💚❤️
❤️💚💚💚💚❤️
❤️❤️❤️❤️❤️❤️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💙💙💙💙💙💙
💙💚💚💚💚💙
💙💚💛💛💚💙
💙💚💛💛💚💙
💙💚💚💚💚💙
💙💙💙💙💙💙']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💙💙💙💙💙💙
💙🖤🖤🖤🖤💙
💙🖤💛💛🖤💙
💙🖤💛💛🖤💙
💙🖤🖤🖤🖤💙
💙💙💙💙💙💙']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💙💙💙💙💙💙
💙🖤🖤🖤🖤💙
💙🖤🤍🤍🖤💙
💙🖤🤍🤍🖤💙
💙🖤🖤🖤🖤💙
💙💙💙💙💙💙']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💔💔💔💔💔💔
💔🖤🖤🖤🖤💔
💔🖤🤍🤍🖤💔
💔🖤🤍🤍🖤💔
💔🖤🖤🖤🖤💔
💔💔💔💔💔💔']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '❤️❤️❤️❤️❤️❤️
❤️❤️❤️❤️❤️❤️
❤️❤️💛💛❤️❤️
❤️❤️💛💛❤️❤️
❤️❤️❤️❤️❤️❤️
❤️❤️❤️❤️❤️❤️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '❤️❤️❤️❤️❤️❤️
❤️💚💚💚💚❤️
❤️💚💛💛💚❤️
❤️💚💛💛💚❤️
❤️💚💚💚💚❤️
❤️❤️❤️❤️❤️❤️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💙💙💙💙💙💙
💙💚💚💚💚💙
💙💚💛💛💚💙
💙💚💛💛💚💙
💙💚💚💚💚💙
💙💙💙💙💙💙']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💙💙💙💙💙💙
💙🖤🖤🖤🖤💙
💙🖤💛💛🖤💙
💙🖤💛💛🖤💙
💙🖤🖤🖤🖤💙
💙💙💙💙💙💙']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💙💙💙💙💙💙
💙🖤🖤🖤🖤💙
💙🖤🤍🤍🖤💙
💙🖤🤍🤍🖤💙
💙🖤🖤🖤🖤💙
💙💙💙💙💙💙']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💔💔💔💔💔💔
💔🖤🖤🖤🖤💔
💔🖤🤍🤍🖤💔
💔🖤🤍🤍🖤💔
💔🖤🖤🖤🖤💔
💔💔💔💔💔💔']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
🖤🖤🖤🖤
🖤🤍🤍🖤
🖤🤍🤍🖤
????🖤🖤']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🤍']);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '❤️']);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🤍']);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '❤️']);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🤍']);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '❤️']);
        } elseif ($msgOrig == 'لامپ' or $msgOrig == 'نور' or $msgOrig == 'چراغ') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡                 ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡                ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡               ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡              ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡             ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡            ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡           ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡          ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡         ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡        ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡       ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡      ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡     ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡    ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡   ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡  ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡 ⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡⚡']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💡']);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'با رعد و برق لامپ روشن کردیم??، پشمای فیزیک بمولا😅']);
        } elseif ($msgOrig == 'زارت' or $msgOrig == 'یک روز') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌕']);
          yield $this->sleep(3);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌔']);
          yield $this->sleep(3);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌖']);
          yield $this->sleep(3);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌓']);
          yield $this->sleep(3);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌓']);
          yield $this->sleep(3);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌒']);
          yield $this->sleep(3);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌘']);
          yield $this->sleep(3);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌑']);
        } elseif ($msgOrig == 'بکنش' or $msgOrig == 'بگاش') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'فاضلاب شمال شرق تهران تو کص ننت']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'کیر گراز وحشی تو مادرت']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'اونجا که شاعر میگه یه کیر دارم شاه نداره تو ننت']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'پایه تختم تو کونت']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'کلا کص ننت']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'الکی بی دلیل کص ننت']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'بابات چه ورقیه']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'دست زدم به کون بابات دلم رفت']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'به بابات بگو سفید کنه شب میام بکنم']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'کص ننت؟']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ایمیل عمتو لطف کن']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'کوننده خونه ای که عمت توش پول درمیاره نوشتم رو کیرم']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'کص ننت']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'کص پدرت']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😂 امیدوارم از فحش ها لذت برده باشی']);
        } elseif ($msgOrig == 'گوه بخور' or $msgOrig == 'گوه بخوررر') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'G.......']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.O......']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '..H.....']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '...B....']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '....O...']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.....KH..']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '......O.']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.......R']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'GOH BOKHOR💩']);
        } elseif ($msgOrig == 'بکشش2' or $msgOrig == 'بکشش2') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃                 • 🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃                •  🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃               •   🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃              •    🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃             •     🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃            •      🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃           •       🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃          •        🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃         •         🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃        •          🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃       •           🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃      •            🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃     •             🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃    •              🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃   •               🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃  •                🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃 •                 🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🙃•                  🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤯                   🔫🤠"]);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "سرانجام جنایتکار کشته شد 😂😐"]);
        } elseif ($msgOrig == 'tas' or $msgOrig == 'تاس') {
          $tas = "
-+-+-+-+-+-+
| 012  |
| 345  |
| 678  |
-+-+-+-+-+-+";
          $rand002 = rand(1, 6);
          if ($rand002 == 1) {
            $tas = str_replace(4, "??", $tas);
          }
          if ($rand002 == 2) {
            $tas = str_replace([0, 8], "❤️", $tas);
          }
          if ($rand002 == 3) {
            $tas = str_replace([0, 4, 8], "💛", $tas);
          }
          if ($rand002 == 4) {
            $tas = str_replace([0, 2, 6, 8], "💙", $tas);
          }
          if ($rand002 == 5) {
            $tas = str_replace([0, 2, 6, 8, 4], "💜", $tas);
          }
          if ($rand002 == 6) {
            $tas = str_replace([0, 2, 6, 8, 3, 5], "💚", $tas);
          }

          $tas = str_replace(range(0, 8), '   ', $tas);

          $ed = yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => $tas, 'parse_mode' => 'HTML']);
        } elseif ($msgOrig == 'الو تیمارستان' or $msgOrig == 'روانی') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀________________🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀_______________🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀______________🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀_____________🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀____________🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀___________🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀__________🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '??🏿‍♀_________🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀________🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀_______🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀______🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀____🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀___🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀__🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶🏿‍♀_🚑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'قان قان گرفتیمش خودع کزخلشع😐🚶‍♂️']);
        } elseif ($msgOrig == 'ساک' or $msgOrig == 'suck') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🗣 <=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🗣<=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🗣=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🗣====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🗣===']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🗣==']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🗣===']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🗣====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🗣=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🗣<=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'اخ اخ گاز گرفتی ک😐']);
        } elseif ($msgOrig == 'جق' or $msgOrig == 'jaq') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'درحال جق....']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '👌🏻<=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<👌🏻=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<=👌🏻====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<==👌🏻===']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<===👌🏻==']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<==👌🏻===']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<=👌🏻====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<👌🏻=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '👌🏻<=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<=👌🏻====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<===👌🏻==']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<=👌🏻====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '👌🏻<=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<=👌🏻====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<==??🏻===']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '<=👌🏻====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '👌🏻<=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💦💦<=====']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'کمر نموند برامون بمولا😐']);
        } elseif ($msgOrig == 'عشق' or $msgOrig == 'love') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀________________🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀_______________🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀______________🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀_____________🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀____________🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀___________🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀__________🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀_________🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀________🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀_______🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀______🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀____🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀___🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀__??‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🚶‍♀_🏃‍♂']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💞Ｉ ＬＯＶＥ ＹＵＯＥ']);
        } elseif ($msgOrig == 'کصننت' or $msgOrig == 'ksnne') {
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'کـــ']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'کــص']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'کــص ن']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'کـــص نـــنـ']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'کـــص نـنـتـ']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '💝 نـنـت']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '☘کـــص نـنـت دیگه☘']);
        } elseif ($msgOrig == 'آدم فضایی') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽                     🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽                    🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽                   🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽                  🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽                 🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽                🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽               🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽              🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "??             🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽            🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽           🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽          🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽         ??😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽        🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽       🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽      🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽     🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽    🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽   🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽  🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽 🔦😼"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👽🔦🙀"]);
        } elseif ($msgOrig == 'خخخ' or $msgOrig == 'خنده' or $msgOrig == 'lol') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😂']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🤣']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😀']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😃']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😄']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😁']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😆']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😅']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😊']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🙃']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😛']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😝']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😜']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🤪']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😺']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😹']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😸']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😇']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😂']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🥳']);
        } elseif ($msgOrig == 'کل' or $msgOrig == 'کلر' or $msgOrig == 'lol') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '1']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '2']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '3']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '4']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '5']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '6']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '7']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '8']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '9']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '10']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ننه ش']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'کس']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ننه']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'بی ننه']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'سگ ننه']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'کس ننت']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'شل ننه']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'باختی عسگل']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'باختی کونی']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'یک تا ده شمارش خوردی بنری دیه']);
        } elseif ($msgOrig == 'شاهین' or $msgOrig == 'شمارم' or $msgOrig == 'lol') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '0']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '99']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '2']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '0']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '3']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '6']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '2']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '0']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '1']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '3']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'خب']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'اینم']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'از']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'شماره']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'حبیب']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'اهریمن']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '۰۹۹۲۱۳۷۴۸۵۸']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '09921374858']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '09921         374858']);
        } elseif ($msgOrig == 'spam' or $msgOrig == 'NumberFa') {
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'بالاباش ببين چطوري مادرتو صلاخي مکينم چصکي موصکي جان خههخهخهخ بي ناموس ممبر واس من قد قد نکن چص ميکنمت بي ناموس واس اربابت شاخ نشو همين لنگه دمپايي رو تو کس مادرت ول ميدم چسکي مادر حوس کردي کير  بکنم تو ما تحت شعاع ناموس گراميت"؟ خخخهه مادرکسه بالاباش ببينم چي بارته تو  الاغ جان بي ناموس خارکسه تو کيرمم ميشيي يا خير؟؟؟خخخخخخخخخخخخخخ مادرکسه کاتکليک ناموس خخخخخخخخخخخخخخ بالاببالاباش.... اين يک فرمان از اربابت ب تو اضحار شد پس لطفا بالاباش']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'خخخخخخخخخخخخمادرتو ب 9999 روش پوزيشن گاييدم بوم!خخخخخخخخخخخخخخخ خارتو ب روش فرقوني 9999 بار گاييدم بوم!خخخخخخخخخخخخخخخخخخخخخخ پدرتو ب صلاخي بستم 1 بار کلا بوم!خخخخخخخخخخخخخخخخخخخخخخخخخخخخخ مادرت کسه بالاباش مادرت خره بالاباش اوب مممادر الاغ زاده نفهم کسافت ناموس بي فرهنگ ناموس بدخبت خيلي بي عدبي تو بي ناموس ميفهمي؟']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'خارکصه بالا باش']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'خخخخخخخخخخخخخخخ']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'پيتزا تو کص ننتتتتتتتتت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'رلت تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'پاره تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'دفتر تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'موس تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'کتاب تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'برنامه تلگرام تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'برنامه بنديکام تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'گوشيم تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'اين مداد ها تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'خودکار تو ک ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'جمجمه تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'قمقمه تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'سيم تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'پنجره تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'پارده تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'پنکه تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'کيس پيسيم تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'باطريه گوشيم تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'جورابام تو کص ننت']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'بي ناموس کص ننت شد؟']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۱']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۲']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۳']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۴']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۵']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۶']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۷']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۸']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۹']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۱۰']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۱']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۲']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۳']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۴']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۵']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۶']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۷']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۸']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۹']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۱۰']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۱']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۲']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۳']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۴']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۵']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۶']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۷']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۸']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۹']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۱۰']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۱']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۲']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۳']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۴']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۵']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۶']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۷']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۸']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۹']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۱۰']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۱']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۲']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۳']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۴']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۵']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۶']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۷']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۸']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۹']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '۱۰']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'خب دیگه باختی برو تو کص ننت شات شدی بایز پسرم']);
        } elseif ($msgOrig == 'شمارش ان' or $msgOrig == 'NumberEn') {
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR SAG BALA BASH']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR GAV BALA BASH']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR KHAR BALA BASH']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR KHAZ BALA BASH']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR HEYVUN BALA BASH']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR GORAZ BALA BASH']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR KROKODIL BALA BASH']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR SHOTOR BALA BASH']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR SHOTOR MORGH BALA BASH']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'MIKHAY TIZ BEGAMET HALA BEBI KHHKHKHKHK SORAATI NANATO MIKONAM']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'CHIYE KOS MEMBER BABT TAZE BARAT PC KHRIDE BI NAMOS MEMBER?']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'NANE MOKH AZAD NANE SHAM PAYNI NANE AROS MADAR KENTAKI PEDAR HALAZONI KIR MEMBERAK TIZ BASH YALA  TIZZZZZ😂']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'FEK KONAM NANE NANATI NAGAIIDAM KE ENGHAD SHAKHHI????????????????????????????????????HEN NANE GANGANDE PEDAR LASHI']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'to yatimi enghad to pv man daso pa mizani koskesh member man doroste nanato ye zaman mikardam vali toro beh kiramam nemigiram']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'KIRAM TU KUNE NNT BALA BASH KIRAM TU DAHANE MADARET BALA BASH']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'KHARETO BE GA MIDAM BALA BASH']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '1']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '2']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '3']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '4']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '5']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '6']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '7']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '8']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '9']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '10']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '1']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '2']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '3']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '4']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '5']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '6']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '7']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '8']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '9']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '10']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '1']);

          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '2']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '3']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '4']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '5']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '6']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '7']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '8']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '9']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '10']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '1']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '2']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '3']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '4']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '5']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '6']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '7']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '8']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '9']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '10']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '1']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '2']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '3']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '4']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '5']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '6']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '7']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '8']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '9']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => '10']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'NABINAM DIGE GOHE EZAFE BOKHORIA']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => 'KOS NANAT GAYIDE SHOD BINAMUS!!! SHOT SHODI BINAMUS!BYE']);
        } elseif ($msgOrig == 'موشک' or $msgOrig == 'حمله'  or $msgOrig == 'سفینه بترکون') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                                🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                               🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                              🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                             🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                            🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                           🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                          🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                         🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                        🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                       🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                      🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                     🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍??                   🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                  🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                 🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀                🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀               🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀              🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀            🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀           🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀          🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀         🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀        🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀       🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀      🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀     🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀    🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀   🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀  🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀 🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍🚀🛸"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌍💥Boom💥"]);
        } elseif ($msgOrig == 'پول' or $msgOrig == 'دلار'  or $msgOrig == 'ارباب شهر من') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌                    💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌                   💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌                 💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌                💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌               💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌              💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌             💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌            💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌           💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌          💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥                     💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌        💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌       💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌      💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌     💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌    💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌   💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌  💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌ 💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥            ‌💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥           💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥          ??"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥         💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥        💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥       💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥      💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥     💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥    💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥   💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥  💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔥 💵"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💸"]);
        } elseif ($msgOrig == 'با کارای ت باید چالش سعی کن نرینی بزارن' or $msgOrig == 'خزوخیل') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩               🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩              🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩             🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩            🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩           🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩          🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩         🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩        🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩       🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩      🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩     🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩    🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩   🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩  🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💩 🤢"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤮🤮"]);
        } elseif ($msgOrig == 'جن' or $msgOrig == 'روح'  or $msgOrig == 'روحح') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                                   🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                                  🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                                 🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                                🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                               🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                              🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                             🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                            🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                           🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                          🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                         🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                        🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                       🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                      🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                     🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                    🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                   🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                  🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻                 🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻               🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻              🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻             🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻            🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻           🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻          🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻         🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻        🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻       🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻      🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻     🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻    🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻   🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻  🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻 🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👻🙀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☠بگارف☠"]);
        } elseif ($msgOrig == 'برم خونه' or $msgOrig == 'رسیدم خونه') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠              🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠             🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠            🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠           🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠          🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠         🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠        🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠       🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠      🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠     🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠    🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠   🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠  🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠 🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏠🚶‍♂"]);
        } elseif ($msgOrig == 'قلب') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❤️🧡💛💚"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💜💙🖤💛"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤍🤎💛💜"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💚❤️🖤🧡"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💜💚🧡🖤"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤍🧡🤎💜"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💙🧡💜🧡"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💚💛💙💜"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🖤💛💙🤍"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❣"]);
        } elseif ($msgOrig == 'فرار از خونه' or $msgOrig == 'شکست عشقی') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡 💃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡  💃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡   💃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡    💃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡     💃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡      💃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡       💃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡        💃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡         💃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡          💃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡           💃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡            💃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡              💃💔👫"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡                 🚶‍♀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡               🚶‍♀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡             🚶‍♀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡           🚶‍♀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡         🚶‍♀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡       🚶‍♀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡     🚶‍♀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡  🚶‍♀"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏡🚶‍♀"]);
        } elseif ($msgOrig == 'عقاب' or $msgOrig == 'ایگل'  or $msgOrig == 'پیشی برد') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍                         🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍                      🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍                    🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍                  🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍                🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍               🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍              🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍            🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍           🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍          🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍         🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍        🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍       🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍      🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍     🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍    🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍   🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍 🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🐍🦅"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "پیشی برد😹"]);
        } elseif ($msgOrig == 'حموم' or $msgOrig == 'حمام'  or $msgOrig == 'حمومم') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪                  🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪                 🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪                🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪              🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪             🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪            🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪           🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪          🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪         🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪        🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪       🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪      🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪     🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪    🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪   🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪  🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪 🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛁🚪🗝🤏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "??💦😈"]);
        } elseif ($msgOrig == '/update' or $msgOrig == 'اپدیت'  or $msgOrig == 'آپدیت شو') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "▪️10%"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "▪️▪️20%"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "▪️▪️▪️30%"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "▪️▪️▪️▪️40%"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "▪️▪️▪️▪️▪️50%"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "▪️▪️▪️▪️▪️▪️60%"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "▪️▪️▪️▪️▪️▪️▪️70%"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "▪️▪️▪️▪️▪️▪️▪️▪️80%"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "▪️▪️▪️▪️▪️▪️▪️▪️▪️90%"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "❗️EROR❗️"]);
        } elseif ($msgOrig == 'جنایتکارو بکش' or $msgOrig == 'بکشش'  or $msgOrig == 'خایمالو بکش') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂                 • 🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂                •  🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂               •   🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂              •    🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂             •     🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂            •      🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂           •       🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂          •        🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂         •         🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂        •          🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "??       •           🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂      •            🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂     •             🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂    •              🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂   •               🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂  •                🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂 •                 🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😂•                  🔫🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤯                  🔫 🤠"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "فرد جنایتکار کشته شد :)"]);
        } elseif ($msgOrig == 'بریم مسجد' or $msgOrig == 'مسجد') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌                  🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌                 🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌                🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌               🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌              ??‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌             🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌            🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌           🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌          🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌         🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌        🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌       🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌      🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌     ??‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌    🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌   ??‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌  🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "?? 🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🕌🚶‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "اشهدان الا الا الله📢"]);
        } elseif ($msgOrig == 'کوسه' or $msgOrig == 'وای کوسه') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏝┄┅┄┅┄┄┅🏊‍♂┅┄┄┅🦈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏝┄┅┄┅┄┄🏊‍♂┅┄┄🦈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏝┄┅┄┅┄🏊‍♂┅┄🦈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏝┄┅┄┅🏊‍♂┅┄🦈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏝┄┅┄🏊‍♂┅┄🦈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏝┄┅🏊‍♂┅┄🦈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏝┄🏊‍♂┅┄🦈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🏝🏊‍♂┅┄🦈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "اوخیش شانس آوردما :)"]);
        } elseif ($msgOrig == 'بارون') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️                ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️               ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️              ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️             ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️            ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️           ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️          ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️         ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️        ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️       ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️      ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️     ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️    ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️   ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️  ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "☁️ ⚡️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "⛈"]);
        } elseif ($msgOrig == 'بادکنک') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪                🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪               🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪              🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪             🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪            🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪           🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪          🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪         🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪        🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪       🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪      🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪     🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪    🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪   🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪  🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪 🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🔪🎈"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💥Bomm💥"]);
        } elseif ($msgOrig == 'شب خوش' or $msgOrig == 'شب بخیر ') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜              🙃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜             🙃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜            🙃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜           🙃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜          🙃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜         🙃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜        🙃"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜       😕"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜      ☹️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜     😣"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜    😖"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜   😩"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜  🥱"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌜 🥱"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "😴"]);
        } elseif ($msgOrig == 'فیشینگ' or $msgOrig == 'فیش ') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👺🎣           ??"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👺🎣          💳"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👺🎣         💳"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👺🎣        💳"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👺🎣      💳"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👺🎣     💳"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👺🎣    ??"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👺🎣   💳"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👺🎣  💳"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👺🎣 💳"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👺🎣💳"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💵🤑میشورم 100درصد ورمیدارم تبرم نیسم🤑💵"]);
        } elseif ($msgOrig == ' گل بزن ' or $msgOrig == 'فوتبال'  or $msgOrig == 'توی دروازه') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟          ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟         ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟        ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟       ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟      ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟     ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟    ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟   ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟  ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟 ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟  ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟   ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟    ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟     ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟      ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟       ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟        ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟         ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "👟          ⚽️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "(توی دروازه🔥)"]);
        } elseif ($msgOrig == 'برم بخابم') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏                🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏               🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏              🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏             🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏            🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏           🚶🏻‍♂️"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏          🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏         🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏        🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏       🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏      🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏     🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏    🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏   🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏  🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛏 🚶🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🛌"]);
        } elseif ($msgOrig == 'غرقش کن') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊              🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊             🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊            🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊           🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊          🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊         🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊        🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊       🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊      🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊     🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊    🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊   🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊  🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🌬🌊 🏄🏻‍♂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "غرق شد🙈"]);
        } elseif ($msgOrig == 'فضانورد') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀              🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀             🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀            🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀           🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀          🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀         🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀        🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀       🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀      🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀     🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀    🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀   🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀  🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🧑‍🚀 🪐"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🇮🇷من میگم ایران قویه🇮🇷"]);
        } elseif ($msgOrig == 'بزن قدش' or $msgOrig == 'ایول') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏿                       🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻                   ??🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻                  🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏿                   🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻                🤛🏿"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻               🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻              🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏿             🤛🏿"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻            🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻           🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏿          🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻         🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻        🤛🏿"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻       🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻      🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏿     🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻    🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻   🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻  🤛🏻"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🤜🏻🤛🏿"]);
        } elseif ($msgOrig == 'فیل' or $msgOrig == 'عشقمی') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
░░▄███▄███▄ 
░░█████████ 
░░▒▀█████▀░ 
░░▒░░▀█▀ 
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
░░▄███▄███▄ 
░░█████████ 
░░▒▀█████▀░ 
░░▒░░▀█▀ 
░░▒░░█░ 
░░▒░█ 
░░░█ 
░░█░░░░███████ 
░██░░░██▓▓███▓██▒ 
██░░░█▓▓▓▓▓▓▓█▓████ 
██░░██▓▓▓(◐)▓█▓█▓█ 
███▓▓▓█▓▓▓▓▓█▓█▓▓▓▓█ 
▀██▓▓█░██▓▓▓▓██▓▓▓▓▓█ 
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
░░▄███▄███▄ 
░░█████████ 
░░▒▀█████▀░ 
░░▒░░▀█▀ 
░░▒░░█░ 
░░▒░█ 
░░░█ 
░░█░░░░███████ 
░██░░░██▓▓███▓██▒ 
██░░░█▓▓▓▓▓▓▓█▓████ 
██░░██▓▓▓(◐)▓█▓█▓█ 
███▓▓▓█▓▓▓▓▓█▓█▓▓▓▓█ 
▀██▓▓█░██▓▓▓▓██▓▓▓▓▓█ 
░▀██▀░░█▓▓▓▓▓▓▓▓▓▓▓▓▓█ 
░░░░▒░░░█▓▓▓▓▓█▓▓▓▓▓▓█ 
░░░░▒░░░█▓▓▓▓█▓█▓▓▓▓▓█ 
░▒░░▒░░░█▓▓▓█▓▓▓█▓▓▓▓█ 
░▒░░▒░░░█▓▓▓█░░░█▓▓▓█ 
░▒░░▒░░██▓██░░░██▓▓██
"]);
        } elseif ($msgOrig == '/test') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬛️⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬛️⬛️⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬛️⬛️⬛️⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬜️⬜️⬜️⬜️⬛️⬛️⬛️⬛️⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ' ⬜️⬜️⬜️⬜️⬛️⬛️⬛️⬛️⬛️⬛ ']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬜️⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬛️⬜️⬛️⬜️⬛️⬜️⬛️⬜️⬛️⬜️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬛️⬜️⬛️⬜️⬛️⬜️⬛️⬜️⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚫️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚫️⚫️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚪️⚪️⚪️⚪️⚪️⚪️⚪️⚫️⚫️⚫️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚪️⚪️⚪️⚪️⚪️⚪️⚫️⚫️⚫️⚫️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚪️⚪️⚪️⚪️⚪️⚫️⚫️⚫️⚫️⚫️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚪️⚪️⚪️⚪️⚫️⚫️⚫️⚫️⚫️⚫️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚪️⚪️⚪️⚫️⚫️⚫️⚫️⚫️⚫️⚫️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚪️⚪️⚫️⚫️⚫️⚫️⚫️⚫️⚫⚫️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚪️⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️⚫️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚪️⚫️⚪️⚫️⚪️⚫️⚪️⚫️⚪️⚫️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚫️⚪️⚫️⚪️⚫️⚪️⚫️⚪️⚫️⚪️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'تست سرع👌ت انجام شد!']);
        } elseif ($msgOrig == 'بشمار' or $msgOrig == 'شمارش') {
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "¹"]);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "²"]);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "³"]);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "⁴"]);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "⁵"]);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "⁶"]);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "⁷"]);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "⁸"]);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "⁹"]);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "¹⁰"]);
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "sʜᴏᴛ sʜᴏᴅɪ😉"]);
        } elseif ($msgOrig == 'بمیر کرونا' or $msgOrig == 'Corona') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🦠  •   •   •   •   •   •   •   •   •   •  🔫']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🦠  •   •   •   •   •   •   •   •   •   ◀  🔫']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🦠  •   •   •   •   •   •   •   •   ◀   •  🔫']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🦠  •   •   •   •   •   •   •   ◀   •   •  🔫']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🦠  •   •   •   •   •   •   ◀   •   •   •  🔫']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🦠  •   •   •   •   •   ◀   •   •   •   •  🔫']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🦠  •   •   •   •   ◀   •   •   •   •   •  🔫']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🦠  •   •   •   ◀   •   •   •   •   •   •  🔫']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🦠  •   •   ◀   •   •   •   •   •   •   •  🔫']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🦠  •   ◀   •   •   •   •   •   •   •   •  🔫']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🦠  ◀   •   •   •   •   •   •   •   •   •  🔫']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💥  •   •   •   •   •   •   •   •   •   •  🔫']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💉💊💉💊💉💊💉💊']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'we wine']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Corona Is Dead']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'وای کرونارو گاییدیم']);
        } elseif ($msgOrig == 'انگش' or $msgOrig == 'بارماخ') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑________________👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑_______________👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑______________👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑_____________👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑____________👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑___________👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑__________👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑_________👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑________👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑_______👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑______👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑____👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑___👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑__👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍑_👈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '✌انگشت شد✌']);
        } elseif ($msgOrig == 'جقیم' or $msgOrig == 'jagh2') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B=======✊🏻=D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B=====✊🏻===D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B==✊🏻======D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B✊🏻========D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B===✊??=====D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B=====✊🏻===D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B=======✊🏻=D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B====✊🏻====D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B==✊??======D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B✊🏻========D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B==✊🏻======D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B====✊🏻====D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B======✊🏻==D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B========✊🏻D']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B========✊🏻D💦💦']);
          yield  $this->messages->editMessage(['peer' => $peer, 'message' => 'کمر نموند برامون بمولا']);
        } elseif ($msgOrig == 'ریدیم' or $msgOrig == 'goh') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🐒
💩









🧑‍🦯']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🐒

💩








🧑‍🦯']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🐒


💩






🧑‍🦯']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🐒



💩





🧑‍🦯']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🐒




💩




🧑‍🦯']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🐒






💩


🧑‍🦯']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🐒







💩

🧑‍🦯']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🐒








??
🧑‍🦯']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'چیو نگاه میکنی ریدیم ب هیکل یاروع دیگ😂']);
        } elseif ($msgOrig == 'سفید کون' or $msgOrig == 'کون سفید') {
          yield  $this->messages->editMessage(['peer' => $peer, 'message' => "کون"]);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "کون سفید"]);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "کون سفید من"]);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "کون سفید من چطورع"]);
          yield  $this->sleep(1);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "یع دس مرامی دارکوبی بزن❤️"]);
          yield  $this->sleep(1);
        } elseif ($msgOrig == 'مربع 2' or $msgOrig == 'mr1') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
??🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥🟥??🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥⬛️
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
⬛️🟥🟥??']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥⬜️⬛️🟥
🟥⬛️⬜️??
🟥⬜️⬛️🟥
??⬛️⬜️🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥??🟥
🟥🟨🟨🟨🟨🟨🟥
??🟩🟩🟩🟩??🟥
🟥⬛️⬛️⬛️⬛️⬛️🟥
🟥🟦🟦🟦🟦🟦🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥💚??💚💚💚??
🟥💙💙💙💙💙🟥
🟥❤️❤️❤️❤️❤️🟥
🟥💖💖💖💖💖??
🟥🤍🤍🤍🤍??🟥
🟥🟥🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥▫️◼️▫️◼️▫️🟥
🟥◼️▫️◼️▫️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥◼️◽️◼️◽️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥🟥🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🔶🔷🔶??🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶??
🟥🟥🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥🟥🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💙💙💙💙']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '❣️I Love❣️']);
        } elseif ($msgOrig == 'مکعب' or $msgOrig == 'mr') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥⬛️
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
⬛️🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🟨🟨🟨🟨🟨🟥
🟥🟩🟩🟩🟩🟩🟥
🟥⬛️⬛️⬛️⬛️⬛️🟥
🟥🟦🟦🟦🟦🟦🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥💚💚💚💚💚🟥
🟥💙💙💙💙💙🟥
🟥❤️❤️❤️❤️❤️🟥
🟥💖💖💖💖💖🟥
🟥🤍🤍🤍🤍🤍🟥
🟥🟥🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥▫️◼️▫️◼️▫️🟥
🟥◼️▫️◼️▫️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥◼️◽️◼️◽️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥🟥🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🟥🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥🟥🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💙💙💙💙']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '👑entire??']);
        } elseif ($msgOrig == 'dick' or $msgOrig == 'دیک') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.                      💦💦💦  
.                    💦💦💦💦
                   💦💦💦💦💦
                 💦💦💦💦💦💦
                 💦💦💦  💦💦💦
                 💦💦💦        💦💦
                  ◼️◼️◼️         💦💦
           ◼️📜◼️📜◼️     💦💦
     ◼️📜📜◼️📜📜◼️   💦 
     ◼️📜📜📜📜📜◼️     💦
           ◼️◼️◼️◼️◼️          💦
           ◼️📜📜📜◼️          💦 
           ◼️📜📜📜◼️       💦
           ◼️📜📜📜◼️
           ◼️📜📜📜◼️
           ◼️📜📜📜◼️
           ◼️📜📜📜◼️
           ◼️📜📜📜◼️‌
           ◼️📜📜📜◼️
           ◼️📜📜📜◼️
           ◼️📜📜📜◼️
           ◼️📜📜📜◼️
           ◼️📜📜📜◼️
           ◼️📜📜📜◼️
     ◼️📜📜📜📜📜◼️
◼️📜📜📜📜📜📜📜◼️
◼️📜📜📜◼️📜📜📜◼️
     ◼️◼️◼️     ◼️◼️◼️']);
        } elseif ($msgOrig == 'فاک' or $msgOrig == 'fuck') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🏿🖕🖕🖕🖕🖕']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🖕🏿🖕🖕🖕🖕']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🖕🖕🏿🖕🖕🖕']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🖕🖕🖕🏿🖕🖕']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🖕🖕🖕🖕🏿🖕']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🖕🖕🖕🖕🖕🏿']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🖕🖕🖕🖕🏾🖕']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🖕🖕🖕🏿🖕🖕']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🖕🖕🏿🖕🖕🖕']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🖕🏿🖕🖕🖕🖕']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🏿🖕🖕🖕🖕🖕']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🖕🏿🖕🖕🏿🖕🖕🏿']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🏿🖕🖕🏿🖕🖕🏿🖕']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🖕🖕🖕🖕🖕']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖕🏿🖕🏿🖕🏿🖕🏿🖕🏿🖕🏿']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖤fucking you🖤']);
        } elseif ($msgOrig == 'رقص' or $msgOrig == 'danc') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥
🟥🔲🔳🔲🟥
🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥
🟥🟥🔲🟥🟥
🟥🟥🔳🟥🟥
🟥🟥🔲🟥🟥
🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥
🟥🟥🟥🔲🟥
🟥🟥🔳🟥🟥
🟥🔲🟥🟥🟥
🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥🟥🟥🟥🟥
🟥🔲🟥🟥🟥
🟥🟥🔳🟥🟥
🟥🟥🟥🔲🟥
🟥🟥🟥🟥🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟪??🟪🟪🟪
??🟪??🟪🟪
🟪🔲🔳🔲🟪
🟪🟪🟪🟪🟪
🟪🟪🟪🟪🟪']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟪🟪🟪🟪🟪
🟪🟪🔲🟪🟪
🟪🟪🔳🟪🟪
🟪🟪🔲🟪??
🟪🟪🟪🟪🟪']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟪🟪🟪🟪🟪
🟪🟪🟪🔲🟪
🟪🟪🔳🟪🟪
🟪🔲🟪🟪🟪
🟪🟪🟪🟪🟪']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟪🟪🟪🟪🟪
🟪🔲🟪🟪🟪
🟪🟪🔳🟪🟪
🟪🟪🟪🔲🟪
🟪🟪🟪🟪🟪']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🟦🟦🟦
🟦🔲🔳🔲🟦
🟦🟦🟦??🟦
🟦🟦🟦🟦🟦']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🔲🟦🟦
🟦🟦🔳🟦🟦
🟦🟦🔲🟦🟦
🟦🟦🟦🟦🟦']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🟦🔲🟦
🟦🟦🔳🟦🟦
🟦🔲🟦🟦🟦
🟦🟦🟦🟦🟦']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟦🟦🟦🟦🟦
🟦🔲🟦🟦🟦
🟦🟦🔳🟦🟦
🟦🟦🟦🔲🟦
🟦🟦🟦🟦🟦']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '◻️🟩🟩◻️◻️
◻️◻️🟩◻️🟩
🟩🟩🔳🟩🟩
🟩◻️🟩◻️◻️
◻️◻️🟩🟩◻️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟩⬜️⬜️🟩??
🟩🟩⬜️🟩⬜️
⬜️⬜️🔲⬜️⬜️
⬜️🟩⬜️🟩🟩
🟩🟩⬜️⬜️🟩']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌹entire🌹']);
        } elseif ($msgOrig == 'خار' or $msgOrig == 'کاکتوس') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــــــــــــــــــــــــــــــــــ 🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــــــــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ـــــــــــــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــــــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ـــــــــــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ـــــــــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ـــــــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '??ـــــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ـــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ـــــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ـــــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '??ـــــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ـــــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ـــــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ـــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ـــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ــ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵ـ🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵💥🎈']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '??Bommmm💥']);
        } elseif ($msgOrig == 'گلب' or $msgOrig == 'qlb2') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💚💛🧡❤️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💙💚💜🖤']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '❤️🤍🧡💚']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖤💜💙💚']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🤍🤎❤️💙']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🖤💜💚💙']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💝💘💗💘']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '❤️🤍🤎🧡']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💕💞💓🤍']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💜💙❤️🤍']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💙💜💙💚']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🧡💚🧡💙']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💝💜💙❤️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💞🖤💙💚']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💛🧡❤️💚']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '😍Im crazy about you😍']);
        } elseif ($msgOrig == ':))') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ':/']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ':|']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ':(']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ':)']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ':/']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ':|']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ':(']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ':)']);
        } elseif ($msgOrig == 'عجق') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '❤']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💜']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💙']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💚']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💛']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💗']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💛']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🤎']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🤍']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💟']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💙']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '❤']);
        } elseif ($msgOrig == 'مربع2' or $msgOrig == 'mor') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟪🟩🟨⬛️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟧🟨🟩🟦']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟪🟦🟥🟩']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⬜️⬛️⬜️🟪']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '??🟦🟪🟩']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥⬛️🟪🟦']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟧🟩🟫🟨']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔳🔲◻️🟥']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '▪️▫️◽️◼️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '◻️◼️◽️▪️']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟪🟦🟨🟪']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟥⬛️🟪🟩']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟧🟨??🟦']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🟩🟦🟩🟪']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🍁entire🍁']);
        } elseif ($msgOrig == 'jer' or $msgOrig == 'جر') {
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => '😂']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣😂']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣😂🤣']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣😂🤣😂']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣😂🤣😂🤣']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣😂🤣😂🤣😂']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣😂🤣😂🤣😂🤣']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣😂🤣😂🤣😂🤣']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣😂🤣😂🤣😂🤣😂']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂??😂🤣😂🤣😂🤣😂🤣']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '????😂??😂🤣😂🤣😂🤣😂']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣😂🤣😂🤣😂🤣😂🤣😂🤣']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣😂🤣😂🤣😂🤣😂🤣😂🤣😂']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣😂🤣😂🤣😂🤣😂🤣😂🤣😂🤣 ']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '😂🤣😂🤣😂🤣😂🤣😂🤣😂🤣😂🤣😂']);
        } elseif ($msgOrig == 'slm' or $msgOrig == 'سلم') {

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'سلام']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Hello']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'مرحبا']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Dia dhuit
']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Салом']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Merhaba']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Hallo']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'שלום']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Bonjour']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Salve']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Hallå']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Hola']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Lumela']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Ciao']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Բարեւ']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Здравствуйте']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'नमस्कार']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Olá']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ሰላም']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Helló']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Salut']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'হ্যালো']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Здраво']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
добры дзень']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'හෙලෝ']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Ahoj']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ಹಲೋ
']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ဟယ်လို
']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Waad salaaman tihiin']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '你好']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ສະບາຍດີ
']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Hej']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Sveiki']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Hei']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ନମସ୍କାର']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Sawubona']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'سلاااااممم']);
        } elseif ($msgOrig == 'بای' or $msgOrig == 'bye') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'خداحافظ']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Bye']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Totsiens']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'अलविदा']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
Tchau']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ባይ']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Pa']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'وداعا']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'bless']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'до свидания']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ցտեսություն']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
ka ọ dị']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'addio']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'さようなら']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'здраво']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'doei']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'хайр']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'vale']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Чао']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Hoşçakal']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'au revoir']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Tschüss']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'баяртай']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
αντίο']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ବିଦାୟ']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'o dabọ']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ביי']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'usale kahle']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'د خدای په امان']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'farvel']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Hejdå']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'kwaheri']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '再见']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'sala hantle']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'slán']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'sağol']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'خداحافظظظ']);
        } elseif ($msgOrig == 'chetory' or $msgOrig == 'چطوری' or $msgOrig == 'Chetory' or $msgOrig == 'چطوری') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'چطوریی']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'how are you']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'क्या हाल है']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Bawo ni o se wa']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
וואס מאכסטו']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'jak się masz']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'מה שלומך']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Pehea oe']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'څنګه یاست']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'તમે કેમ છો']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'तिमीलाई कस्तो छ ']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
bạn khỏe không']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'apa khabar']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'nasılsın']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'hoe gaat het met je']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Шумо чӣ хелед']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'quid agis']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Hur mår du']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '你好吗']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '어떻게 지내']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'u phela joang']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Қалайсыз']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'お元気ですか']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
како си']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Conas tá tú']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Come stai']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'как поживаешь']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'ce mai faci']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
እንዴት ነህ']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'كيف حالك']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Kedu ka ị mere']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
koj nyob li cas']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Como você está']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'คุณเป็นอย่างไรบ้าง']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'jak się masz']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'Pehea oe']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'چطوریی']);
        } elseif ($msgOrig == 'رقص2' or $msgOrig == 'raqs') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
~-(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)~-

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)-~

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~( ._.)--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--(._. )~-
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
~-(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)~-

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)-~

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
~-(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)~-

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)-~

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
~-(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)~-

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
~-(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)~-

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)-~

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~( ._.)--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--(._. )~-
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
~-(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)~-

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)-~

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
~-(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)~-

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)-~

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
~-(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)~-

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)-~
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
~-(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)~-

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)-~

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~( ._.)--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--(._. )~-
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
~-(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)~-

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)-~

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
~-(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)~-

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)-~

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
-~(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
~-(._. )--

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)~-

"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
--( ._.)-~
تامام
"]);
        } elseif ($msgOrig == 'کیر2' or $msgOrig == 'kir2') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "


.                                🟦🟦🟦🟦🟦
        


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                ??🟦??🟦🟦
         🟦
         🟦
         🟦
         🟦



"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟦🟦🟦🟦🟦
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟦🟦🟦🟦🟦
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦
🟦       


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "


.                                🟦🟦🟦🟦🟦
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
??🟦        


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟦🟦🟦🟦🟦
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟦🟦🟦🟦🟥
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦??🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟦🟦🟦🟥🟥
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟦🟦🟥🟥🟥
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟦🟥🟥🟥🟥
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟦
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        ??🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟦
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟦
🟦     🟦
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟦     🟦دادوعل
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥??
         🟥
         🟥
         🟥
🟦     🟥
🟦🟦🟦🟦🟦🟦
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟦     🟥
🟦🟦🟦🟦🟦🟥
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟦     🟥
🟦🟦🟦🟦🟥🟥
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟦     🟥
🟦🟦??🟥🟥🟥
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟦🟦??🟥🟥🟥
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟦🟦🟥🟥🟥🟥
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         ??
         🟥
         🟥
🟥     🟥
🟦🟥🟥🟥🟥🟥
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟦🟦
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟦🟥
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥??🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟥🟥
🟦🟦        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟥🟥
🟦🟥        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟥🟥
🟥🟥        🟦🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥🟥🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟥🟥
🟥🟥        🟥🟦


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟥🟥??🟥🟥
         🟥
         🟥
         🟥
🟥     🟥
🟥🟥🟥🟥🟥🟥
🟥🟥
🟥🟥        🟥🟥


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟥🟥
🟥🟥        🟥🟥


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦??
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦⬛️
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩⬛️🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                ??🟨⬛️🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧⬛️🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                ⬛️🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     ??
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         ⬛️
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         ⬛️
         ??
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                ??🟨🟩🟦🟪
         🟪
         ??
         ⬛️
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     ⬛️
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨⬛️
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩⬛️🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨??🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪⬛️🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
⬛️     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        ??🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️⬛️🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬛️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
⬛️⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬛️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
⬛️⬜️
🟩🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩⬛️        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
⬛️🟦        🟨🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        ⬛️🟧


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨⬛️


"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "

.                                🟧🟨🟩🟦🟪
         🟪
         🟦
         🟩
🟦     🟨
🟫⬜️🟪🟩🟨🟧
🟪⬜️
🟩🟦        🟨🟧

یاح یاح یاح
"]);
        } elseif ($msgOrig == 'بکیرمم' or $msgOrig == 'bkiramm') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒‌▒▒▒████████| 
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████| 
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████| 
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████| 
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████| 
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████| 
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒████▒▒██▒▒▒▒▒▒|
|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒██▒▒██▒██▒▒▒▒▒▒|
|▒▒▒████▒▒██▒▒▒▒▒▒|
|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒██▒▒▒▒████▒▒▒▒▒▒|
|▒▒██▒▒██▒██▒▒▒▒▒▒|
|▒▒▒████▒▒██▒▒▒▒▒▒|
|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒██▒▒▒▒████▒▒▒▒▒▒|
|▒▒██▒▒██▒██▒▒▒▒▒▒|
|▒▒▒████▒▒██▒▒▒▒▒▒|
|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒██▒▒▒▒████▒▒▒▒▒▒|
|▒▒██▒▒██▒██▒▒▒▒▒▒|
|▒▒▒████▒▒██▒▒▒▒▒▒|
|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒█▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒██▒▒▒▒████▒▒▒▒▒▒|
|▒▒██▒▒██▒██▒▒▒▒▒▒|
|▒▒▒████▒▒██▒▒▒▒▒▒|
|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒█▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒██▒▒▒▒████▒▒▒▒▒▒|
|▒▒██▒▒██▒██▒▒▒▒▒▒|
|▒▒▒████▒▒██▒▒▒▒▒▒|
|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒█▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒██▒▒▒▒████▒▒▒▒▒▒|
|▒▒██▒▒██▒██▒▒▒▒▒▒|
|▒▒▒████▒▒██▒▒▒▒▒▒|
|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒█▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒██▒▒▒▒████▒▒▒▒▒▒|
|▒▒██▒▒██▒██▒▒▒▒▒▒|
|▒▒▒████▒▒██▒▒▒▒▒▒|
|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒█▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒██▒▒▒▒████▒▒▒▒▒▒|
|▒▒██▒▒██▒██▒▒▒▒▒▒|
|▒▒▒████▒▒██▒▒▒▒▒▒|
|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒█▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒██▒▒▒▒████▒▒▒▒▒▒|
|▒▒██▒▒██▒██▒▒▒▒▒▒|
|▒▒▒████▒▒██▒▒▒▒▒▒|
|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒█▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒██▒▒▒▒████▒▒▒▒▒▒|
|▒▒██▒▒██▒██▒▒▒▒▒▒|
|▒▒▒████▒▒██▒▒▒▒▒▒|
|▒▒▒▒██▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒██▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒████████▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒██▒|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒█▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒█████▒▒▒▒▒▒|
|▒▒▒▒▒▒▒▒▒██▒▒▒▒▒▒|
|▒▒▒▒▒▒‌▒▒▒████████|
|▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒|"]);
        } elseif ($msgOrig == 'بکشش' or $msgOrig == 'bokoshesh') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐                     •🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐                    • 🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐                  •   🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐                •     🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐              •       🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐            •         🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐           •          🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐         •            🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐       •              🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐     •                🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐   •                  🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐 •                    🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😐•                     🔫
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😵                       🔫😏
"]);
        } elseif ($msgOrig == 'اوخی' or $msgOrig == 'okhey') {
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🥺اوخییی']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺🥺🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺🥺🥺🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺🥺🥺🥺🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺🥺🥺🥺🥺🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺🥺🥺🥺🥺🥺🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺🥺🥺🥺🥺🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺🥺🥺🥺🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺🥺🥺🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺🥺🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺"]);
        } elseif ($msgOrig == 'قهرم' or $msgOrig == 'qhrm' or $msgOrig == 'ghahram' or $msgOrig == 'نمیخام') {
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => '😢😢😢😢']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🙁🙁🙁🙁"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "☹️☹️☹️☹️"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "😣😣😣😣"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "😖😖😖😖"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "😫😫😫😫"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "🥺🥺🥺🥺"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "😭😭😭😭"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "😒"]);
        } elseif ($msgOrig == 'hack' or $msgOrig == 'هک کن') {
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'loading please wait...']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "▪️10%"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "▪️▪️20%"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "▪️▪️▪️30%"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "▪️▪️▪️▪️40%"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "▪️▪️▪️▪️▪️50%"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "▪️▪️▪️▪️▪️▪️60%"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "▪️▪️▪️▪️▪️▪️▪️70%"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "▪️▪️▪️▪️▪️▪️▪️▪️80%"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "▪️▪️▪️▪️▪️▪️▪️▪️▪️90%"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "❗𝓱𝓪𝓬𝓴𝓮𝓭❗️"]);
        } elseif ($msgOrig == 'bos' or $msgOrig == 'بوس') {
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'loading please wait...']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "💋 "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "💋                         💋"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "💋                   💋 "]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "💋             💋"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "💋          💋"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "💋        💋"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "💋      💋"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "💋   💋"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "💋  💋"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => "💋"]);
        } elseif ($msgOrig == 'tapesh' or $msgOrig == 'تپش') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💓"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💗"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💓"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💗"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💓"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💗"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💓"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💗"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💓"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💗"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💓"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💗"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💓💗💓💗💓💗💓💗"]);
        } elseif ($msgOrig == 'bk2' or $msgOrig == 'بکیرم2') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🤤🤤🤤
🤤         🤤
🤤           🤤
🤤        🤤
🤤🤤🤤
🤤         🤤
🤤           🤤
🤤           🤤
🤤        🤤
🤤🤤🤤
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😂         😂
😂       😂
😂     😂
😂   ??
😂😂
😂   😂
😂      😂
😂        😂
😂          😂
😂            😂"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
👽👽👽          👽         👽
😍         😍      😍       😍
😎           😎    😎     😎
🤬        🤬       🤬   🤬
😄😄😄          🤓 🤓
🤨         😊      😋   😋
🤯           🤯    🤯     🤯
🤘           🤘    😘        😘
🤫       🤫        🙊          🙊
🤡????          😗             🙊"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
💋💋💋          💋         ??
😏         ??      😏       😏
😏           😏    😏     😏
😄        😄       😄   😄
😄😄😄          😄😄
🤘         🤘      🤘   🤘
🤘           🤘    🤘      🤘
🙊           🙊    🙊        🙊
🙊       🙊        🙊          🙊
💋💋💋          💋            💋"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😏😏😏          😏         😏
😏         😏      😏       😏
😄           😄    😄     😄
😄        😄       😄   😄
🤘🤘🤘          🤘🤘
🤘         🤘      🤘   🤘
🙊           🙊    🙊      🙊
🙊           🙊    🙊        🙊
💋       💋        💋          💋
💋💋??          💋            💋"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😏😏😏          😏         😏
😄         😄      ??       😄
😄           😄    😄     😄
🤘        🤘       🤘   🤘
🤘🤘🤘          🤘🤘
🙊         🙊      🙊   🙊
🙊           🙊    🙊      🙊
💋           💋    💋        💋
💋       💋        💋          💋
😏😏😏          😏            😏"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😄😄😄          😄         😄
😄         😄      😄       😄
🤘           🤘    🤘     🤘
🤘        🤘       ??   🤘
🙊🙊🙊          🙊🙊
🙊         🙊      🙊   🙊
💋           💋    💋      💋
💋           💋    💋        💋
😏       😏        😏          😏
😏😏😏          😏            😏
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😄😄😄          😄         😄
🤘         🤘      🤘       🤘
🤘           🤘    🤘     🤘
🙊        🙊       🙊   🙊
🙊🙊🙊          🙊🙊
💋         💋      ??   💋
💋           💋    💋      💋
😏           😏    😏        😏
😏       😏        😏          😏
😄😄😄          😄            😄
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🤘🤘🤘          🤘         🤘
🤘         🤘      🤘       🤘
🙊           🙊    🙊     🙊
🙊        🙊       🙊   🙊
💋💋💋          💋💋
💋         💋      💋   💋
😏           😏    ??      😏
😏           😏    😏        😏
😄       😄        😄          😄
😄😄😄          😄            😄
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🤘🤘🤘          🤘         🤘
🙊         🙊      🙊       🙊
🙊           🙊    🙊     🙊
💋        💋       💋   💋
💋💋💋          💋💋
😏         😏      😏   😏
😏           😏    😏      😏
😄           😄    ??        😄
??       😄        😄          😄
🤘🤘🤘          🤘            🤘
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🙊🙊🙊          🙊         🙊
🙊         🙊      🙊       🙊
💋           💋    💋     💋
💋        💋       💋   💋
😏😏😏          😏😏
😏         ??      😏   😏
😄           😄    😄      😄
😄           😄    😄        😄
🤘       🤘        🤘          🤘
🤘🤘🤘          🤘            🤘
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🙊🙊🙊          🙊         🙊
💋         💋      💋       💋
💋           💋    💋     💋
😏        😏       😏   😏
😏😏😏          😏😏
😄         😄      😄   😄
😄           😄    😄      😄
🤘           🤘    🤘        🤘
🤘       🤘        🤘          🤘
🙊🙊🙊          🙊            🙊
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
💋??💋          💋         💋
💋         💋      💋       💋
😏           😏    😏     😏
😏        😏       😏   😏
😄😄😄          😄😄
😄         😄      😄   😄
🤘           🤘    🤘      🤘
🤘           🤘    🤘        🤘
🙊       🙊        🙊          🙊
🙊🙊🙊          🙊            🙊
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
💋💋💋          💋         💋
😏         😏      😏       😏
😏           😏    😏     😏
😄        😄       😄   😄
😄😄😄          😄😄
🤘         🤘      🤘   🤘
🤘           🤘    🤘      🤘
🙊           🙊    🙊        🙊
🙊       🙊        🙊          🙊
💋💋💋          💋            💋
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😏😏😏          😏         😏
😏         😏      😏       😏
😄           😄    😄     😄
😄        😄       😄   ??
🤘🤘🤘          🤘🤘
🤘         🤘      🤘   🤘
🙊           🙊    🙊      🙊
🙊           🙊    🙊        🙊
💋       💋        💋          💋
💋💋💋          💋            💋
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😏😏😏          😏         😏
😄         😄      😄       😄
😄           😄    😄     😄
🤘        🤘       🤘   🤘
🤘🤘🤘          🤘🤘
🙊         🙊      🙊   🙊
🙊           🙊    🙊      🙊
💋           💋    💋        💋
💋       💋        💋          💋
😏😏😏          😏            😏
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😄😄😄          😄         😄
😄         😄      😄       😄
🤘           🤘    🤘     🤘
🤘        🤘       🤘   🤘
🙊🙊🙊          🙊🙊
🙊         🙊      🙊   🙊
💋           💋    💋      💋
💋           💋    💋        💋
😏       😏        😏          😏
😏😏😏          😏            😏
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😄😄😄          😄         😄
🤘         🤘      🤘       🤘
🤘           🤘    🤘     🤘
🙊        🙊       ??   🙊
🙊🙊🙊          🙊🙊
💋         💋      💋   💋
💋           💋    💋      💋
😏           😏    😏        😏
😏       😏        😏          😏
😄😄😄          😄            😄
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🤘🤘🤘          🤘         🤘
🤘         🤘      🤘       🤘
🙊           🙊    🙊     🙊
🙊        🙊       🙊   🙊
💋💋💋          ??💋
💋         💋      💋   💋
😏           😏    😏      😏
😏           😏    😏        😏
😄       😄        😄          😄
😄😄😄          😄            😄
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🤘🤘🤘          🤘         🤘
🙊         🙊      🙊       🙊
🙊           🙊    🙊     🙊
💋        💋       💋   💋
💋💋💋          💋💋
😏         😏      😏   😏
😏           😏    😏      😏
😄           😄    😄        😄
😄       😄        😄          😄
🤘🤘🤘          🤘            🤘
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🙊🙊??          🙊         🙊
🙊         🙊      🙊       🙊
??           💋    💋     💋
💋        ??       💋   ??
😏😏😏          😏😏
😏         😏      😏   😏
😄           😄    😄      😄
😄           😄    😄        😄
🤘       ??        🤘          🤘
🤘🤘🤘          🤘            🤘
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🙊🙊🙊          🙊         🙊
💋         💋      💋       💋
💋           💋    💋     💋
😏        😏       😏   😏
😏😏😏          😏😏
😄         😄      😄   😄
😄           😄    😄      😄
🤘           🤘    🤘        🤘
🤘       🤘        🤘          🤘
🙊🙊🙊          🙊            🙊
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
💋💋💋          💋         💋
💋         💋      💋       💋
😏           😏    😏     😏
😏        ??       😏   😏
😄😄😄          😄😄
😄         😄      😄   😄
??           🤘    🤘      🤘
🤘           🤘    🤘        🤘
🙊       🙊        🙊          🙊
🙊🙊🙊          🙊            🙊
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
💋💋💋          💋         💋
😏         😏      😏       😏
😏           😏    😏     😏
😄        ??       😄   😄
😄😄😄          😄😄
🤘         🤘      🤘   🤘
🤘           🤘    🤘      ??
🙊           🙊    🙊        🙊
🙊       🙊        🙊          🙊
💋💋💋          💋            💋
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😏😏😏          😏         😏
😏         😏      😏       😏
😄           😄    😄     😄
😄        😄       😄   😄
🤘🤘🤘          🤘🤘
🤘         🤘      🤘   🤘
🙊           🙊    🙊      🙊
🙊           🙊    🙊        🙊
💋       💋        💋          💋
💋💋💋          💋            💋
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😏😏😏          😏         😏
😄         😄      😄       😄
😄           😄    😄     😄
🤘        🤘       🤘   🤘
🤘🤘🤘          🤘🤘
🙊         🙊      🙊   🙊
🙊           🙊    🙊      🙊
💋           💋    💋        💋
??       💋        💋          💋
😏😏😏          😏            😏
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😄😄😄          😄         😄
😄         😄      😄       😄
🤘           🤘    🤘     🤘
🤘        🤘       🤘   🤘
🙊🙊🙊          🙊🙊
🙊         ??      🙊   🙊
💋           💋    💋      💋
💋           💋    💋        💋
😏       😏        😏          😏
😏😏😏          😏            😏
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
😄😄😄          😄         😄
🤘         🤘      🤘       🤘
🤘           🤘    🤘     🤘
🙊        🙊       🙊   🙊
🙊🙊🙊          🙊🙊
💋         💋      💋   💋
💋           💋    💋      💋
😏           😏    😏        😏
😏       😏        😏          😏
😄😄😄          😄            😄
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🤘🤘🤘          🤘         🤘
🤘         ??      🤘       🤘
🙊           🙊    🙊     🙊
🙊        🙊       🙊   🙊
💋💋💋          💋💋
💋         💋      💋   💋
😏           😏    😏      ??
😏           😏    😏        😏
😄       😄        😄          😄
😄??😄          😄            😄
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🤘🤘🤘          🤘         🤘
🙊         🙊      🙊       🙊
🙊           🙊    🙊     🙊
💋        💋       💋   💋
💋💋💋          💋💋
😏         😏      😏   😏
😏           😏    😏      😏
😄           😄    😄        😄
😄       😄        😄          😄
🤘🤘🤘          🤘            🤘
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🙊🙊🙊          🙊         🙊
🙊         🙊      🙊       🙊
💋           💋    💋     💋
💋        💋       💋   💋
😏😏😏          😏??
😏         😏      😏   😏
😄           😄    😄      😄
😄           😄    😄        😄
🤘       ??        🤘          🤘
🤘🤘🤘          🤘            🤘
"]);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
🤬🤬🤬          🤬         🤬
😡         😡      😡       😡
🤬           🤬    🤬     🤬
😡        😡       😡   😡
🤬🤬🤬          🤬🤬
😡         😡      😡   😡
🤬           🤬    🤬      🤬
😡           😡    😡        😡
🤬       🤬        🤬          🤬
😡😡😡          😡            😡

بانک کشاورزی 😐"]);
        } elseif ($msgOrig == 'صگ') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "┈┈┈┈┈┈┈┈┈     ╲╱╲╱"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "┈╲╱╲╱  ┈┈┈   ╲╲▂╲▂
┈┈┈┈┈┈┈┈┈     ╲╱╲╱"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "╲╲╱╱▔╱▔▔╲╲╲╲
┈╲╱╲╱  ┈┈┈   ╲╲▂╲▂
┈┈┈┈┈┈┈┈┈     ╲╱╲╱"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "╱╲╱╲▏┈┈┈┈┈▕▔╰━╯
╲╲╱╱▔╱▔▔╲╲╲╲
┈╲╱╲╱  ┈┈┈   ╲╲▂╲▂
┈┈┈┈┈┈┈┈┈     ╲╱╲╱"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "┈┈╲▔▔▔▔▔╲╱┈╰┳┳┳╯
╱╲╱╲▏┈┈┈┈┈▕▔╰━╯
╲╲╱╱▔╱▔▔╲╲╲╲
┈╲╱╲╱  ┈┈┈   ╲╲▂╲▂
┈┈┈┈┈┈┈┈┈     ╲╱╲╱"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "┈╲╲┈┈┈┈┈▏┈▏┈▔▔▔▆
┈┈╲▔▔▔▔▔╲╱┈╰┳┳┳╯
╱╲╱╲▏┈┈┈┈┈▕▔╰━╯
╲╲╱╱▔╱▔▔╲╲╲╲
┈╲╱╲╱  ┈┈┈   ╲╲▂╲▂
┈┈┈┈┈┈┈┈┈     ╲╱╲╱"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "┈▏▏┈┈┈┈┈▏╲▕▋▕▋▏
┈╲╲┈┈┈┈┈▏┈▏┈▔▔▔▆
┈┈╲▔▔▔▔▔╲╱┈╰┳┳┳╯
╱╲╱╲▏┈┈┈┈┈▕▔╰━╯
╲╲╱╱▔╱▔▔╲╲╲╲
┈╲╱╲╱  ┈┈┈   ╲╲▂╲▂
┈┈┈┈┈┈┈┈┈     ╲╱╲╱"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "┈╱▏┈┈┈┈┈╱▔▔▔▔╲
┈▏▏┈┈┈┈┈▏╲▕▋▕▋▏
┈╲╲┈┈┈┈┈▏┈▏┈▔▔▔▆
┈┈╲▔▔▔▔▔╲╱┈╰┳┳┳╯
╱╲╱╲▏┈┈┈┈┈▕▔╰━╯
╲╲╱╱▔╱▔▔╲╲╲╲
┈╲╱╲╱  ┈┈┈   ╲╲▂╲▂
┈┈┈┈┈┈┈┈┈     ╲╱╲╱"]);
        } elseif ($msgOrig == 'صصکی') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠄⠄⠄⠈⡼⠿⠿⢿⣿⣦⡝⣿⣿⣿⠷⢀⠄
 ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠄⠄⠄⢻⠏⣼⣿⣿⣿⣿⡿⣿⣿⣏⢾⠇⠄
 ⠄⠄⠄⠄⠄⠈⡼⠿⠿⢿⣿⣦⡝⣿⣿⣿⠷⢀⠄
 ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠄⠈⢿⣿⣿⣿⣿⣷⣯⣿⣿⣷⣾⣿⣷⡄⠄
 ⠄⠄⠄⠄⠄⢻⠏⣼⣿⣿⣿⣿⡿⣿⣿⣏⢾⠇⠄
 ⠄⠄⠄⠄⠄⠈⡼⠿⠿⢿⣿⣦⡝⣿⣿⣿⠷⢀⠄
 ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⠘⣿⣿⣿⣦⣤⡀⢿⣿⣿⣿⣄⠄⠄⠄⠄⠄
 ⠄⠄⠄⠈⢿⣿⣿⣿⣿⣷⣯⣿⣿⣷⣾⣿⣷⡄⠄
 ⠄⠄⠄⠄⠄⢻⠏⣼⣿⣿⣿⣿⡿⣿⣿⣏⢾⠇⠄
 ⠄⠄⠄⠄⠄⠈⡼⠿⠿⢿⣿⣦⡝⣿⣿⣿⠷⢀⠄
 ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠘⣿⣿⣷⡀⠎⡮⡙⠶⠟⣫⣶⠛⠧⠁⠄⠄⠄
 ⠄⠄⠘⣿⣿⣿⣦⣤⡀⢿⣿⣿⣿⣄⠄⠄⠄⠄⠄
 ⠄⠄⠄⠈⢿⣿⣿⣿⣿⣷⣯⣿⣿⣷⣾⣿⣷⡄⠄
 ⠄⠄⠄⠄⠄⢻⠏⣼⣿⣿⣿⣿⡿⣿⣿⣏⢾⠇⠄
 ⠄⠄⠄⠄⠄⠈⡼⠿⠿⢿⣿⣦⡝⣿⣿⣿⠷⢀⠄
 ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠘⣿⣿⣯⡙⣧⢎⢨⣶⣶⣶⣶⢸⣼⡻⡎⡇⠄⠄
 ⠄⠘⣿⣿⣷⡀⠎⡮⡙⠶⠟⣫⣶⠛⠧⠁⠄⠄⠄
 ⠄⠄⠘⣿⣿⣿⣦⣤⡀⢿⣿⣿⣿⣄⠄⠄⠄⠄⠄
 ⠄⠄⠄⠈⢿⣿⣿⣿⣿⣷⣯⣿⣿⣷⣾⣿⣷⡄⠄
 ⠄⠄⠄⠄⠄⢻⠏⣼⣿⣿⣿⣿⡿⣿⣿⣏⢾⠇⠄
 ⠄⠄⠄⠄⠄⠈⡼⠿⠿⢿⣿⣦⡝⣿⣿⣿⠷⢀⠄
 ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⢺⣿⣿⣶⣦⡇⡌⣰⣍⠚⢿⠄⢩⣧⠉⢷⡇⠄⠄
 ⠘⣿⣿⣯⡙⣧⢎⢨⣶⣶⣶⣶⢸⣼⡻⡎⡇⠄⠄
 ⠄⠘⣿⣿⣷⡀⠎⡮⡙⠶⠟⣫⣶⠛⠧⠁⠄⠄⠄
 ⠄⠄⠘⣿⣿⣿⣦⣤⡀⢿⣿⣿⣿⣄⠄⠄⠄⠄⠄
 ⠄⠄⠄⠈⢿⣿⣿⣿⣿⣷⣯⣿⣿⣷⣾⣿⣷⡄⠄
 ⠄⠄⠄⠄⠄⢻⠏⣼⣿⣿⣿⣿⡿⣿⣿⣏⢾⠇⠄
 ⠄⠄⠄⠄⠄⠈⡼⠿⠿⢿⣿⣦⡝⣿⣿⣿⠷⢀⠄
 ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠧⠤⠂⠄⣼⢧⢻⣿⣿⣞⢸⣮⠳⣕⢤⡆⠄⠄
 ⢺⣿⣿⣶⣦⡇⡌⣰⣍⠚⢿⠄⢩⣧⠉⢷⡇⠄⠄
 ⠘⣿⣿⣯⡙⣧⢎⢨⣶⣶⣶⣶⢸⣼⡻⡎⡇⠄⠄
 ⠄⠘⣿⣿⣷⡀⠎⡮⡙⠶⠟⣫⣶⠛⠧⠁⠄⠄⠄
 ⠄⠄⠘⣿⣿⣿⣦⣤⡀⢿⣿⣿⣿⣄⠄⠄⠄⠄⠄
 ⠄⠄⠄⠈⢿⣿⣿⣿⣿⣷⣯⣿⣿⣷⣾⣿⣷⡄⠄
 ⠄⠄⠄⠄⠄⢻⠏⣼⣿⣿⣿⣿⡿⣿⣿⣏⢾⠇⠄
 ⠄⠄⠄⠄⠄⠈⡼⠿⠿⢿⣿⣦⡝⣿⣿⣿⠷⢀⠄
 ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⡜⠄⢀⠆⢠⣿⣿⣿⣿⢡⢣⢿⡱⡀⠈⠆⠄⠄
 ⠄⠧⠤⠂⠄⣼⢧⢻⣿⣿⣞⢸⣮⠳⣕⢤⡆⠄⠄
 ⢺⣿⣿⣶⣦⡇⡌⣰⣍⠚⢿⠄⢩⣧⠉⢷⡇⠄⠄
 ⠘⣿⣿⣯⡙⣧⢎⢨⣶⣶⣶⣶⢸⣼⡻⡎⡇⠄⠄
 ⠄⠘⣿⣿⣷⡀⠎⡮⡙⠶⠟⣫⣶⠛⠧⠁⠄⠄⠄
 ⠄⠄⠘⣿⣿⣿⣦⣤⡀⢿⣿⣿⣿⣄⠄⠄⠄⠄⠄

⠄⠄⠄⠈⢿⣿⣿⣿⣿⣷⣯⣿⣿⣷⣾⣿⣷⡄⠄
 ⠄⠄⠄⠄⠄⢻⠏⣼⣿⣿⣿⣿⡿⣿⣿⣏⢾⠇⠄
 ⠄⠄⠄⠄⠄⠈⡼⠿⠿⢿⣿⣦⡝⣿⣿⣿⠷⢀⠄
 ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⡌⠄⢰⠉⢙⢗⣲⡖⡋⢐⡺⡄⠈⢆⠄⠄⠄
 ⠄⡜⠄⢀⠆⢠⣿⣿⣿⣿⢡⢣⢿⡱⡀⠈⠆⠄⠄
 ⠄⠧⠤⠂⠄⣼⢧⢻⣿⣿⣞⢸⣮⠳⣕⢤⡆⠄⠄
 ⢺⣿⣿⣶⣦⡇⡌⣰⣍⠚⢿⠄⢩⣧⠉⢷⡇⠄⠄
 ⠘⣿⣿⣯⡙⣧⢎⢨⣶⣶⣶⣶⢸⣼⡻⡎⡇⠄⠄
 ⠄⠘⣿⣿⣷⡀⠎⡮⡙⠶⠟⣫⣶⠛⠧⠁⠄⠄⠄
 ⠄⠄⠘⣿⣿⣿⣦⣤⡀⢿⣿⣿⣿⣄⠄⠄⠄⠄⠄
 ⠄⠄⠄⠈⢿⣿⣿⣿⣿⣷⣯⣿⣿⣷⣾⣿⣷⡄⠄
 ⠄⠄⠄⠄⠄⢻⠏⣼⣿⣿⣿⣿⡿⣿⣿⣏⢾⠇⠄
 ⠄⠄⠄⠄⠄⠈⡼⠿⠿⢿⣿⣦⡝⣿⣿⣿⠷⢀⠄
 ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ⠄⠄⡔⠙⠢⡀⠄⠄⠄⢀⠼⠅⠈⢂⠄⠄⠄⠄
 ⠄⠄⡌⠄⢰⠉⢙⢗⣲⡖⡋⢐⡺⡄⠈⢆⠄⠄⠄
 ⠄⡜⠄⢀⠆⢠⣿⣿⣿⣿⢡⢣⢿⡱⡀⠈⠆⠄⠄
 ⠄⠧⠤⠂⠄⣼⢧⢻⣿⣿⣞⢸⣮⠳⣕⢤⡆⠄⠄
 ⢺⣿⣿⣶⣦⡇⡌⣰⣍⠚⢿⠄⢩⣧⠉⢷⡇⠄⠄
 ⠘⣿⣿⣯⡙⣧⢎⢨⣶⣶⣶⣶⢸⣼⡻⡎⡇⠄⠄
 ⠄⠘⣿⣿⣷⡀⠎⡮⡙⠶⠟⣫⣶⠛⠧⠁⠄⠄⠄
 ⠄⠄⠘⣿⣿⣿⣦⣤⡀⢿⣿⣿⣿⣄⠄⠄⠄⠄⠄
 ⠄⠄⠄⠈⢿⣿⣿⣿⣿⣷⣯⣿⣿⣷⣾⣿⣷⡄⠄
 ⠄⠄⠄⠄⠄⢻⠏⣼⣿⣿⣿⣿⡿⣿⣿⣏⢾⠇⠄
 ⠄⠄⠄⠄⠄⠈⡼⠿⠿⢿⣿⣦⡝⣿⣿⣿⠷⢀⠄
 ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => ": ⠄⠄⠄⠄ ⠄⠄⠄⠄ ⠄⠄⠄⠄
 ⠄⠄⡔⠙⠢⡀⠄⠄⠄⢀⠼⠅⠈⢂⠄⠄⠄⠄
 ⠄⠄⡌⠄⢰⠉⢙⢗⣲⡖⡋⢐⡺⡄⠈⢆⠄⠄⠄
 ⠄⡜⠄⢀⠆⢠⣿⣿⣿⣿⢡⢣⢿⡱⡀⠈⠆⠄⠄
 ⠄⠧⠤⠂⠄⣼⢧⢻⣿⣿⣞⢸⣮⠳⣕⢤⡆⠄⠄
 ⢺⣿⣿⣶⣦⡇⡌⣰⣍⠚⢿⠄⢩⣧⠉⢷⡇⠄⠄
 ⠘⣿⣿⣯⡙⣧⢎⢨⣶⣶⣶⣶⢸⣼⡻⡎⡇⠄⠄
 ⠄⠘⣿⣿⣷⡀⠎⡮⡙⠶⠟⣫⣶⠛⠧⠁⠄⠄⠄
 ⠄⠄⠘⣿⣿⣿⣦⣤⡀⢿⣿⣿⣿⣄⠄⠄⠄⠄⠄
 ⠄⠄⠄⠈⢿⣿⣿⣿⣿⣷⣯⣿⣿⣷⣾⣿⣷⡄⠄
 ⠄⠄⠄⠄⠄⢻⠏⣼⣿⣿⣿⣿⡿⣿⣿⣏⢾⠇⠄
 ⠄⠄⠄⠄⠄⠈⡼⠿⠿⢿⣿⣦⡝⣿⣿⣿⠷⢀⠄
 ⠄⠄⠄⠄⠄⠄⡇⠄⠄⠄⠈⠻⠇⠿⠋⠄⠄⢘⡆
 ⠄⠄⠄⠄⠄⠄⠱⣀⠄⠄⠄⣀⢼⡀⠄⢀⣀⡜⠄
 ⠄⠄⠄⠄⠄⠄⠄⢸⣉⠉⠉⠄⢀⠈⠉⢏⠁⠄⠄
 ⠄⠄⠄⠄⠄⠄⡰⠃⠄⠄⠄⠄⢸⠄⠄⢸⣧⠄⠄
 ⠄⠄⠄⠄⠄⣼⣧⠄⠄⠄⠄⠄⣼⠄⠄⡘⣿⡆⠄
 ⠄⠄⠄⢀⣼⣿⡙⣷⡄⠄⠄⠄⠃⠄⢠⣿⢸⣿⡀
 ⠄⠄⢀⣾⣿⣿⣷⣝⠿⡀⠄⠄⠄⢀⡞⢍⣼⣿⠇
 ⠄⠄⣼⣿⣿⣿⣿⣿⣷⣄⠄⠄⠠⡊⠴⠋⠹⡜⠄
 ⠄⠄⣿⣿⣿⣿⣿⣿⣿⣿⡆⣤⣾⣿⣿⣧⠹⠄⠄
 ⠄⠄⢿⣿⣿⣿⣿⣿⣿⣿⢃⣿⣿⣿⣿⣿⡇⠄⠄
 ⠄⠄⠐⡏⠉⠉⠉⠉⠉⠄⢸⠛⠿⣿⣿⡟⠄⠄⠄
 ⠄⠄⠄⠹⡖⠒⠒⠒⠒⠊⢹⠒⠤⢤⡜⠁⠄⠄⠄
 ⠄⠄⠄⠄⠱⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⠄⠄⠄⠄"]);
        } elseif ($msgOrig == "هلیکوپتر") {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
█▬▬▬.◙.▬▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬ 
╬═╬  
╬═╬                                  
╬═╬                    
╬═╬     
╬═╬☻/  
╬═╬/▌  
╬═╬/  \
']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
█▬▬▬.◙.▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬ 
╬═╬  
╬═╬                                  
╬═╬                    
╬═╬☻/  
╬═╬/▌  
╬═╬/  \
╬═╬
']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
█▬▬.◙.▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬ 
╬═╬  
╬═╬                                  
╬═╬☻/  
╬═╬/▌  
╬═╬/  \
╬═╬
╬═╬
']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
█▬.◙.▬▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬ 
╬═╬  
╬═╬☻/  
╬═╬/▌  
╬═╬/  \
╬═╬
╬═╬
╬═╬
']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
█▬▬.◙.▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬ 
╬═╬☻/  
╬═╬/▌  
╬═╬/  \
╬═╬
╬═╬ 
╬═╬
╬═╬
']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
█▬▬▬.◙.▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬☻/  
╬═╬/▌  
╬═╬/  \
╬═╬
╬═╬ 
╬═╬
╬═╬ 
╬═╬
']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
█▬▬.◙.▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═ 
╬═╬ 
╬═╬
╬═╬
╬═╬
╬═╬ 
╬═╬
╬═╬ 
╬═╬
']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
█▬.◙.▬▬█
═▂▄▄▓▄▄▂ 
◢◤ █▀▀████▄▄▄▄◢◤ 
█▄ █ █▄ ███▀▀▀▀▀▀▀╬ 
◥█████◤ 
══╩══╩═
']);
        } elseif ($msgOrig == 'قلبز') {


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           ❤️                  ❤️
        ❤️  ❤️          ❤️  ❤️
    ❤️          ❤️  ❤️          ❤️
       ❤️           ❤️           ❤️
           ❤️                    ❤️
               ❤️            ❤️
                   ❤️    ❤️
                        ❤️
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           🧡                  🧡
        🧡  🧡          🧡  🧡
    🧡          🧡  🧡          🧡
       🧡           🧡           🧡
           🧡                    🧡
               🧡            🧡
                   🧡    🧡
                        🧡
.']);


          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           💛                  💛
        💛  💛          💛  ??
    💛          💛  💛          💛
       💛           💛           💛
           💛                    💛
               💛            💛
                   💛    💛
                        💛
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           💚                  💚
        💚  💚          💚  💚
    💚          💚  💚          💚
       💚           💚           💚
           💚                    💚
               💚            💚
                   💚    ??
                        💚
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           💙                  💙
        💙  💙          💙  💙
    💙          💙  💙          💙
       💙           💙           💙
           💙                    💙
               💙            💙
                   💙    💙
                        💙
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           💜                  💜
        💜  💜          💜   💜
    💜          💜  💜          💜
       💜           💜           💜
           💜                    💜
               ??            💜
                   💜    💜
                        💜
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           🖤                  🖤
        🖤  🖤          🖤   🖤
    🖤          🖤  🖤          🖤
       🖤           🖤           🖤
           🖤                    🖤
               🖤            🖤
                   🖤    🖤
                        🖤
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           🤍                  🤍
        🤍  🤍          🤍   🤍
    🤍          🤍  🤍          🤍
       🤍           🤍           🤍
           🤍                    🤍
               🤍            🤍
                   🤍    🤍
                        🤍
.']);


          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           💗                  💗
        💗  💗          💗   💗
    💗          💗  💗          💗
       💗           💗           💗
           💗                    💗
               💗            💗
                   💗    💗
                        💗
.']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           ❤️                  ❤️
        ❤️  ❤️          ❤️  ❤️
    ❤️          ❤️  ❤️          ❤️
       ❤️           ❤️           ❤️
           ❤️                    ❤️
               ❤️            ❤️
                   ❤️    ❤️
                        ❤️
.']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           🧡                  🧡
        🧡  🧡          🧡  🧡
    🧡          🧡  🧡          🧡
       🧡           🧡           🧡
           🧡                    🧡
               🧡            🧡
                   🧡    🧡
                        🧡
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           💛                  💛
        💛  💛          💛  💛
    💛          💛  💛          💛
       💛           💛           💛
           💛                    💛
               💛            💛
                   💛    💛
                        💛
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           💚                  💚
        💚  💚          💚  💚
    💚          💚  💚          💚
       💚           💚           💚
           💚                    💚
               💚            💚
                   💚    💚
                        💚
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           💙                  💙
        💙  💙          💙  💙
    💙          💙  💙          💙
       💙           💙           💙
           💙                    💙
               💙            💙
                   💙    💙
                        💙
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           💜                  💜
        💜  💜          💜   💜
    💜          💜  💜          💜
       💜           💜           💜
           💜                    💜
               💜            💜
                   💜    💜
                        💜
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           ❤️                  ❤️
        ❤️  ❤️          ❤️  ❤️
    ❤️          ❤️  ❤️          ❤️
       ❤️           ❤️           ❤️
           ❤️                    ❤️
               ❤️            ❤️
                   ❤️    ❤️
                        ❤️
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           🧡                  🧡
        🧡  🧡          🧡  🧡
    🧡          🧡  🧡          🧡
       🧡           🧡           🧡
           🧡                    🧡
               🧡            🧡
                   🧡    🧡
                        🧡
.']);


          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '.           💛                  💛
        💛  💛          💛  💛
    💛          💛  💛          💛
       💛           💛           💛
           💛                    💛
               💛            💛
                   💛    💛
                        💛

.']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '💜']);
        } elseif ($msgOrig == 'پلیس' or $msgOrig == 'پلیسک' or $msgOrig == 'police') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔴🔴ＰＯＬＩＣＥ🔵🔵']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔵🔵ＰＯＬＩＣＥ🔴🔴']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔴🔴ＰＯＬＩＣＥ🔵🔵']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔵🔵ＰＯＬＩＣＥ🔴🔴']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔴🔴ＰＯＬＩＣＥ🔵🔵']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔵🔵ＰＯＬＩＣＥ🔴🔴']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔴🔴ＰＯＬＩＣＥ🔵🔵']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔵🔵ＰＯＬＩＣＥ🔴🔴']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔴🔴ＰＯＬＩＣＥ🔵🔵']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔵🔵ＰＯＬＩＣＥ🔴🔴']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔴🔴ＰＯＬＩＣＥ🔵🔵']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔵🔵ＰＯＬＩＣＥ🔴🔴']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔴🔴ＰＯＬＩＣＥ🔵🔵']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔵🔵ＰＯＬＩＣＥ🔴🔴']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔴🔴ＰＯＬＩＣＥ🔵🔵']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔵🔵ＰＯＬＩＣＥ🔴🔴']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔴🔴ＰＯＬＩＣＥ🔵🔵']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔵🔵ＰＯＬＩＣＥ🔴🔴']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔴🔴ＰＯＬＩＣＥ🔵🔵']);
          yield $this->sleep(1);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🔵🔵ＰＯＬＩＣＥ🔴🔴']);
        } elseif ($msgOrig == 'حملههه') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
 /﹋\
(҂`_´)
<,︻╦╤─ ҉ -
/﹋\‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌

‌ /﹋\
(҂`_´)
<,︻╦╤─ ҉ -
/﹋\‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌
']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
/﹋\
(҂`_´)
<,︻╦╤─ ҉ - --
/﹋\‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌

‌ /﹋\
(҂`_´)
<,︻╦╤─ ҉ - --
/﹋\‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌
']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
/﹋\
(҂`_´)
<,︻╦╤─ ҉ - ----
/﹋\‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌

‌ /﹋\
(҂`_´)
<,︻╦╤─ ҉ - ----
/﹋\‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌
']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
/﹋\
(҂`_´)
<,︻╦╤─ ҉ - -----💥
/﹋\‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌

‌ /﹋\
(҂`_´)
<,︻╦╤─ ҉ - -----💥
/﹋\‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌‌
']);
        } elseif ($msgOrig == 'هزارپا') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "  ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ╚═(███)═╝
  ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ╚═(███)═╝
╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "  ╚═(███)═╝
 ╚═(███)═╝
╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "   ╚═(███)═╝
  ╚═(███)═╝
 ╚═(███)═╝
╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "   ╚═(███)═╝
   ╚═(███)═╝
  ╚═(███)═╝
 ╚═(███)═╝
╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "  ╚═(███)═╝
   ╚═(███)═╝
   ╚═(███)═╝
  ╚═(███)═╝
 ╚═(███)═╝
╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
   ╚═(███)═╝
  ╚═(███)═╝
 ╚═(███)═╝
╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
   ╚═(███)═╝
  ╚═(███)═╝
 ╚═(███)═╝
╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "╚═(███)═╝
╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
   ╚═(███)═╝
  ╚═(███)═╝
 ╚═(███)═╝
╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "╚═( ͡° ͜ʖ ͡°)═╝

╚═(███)═╝
╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
   ╚═(███)═╝
  ╚═(███)═╝
 ╚═(███)═╝
╚═(███)═╝
 ╚═(███)═╝
  ╚═(███)═╝
  ╚═(███)═╝
   ╚═(███)═╝
     ╚(███)╝
      ╚(██)╝
          (█)"]);
        } elseif ($msgOrig == 'لبخند بزن') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
╔══╗░░░░╔╦╗░░╔═════╗
║╚═╬════╬╣╠═╗║░▀░▀░║
╠═╗║╔╗╔╗║║║╩╣║╚═══╝║
╚══╩╝╚╝╚╩╩╩═╝╚═════╝
']);
        } elseif ($msgOrig == 'دوستت دارم' or $msgOrig == 'قلبمی') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
  ▀██▀─▄███▄─▀██─██▀██▀▀█
  ─██─███─███─██─██─██▄█']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
  ─██─▀██▄██▀─▀█▄█▀─██▀█
  ▄██▄▄█▀▀▀─────▀──▄██▄▄█']);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '
  ▀██▀─▄███▄─▀██─██▀██▀▀█
  ─██─███─███─██─██─██▄█
  ─██─▀██▄██▀─▀█▄█▀─██▀█
  ▄██▄▄█▀▀▀─────▀──▄██▄▄█']);
        } elseif ($msgOrig == 'زنبور2' or $msgOrig == 'viz2') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏥__________🏃‍♂️______________🐝']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏥______🏃‍♂️_______🐝']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏥______🏃‍♂️_____🐝']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏥___🏃‍♂️___🐝']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏥_🏃‍♂️_🐝']);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'در رفت عه☹️??']);
        } elseif ($msgOrig == 'بزنم نفت در بیاد' or $msgOrig == 'تتلو') {
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
⏭▶️⏸⏮
"]);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
یا اینوری یا اونوری ، یا بیکینی یا روسری
چشم چشم دو ابرو ، صورتش گیلاسه

"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
پایین ولی یه گردو ، (چرا؟) هندونه نگفتم ریا نشه
یه آذر ماهیِ کرمو ، یا یه مردادیِ حیوون

"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
فرقی نداره فقط بگو ، کم بماله میمون
بگو تنگ و کوتاه بپوشه ، یه جور که همه بشن زوم

"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
بگو وسط جمع یهو یک دو سه بگو بپَر روم
یک دو سه بگو بپَر روم ، من یه سلبریتیِ کم رو
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
اونم که بکَن بود ، حالا که فازِ بکَنه ، بکَن بکَن بکَن زود
پس بکَن بکَن بکَن زود
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
آا ، گوششو انداختی بیرون گوشایِ من سرخ شدش
دستِ خودم نیست دیگه این ، مغزِ حروم کنترلش
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
فکرای س*سی که اینو هی بگیر *
من مالِ تو رو فشار میدم ، تو مالِ منو بخو*ش
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
من تو رو هستم زیاد ، نونِ شبه لوندیات
بزنم پنچر شی ، یا بزنم نفت در بیاد؟
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
بیاین بیاین بیاین بیاین …
بیا با هم پرواز کنیم که من دوس دارم کفتر زیاد
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
صبح تا شب پارتی کنیم شب بزنم نفت در بیاد
بعد بیا با هم بریم حموم ، بزنیم کف در دیوار
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
هر چی بیشتر وَر بری باهام ، میکِشم کمتر سیگار
بیا با هم داگی رو استایل کنیم
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
با این حجمِ باسن میشه خاکی سو آسفالت کنیم
بیا با هم کُشتی بگیریم همو بارانداز کنیم
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
خوب و کمر پُر منم ، چشم و چال انداز تویی
بیا با هم فا*ینگ رو استارت کنیم
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
من تو رو هستم زیاد ، نونِ شبه لوندیات
بزنم پنچر شی ، یا بزنم نفت در بیاد
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "

بَه ، آقا مبارکا باشه ، بزنید نفت در بیاد
(برو بالا بالا لالا)
تولید انرژی هم میکنین
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
مبارکه آقا مبارکه ، بزنید نفت در بیاد
گرفتن شاخکام از تو فرکانسای سک*ی
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
و الآن آجبی و داداشی نداره رو ما اثر
نگیر فازِ فرند و فامیل رو ما اصاً
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
فقط شیرجه بزن روم با عسل (با عسل و ندا)
حاجی ، گورِ بابا همسایتون ، کو* لق فامیلات
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
آشنا ماشنا نگا*دم ، بگو تنها بیاد
گور بابا خالم اینا ، کو* لق دائیات
"]);
          yield $this->sleep(1);
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
من زدم نفت در بیاد ،دختر دایی رو پا میداد
بزنید نفت در بیاد
"]);
        } elseif ($msgOrig == 'koskhol' or $msgOrig == 'کصخل') {
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'کص خل']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'ک']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'ص']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'خ']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'ل']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'ک_____ص_____خ_____ل']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'ک____ص____خ____ل']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'ک___ص___خ___ل']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'ک__ص__خ__ل']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'ک_ص_خ_ل']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'کص خل']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'ک_____ص_____خ_____ل']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'ک_ص_خ_ل']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'کص']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => 'خل']);

          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => '💥تو یه کصخلی لنتی💥']);
        } elseif ($msgOrig == 'هلو' or  $msgOrig == 'بکن تو کونش' or $msgOrig == 'بکنیمش') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'messages' => 'B==========D🍑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B========🍑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B=====🍑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B=======🍑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B==========🍑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B=======🍑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B====🍑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B=🍑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B===🍑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B======🍑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B=========🍑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'B==========D💦💦🍑']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => 'کونش گذاشتیم بمولا😐']);
        } elseif ($msgOrig == 'زنبور' or $msgOrig == 'vizviz') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂??_______🏃😱😳🚶‍♂________🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂😥_______________🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂😥______________🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂😥_____________🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂😥____________🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂??___________🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂😥__________🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂😥_________🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂😥________🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂😥_______🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂😥______🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂😥____🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂😥___🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂??__🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🏃‍♂😥_🐝']);

          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '👨‍🦽😭🥺']);
        }
        //-------------------- End Of Fun ---------------------
        // Del
        if ($msgOrig == "rem" && $type3 == "user") {
          yield $this->messages->deleteHistory([
            "just_clear" => true,
            "revoke" => true,
            "peer" => $peer,
            "max_id" => $messageId,
            "min_date" => 0,
            "max_date" => 0,
          ]);
        }
        if ($msgOrig == "rem1" && $type3 == "user") {
          for ($n = 0; $n <= 80; $n++) {
            yield $this->messages->deleteMessages(["id" => [($replyToId - $n)], "just_clear" => false, "revoke" => true]);
          }
         }
           if (preg_match('/(جون|ok)/ius', $msgOrig) && $replyToId) {
           if ($type3 == 'user') {
            $get = yield $this->messages->getMessages([
              'channel' => $peer,
              'id'      => [$replyToId]
            ])['messages'][0];
            if (isset($get['media']['photo'])) {
              yield $this->downloadToFile($get, $x = rand() . '.jpg');
              yield $this->messages->sendMedia([
                'peer'  => 'me',
                'media' => [
                  '_'          => 'inputMediaUploadedDocument',
                  'force_file' => false,
                  'file'       => $x,
                  'attributes' => [
                    ['_' => 'documentAttributeFilename', 'file_name' => $x]
                  ],
                ]
              ]);
              unlink($x);
            }
          }
        }

        if ($msgOrig == 'delenemy' or $msgOrig == '/delenemy' or $msgOrig == '!delenemy'  or $msgOrig == 'حذف انمی') {
          if ($type3 == 'supergroup' or $type3 == 'chat') {
            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messageId]]);
            $messag1 = $gmsg['messages'][0]['reply_to']['reply_to_msg_id'];
            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
            $messag = $gms['messages'][0]['from_id']['user_id'];
            if (in_array($messag, $data['enemies'])) {
              $k = array_search($messag, $data['enemies']);
              unset($data['enemies'][$k]);
              file_put_contents("data.json", json_encode($data));

              yield  $this->contacts->unblock(['id' => $messag]);

              yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴜsᴇʀ [ᴜsᴇʀ](tg://user?id=$messag) ᴅᴇʟᴇᴛᴇᴅ ғʀᴏᴍ ᴇɴᴇᴍʏ ʟɪsᴛ !", 'parse_mode' => 'MarkDown']);
            } else {
              yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴛʜɪs [ᴜsᴇʀ](tg://user?id=$messag) ɪs ɴᴏᴛ ɪɴ ᴛʜᴇ ᴇɴᴇᴍʏ ʟɪsᴛ !", 'parse_mode' => 'MarkDown']);
            }
          }
        }

        if ($msgOrig == 'delenemy' or $msgOrig == '/delenemy' or $msgOrig == '!delenemy'  or $msgOrig == 'حذف انمی' and $type3 == 'user') {
          if (in_array($peer, $data['enemies'])) {
            $k = array_search($peer, $data['enemies']);
            unset($data['enemies'][$k]);
            file_put_contents("data.json", json_encode($data));

            yield  $this->contacts->unblock(['id' => $peer]);

            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴜsᴇʀ [ᴜsᴇʀ](tg://user?id=$peer) ᴅᴇʟᴇᴛᴇᴅ ғʀᴏᴍ ᴇɴᴇᴍʏ ʟɪsᴛ !", 'parse_mode' => 'MarkDown']);
          } else {
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴛʜɪs [ᴜsᴇʀ](tg://user?id=$peer) ɪs ɴᴏᴛ ɪɴ ᴛʜᴇ ᴇɴᴇᴍʏ ʟɪsᴛ !", 'parse_mode' => 'MarkDown']);
          }
        }


        // Set
        if ($msgOrig == 'setenemy' or $msgOrig == '/setenemy' or $msgOrig == '!setenemy'  or $msgOrig == 'ست انمی') {
          if ($type3 == 'supergroup' or $type3 == 'chat') {
            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messageId]]);
            $messag1 = $gmsg['messages'][0]['reply_to']['reply_to_msg_id'];
            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
            $messag = $gms['messages'][0]['from_id']['user_id'];

            if (!in_array($messag, $data['enemies'])) {
              if ($messag != $admin) {
                $data['enemies'][] = $messag;
                file_put_contents("data.json", json_encode($data));
              }
              yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴜsᴇʀ [ᴜsᴇʀ](tg://user?id=$messag) ɴᴏᴡ ɪɴ ᴇɴᴇᴍʏ ʟɪsᴛ !", 'parse_mode' => 'MarkDown']);
            } else {

              yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ᴛʜɪs [ᴜsᴇʀ](tg://user?id=$messag) ᴡᴀs ɪɴ ᴇɴᴇᴍʏ ʟɪsᴛ !", 'parse_mode' => 'MarkDown']);
            }
          }
        }
        if ($msgOrig == 'setenemy' or $msgOrig == '/setenemy' or $msgOrig == '!setenemy'  or $msgOrig == 'ست انمی' and $type3 == 'user') {

          if (!in_array($peer, $data['enemies'])) {

            $data['enemies'][] = $peer;
            file_put_contents("data.json", json_encode($data));

            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴜsᴇʀ [ᴜsᴇʀ](tg://user?id=$peer) ɴᴏᴡ ɪɴ ᴇɴᴇᴍʏ ʟɪsᴛ !", 'parse_mode' => 'MarkDown']);
          } else {

            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴛʜɪs [ᴜsᴇʀ](tg://user?id=$peer) ᴡᴀs ɪɴ ᴇɴᴇᴍʏ ʟɪsᴛ !", 'parse_mode' => 'MarkDown']);
          }
        }

        // List
        elseif (preg_match("/^[\/\#\!]?(enemylist|انمی لیست)$/si", $msgOrig)) {
          if (count($data['enemies']) > 0) {
            $txxxt = "» ᴇɴᴇᴍʏ ʟɪsᴛ :
";
            $counter = 1;
            foreach ($data['enemies'] as $ene) {
              $mee = yield $this->get_full_info($ene);
              $me = $mee['User'];
              $me_name = $me['first_name'];
              $me_id = $me['id'];
              $txxxt .= "• $counter » [$me_name](tg://user?id=$me_id) \n";
              $counter++;
            }
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "$txxxt", 'parse_mode' => 'MarkDown']);
          } else {
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴇɴᴇᴍʏ ʟɪsᴛ ɪs ᴇᴍᴘᴛʏ !", 'parse_mode' => 'MarkDown']);
          }
        }
        // Clean List
        elseif (preg_match("/^[\/\#\!]?(cleanenemylist|حذف انمی لیست)$/si", $msgOrig)) {
          $data['enemies'] = [];
          file_put_contents("data.json", json_encode($data));
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲ ᴇɴᴇᴍʏ ʟɪsᴛ ɴᴏᴡ ɪs ᴇᴍᴘᴛʏ !", 'parse_mode' => 'MarkDown']);
        } elseif ($msgOrig == 'ping' or $msgOrig == '/ping' or $msgOrig == 'پینگ') {
          $load = sys_getloadavg();
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "🆂🅴??🆅🅴🆁 🅱🅾🆃: **$load[0]** =)", 'parse_mode' => 'MarkDown']);
        } elseif ($msgOrig == 'مصرف'  or $msgOrig == 'usage') {
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          yield  $this->messages->sendMessage(['peer' => $peer, 'id' => $messageId, 'message' => "➲Mᴇᴍᴏʀʏ Usɪɴɢ : **$mem_using** ᴍɢ", 'parse_mode' => 'MarkDown']);
        } elseif ($msgOrig == 'وضعیت' or $msgOrig == 'status') {
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => " ɢᴇᴛᴛɪɴɢ sᴛᴀᴛᴜs . . . !", 'parse_mode' => 'MarkDown']);
            $partmode = file_get_contents("part.txt");
            $timename1 = file_get_contents("timename1.txt");
            $timebio1 = file_get_contents("timebio1.txt");
            $timebio2 = file_get_contents("timebio2.txt");
            $bioen = file_get_contents("bioen.txt");
            $biofa = file_get_contents("biofa.txt");
            $timepic = file_get_contents("timepic.txt");
            $hashtagmode = file_get_contents("hashtag.txt");
            $timename2 = file_get_contents("timename2.txt");
            $mentionmode = file_get_contents("mention.txt");
            $boldmode = file_get_contents("bold.txt");
            $italicmode = file_get_contents("italic.txt");
            $underlinemode = file_get_contents("underline.txt");
            $deletedmode = file_get_contents("deleted.txt");
            $mention2mode = file_get_contents("mention2.txt");
            $codingmode = file_get_contents("coding.txt");
            $onlinemode = file_get_contents("online.txt");
            $reversemode = file_get_contents("reversemode.txt");
            $typing = $data['typing'];
            $game = $data['game'];
            $History = $data['History'];
            $mutepv = $data['mutepv'];
            $voice = $data['voice'];
            $video = $data['video'];
            $lockpv = $data['lockpv'];
            $lockpv = $data['lockpv'];
            $poker = $data['poker'];
            $markread = $data['markread'];
            $echo = $data['echo'];
            $tas = $data['tas'];
            $lockgp = $data['lockgp'];
            $gamepv = $data['gamepv'];
            $pvtyping = $data['pvtyping'];
            $photo = $data['photo'];
            $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
            $load = sys_getloadavg();
            $status = "
• ┅┅━━━━ • ━━━━┅┅ •
➲ sᴛᴀᴛᴜs ɪs : 
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴘᴀʀᴛ ᴍᴏᴅᴇ : $partmode
➲ ʙᴏʟᴅ ᴍᴏᴅᴇ : $boldmode
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴛɪᴍᴇ ɴᴀᴍᴇ1 : $timename1
➲ ᴛɪᴍᴇ ʙɪᴏ1 : $timebio1
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴛᴀs ᴍᴏᴅᴇ : $tas
➲ ᴛɪᴍᴇᴘɪᴄ : $timepic
• ┅┅━━━━ • ━━━━┅┅ •
➲ 𝙱𝙸𝙾𝙴𝙽 : $bioen
➲ ʜɪsᴛᴏʀʏ : $History
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴍᴜᴛᴇᴘᴠ : $mutepv
➲ 𝙱𝙸𝙾𝙵𝙰 : $biofa
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴛɪᴍᴇ ɴᴀᴍᴇ2 : $timename2
➲ ᴛɪᴍᴇ ʙɪᴏ2 : $timebio2
• ┅┅━━━━ • ━━━━┅┅ •
➲ ɪᴛᴀʟɪᴄ ᴍᴏᴅᴇ : $italicmode
➲ ᴄᴏᴅɪɴɢ ᴍᴏᴅᴇ : $codingmode
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴅᴇʟᴇᴛᴇᴅ ᴍᴏᴅᴇ : $deletedmode
• ┅┅━━━━ • ━━━━┅┅ •
➲ ʜᴀsʜᴛᴀɢ ᴍᴏᴅᴇ : $hashtagmode
➲ ᴍᴇɴᴛɪᴏɴ ᴍᴏᴅᴇ : $mentionmode
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴍᴇɴᴛɪᴏɴ2 ᴍᴏᴅᴇ : $mention2mode
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴜɴᴅᴇʀʟɪɴᴇ ᴍᴏᴅᴇ : $underlinemode
➲ ᴏɴʟɪɴᴇ ᴍᴏᴅᴇ : $onlinemode
• ┅┅━━━━ • ━━━━┅┅ •
➲ ʀᴇᴠᴇʀsᴇ ᴍᴏᴅᴇ : $reversemode
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴀᴄᴛɪᴏɴ ᴛʏᴘᴇ : $typing
➲ ᴀᴄᴛɪᴏɴ ɢᴀᴍᴇ : $game
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴀᴄᴛɪᴏɴ ᴠᴏɪᴄᴇ : $voice
➲ ᴀᴄᴛɪᴏɴ ᴠɪᴅᴇᴏ : $video
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴘɪɴɢ : $load[0]
➲ ᴍᴇᴍᴏʀʏ ᴜsɪɴɢ : $mem_using ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •
";
            $this->messages->sendMessage([
              'peer' => $peer,
              'message' => "$status",
              'parse_mode' => 'MarkDown', 'reply_to_msg_id' => $messageId
            ]);
          }
        } elseif (preg_match("/^[\/\#\!]?(user) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(user) (.*)$/si", $msgOrig, $m);
          $link = $m[2];
          yield  $this->messages->editMessage([
            'peer' => $peer,
            'id' => $messageId,
            'message' => "» [ᴄʟɪᴄᴋ ʜᴇʀᴇ](tg://user?id=$link) !",
            'parse_mode' => 'MarkDown'
          ]);
        } elseif (preg_match("/^[\/\#\!]?(setanswer) (.*)$/si", $msgOrig)) {
          $ip4 = trim(str_replace("/setanswer ", "", $msgOrig));
          $ip3 = trim(str_replace("!setanswer ", "", $ip4));
          $ip2 = trim(str_replace("#setanswer ", "", $ip3));
          $ip1 = trim(str_replace("\setanswer ", "", $ip2));
          $ip = trim(str_replace("setanswer ", "", $ip1));
          $ip = explode("|", $ip . "|||||");
          $txxt = trim($ip[0]);
          $answeer = trim($ip[1]);
          if (!isset($data['answering'][$txxt])) {
            $data['answering'][$txxt] = $answeer;
            file_put_contents("data.json", json_encode($data));
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "کلمه جدید به لیست پاسخ شما اضافه شد👌🏻"]);
          } else {
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "این کلمه از قبل موجود است :/"]);
          }
        } elseif (preg_match("/^[\/\#\!]?(delanswer) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(delanswer) (.*)$/si", $msgOrig, $msgOrig);
          $txxt = $msgOrig[2];
          if (isset($data['answering'][$txxt])) {
            unset($data['answering'][$txxt]);
            file_put_contents("data.json", json_encode($data));
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "کلمه مورد نظر از لیست پاسخ حذف شد👌🏻"]);
          } else {
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "این کلمه در لیست پاسخ وجود ندارد :/"]);
          }
        } elseif (preg_match("/^[\/\#\!]?(clean answers)$/si", $msgOrig)) {
          $data['answering'] = [];
          file_put_contents("data.json", json_encode($data));
          yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "AnswerList Is Now Empty!"]);
        } elseif (preg_match("/^[\/\#\!]?(answerlist)$/si", $msgOrig)) {
          if (count($data['answering']) > 0) {
            $txxxt = "لیست پاسخ ها :
";
            $counter = 1;
            foreach ($data['answering'] as $k => $ans) {
              $txxxt .= "$counter: $k => $ans \n";
              $counter++;
            }
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => $txxxt]);
          } else {
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "پاسخی وجود ندارد!"]);
          }
        } elseif (preg_match("/^[\/\#\!]?(upload) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(upload) (.*)$/si", $msgOrig, $a);
          $oldtime = time();
          $link = $a[2];
          $ch = curl_init($link);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          curl_setopt($ch, CURLOPT_HEADER, TRUE);
          curl_setopt($ch, CURLOPT_NOBODY, TRUE);
          $data = curl_exec($ch);
          $size1 = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
          curl_close($ch);
          $size = round($size1 / 1024 / 1024, 1);
          if ($size <= 150) {
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '🌵 Please Wait...
💡 FileSize : ' . $size . 'MB']);
            $path = parse_url($link, PHP_URL_PATH);
            $filename = basename($path);
            copy($link, "files/$filename");
            yield  $this->messages->sendMedia([
              'peer' => $peer,
              'media' => [
                '_' => 'inputMediaUploadedDocument',
                'file' => "files/$filename",
                'attributes' => [[
                  '_' => 'documentAttributeFilename',
                  'file_name' => "$filename"
                ]]
              ],
              'message' => "🔖 Name : $filename
💠 [Your File !]($link)
💡 Size : " . $size . 'MB',
              'parse_mode' => 'Markdown'
            ]);
            $t = time() - $oldtime;
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "✅ Uploaded ($t" . 's)']);
            unlink("files/$filename");
          } else {
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '⚠️ خطا : حجم فایل بیشتر 150MB است!']);
          }
        } elseif (preg_match("/^[\/\#\!]?(آمار کرونا) (.*)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(آمار کرونا) (.*)$/i", $msgOrig, $p);
          $cron = $p[2];
          $linkcrona = json_decode(file_get_contents("https://api.codebazan.ir/corona/?type=country&country=$cron"), true);
          $link22 = $linkcrona["result"];
          $crona1 = $link22['last_updated'];
          $crona2 = $link22['continent'];
          $crona3 = $link22['country'];
          $crona4 = $link22['cases'];
          $crona5 = $link22['deaths'];
          $crona6 = $link22['recovered'];
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => " 
📊 آخرین    آمار    کرونا 💻
$crona1
 🌎
$crona2 
کشور🚩: 
$crona3 
امار مبتلایان⚠️: 
$crona4 
امار مرگ و میر🔴: 
$crona5 
امار بهبود یافته🟢 : 
$crona6 
        "]);
        } 
           elseif (preg_match("/^[\/\#\!]?(tag)(.*)$/i", $msgOrig)) {                                
$chat = yield $this->getPwrChat($peer);                                
$chats = $chat['participants'];                                
while (sizeof($chats) >= 100) {                                    
while (sizeof($chats) >= 100) {                                        
$spl = $chats;                                        
$Safa = false;                                        
$chats = array_splice($spl, 4);                                        
foreach ($spl as $number => $up) {                                            
$id = $up['user']['id'];                                            
$Safa .= $number + 1 . "-[$id](tg://user?id=$id), ";                                       
}                                        
       yield $this ->messages->sendMessage([                                          
'peer' => $peer,                                            
'message' => "آنلاین باش چت کنیم 😉💦: ($Safa)",                                            
'parse_mode' => 'Markdown'                                       
]);                                    
}                                   
$Safa = false;                                    
foreach ($chats as $number => $up) {                                        
$id = $up['user']['id'];                                                                    
if ($up['user']['type'] == "user")                                            
$Safa .= $number + 1 . "-[$id](tg://user?id=$id) ";                                    
}                                    
       yield $this ->messages->sendMessage([                                        
'peer' => $peer,                                       
'message' => "بیا بالا حوصلمون سر رفت ☹️: \n($Safa)",                                        
'parse_mode' => 'Markdown'                                    
]);                                  
return;                              
}                           
}
        elseif ($msgOrig == '/die;') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => '!..!']);
          yield  $this->restart();
          die;
        }
         if($msgOrig == 'number' or $msgOrig == 'شمارت'){
if($type3 == 'supergroup' or $type3 == 'chat'){
$gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messageId]]);
$messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
$gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
$messag = $gms['messages'][0]['from_id'];
$iduser = $messag;
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "» sᴇᴀʀᴄʜɪɴɢ ғᴏʀ ɴᴜᴍʙᴇʀ . . . ! «"]);
file_put_contents("msgid25.txt",$messageId);
file_put_contents("peer5.txt","$peer");
file_put_contents("id.txt","$messag");
yield $this->messages->sendMessage(['peer' => "@golabinumbot", 'message' => "🔍جستجوی شماره تلفن"]);
yield $this->messages->sendMessage(['peer' => "@golabinumbot", 'message' => "$messag"]);
} else {
if($type3 == 'user'){
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "» sᴇᴀʀᴄʜɪɴɢ ғᴏʀ ɴᴜᴍʙᴇʀ . . . ! «"]);
file_put_contents("msgid25.txt",$messageId);
file_put_contents("peer5.txt","$peer");
file_put_contents("id.txt","$peer");
yield $this->messages->sendMessage(['peer' => "@golabinumbot", 'message' => "🔍جستجوی شماره تلفن"]);
yield $this->messages->sendMessage(['peer' => "@golabinumbot", 'message' => "$peer"]);

}
}
}else{
if(preg_match("/^[\/\#\!]?(شماره ی|num) (.*)$/si", $msgOrig)){
preg_match("/^[\/\#\!]?(شماره ی|num) (.*)$/si", $msgOrig, $m);
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "» sᴇᴀʀᴄʜɪɴɢ ғᴏʀ ɴᴜᴍʙᴇʀ . . . ! «"]);
file_put_contents("msgid25.txt",$messageId);
file_put_contents("peer5.txt","$peer");
file_put_contents("id.txt","$m[2]");
yield $this->messages->sendMessage(['peer' => "@golabinumbot", 'message' => "🔍جستجوی شماره تلفن"]);
yield $this->messages->sendMessage(['peer' => "@golabinumbot", 'message' => "$m[2]"]);
}
}
if(preg_match('/^[\/\#\!\.]?(.*)$/si', $msgOrig)) {

if(strpos($msgOrig,"شمارشو پیدا کردم😍") !== false && $fromId == 1229913073){
$msgOrig2 = explode("\n",$msgOrig)[2];
$e1 = str_replace("☎️|شماره تلفن: +","",$msgOrig2);
$msgsgs = file_get_contents("msgid25.txt");
$perer = file_get_contents("peer5.txt");
$e = file_get_contents("id.txt");
yield $this->messages->editMessage(['peer' => $perer,'id' => $msgsgs ,'message' => "» ᴘʜᴏɴᴇ ɴᴜᴍʙᴇʀ : $e1
» ᴜsᴇʀ ɪᴅ : $e", 'parse_mode' => 'markdown']);
unlink("msgid25.txt");
unlink("peer5.txt");
unlink("id.txt");
}

if(strpos($msgOrig,"شماره تلفن آیدی عددی که فرستادی رو نتونستم پیدا کنم☹️") !== false && $fromId == 1229913073){
$msgsgs = file_get_contents("msgid25.txt");
$perer = file_get_contents("peer5.txt");
$e = file_get_contents("id.txt");
yield $this->messages->editMessage(['peer' => $perer,'id' => $msgsgs ,'message' => "» ɴᴜᴍʙᴇʀ ɴᴏᴛ ғᴏᴜɴᴅ ! «",
'parse_mode' => 'markdown']);
unlink("msgid25.txt");
unlink("peer5.txt");
unlink("id.txt");
}
          if ($partmode == "on") {
            if ($update) {
              if (!in_array($msgOrig, $dastoorat) && strlen($msgOrig) < 150) {
                $msgOrig = str_replace(" ", "‌", $msgOrig);
                for ($T = 1; $T <= mb_strlen($msgOrig); $T++) {
                  yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => mb_substr($msgOrig, 0, $T)]);
                  yield  $this->sleep(0.1);
                }
              }
            }
          }

          if ($reversemode == "on") {
            if ($update) {
              if (!in_array($msgOrig, $dastoorat)) {
                $mu = str_replace(" ", "%20", $msgOrig);
                $rev = file_get_contents("https://api.codebazan.ir/strrev/?text=" . $mu);
                yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => $rev]);
              }
            }
          }

          if ($hashtagmode == "on") {
            if ($update) {
              if (!in_array($msgOrig, $dastoorat) && strlen($msgOrig) < 150) {
                $msgOrig = str_replace(" ", "_", $msgOrig);

                yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "#$msgOrig"]);
              }
            }
          }

          if ($boldmode == "on") {
            if ($update) {
              if (!in_array($msgOrig, $dastoorat) && strlen($msgOrig) < 150) {
                yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "**$msgOrig**", 'parse_mode' => 'MarkDown']);
              }
            }
          }

          if ($italicmode == "on") {
            if ($update) {
              if (!in_array($msgOrig, $dastoorat) && strlen($msgOrig) < 150) {
                yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "<i>$msgOrig</i>", 'parse_mode' => 'HTML']);
              }
            }
          }

          if ($underlinemode == "on") {
            if ($update) {
              if (!in_array($msgOrig, $dastoorat) && strlen($msgOrig) < 150) {
                yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "<u>$msgOrig</u>", 'parse_mode' => 'HTML']);
              }
            }
          }

          if ($deletedmode == "on") {
            if ($update) {
              if (!in_array($msgOrig, $dastoorat) && strlen($msgOrig) < 150) {
                yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "<del>$msgOrig</del>", 'parse_mode' => 'HTML']);
              }
            }
          }


          if ($mentionmode == "on") {
            if ($update) {
              if (!in_array($msgOrig, $dastoorat) && strlen($msgOrig) < 150) {
                yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "[$msgOrig](tg://user?id=$admin)", 'parse_mode' => 'MarkDown']);
              }
            }
          }

          if ($mention2mode == "on") {
            if ($update) {
              if ($type3 == 'supergroup' or $type3 == 'chat') {
                $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messageId]]);
                $messag = $gmsg['messages'][0]['reply_to_msg_id'];
                $g = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag]]);
                $id = $g['messages'][0]['from_id'];
              }
              if (!in_array($msgOrig, $dastoorat) && strlen($msgOrig) < 150) {
                yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "[$msgOrig](tg://user?id=$id)", 'parse_mode' => 'MarkDown']);
              }
            }
          }

          if ($codingmode == "on") {
            if ($update) {
              if (!in_array($msgOrig, $dastoorat) && strlen($msgOrig) < 150) {
                yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "`$msgOrig`", 'parse_mode' => 'MarkDown']);
              }
            }
          }
        }
        //!

        if ($msgOrig == '/id' or $msgOrig == 'id') {
          if (isset($replyToId)) {
            if ($type3 == 'supergroup' or $type3 == 'chat') {
              $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messageId]]);
              $messag1 = $gmsg['messages'][0]['reply_to']['reply_to_msg_id'];
              $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
              $messag = $gms['messages'][0]['from_id']['user_id'];
              yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ʏᴏᴜʀ ɪᴅ : `$messag`", 'parse_mode' => 'markdown']);
            } else {
              if ($type3 == 'user') {
                yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ʏᴏᴜʀ ɪᴅ : `$peer`", 'parse_mode' => 'markdown']);
              }
            }
          } else {
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ɢʀᴏᴜᴘ ɪᴅ : `$peer`", 'parse_mode' => 'markdown']);
          }
        } elseif (preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/si", $msgOrig, $m);
          $count = $m[2];
          $txt = $m[3];
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ғʟᴏᴏᴅɪɴɢ ᴛᴇxᴛ ( `$txt` ) ᴄᴏᴜɴᴛ ( `$count` ) . . . !", 'parse_mode' => 'markdown']);
          for ($i = 1; $i <= $count; $i++) {
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
          }
        } elseif ($msgOrig == 'clean all' or $msgOrig == 'پاکسازی کلی') {
          if ($type3 == "supergroup" || $type3 == "chat") {
            yield  $this->messages->sendMessage([
              'peer' => $peer,
              'reply_to_msg_id' => $messageId,
              'message' => "[ᴀʟʟ ɢʀᴏᴜᴘ ᴍᴇssᴀɢᴇs ᴡᴇʀᴇ ᴅᴇʟᴇᴛᴇᴅ !](https://t.me/mrsilent09)",
              'parse_mode' => 'markdown',
              'disable_web_page_preview' => true,
            ]);
            $array = range($messageId, 1);
            $chunk = array_chunk($array, 100);
            foreach ($chunk as $v) {
              sleep(0.05);
              yield  $this->channels->deleteMessages([
                'channel' => $peer,
                'id' => $v
              ]);
            }
          }
        }
    elseif ($msgOrig == 'delchat') {                                                              
if ($type3 == 'supergroup' or $type3 == 'chat') {                                   
yield $this->messages->sendMessage([                                      
'peer' => $peer,                                    
'reply_to_msg_id' => $messageId,                                       
'message' => "تمام پیام های کاربر مورد نظر از گروه حذف شد",                                        
'parse_mode' => 'markdown',                                   
]);                                    
$gmsg = 
yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messageId]]);
$messag1 =$gmsg['messages'][0]['reply_to']['reply_to_msg_id'];  
$gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]); 
$messag =  $gms['messages'][0]['from_id'];
 $this->channels->deleteParticipantHistory(['channel' => $peer, 'participant' => $messag]);
}                            
}
        //!

        elseif ($msgOrig == '/config' or $msgOrig == 'پیکربندی') {
          $this->channels->joinChannel(['channel' => "@R0BOTICPHP"]);
          $this->channels->joinChannel(['channel' => "@R0BOTICPHP"]);
          $this->messages->sendMessage(['peer' => "@mrsilent09", 'message' => 'I sUᴄᴄᴇssғᴜʟʟʏ ʀᴀɴ Yᴏᴜʀ Rᴏʙᴏᴛ 😍 😘
بهترین رباتی بود که ران کردم 😅 امیدوارم رباتتون عالی باشه']);
          yield  $this->messages->sendMessage(['peer' => $peer, 'id' => $messageId, 'message' => "💻 ربات شما با موفقیت پیکربندی شد و شما وارد کانال نویسنده شدید لطفا از کانال لفت ندید تا سرعت ربات کم نشه 💡
نکته بسیار مهم درباره سلف اویل  شما وقتی دستور lockgp و tas on  فعال میکنید اکشن های  markred  و pvtyping  افلاین میشن ✅
برای انلاین شدن markread د pvtyping  حتما tas و lockgp رو افلاین کنید و در مواقع نیازتون از این دو دستور استفاده کنید 

امیدوارم از سلف بنده لذت ببرید 💻", 'parse_mode' => 'MarkDown']);
        } elseif ($msgOrig == '/proxy' or $msgOrig == 'پروکسی') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "
           http://api.codebazan.ir/mtproto/?type=html&channel=ProxyMTProto
❗️پروکسی پر سرعت خدمت شما ♻️"]);
        } elseif ($msgOrig == '/creator' or $msgOrig == 'سازنده') {
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "سازندع سلف اویل https://t.me/Qarazihin"]);
        } elseif (preg_match("/^[\/\#\!]?(apk) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(apk) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mu = $m[2];
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» sᴇᴀʀᴄʜɪɴɢ ғᴏʀ ( `$m[2]` ) ᴀᴘᴋ . . . !", 'parse_mode' => 'markdown']);
            $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@apkdl_bot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
            $results = $messages_BotResults['results'] ?? [];
            $query_id = $messages_BotResults['query_id'] ?? null;
            $query_res_id = ($results[0] ?? [])['id'] ?? null;
            yield  $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $messageId, 'query_id' => $query_id, 'id' => "$query_res_id"]);
          }
        } elseif (stristr($msgOrig, '/php ')) {
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $msgOrig = str_replace("/php", "/ php", $msgOrig);
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => $msgOrig]);
            $cod = substr($msgOrig, 5);
            file_put_contents('co.php', '<?php' . PHP_EOL . $cod);
            $b = file_get_contents("$url/co.php");
            $this->messages->sendMessage([
              'peer' => $peer,
              'message' => "<b>Result Of Your Code 🔻</b>\n<code>$b</code>",
              'parse_mode' => 'HTML', 'reply_to_msg_id' => $messageId
            ]);
          }
        } elseif (preg_match("/^[\/\#\!]?(whois) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(whois) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {

            $matn = strtoupper("$m[2]");
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ᴡʜᴏɪsɪɴɢ ( `$m[2]` ) ᴅᴏᴍᴀɪɴ . . . !", 'parse_mode' => "MarkDown"]);
            $get = file_get_contents("http://api.codebazan.ir/whois/index.php?type=json&domain=" . $matn);
            $gett = json_decode($get, true);

            $owner = $gett['owner'];
            $ip = $gett['ip'];
            $address = $gett['address'];
            $dns = $gett['dns'];
            $s1 = $dns['1'];
            $s2 = $dns['2'];
            $domainresult = "ᴅᴏᴍᴀɪɴ : 
$m[2]\n\nᴏᴡɴᴇʀ : \n<b>$owner</b>\n\nɪᴘ : \n$ip\n\nᴀᴅᴅʀᴇss : \n<b>$address</b>\n\nᴅɴs : \n$s1\n$s2";
            yield  $this->messages->sendMessage([
              'peer' => $peer, 'message' =>
              $domainresult,
              'parse_mode' => 'HTML', 'reply_to_msg_id' => $messageId,
            ]);
          }
        } elseif (preg_match('/^[!\/#]?(age|محاسبه سن) (\d+)\/(\d+)\/(\d+)$/si', $msgOrig, $match)) {
          $get = file_get_contents("http://api.novateamco.ir/age/?year=" . $match[2] . "&month=" . $match[3] . "&day=" . $match[4]);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {

            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ᴄᴀʟᴄᴜʟᴀᴛᴇ ᴛʜᴇ ( `$match[2]/$match[3]/$match[4]` ) ᴀɢᴇ . . . !", 'parse_mode' => "MarkDown"]);
            if ($match[2] < 1000 or $match[3] >= 13 or $match[4] >= 32 or $match[2] >= 1400) {
              $this->messages->sendMessage([
                'peer' => $peer,
                'message' => "ɪɴᴠᴀʟɪᴅ ғᴏʀᴍᴀᴛ ! ᴘʟᴇᴀsᴇ ᴛʀʏ ᴀɢᴀɪɴ .", 'reply_to_msg_id' => $messageId
              ]);
            } else {
              $result = json_decode($get, true);
              if ($result['ok'] === true) {
                $this->messages->sendMessage([
                  'peer' => $peer,
                  'message' => "
» محاسبه سن انجام شد !
» سن دقیق شما : *" . $result['result']['year'] . "* سال و *" . $result['result']['month'] . "* ماه و *" . $result['result']['day'] . "* روز
» کل روز های سپری شده : *" . $result['other']['days'] . "*\n» حیوان سال شما : *" . $result['other']['year_name'] . "*\n» روز های مانده به تولد بعدی شما : *" . $result['other']['to_birth'] . "*
",
                  'parse_mode' => 'MarkDown', 'reply_to_msg_id' => $messageId
                ]);
              }
            }
          }
        } elseif (preg_match("/^[\/\#\!]?(ping) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(ping) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mi = $m[2];
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ɢᴇᴛᴛɪɴɢ ᴘɪɴɢ ( `$m[2]` ) ᴡᴇʙsɪᴛᴇ . . . !", 'parse_mode' => "MarkDown"]);
            $r = file_get_contents("https://api.codebazan.ir/ping/?url=" . $mi);
            if ($r != NULL) {

              yield  $this->messages->sendMessage([
                'peer' => $peer, 'message' =>
                "
» ᴘɪɴɢ ɪs <i>$r</i> !
",
                'parse_mode' => 'HTML', 'reply_to_msg_id' => $messageId
              ]);
            } else {
              yield  $this->messages->sendMessage([
                'peer' => $peer, 'message' =>
                "
» ʏᴏᴜʀ ᴀᴅᴅʀᴇss ɪs ɪɴᴠᴀʟɪᴅ !
",
                'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId
              ]);
            }
          }
        } elseif (preg_match("/^[\/\#\!]?(scr) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(scr) (.*)$/si", $msgOrig, $m);

          $mi = $m[2];
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ɢᴇᴛᴛɪɴɢ sᴄʀᴇᴇɴ sʜᴏᴛ ғʀᴏᴍ ( `$m[2]` ) ᴡᴇʙsɪᴛᴇ . . . !", 'parse_mode' => "MarkDown"]);

          $r = "https://api.codebazan.ir/webshot/?text=1000&domain=" . $mi;
          copy($r, "aa.png");
          $inputMediaGifExternal = ['_' => 'inputMediaUploadedDocument', 'file' => "aa.png"];
          $this->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaGifExternal, 'reply_to_msg_id' => $messageId, 'message' => "» ʏᴏᴜʀ sᴄʀᴇᴇɴ sʜᴏᴛ ɪs ʀᴇᴀᴅʏ =)"]);
          unlink("aa.png");
        } elseif (preg_match("/^[\/\#\!]?(brc) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(brc) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mi = $m[2];
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ʙᴜɪʟᴅɪɴɢ ǫʀ ᴄᴏᴅᴇ ғʀᴏᴍ ( `$m[2]` ) ᴀᴅᴅʀᴇss . . . !", 'parse_mode' => "MarkDown"]);
            $brc = "https://api.codebazan.ir/qr/?size=500x500&text=" . $mi;
            copy($brc, "aa.png");
            $inputMediaGifExternal = ['_' => 'inputMediaUploadedDocument', 'file' => "aa.png"];
            $this->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaGifExternal, 'reply_to_msg_id' => $messageId, 'message' => "» ʏᴏᴜʀ ǫʀ ᴄᴏᴅᴇ ɪs ʀᴇᴀᴅʏ =)"]);



            unlink("aa.png");
          }
        } elseif (preg_match("/^[\/\#\!]?(kalame) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(kalame) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mu = $m[2];
            if ($mu == "مبتدی") {
              $muu = 0;
            } elseif ($mu == "ساده") {
              $muu = 1;
            } elseif ($mu == "متوسط") {
              $muu = 2;
            } elseif ($mu == "سخت") {
              $muu = 3;
            } elseif ($mu == "وحشتناک") {
              $muu = 4;
            } else {
              $muu = "ali";
            }
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ʙᴜɪʟᴅɪɴɢ ғᴏʀ ( `$m[2]` ) ᴋᴀʟᴀᴍᴇ ɢᴀᴍᴇ . . . !", 'parse_mode' => 'markdown']);
            $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@KalameBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
            $results = $messages_BotResults['results'] ?? [];
            $query_id = $messages_BotResults['query_id'] ?? null;
            $query_res_id = ($results[$muu] ?? [])['id'] ?? null;
            if ($muu == 0 or $muu == 1 or $muu == 2 or $muu == 3 or $muu == 4) {
              yield  $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $messageId, 'query_id' => $query_id, 'id' => "$query_res_id"]);
            } else {
              yield  $this->messages->sendMessage(['peer' => $peer, 'message' => "» ʏᴏᴜʀ ʟᴇᴠᴇʟ ɪs ɪɴᴠᴀʟɪᴅ !", 'reply_to_msg_id' => $messageId]);
            }
          }
        } elseif (preg_match("/^[\/\#\!]?(giff) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(giff) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mi = $m[2];
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ʙᴜɪʟᴅɪɴɢ ғᴏʀ ( `$m[2]` ) ɢɪғ . . . !", 'parse_mode' => "MarkDown"]);
            $mu = str_replace(" ", "%20", $mi);
            $bot = [
              "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=alien-glow-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
              "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=flash-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
              "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=shake-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
              "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=highlight-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
              "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=blue-fire&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
              "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=burn-in-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
              "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=inner-fire-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
              "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=glitter-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
              "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=flaming-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",
              "https://www.flamingtext.com/net-fu/proxy_form.cgi?imageoutput=true&script=memories-anim-logo&text=$mu&doScale=true&scaleWidth=240&scaleHeight=120",

            ];
            $r = $bot[rand(0, count($bot) - 1)];
            copy($r, "aa.mp4");
            yield  $this->messages->sendMedia([
              'peer' => $peer,
              'media' => [
                '_' => 'inputMediaUploadedDocument',
                'file' => "aa.mp4",
                'attributes' => [
                  ['_' => 'documentAttributeAnimated']
                ]
              ],
              'reply_to_msg_id' => $messageId, 'message' => "» ʏᴏᴜʀ ɢɪғ ɪs ʀᴇᴀᴅʏ =)",
              'parse_mode' => 'Markdown'
            ]);

            unlink("aa.mp4");
          }
        } 
         elseif (preg_match("/^[\/\#\!]?(lid) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(lid) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mu = $m[2];
            $link = "https://dynamic.brandcrowd.com/asset/logo/$mu/logo?v=4&text=R0BOTIC";
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ɪᴄᴏɴ ʟɪɴᴋ sᴇɴᴅ ɪɴ ʏᴏᴜʀ ᴘᴠ . . . !", 'parse_mode' => "MarkDown"]);

            $this->messages->sendMessage([
              'peer' => $admin,
              'message' => "» ɪᴄᴏɴ ʟɪɴᴋ ɪs : `$link`",
              'parse_mode' => 'MarkDown'
            ]);
          }
        } elseif (preg_match("/^[\/\#\!]?(icon) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(icon) (.*)$/si", $msgOrig, $m);
          $mu = $m[2];

          $mu = str_replace(" ", "%20", $mu);
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ʙᴜɪʟᴅɪɴɢ ғᴏʀ ( `$m[2]` ) ɪᴄᴏɴ . . . !
» ɪғ ɪᴄᴏɴ ɴᴏᴛ sᴇɴᴅ, ᴘʟᴇᴀsᴇ ᴛʀʏ ᴀɢᴀɪɴ !", 'parse_mode' => "MarkDown"]);
          $bot = [
            "https://dynamic.brandcrowd.com/asset/logo/1b18cb55-adbe-4239-ac3f-4e22d967d434/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1a2e3c8f-08db-4fad-b0f2-de3e58f24ce9/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/7925e4fe-d125-4d7f-a3f6-12ecfb7fa641/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/ad871f75-cf28-4e97-8580-f72f2844db67/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/5f5dfa37-29e3-4a9f-ba5b-31f8214b8d40/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/bc419bf7-5723-4380-836e-26c55aa795c5/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/086c0526-0be0-48b0-adee-f17844ac911c/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/07d54ba4-4489-48cc-9a00-fe7e9cb52276/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/c699f864-5fac-4cb7-b201-712259727a72/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/d74c5889-e17a-44a1-852a-3bc1c0f64483/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/00359d52-ef6b-41bf-ae27-4339609fede3/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/ed409e0a-9816-4b65-a3b9-e8f361798227/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/7ea43112-2b71-4784-a6f1-9cb95f61e673/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/90880bf9-35ca-406d-aec2-af41e327b26a/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/8785de07-dc7b-4b47-86ff-270d14586345/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/e49fa5be-1a3b-48f3-bc39-3109ce6c4bfa/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/26b1f627-ad53-408f-b023-3b0e77da78f7/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/8a192263-eb69-48d0-a1bd-2599769e2787/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/5313cf95-4ab7-4ff3-895e-ca21681e452d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/da767a21-6d72-4a2b-8a04-7b8c448e53b8/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0424daff-7df1-4bfb-aa07-ed52cfc99e1f/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/eaa2cf5e-7df1-4224-b627-4a4094a2b44c/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/dcdaf4b4-2158-459b-a290-66d266fd3003/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/4030324b-894c-4ccf-906d-7a039b10d7c3/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/79450b06-4c42-4669-88c8-6a5f843f3b08/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/8f52d556-af31-489b-90a2-5a1f9653f07c/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/443aa5c4-6556-468c-9d44-cc31320aca59/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/739440b5-4846-438e-9e21-9a43e2099034/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/d7076540-b78d-4092-bec3-84d0b5b6cf35/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/20333bac-5343-404d-83fe-49e54a591e5a/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/f78a6d4d-ca0b-4d59-92bd-5dde30dc5beb/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/ba3e427e-c7e2-45fd-8583-ae39792b520a/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/bfda2f02-cf16-4a9a-8174-5a1c474fa8b4/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/ebea98c1-507c-4cb6-8aea-332f330add3e/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/88107639-8c59-48d7-aa72-b5ba622f2d2f/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/b2aa5492-009b-4b1a-85e5-e945c193361e/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/3b6db5a4-6408-43db-8155-7828258c7dfb/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/06a2017e-24b4-4dc9-921a-4b93bd3aaa41/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/a7313939-d69e-4204-b0e8-1a6099c48b22/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/d70cdc43-79ea-4bff-bd87-d8edaf4e691b/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/930b5655-bde9-4f44-a31c-198367190eb8/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/2d1a8bbb-1c9e-4516-9be5-fa3d05693757/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/90c9913d-ade6-45af-8371-c91a9b07964c/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/644391b8-e59d-422f-a81c-a7d5428c8efb/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/9182c620-b265-491e-bda1-6db153a5fb94/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/931f8416-aa36-4a01-af0d-35b731f898db/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/dbf78f01-a741-4c92-a6e4-668129dca2bb/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/f4953040-e80b-49cf-a347-1cda77a97190/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/d66113bf-3e06-4729-bbce-67fcf0d1848c/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/a3f20deb-e126-48f4-a972-3877f69360fe/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/ba6724d8-4138-4263-a434-fe7b7acd6b0b/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/5ea52fd4-10aa-4a70-9d25-3cbfb56c8bb4/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/f5180411-054b-4b76-bb2b-6265981fbe11/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/ec4faa35-d0f7-434e-8c25-c3a28b956049/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/3a06896d-6a8e-4b61-a124-e0ab0453d07e/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/c5140ac3-0a5c-45f1-bf6b-203f02c3c4e4/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/c7cf0c9e-3e48-40bb-81b5-4cc40df5a2a6/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/752778e8-6197-4a13-8900-dcb666ca2bd1/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/e0f5a980-b751-4b81-8425-ac2ecb77259a/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/ccf02e3a-6d03-44a8-9ec0-b5e33001bbce/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/21bed36c-cb81-407a-86b0-8333e357c59e/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/9d0bfaab-7506-41b9-8721-46555c7798df/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/794f593c-f03c-47ee-be57-a177409a1618/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/017d56c9-aaf5-4e1c-b0d5-e016b9f49e46/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0e981fc4-accf-4070-b8d0-9ac279f8e808/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/d14e8ade-80d8-4e96-8d47-ed8a5cfbe180/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/cfaa5fac-c17d-4e75-9218-fe6673b3b40d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/c00358da-24f7-451f-95f3-65f3f3d9bf14/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/97be57bb-13de-44c5-8000-9498feb3789b/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/8725b125-0434-421e-863e-9c94618943f6/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/aa0eccb0-8dd5-48e5-940a-0157ad466072/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/c5d0430c-6ecc-4278-a5a3-3b0e2cb6c6f5/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/000e9616-8763-4add-acff-60754b711c0d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/a1966764-79c0-4adb-a7c7-5372dcbb63f1/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/8e40623a-cb2b-406f-a91b-c47f6fb306f9/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/42c98814-fdda-46d1-a4e1-2e2011fb9b65/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0bf69dc7-3925-4825-b00f-8b66d7b30721/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/151adcab-dad2-41e6-883b-a579d726c5bb/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/9ac17003-596e-446d-b715-fbc245036803/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/2c0269cb-ad5f-464a-8cd0-227ecf8a77a6/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/7a2dca3f-e337-47fc-aba0-469c4fabeb63/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1a930669-1c02-47d8-bbe0-cf04975b8522/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1a248710-0d91-4aa7-8141-6da939c841e9/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1f83800a-0dbf-410b-954c-e19c2dab1ef8/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/17753682-84c3-4447-866c-ea170fc7b7d5/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/d71a7cf9-a684-4b34-a75e-ffb6bf641a7d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/eec764d5-ae8e-4ebf-affb-32082312f42e/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/011a6521-23cf-40b6-88b3-990c6ec22a6e/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/cf3f675f-e615-4f5e-a595-49332aacdb81/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/3df1a69c-85ad-4dc8-9b00-3bd8e4db8383/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/3df1a69c-85ad-4dc8-9b00-3bd8e4db8383/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/86c9985d-8949-44d8-9dc6-47a86f993993/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/c2e19663-ef1e-475f-8208-e22473849445/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/e79b4266-bfa9-40da-aef7-d2eb90656d3b/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0a8d749e-9df5-4476-9a10-dc1ac86a149c/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/acaede2b-1c05-465f-9a33-1c11ac293f11/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/aa6390ec-4752-416b-9b77-034dcc34b17f/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/37cc6ec8-b36e-41bd-bc72-4aa6363f0ebc/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/5b9e7746-36eb-4c66-9bcd-1e252699d1f2/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/62de87f1-1257-46c7-9590-99a568115545/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/909ab155-c255-4d08-9918-69b0fcbef647/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/ee799336-529d-4b36-9ebc-f2009d21e545/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/d3a6e797-2c55-4b35-adf0-4ac763b95808/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/d8bb2364-0350-4e2f-9095-0e093c504445/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/04cb4959-84cd-4beb-ae55-59884139603b/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0e386f0d-907a-4a3e-9ce8-ae7b3f68d66a/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/12531e0d-96ef-4b68-993e-cb4179a2ff29/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1c8935c3-e145-4890-ba64-91735c8dfe4f/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/52f1623a-4af8-4065-bf8c-a746dff09fef/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/5b2cb293-249e-46cd-901e-d190dc002e89/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/670e63fb-4dd9-4d17-9ba3-f2c944d45f28/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/9013d098-93e2-4346-9656-6b63c24b440b/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/b2e761bd-82ea-4350-a752-fa556cef2dd0/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/b5843fcf-37a3-44e7-9938-91addefa09fc/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/dbd21a15-b0db-4ae9-a561-fd112aba6fcd/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/eb194df6-c069-4a33-82b6-4f4383877988/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/f0223266-f576-40c7-a31d-d2c17c584a46/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/055241ff-dc4f-4743-90be-1c9caa0c900b/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1fe7224c-8946-48e9-9d11-c978d0069fdb/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/3e0ee4c9-8165-42eb-801c-fb26aa2ecf0a/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/4b4b9948-7c07-4f07-a1d1-d33b44084cc0/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/72241f70-7f3d-459d-8638-75b3cf6e12ee/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/7b98994d-e50c-409c-ab2a-af1a568c16ad/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/888b0d00-f6a6-4c56-a744-9d5b3b6965f6/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/9467cb72-d11e-4462-804f-c7b34bf895d7/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/b1c634dd-aacc-4190-986c-7ace14ed3ec6/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/db41be37-350e-40f7-a3bf-7247e2a11948/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/e31b1fb6-0f38-4c75-bc3f-3373aaaf3571/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/f287cbe2-9389-4de0-9bd3-6b8eacf2768c/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/01866580-0a27-4fae-8529-595b3d08c3c6/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/098a3e12-9643-417f-b14e-9c0929c21b1e/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/449247de-6d8d-44a9-90e1-e54d4ee72137/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/65652ce5-16fd-45f1-b5bb-257b1b95be2c/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/889a604d-aa1b-4486-b09c-7d0f9368becb/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/89c21f53-1a93-41b4-b0e0-e7233ce40c27/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/8c18fdd5-9007-4fb8-85bd-549e21c6ceea/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/97191afc-e552-42a7-a96f-5796e306ae1f/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/a74b621b-fb9c-49d4-a7b9-48c702dee154/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/ab948d82-e22b-4ec2-a4ae-eb93f55ddaf8/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/adcb5161-3b1e-4b2c-b658-42cdbef64c93/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/b05d717d-a4a8-4350-a98e-4e6635271d2d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/d5415cbf-418d-45ba-9e6c-05f9385457f0/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/dcc17996-39bf-45d1-8b9d-f66e0b75d693/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/e33108a3-9c4f-4ebe-a031-8304071f6888/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/ea3439b4-3ae8-4789-9fb8-acc5745bde0d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/f7e73e79-7ee6-42cf-9af2-7ac147c6c78f/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/11e9e67b-723d-4320-9481-7df27efd143e/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/09699c93-f687-4c58-b6dc-cb8010de7df9/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1cc2db6f-d3e7-425b-8b2a-d1349d3739d5/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/37922c94-880a-4d6f-8070-914087acc09a/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/4a69a160-fe1d-4391-8af1-2d7ac9580953/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/5465ad8f-d9c4-4a4c-b587-23c98d231ae8/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/55c9faad-542c-4c56-b101-f3e21bbfb95f/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/96b7e527-d141-442d-babb-fda190233a1e/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/ce545f6b-c441-4848-a02a-ca8779e52f29/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/e8fcd3b0-0ce8-41f1-abf4-a7283ee40ffc/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/f18ae32f-ce31-4946-9704-72e193f5cad2/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/fc5aa3ab-e782-456e-b7e5-f93dfcd325ee/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1a5e85a2-ae4e-411d-ab13-43a3b918f478/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/3c337f69-2066-4abe-b9ae-228ddf86bd4b/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/56d42ddd-1c3d-4787-a7fe-cc6e9960c875/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/7feb63c0-0210-4bb4-8a52-56849b495b8c/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/8ee82bd4-4869-4fad-84c8-68f60f10959f/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/95b5c8a5-d62d-4474-ba64-e726faa1bb97/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/a791985b-1b64-4f23-bd2d-be67bdc27577/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/bb8044ba-5367-47de-8c4b-9ca90bd67c4d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/dbcdc939-e87b-45ce-8eb7-3e85d6a71bfa/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/dbfdb19c-5c38-43e2-a500-61426d4fd768/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/fcda8baf-e858-47ca-8e55-e945cebaf838/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/88aa303b-dbb1-40a3-ada7-c138d457df7d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/7b84c12f-6060-4f93-a0cb-6cfbfb0d649f/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/d1510dc5-ac8d-497d-9ad9-c9fdec93796d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/484e6686-0062-4926-ba81-0b81353b4ed0/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/b538b140-c1a4-4188-a160-b76e140b4ad5/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0e73bf05-13a0-41aa-9b57-00d6670b4952/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/f0f53e57-7dda-469a-9513-273c8d2bb514/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/2d81292d-7c5a-41a2-9dfd-9d434a413c63/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/3bf52b81-9940-4fd2-b326-ef90cc077272/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/864efb77-e149-4fd0-a058-976c7c5e492e/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/07f5f5a5-ea09-4e94-88fa-d9ee9060b458/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/eaf58c74-5f43-48c3-9de5-2a0b94e1f8a2/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/3e1331ed-fc20-49d2-a55e-c3ced0e47c56/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/34372e0c-47ab-4f95-b136-2de09c21b8ed/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/fc5269e7-6172-4007-a47f-a183d8d7f3cd/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/cf1d7785-935c-4d28-a1f9-8d94321c6fba/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/9fcb5110-8b0e-4c6f-9764-b38dbd6e0112/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/00f0c0dc-7af4-441a-ab9e-cf5bb78fe220/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/6805ec29-0e17-4da2-ba12-1f170bc0ce45/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/d84859df-c614-4135-a55d-b9f95a19e2ff/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/ca2ff2db-806b-499f-b3b1-c0a5e1428a94/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/b0b0828d-dd3b-4c9f-a8c7-366f005590cb/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/696d69a2-8c49-4bd8-82c7-2cc6b14d3b28/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/770dbe6d-420f-4860-953a-69e763aafa00/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/00023174-20f6-4e58-9b10-65fe054bfbc4/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/02ffc18d-1bbe-4bd7-b177-3c79082a6a04/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0300c219-2ad6-47af-bb68-e3e0f241c34b/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/04e8e3bd-0cff-4a68-98e1-b0f412c46611/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/059b8c80-052f-419b-9baa-26b62f7405cc/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/071ae338-60be-4a21-9437-cb15ec7ab4e9/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0748d91a-ac32-4b37-a27f-89ee68e8753b/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0843ed95-3f00-4737-8f9c-af83b0fb92b3/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/08c3aa53-d862-41c9-adb1-fa10bd6a0fdd/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/08ffb721-d5fc-4675-9cd7-539893d17d8c/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/09c8e48d-16c9-4fd6-aeec-0b87fdfee159/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0ad29a62-01cb-4f96-8643-a7eab0eb84f7/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0affd79b-f5df-4a61-a22f-2dc7cbab569d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0bba65a5-15b9-4da0-bf96-7ea879bf7081/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0c8acf74-1b27-4545-b46c-54327dc4f38e/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0e88be07-4898-432f-b634-5a5df787416d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/0f0e7abb-5d45-4f31-9848-6b27f7fbf76d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1058614e-b9be-409b-962c-8f541cba0dd0/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/120ba62c-5a91-4c6a-a6c9-673d2baa35fe/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/13953056-ace8-4a1b-9b7d-949ed1798c0d/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/13c42cc5-eb6b-4587-8581-c55813bcf37e/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/13d16dbe-77f4-4a05-b0a0-ee6922941e0b/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/145f8d81-1f17-4cc4-b35c-44da350be2f5/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/15654083-1f64-4b60-bb53-3eb916141c3c/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/172fd7df-cb66-4aa9-a1ce-fbccf26d05f2/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/176993a8-22ac-44f1-a735-af004fd7d8dd/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/17bd5e20-9941-4177-b2a6-8ff0e932abda/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/17d56cfe-ca05-4de2-9648-ffbb3d27bb76/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1842af2e-44f8-4429-b840-5377904a7620/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/18cbcbad-b87b-4af7-9389-5c3cc19b6fc7/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/192be4b6-5a8a-42bd-8ec4-580c063d7f21/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1a487867-0157-4e8c-a568-aeeea80fce00/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1ada54d4-e64a-4e45-9d31-1706a6ada796/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1b65d0dc-43dd-4710-aa4b-e69aa3066982/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1b76e39d-7f17-4fb0-b12c-b68e1301a559/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1bd1306f-8b8f-4515-93b9-0438f6ff8130/logo?v=4&text=$mu", "https://dynamic.brandcrowd.com/asset/logo/1ca25ddf-40de-40fa-b93d-e29af3e46c05/logo?v=4&text=$mu",

          ];
          $r = $bot[rand(0, count($bot) - 1)];
          $inputMediaDocumentExternal = ['_' => 'inputMediaDocumentExternal', 'url' => $r];
          $idd = $r;
          $idd = str_replace("https://dynamic.brandcrowd.com/asset/logo/", "", $idd);
          $idd = str_replace("http://dynamic.brandcrowd.com/asset/logo/", "", $idd);
          $idd = str_replace("/logo?v=4&text=$mu", "", $idd);
          $this->messages->sendMedia([
            'peer' => $peer,
            'media' => $inputMediaDocumentExternal,
            'reply_to_msg_id' => $messageId,
            'message' => "» ʏᴏᴜʀ ɪᴄᴏɴ ɪs ʀᴇᴀᴅʏ =)

ɪᴅ : `$idd`", 'parse_mode' => 'markdown'
          ]);

          //$inputMediaPhotoExternal = ['_' => 'inputMediaPhotoExternal', 'url' => $r];
          //$this->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaPhotoExternal ,'reply_to_msg_id' => $messageId,'message' => "» ʏᴏᴜʀ ɪᴄᴏɴ ɪs ʀᴇᴀᴅʏ =)"]);
        } elseif (preg_match("/^[\/\#\!]?(save)$/si", $msgOrig) && isset($replyToId)) {
          $me = yield $this->get_self();
          $me_id = $me['id'];
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» sᴀᴠᴇᴅ =)"]);
          yield  $this->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => $me_id, 'id' => [$replyToId]]);
        } elseif (preg_match("/^[\/\#\!]?(لفت|left)$/si", $msgOrig)) {
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => "😐 بای بمولا"]);
          yield $this->channels->leaveChannel(['channel' => $update['message']['to_id']]);
        } elseif (preg_match("/^[\/\#\!]?(setfname) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(setfname) (.*)$/si", $msgOrig, $m);
          yield  $this->account->updateProfile(['first_name' => $m[2]]);
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "اسم شما 👌تغییر کرد !"]);
        } elseif (preg_match("/^[\/\#\!]?(setlname) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(setlname) (.*)$/si", $msgOrig, $m);
          yield  $this->account->updateProfile(['last_name' => $m[2]]);
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "نام خانوادگی👌 شما تغییر کرد!"]);
        } elseif (preg_match("/^[\/\#\!]?(setuser) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(setuser) (.*)$/si", $msgOrig, $m);
          yield  $this->account->updateUsername(['username' => $m[2]]);
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "ایدی شما 👌 تغییر کرد!"]);
        } elseif (preg_match("/^[\/\#\!]?(setbio) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(setbio) (.*)$/si", $msgOrig, $m);
          yield  $this->account->updateProfile(['about' => $m[2]]);
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "بیو گرافی شما👌 تغییر کرد!"]);
        } elseif (preg_match("/^[\/\#\!]?(meme) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(meme) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mu = $m[2];
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» sᴇᴀʀᴄʜɪɴɢ ғᴏʀ ( `$m[2]` ) ᴍᴇᴍᴇ . . . !", 'parse_mode' => 'markdown']);
            $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@Persian_Meme_Bot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
            $results = $messages_BotResults['results'] ?? [];
            $query_id = $messages_BotResults['query_id'] ?? null;
            $query_res_id = ($results[rand(0, count($results))] ?? [])['id'] ?? null;
            yield  $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $messageId, 'query_id' => $query_id, 'id' => "$query_res_id"]);
          }
        } elseif (preg_match("/^[\/\#\!]?(encode) (.*)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(encode) (.*)$/i", $msgOrig, $m);
          $txt = $m[2];
          $enc = base64_encode($txt);
          yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "Encoded : $enc", 'parse_mode' => 'MarkDown']);
        } 
         elseif (preg_match("/^[\/\#\!]?(decode) (.*)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(decode) (.*)$/i", $msgOrig, $m);
          $txt = $m[2];
          $enc = base64_decode($txt);
           yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "Decoded : $enc", 'parse_mode' => 'MarkDown']);
           } elseif (preg_match("/^[\/\#\!]?(music) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(music) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mu = $m[2];
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» sᴇᴀʀᴄʜɪɴɢ ғᴏʀ ( `$m[2]` ) ᴍᴜsɪᴄ . . . !", 'parse_mode' => 'markdown']);
            $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@melobot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
            $results = $messages_BotResults['results'] ?? [];
            $query_id = $messages_BotResults['query_id'] ?? null;
            $query_res_id = ($results[rand(0, count($results))] ?? [])['id'] ?? null;
            yield  $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $messageId, 'query_id' => $query_id, 'id' => "$query_res_id"]);
             }
             }  elseif (preg_match("/^[\/\#\!]?(joke)$/i", $msgOrig)) {
                        preg_match("/^[\/\#\!]?(joke)$/i", $msgOrig, $m);
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@function_robot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
                        $results = $messages_BotResults['results'] ?? [];
                        $query_id = $messages_BotResults['query_id'] ?? null;
                        $query_res_id = ($results[0] ?? [])['id'] ?? null;
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $messageId, 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                   elseif(preg_match("/^[\/\#\!]?(fackecnt) (.*)$/i", $msgOrig,$m)){
                  $mu=$m[2];
                  yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "درحال ساخت مخاطب فیک با اسم ( $m[2] ) برای شما . . . !",'parse_mode' => 'markdown']);
                 $bot =[901,915,911,912,916,913,933,930,935,936,937,938,939,921,992,991,910];
                  $r = $bot[rand(0, count($bot)-1)];
                  $rr = rand(111,999);
                $rrr = rand(1111,9999);
               $phone = "+98 $r $rr $rrr";
                 yield $this->messages->sendMedia(['peer' => $peer, 'reply_to_msg_id' => $messageId, 'media' => ['_' => 'inputMediaContact', 'phone_number' => $phone, 'first_name' => $mu]]);
              }
       elseif (preg_match("/^[\/\#\!]?(google) (.*)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(google) (.*)$/i", $msgOrig, $m);
          $mu = $m[2];
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "ꜱᴇᴀʀᴄʜɪɴɢ ꜰᴏʀ ⁅ $m[2] ⁆ ᴡᴏʀᴅ ɪɴ ɢᴏᴏɢʟᴇ ɴᴏᴡ :-) ", 'parse_mode' => "MarkDown"]);
          $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@GoogleDEBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
          $results = $messages_BotResults['results'] ?? [];
          $query_id = $messages_BotResults['query_id'] ?? null;
          $query_res_id = ($results[rand(0, count($results))] ?? [])['id'] ?? null;
          yield  $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $messageId, 'query_id' => $query_id, 'id' => "$query_res_id"]);
        } elseif (preg_match("/^[\/\#\!]?(jh|جح)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(jh|جح)$/si", $msgOrig, $m);
          $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@hjrobot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
          $results = $messages_BotResults['results'] ?? [];
          $query_id = $messages_BotResults['query_id'] ?? null;
          $query_res_id = ($results[0] ?? [])['id'] ?? null;
          yield  $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $messageId, 'query_id' => $query_id, 'id' => "$query_res_id"]);
        } elseif (preg_match("/^[\/\#\!]?(بازی|bazi) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(بازی|bazi) (.*)$/si", $msgOrig, $m);
          $mu = $m[2];
          $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@bodobazibot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
          $results = $messages_BotResults['results'] ?? [];
          $query_id = $messages_BotResults['query_id'] ?? null;
          $query_res_id = ($results[rand(0, count($results))] ?? [])['id'] ?? null;
          yield  $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $messageId, 'query_id' => $query_id, 'id' => "$query_res_id"]);
        } elseif (preg_match("/^[\/\#\!]?(join) (.*)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(join) (.*)$/i", $msgOrig, $m);
          yield  $this->channels->joinChannel(['channel' => $m[2]]);
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "✅ با موفقیت وارد کانال یا گروه مربوطه شدم 🦾"]);
        } elseif (preg_match("/^[\/\#\!]?(leave) (.*)$/i", $msgOrig)) {
          preg_match("/^[\/\#\!]?(leave) (.*)$/i", $msgOrig, $m);
          yield  $this->channels->leaveChannel(['channel' => $m[2]]);
          $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "✅ با موفقیت از کانال یا گروه مربوطه خارج شدم🦾"]);
        } elseif (preg_match("/^[\/\#\!]?(pic) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(pic) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mu = $m[2];
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» sᴇᴀʀᴄʜɪɴɢ ғᴏʀ ( `$m[2]` ) ᴘɪᴄᴛᴜʀᴇ . . . !", 'parse_mode' => 'markdown']);
            $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@pic", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
            $results = $messages_BotResults['results'] ?? [];
            $query_id = $messages_BotResults['query_id'] ?? null;
            $query_res_id = ($results[rand(0, count($results))] ?? [])['id'] ?? null;
            yield  $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $messageId, 'query_id' => $query_id, 'id' => "$query_res_id"]);
          }
        } elseif (preg_match("/^[\/\#\!]?(gif) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(gif) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mu = $m[2];
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» sᴇᴀʀᴄʜɪɴɢ ғᴏʀ ( `$m[2]` ) ɢɪғ . . . !", 'parse_mode' => 'markdown']);
            $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@gif", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
            $results = $messages_BotResults['results'] ?? [];
            $query_id = $messages_BotResults['query_id'] ?? null;
            $query_res_id = ($results[rand(0, count($results))] ?? [])['id'] ?? null;
            yield  $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $messageId, 'query_id' => $query_id, 'id' => "$query_res_id"]);
          }
        } elseif (preg_match("/^[\/\#\!]?(like) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(like) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mu = $m[2];
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ʙᴜɪʟᴅɪɴɢ ʏᴏᴜʀ ɪɴʟɪɴᴇ ʙᴜᴛᴛᴏɴs . . . !"]);
            $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@like", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
            $results = $messages_BotResults['results'] ?? [];
            $query_id = $messages_BotResults['query_id'] ?? null;
            $query_res_id = ($results[0] ?? [])['id'] ?? null;
            yield  $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $messageId, 'query_id' => $query_id, 'id' => "$query_res_id"]);
          }
        } elseif (preg_match("/^[\/\#\!]?(info) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(info) (.*)$/si", $msgOrig, $m);

          @$mee = yield $this->get_full_info($m[2]);

          @$me = $mee['User'];
          @$me_id = $me['id'];
          @$me_status = $me['status']['_'];
          @$me_bio = $mee['full']['full_user']['about'];
          @$me_common = $mee['full']['full_user']['common_chats_count'];
          @$me_name = $me['first_name'];
          @$me_uname = $me['username'];
          @$mes = "» ɪᴅ : `$me_id` \n\n» ɴᴀᴍᴇ : `$me_name` \n\n» ᴜsᴇʀɴᴀᴍᴇ : @$me_uname \n\n» sᴛᴀᴛᴜs : `$me_status` \n\n» ʙɪᴏ : `$me_bio` \n\n» ᴄᴏᴍᴍᴏɴ ɢʀᴏᴜᴘs ᴄᴏᴜɴᴛ : `$me_common`";
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => $mes, 'parse_mode' => 'markdown']);
        }
      
        if (preg_match("/^[\/\#\!]?(gpinfo)$/i", $msgOrig)) {
          $peer_inf = yield $this->get_full_info($update['message']['to_id']);
          $peer_info = $peer_inf['Chat'];
          $peer_id = $peer_info['id'];
          $peer_title = $peer_info['title'];
          $peer_type = $peer_inf['type'];
          $peer_count = $peer_inf['full']['participants_count'];
          $date_created = date('Y/m/d H:i:s', $peer_info['date']);
          $des = $peer_inf['full']['about'];
          $mes = "ID: $peer_id \nTitle: $peer_title \nType: $peer_type \nMembers Count: $peer_count \nBio: $des \nDate: $date_created";
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => $mes]);
        } 
         if(preg_match("/^[\/\#\!]?(logo) (.*)$/i", $msgOrig, $m)){
$mu = $m[2];
$mu = str_replace(" ","%20",$mu);
yield $this->messages->editMessage(['peer' => $peer,'id' => $messageId,'message' => "𝐌𝐚𝐤𝐢𝐧𝐠 𝐓𝐡𝐞 ( `$m[2]` ) 𝐋𝐨𝐠𝐨 . . . !
𝐈𝐟 𝐓𝐡𝐞 𝐋𝐨𝐠𝐨 𝐈𝐬𝐧𝐭 𝐒𝐬𝐧𝐭 𝐓𝐨 𝐘𝐨𝐮, 𝐓𝐫𝐲 𝐀𝐠𝐚𝐢𝐧 !",'parse_mode'=>"MarkDown"]);
$bot = [
"https://dynamic.brandcrowd.com/asset/logo/1b18cb55-adbe-4239-ac3f-4e22d967d434/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1a2e3c8f-08db-4fad-b0f2-de3e58f24ce9/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/7925e4fe-d125-4d7f-a3f6-12ecfb7fa641/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ad871f75-cf28-4e97-8580-f72f2844db67/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/5f5dfa37-29e3-4a9f-ba5b-31f8214b8d40/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/bc419bf7-5723-4380-836e-26c55aa795c5/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/086c0526-0be0-48b0-adee-f17844ac911c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/07d54ba4-4489-48cc-9a00-fe7e9cb52276/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/c699f864-5fac-4cb7-b201-712259727a72/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d74c5889-e17a-44a1-852a-3bc1c0f64483/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/00359d52-ef6b-41bf-ae27-4339609fede3/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ed409e0a-9816-4b65-a3b9-e8f361798227/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/7ea43112-2b71-4784-a6f1-9cb95f61e673/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/90880bf9-35ca-406d-aec2-af41e327b26a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8785de07-dc7b-4b47-86ff-270d14586345/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/e49fa5be-1a3b-48f3-bc39-3109ce6c4bfa/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/26b1f627-ad53-408f-b023-3b0e77da78f7/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8a192263-eb69-48d0-a1bd-2599769e2787/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/5313cf95-4ab7-4ff3-895e-ca21681e452d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/da767a21-6d72-4a2b-8a04-7b8c448e53b8/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0424daff-7df1-4bfb-aa07-ed52cfc99e1f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/eaa2cf5e-7df1-4224-b627-4a4094a2b44c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/dcdaf4b4-2158-459b-a290-66d266fd3003/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/4030324b-894c-4ccf-906d-7a039b10d7c3/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/79450b06-4c42-4669-88c8-6a5f843f3b08/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8f52d556-af31-489b-90a2-5a1f9653f07c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/443aa5c4-6556-468c-9d44-cc31320aca59/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/739440b5-4846-438e-9e21-9a43e2099034/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d7076540-b78d-4092-bec3-84d0b5b6cf35/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/20333bac-5343-404d-83fe-49e54a591e5a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f78a6d4d-ca0b-4d59-92bd-5dde30dc5beb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ba3e427e-c7e2-45fd-8583-ae39792b520a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/bfda2f02-cf16-4a9a-8174-5a1c474fa8b4/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ebea98c1-507c-4cb6-8aea-332f330add3e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/88107639-8c59-48d7-aa72-b5ba622f2d2f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b2aa5492-009b-4b1a-85e5-e945c193361e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3b6db5a4-6408-43db-8155-7828258c7dfb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/06a2017e-24b4-4dc9-921a-4b93bd3aaa41/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/a7313939-d69e-4204-b0e8-1a6099c48b22/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d70cdc43-79ea-4bff-bd87-d8edaf4e691b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/930b5655-bde9-4f44-a31c-198367190eb8/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/2d1a8bbb-1c9e-4516-9be5-fa3d05693757/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/90c9913d-ade6-45af-8371-c91a9b07964c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/644391b8-e59d-422f-a81c-a7d5428c8efb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/9182c620-b265-491e-bda1-6db153a5fb94/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/931f8416-aa36-4a01-af0d-35b731f898db/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/dbf78f01-a741-4c92-a6e4-668129dca2bb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f4953040-e80b-49cf-a347-1cda77a97190/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d66113bf-3e06-4729-bbce-67fcf0d1848c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/a3f20deb-e126-48f4-a972-3877f69360fe/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ba6724d8-4138-4263-a434-fe7b7acd6b0b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/5ea52fd4-10aa-4a70-9d25-3cbfb56c8bb4/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f5180411-054b-4b76-bb2b-6265981fbe11/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ec4faa35-d0f7-434e-8c25-c3a28b956049/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3a06896d-6a8e-4b61-a124-e0ab0453d07e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/c5140ac3-0a5c-45f1-bf6b-203f02c3c4e4/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/c7cf0c9e-3e48-40bb-81b5-4cc40df5a2a6/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/752778e8-6197-4a13-8900-dcb666ca2bd1/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/e0f5a980-b751-4b81-8425-ac2ecb77259a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ccf02e3a-6d03-44a8-9ec0-b5e33001bbce/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/21bed36c-cb81-407a-86b0-8333e357c59e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/9d0bfaab-7506-41b9-8721-46555c7798df/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/794f593c-f03c-47ee-be57-a177409a1618/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/017d56c9-aaf5-4e1c-b0d5-e016b9f49e46/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0e981fc4-accf-4070-b8d0-9ac279f8e808/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d14e8ade-80d8-4e96-8d47-ed8a5cfbe180/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/cfaa5fac-c17d-4e75-9218-fe6673b3b40d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/c00358da-24f7-451f-95f3-65f3f3d9bf14/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/97be57bb-13de-44c5-8000-9498feb3789b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8725b125-0434-421e-863e-9c94618943f6/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/aa0eccb0-8dd5-48e5-940a-0157ad466072/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/c5d0430c-6ecc-4278-a5a3-3b0e2cb6c6f5/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/000e9616-8763-4add-acff-60754b711c0d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/a1966764-79c0-4adb-a7c7-5372dcbb63f1/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8e40623a-cb2b-406f-a91b-c47f6fb306f9/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/42c98814-fdda-46d1-a4e1-2e2011fb9b65/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0bf69dc7-3925-4825-b00f-8b66d7b30721/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/151adcab-dad2-41e6-883b-a579d726c5bb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/9ac17003-596e-446d-b715-fbc245036803/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/2c0269cb-ad5f-464a-8cd0-227ecf8a77a6/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/7a2dca3f-e337-47fc-aba0-469c4fabeb63/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1a930669-1c02-47d8-bbe0-cf04975b8522/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1a248710-0d91-4aa7-8141-6da939c841e9/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1f83800a-0dbf-410b-954c-e19c2dab1ef8/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/17753682-84c3-4447-866c-ea170fc7b7d5/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d71a7cf9-a684-4b34-a75e-ffb6bf641a7d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/eec764d5-ae8e-4ebf-affb-32082312f42e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/011a6521-23cf-40b6-88b3-990c6ec22a6e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/cf3f675f-e615-4f5e-a595-49332aacdb81/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3df1a69c-85ad-4dc8-9b00-3bd8e4db8383/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3df1a69c-85ad-4dc8-9b00-3bd8e4db8383/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/86c9985d-8949-44d8-9dc6-47a86f993993/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/c2e19663-ef1e-475f-8208-e22473849445/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/e79b4266-bfa9-40da-aef7-d2eb90656d3b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0a8d749e-9df5-4476-9a10-dc1ac86a149c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/acaede2b-1c05-465f-9a33-1c11ac293f11/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/aa6390ec-4752-416b-9b77-034dcc34b17f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/37cc6ec8-b36e-41bd-bc72-4aa6363f0ebc/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/5b9e7746-36eb-4c66-9bcd-1e252699d1f2/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/62de87f1-1257-46c7-9590-99a568115545/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/909ab155-c255-4d08-9918-69b0fcbef647/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ee799336-529d-4b36-9ebc-f2009d21e545/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d3a6e797-2c55-4b35-adf0-4ac763b95808/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d8bb2364-0350-4e2f-9095-0e093c504445/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/04cb4959-84cd-4beb-ae55-59884139603b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0e386f0d-907a-4a3e-9ce8-ae7b3f68d66a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/12531e0d-96ef-4b68-993e-cb4179a2ff29/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1c8935c3-e145-4890-ba64-91735c8dfe4f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/52f1623a-4af8-4065-bf8c-a746dff09fef/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/5b2cb293-249e-46cd-901e-d190dc002e89/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/670e63fb-4dd9-4d17-9ba3-f2c944d45f28/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/9013d098-93e2-4346-9656-6b63c24b440b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b2e761bd-82ea-4350-a752-fa556cef2dd0/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b5843fcf-37a3-44e7-9938-91addefa09fc/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/dbd21a15-b0db-4ae9-a561-fd112aba6fcd/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/eb194df6-c069-4a33-82b6-4f4383877988/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f0223266-f576-40c7-a31d-d2c17c584a46/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/055241ff-dc4f-4743-90be-1c9caa0c900b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1fe7224c-8946-48e9-9d11-c978d0069fdb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3e0ee4c9-8165-42eb-801c-fb26aa2ecf0a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/4b4b9948-7c07-4f07-a1d1-d33b44084cc0/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/72241f70-7f3d-459d-8638-75b3cf6e12ee/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/7b98994d-e50c-409c-ab2a-af1a568c16ad/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/888b0d00-f6a6-4c56-a744-9d5b3b6965f6/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/9467cb72-d11e-4462-804f-c7b34bf895d7/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b1c634dd-aacc-4190-986c-7ace14ed3ec6/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/db41be37-350e-40f7-a3bf-7247e2a11948/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/e31b1fb6-0f38-4c75-bc3f-3373aaaf3571/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f287cbe2-9389-4de0-9bd3-6b8eacf2768c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/01866580-0a27-4fae-8529-595b3d08c3c6/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/098a3e12-9643-417f-b14e-9c0929c21b1e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/449247de-6d8d-44a9-90e1-e54d4ee72137/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/65652ce5-16fd-45f1-b5bb-257b1b95be2c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/889a604d-aa1b-4486-b09c-7d0f9368becb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/89c21f53-1a93-41b4-b0e0-e7233ce40c27/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8c18fdd5-9007-4fb8-85bd-549e21c6ceea/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/97191afc-e552-42a7-a96f-5796e306ae1f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/a74b621b-fb9c-49d4-a7b9-48c702dee154/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ab948d82-e22b-4ec2-a4ae-eb93f55ddaf8/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/adcb5161-3b1e-4b2c-b658-42cdbef64c93/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b05d717d-a4a8-4350-a98e-4e6635271d2d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d5415cbf-418d-45ba-9e6c-05f9385457f0/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/dcc17996-39bf-45d1-8b9d-f66e0b75d693/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/e33108a3-9c4f-4ebe-a031-8304071f6888/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ea3439b4-3ae8-4789-9fb8-acc5745bde0d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f7e73e79-7ee6-42cf-9af2-7ac147c6c78f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/11e9e67b-723d-4320-9481-7df27efd143e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/09699c93-f687-4c58-b6dc-cb8010de7df9/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1cc2db6f-d3e7-425b-8b2a-d1349d3739d5/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/37922c94-880a-4d6f-8070-914087acc09a/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/4a69a160-fe1d-4391-8af1-2d7ac9580953/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/5465ad8f-d9c4-4a4c-b587-23c98d231ae8/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/55c9faad-542c-4c56-b101-f3e21bbfb95f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/96b7e527-d141-442d-babb-fda190233a1e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ce545f6b-c441-4848-a02a-ca8779e52f29/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/e8fcd3b0-0ce8-41f1-abf4-a7283ee40ffc/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f18ae32f-ce31-4946-9704-72e193f5cad2/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/fc5aa3ab-e782-456e-b7e5-f93dfcd325ee/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1a5e85a2-ae4e-411d-ab13-43a3b918f478/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3c337f69-2066-4abe-b9ae-228ddf86bd4b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/56d42ddd-1c3d-4787-a7fe-cc6e9960c875/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/7feb63c0-0210-4bb4-8a52-56849b495b8c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/8ee82bd4-4869-4fad-84c8-68f60f10959f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/95b5c8a5-d62d-4474-ba64-e726faa1bb97/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/a791985b-1b64-4f23-bd2d-be67bdc27577/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/bb8044ba-5367-47de-8c4b-9ca90bd67c4d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/dbcdc939-e87b-45ce-8eb7-3e85d6a71bfa/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/dbfdb19c-5c38-43e2-a500-61426d4fd768/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/fcda8baf-e858-47ca-8e55-e945cebaf838/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/88aa303b-dbb1-40a3-ada7-c138d457df7d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/7b84c12f-6060-4f93-a0cb-6cfbfb0d649f/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d1510dc5-ac8d-497d-9ad9-c9fdec93796d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/484e6686-0062-4926-ba81-0b81353b4ed0/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b538b140-c1a4-4188-a160-b76e140b4ad5/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0e73bf05-13a0-41aa-9b57-00d6670b4952/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/f0f53e57-7dda-469a-9513-273c8d2bb514/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/2d81292d-7c5a-41a2-9dfd-9d434a413c63/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3bf52b81-9940-4fd2-b326-ef90cc077272/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/864efb77-e149-4fd0-a058-976c7c5e492e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/07f5f5a5-ea09-4e94-88fa-d9ee9060b458/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/eaf58c74-5f43-48c3-9de5-2a0b94e1f8a2/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/3e1331ed-fc20-49d2-a55e-c3ced0e47c56/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/34372e0c-47ab-4f95-b136-2de09c21b8ed/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/fc5269e7-6172-4007-a47f-a183d8d7f3cd/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/cf1d7785-935c-4d28-a1f9-8d94321c6fba/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/9fcb5110-8b0e-4c6f-9764-b38dbd6e0112/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/00f0c0dc-7af4-441a-ab9e-cf5bb78fe220/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/6805ec29-0e17-4da2-ba12-1f170bc0ce45/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/d84859df-c614-4135-a55d-b9f95a19e2ff/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/ca2ff2db-806b-499f-b3b1-c0a5e1428a94/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/b0b0828d-dd3b-4c9f-a8c7-366f005590cb/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/696d69a2-8c49-4bd8-82c7-2cc6b14d3b28/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/770dbe6d-420f-4860-953a-69e763aafa00/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/00023174-20f6-4e58-9b10-65fe054bfbc4/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/02ffc18d-1bbe-4bd7-b177-3c79082a6a04/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0300c219-2ad6-47af-bb68-e3e0f241c34b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/04e8e3bd-0cff-4a68-98e1-b0f412c46611/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/059b8c80-052f-419b-9baa-26b62f7405cc/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/071ae338-60be-4a21-9437-cb15ec7ab4e9/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0748d91a-ac32-4b37-a27f-89ee68e8753b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0843ed95-3f00-4737-8f9c-af83b0fb92b3/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/08c3aa53-d862-41c9-adb1-fa10bd6a0fdd/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/08ffb721-d5fc-4675-9cd7-539893d17d8c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/09c8e48d-16c9-4fd6-aeec-0b87fdfee159/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0ad29a62-01cb-4f96-8643-a7eab0eb84f7/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0affd79b-f5df-4a61-a22f-2dc7cbab569d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0bba65a5-15b9-4da0-bf96-7ea879bf7081/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0c8acf74-1b27-4545-b46c-54327dc4f38e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0e88be07-4898-432f-b634-5a5df787416d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/0f0e7abb-5d45-4f31-9848-6b27f7fbf76d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1058614e-b9be-409b-962c-8f541cba0dd0/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/120ba62c-5a91-4c6a-a6c9-673d2baa35fe/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/13953056-ace8-4a1b-9b7d-949ed1798c0d/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/13c42cc5-eb6b-4587-8581-c55813bcf37e/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/13d16dbe-77f4-4a05-b0a0-ee6922941e0b/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/145f8d81-1f17-4cc4-b35c-44da350be2f5/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/15654083-1f64-4b60-bb53-3eb916141c3c/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/172fd7df-cb66-4aa9-a1ce-fbccf26d05f2/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/176993a8-22ac-44f1-a735-af004fd7d8dd/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/17bd5e20-9941-4177-b2a6-8ff0e932abda/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/17d56cfe-ca05-4de2-9648-ffbb3d27bb76/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1842af2e-44f8-4429-b840-5377904a7620/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/18cbcbad-b87b-4af7-9389-5c3cc19b6fc7/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/192be4b6-5a8a-42bd-8ec4-580c063d7f21/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1a487867-0157-4e8c-a568-aeeea80fce00/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1ada54d4-e64a-4e45-9d31-1706a6ada796/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1b65d0dc-43dd-4710-aa4b-e69aa3066982/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1b76e39d-7f17-4fb0-b12c-b68e1301a559/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1bd1306f-8b8f-4515-93b9-0438f6ff8130/logo?v=4&text=$mu","https://dynamic.brandcrowd.com/asset/logo/1ca25ddf-40de-40fa-b93d-e29af3e46c05/logo?v=4&text=$mu",
];
$r = $bot[rand(0, count($bot)-1)];
$inputMediaDocumentExternal = ['_' => 'inputMediaDocumentExternal', 'url' => $r];
$idd = $r;
$idd = str_replace("https://dynamic.brandcrowd.com/asset/logo/","",$idd);
$idd = str_replace("http://dynamic.brandcrowd.com/asset/logo/","",$idd);
$idd = str_replace("/logo?v=4&text=$mu","",$idd);
$this->messages->sendMedia(['peer' => $peer,
'media' => $inputMediaDocumentExternal ,
'reply_to_msg_id' => $messageId,
'message' => "𝐘𝐨𝐮𝐫 𝐋𝐨𝐠𝐨 𝐖𝐚𝐬 𝐏𝐫𝐞𝐩𝐚𝐫𝐞𝐝 𝐚𝐧𝐝 𝐒𝐮𝐛𝐦𝐢𝐭𝐭𝐞𝐝 𝐓𝐨 𝐘𝐨𝐮 . . .
𝐈𝐃 : `$idd`", 'parse_mode' => 'markdown']);
$inputMediaPhotoExternal = ['_' => 'inputMediaPhotoExternal', 'url' => $r];
$this->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaPhotoExternal ,'reply_to_msg_id' => $messageId,'message' => "𝐘𝐨𝐮𝐫 𝐋𝐨𝐠𝐨 𝐖𝐚𝐬 𝐏𝐫𝐞𝐩𝐚𝐫𝐞𝐝 𝐚𝐧𝐝 𝐒𝐮𝐛𝐦𝐢𝐭𝐭𝐞𝐝 𝐓𝐨 𝐘𝐨𝐮 . . ."]);
}
         elseif (preg_match("/^[\/\#\!]?(fafont) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(fafont) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $matn = strtoupper("$m[2]");
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ʙᴜɪʟᴅɪɴɢ 10 ғᴀʀsɪ ғᴏɴᴛs ғᴏʀ ( `$m[2]` ) ɴᴀᴍᴇ . . . ! ", 'parse_mode' => "MarkDown"]);
            $fa = ['آ', 'ا', 'ب', 'پ', 'ت', 'ث', 'ج', 'چ', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'ژ', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ک', 'گ', 'ل', 'م', 'ن', 'و', 'ه', 'ی'];
            $_a = ['آ', 'اَِ', 'بَِ', 'پَِـَِـ', 'تَِـ', 'ثَِ', 'جَِ', 'چَِ', 'حَِـَِ', 'خَِ', 'دَِ', 'ذَِ', 'رَِ', 'زَِ', 'ژَِ', 'سَِــَِ', 'شَِـَِ', 'صَِ', 'ضَِ', 'طَِ', 'ظَِ', 'عَِ', 'غَِ', 'فَِ', 'قَِ', 'ڪَِــ', 'گَِــ', 'لَِ', 'مَِــَِ', 'نَِ', 'وَِ', 'هَِ', 'یَِ'];
            $_b = ['آ', 'ا', 'بـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'پـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'تـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'ثـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'جـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'چـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'حـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌', 'خـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'د۪ٜ', 'ذ۪ٜ', 'ر۪ٜ', 'ز۪ٜ‌', 'ژ۪ٜ', 'سـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌', 'شـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'صـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'ضـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'طـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌', 'ظـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'عـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌', 'غـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'فـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'قـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌', 'کـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'گـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌', 'لـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌', 'مـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ‌', 'نـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'و', 'هـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ', 'یـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜـ۪ٜ'];
            $_c = ['آ', 'ا', 'بـــ', 'پــ', 'تـــ', 'ثــ', 'جــ', 'چــ', 'حــ', 'خــ', 'دّ', 'ذّ', 'رّ', 'زّ', 'ژّ', 'ســ', 'شــ', 'صــ', 'ضــ', 'طــ', 'ظــ', 'عــ', 'غــ', 'فــ', 'قــ', 'کــ', 'گــ', 'لــ', 'مـــ', 'نـــ', 'وّ', 'هــ', 'یـــ'];
            $_d = ['آ', 'ا', 'بـ﹏ـ', 'پـ﹏ـ', 'تـ﹏ـ', 'ثـ﹏ــ', 'جـ﹏ــ', 'چـ﹏ـ', 'حـ﹏ـ', 'خـ﹏ـ', 'د', 'ذ', 'ر', 'ز', 'ژ', 'سـ﹏ـ', 'شـ﹏ـ', 'صـ﹏ــ', 'ضـ﹏ـ', 'طـ﹏ـ', 'ظـ﹏ــ', 'عـ﹏ـ', 'غـ﹏ـ', 'فـ﹏ـ', 'قـ﹏ـ', 'کـ﹏ـ', 'گـ﹏ـ', 'لـ﹏ــ', 'مـ﹏ـ', 'نـ﹏ـ', 'و', 'هـ﹏ـ', 'یـ﹏ـ'];
            $_e = ['آ', 'ا', 'ب̈́ـ̈́ـ̈́ـ̈́ـ', 'پ̈́ـ̈́ـ̈́ـ̈́ـ', 'ت̈́ـ̈́ـ̈́ـ̈́ـ', 'ث̈́ـ̈́ـ̈́ـ̈́ـ', 'ج̈́ـ̈́ـ̈́ـ̈́ـ', 'چـ̈́ـ̈́ـ̈́ـ', 'ح̈́ـ̈́ـ̈́ـ̈́ـ', 'خـ̈́ـ̈́ـ̈́ـ', 'د', 'ذ', 'ر', 'ز', 'ژ', 'سـ̈́ـ̈́ـ̈́ـ', 'شـ̈́ـ̈́ـ̈́ـ', 'ص̈́ـ̈́ـ̈́ـ̈́ـ', 'ض̈́ـ̈́ـ̈́ـ̈́ـ', 'ط̈́ـ̈́ـ̈́ـ̈́ـ', 'ظـ̈́ـ̈́ـ̈́ـ̈́ـ', 'ع̈́ـ̈́ـ̈́ـ̈́ـ', 'غ̈́ـ̈́ـ̈́ـ̈́ـ', 'فـ̈́ـ̈́ـ̈́ـ̈́ـ', 'قـ̈́ـ̈́ـ̈́ـ', 'کـ̈́ـ̈́ـ̈́ـ', 'گـ̈́ـ̈́ـ̈́ـ̈́ـ', 'ل̈́ـ̈́ـ̈́ـ̈́ـ', 'م̈́ـ̈́ـ̈́ـ̈́ـ', 'ن̈́ـ̈́ـ̈́ـ̈́ـ', 'و', 'ه̈́ـ̈́ـ̈́ـ̈́ـ', 'ی̈́ـ̈́ـ̈́ـ̈́ـ'];
            $_f = ['آ', 'اؒؔ', 'بـ͜͡ــؒؔـ͜͝ـ', 'پـ͜͡ــؒؔـ͜͝ـ', 'تـ͜͡ــؒؔـ͜͝ـ', 'ثـ͜͡ــؒؔـ͜͝ـ', 'جـ͜͡ــؒؔـ͜͝ـ', 'چـ͜͡ــؒؔـ͜͝ـ', 'حـ͜͡ــؒؔـ͜͝ـ', 'خـ͜͡ــؒؔـ͜͝ـ', 'د۠۠', 'ذ', 'ر', 'ز', 'ژ', 'سـ͜͡ــؒؔـ͜͝ـ', 'شـ͜͡ــؒؔـ͜͝ـ', 'صـ͜͡ــؒؔـ͜͝ـ', 'ضـ͜͡ــؒؔـ͜͝ـ', 'طـ͜͡ــؒؔـ͜͝ـ', 'ظـ͜͡ــؒؔـ͜͝ـ', 'عـ͜͡ــؒؔـ͜͝ـ', 'غـ͜͡ــؒؔـ͜͝ـ', 'فـ͜͡ــؒؔـ͜͝ـ', 'قـ͜͡ــؒؔـ͜͝ـ', 'کـ͜͡ــؒؔـ͜͝ـ', 'گـ͜͡ــؒؔـ͜͝ـ', 'لـ͜͡ــؒؔـ͜͝ـ', 'مـ͜͡ــؒؔـ͜͝ـ', 'نـ͜͡ــؒؔـ͜͝ـ', 'وۘۘ', 'هـ͜͡ــؒؔـ͜͝ـ', 'یـ͜͡ــؒؔـ͜͝ـ'];
            $_g = ['❀آ', 'ا', 'بـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'پـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'تـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'ثـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'جـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'چـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'حैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'خـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــ', '❀د', 'ذै', 'رؒؔ', 'ز۪ٜ❀', '❀ژै', 'سـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'شـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'صैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'ضैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'طैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'ظैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'عـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'غـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'فـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'قـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'ڪैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'گـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'لـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'مـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'نـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'وَّ', 'هـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ', 'یـैـ۪ٜـ۪ٜـ۪ٜ❀͜͡ــؒؔ'];
            $_h = ['آٰٖـٰٖ℘ـَ͜✾ـ', 'اٰٖـٰٖ℘ـَ͜✾ـ', 'بٰٖـٰٖ℘ـَ͜✾ـ', 'پٰٖـٰٖ℘ـَ͜✾ـ', 'تٰٖـٰٖ℘ـَ͜✾ـ', 'ثٰٖـٰٖ℘ـَ͜✾ـ', 'جٰٖـٰٖ℘ـَ͜✾ـ', 'چٰٖـٰٖ℘ـَ͜✾ـ', 'حٰٖـٰٖ℘ـَ͜✾ـ', 'خٰٖـٰٖ℘ـَ͜✾ـ', 'دٰٖـٰٖ℘ـَ͜✾ـ', 'ذٰٖـٰٖ℘ـَ͜✾ـ', 'رٰٖـٰٖ℘ـَ͜✾ـ', 'زٰٖـٰٖ℘ـَ͜✾ـ', 'ژٰٖـٰٖ℘ـَ͜✾ـ', 'سٰٖـٰٖ℘ـَ͜✾ـ', 'شٰٖـٰٖ℘ـَ͜✾ـ', 'صٰٖـٰٖ℘ـَ͜✾ـ', 'ضٰٖـٰٖ℘ـَ͜✾ـ', 'طٰٖـٰٖ℘ـَ͜✾ـ', 'ظٰٖـٰٖ℘ـَ͜✾ـ', 'عٰٖـٰٖ℘ـَ͜✾ـ', 'غٰٖـٰٖ℘ـَ͜✾ـ', 'فٰٖـٰٖ℘ـَ͜✾ـ', 'قٰٖـٰٖ℘ـَ͜✾ـ', 'کٰٖـٰٖ℘ـَ͜✾ـ', 'گٰٖـٰٖ℘ـَ͜✾ـ', 'لٰٖـٰٖ℘ـَ͜✾ـ', 'مٰٖـٰٖ℘ـَ͜✾ـ', 'نٰٖـٰٖ℘ـَ͜✾ـ', 'وٰٖـٰٖ℘ـَ͜✾ـ', 'هٰٖـٰٖ℘ـَ͜✾ـ', 'یٰٖـٰٖ℘ـَ͜✾ـ'];
            $_i = ['آ✺۠۠➤', 'ا✺۠۠➤', 'بـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'پـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'تـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'ث✺۠۠➤', 'جـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'چـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'حـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'خـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'د✺۠۠➤', 'ذ✺۠۠➤', 'ر✺۠۠➤', 'ز✺۠۠➤', 'ژ✺۠۠➤', 'سـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'شـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'صـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'ضـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'طـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'ظـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'عـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'غـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'فـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'قـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'کـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'گـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'لـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'مـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'نـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤', 'و✺۠۠➤', 'ه➤', 'یـ͜͝ـ͜͝ـ͜͝ـ✺۠۠➤'];
            $_j = ['آ✭', 'ا✭', 'بـ͜͡ـ͜͡✭', 'پـ͜͡ـ͜͡✭', 'تـ͜͡ـ͜͡✭', 'ثـ͜͡ـ͜͡ـ͜͡✭', 'جـ͜͡ـ͜͡✭', 'چــ͜͡ـ͜͡✭', 'حـ͜͡ـ͜͡✭', 'خــ͜͡ـ͜͡✭', 'د✭', 'ذ✭', 'ر✭', 'ز͜͡✭', 'ـ͜͡ژ͜͡✭', 'ســ͜͡ـ͜͡✭', 'شـ͜͡ـ͜͡ـ͜͡✭', 'صـ͜͡ـ͜͡✭', 'ضـ͜͡ـ͜͡✭', 'طـ͜͡ـ͜͡✭', 'ظـ͜͡ـ͜͡✭', 'عـ͜͡ـ͜͡✭', 'غـ͜͡ـ͜͡✭', 'فــ͜͡ـ͜͡✭', 'قـ͜͡ـ͜͡ـ͜͡✭', 'ڪــ͜͡ـ͜͡✭', 'گـ͜͡ـ͜͡✭', 'لـ͜͡ـ͜͡ـ͜͡✭', 'مـ͜͡ـ͜͡ـ͜͡✭', 'نـ͜͡ـ͜͡✭', 'ـ͜͡و͜͡ـ͜͡✭', 'هـ͜͡ـ͜͡ـ͜͡✭', 'یـ͜͡ـ͜͡✭'];

            $nn = str_replace($fa, $_a, $matn);
            $a = str_replace($fa, $_b, $matn);
            $b = str_replace($fa, $_c, $matn);
            $c = str_replace($fa, $_d, $matn);
            $d = str_replace($fa, $_e, $matn);
            $e = str_replace($fa, $_f, $matn);
            $f = str_replace($fa, $_g, $matn);
            $g = str_replace($fa, $_h, $matn);
            $h = str_replace($fa, $_i, $matn);
            $i = str_replace($fa, $_j, $matn);
            $readyfont = "
1 - `$nn`
2 - `$a`
3 - `$b`
4 - `$c`
5 - `$d`
6 - `$e`
7 - `$f`
8 - `$g`
9 - `$h`
10 - `$i`";
            yield  $this->messages->sendMessage([
              'peer' => $peer, 'message' =>
              "$readyfont

» ʏᴏᴜʀ ғᴀʀsɪ ғᴏɴᴛs ɪs ʀᴇᴀᴅʏ. ᴛᴏᴜᴄʜ ᴛᴏ ᴄᴏᴘʏ !",
              'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId,
            ]);
          }
        } elseif (preg_match("/^[\/\#\!]?(font) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(font) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $matn = strtoupper("$m[2]");
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ʙᴜɪʟᴅɪɴɢ 125 ғᴏɴᴛs ғᴏʀ ( `$m[2]` ) ɴᴀᴍᴇ . . . ! ", 'parse_mode' => "MarkDown"]);
            $mu = str_replace(" ", "%20", $m[2]);
            $fontss = file_get_contents("https://api.codebazan.ir/font/?text=" . $mu);
            $fontha = json_decode($fontss, true);
            $result = $fontha['result'];

            $Eng = ['Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M'];
            $Font_0 = ['𝐐', '𝐖', '𝐄', '𝐑', '𝐓', '𝐘', '𝐔', '𝐈', '??', '𝐏', '𝐀', '𝐒', '𝐃', '𝐅', '??', '𝐇', '𝐉', '𝐊', '𝐋', '𝐙', '𝐗', '𝐂', '𝐕', '𝐁', '𝐍', '𝐌'];
            $Font_1 = ['𝑸', '𝑾', '𝑬', '𝑹', '𝑻', '𝒀', '𝑼', '𝑰', '𝑶', '𝑷', '𝑨', '𝑺', '𝑫', '𝑭', '𝑮', '𝑯', '𝑱', '𝑲', '𝑳', '𝒁', '𝑿', '𝑪', '𝑽', '𝑩', '𝑵', '𝑴'];
            $Font_2 = ['𝑄', '𝑊', '𝐸', '𝑅', '𝑇', '𝑌', '𝑈', '𝐼', '𝑂', '𝑃', '𝐴', '𝑆', '𝐷', '𝐹', '𝐺', '𝐻', '𝐽', '𝐾', '𝐿', '𝑍', '𝑋', '𝐶', '𝑉', '𝐵', '𝑁', '𝑀'];
            $Font_3 = ['𝗤', '𝗪', '𝗘', '𝗥', '𝗧', '𝗬', '𝗨', '𝗜', '𝗢', '𝗣', '𝗔', '𝗦', '𝗗', '𝗙', '??', '𝗛', '𝗝', '𝗞', '𝗟', '𝗭', '𝗫', '𝗖', '𝗩', '𝗕', '𝗡', '𝗠'];
            $Font_4 = ['𝖰', '𝖶', '𝖤', '𝖱', '𝖳', '𝖸', '𝖴', '𝖨', '??', '𝖯', '𝖠', '𝖲', '𝖣', '𝖥', '𝖦', '𝖧', '𝖩', '𝖪', '𝖫', '𝖹', '𝖷', '𝖢', '𝖵', '𝖡', '𝖭', '𝖬'];
            $Font_5 = ['𝕼', '??', '𝕰', '𝕽', '𝕵', '𝚼', '𝖀', '𝕿', '𝕺', '𝕻', '𝕬', '𝕾', '𝕯', '𝕱', '𝕲', '𝕳', '𝕴', '𝕶', '𝕷', '𝖅', '𝖃', '𝕮', '𝖁', '𝕭', '𝕹', '𝕸'];
            $Font_6 = ['𝔔', '𝔚', '𝔈', 'ℜ', '𝔍', 'ϒ', '𝔘', '𝔗', '𝔒', '𝔓', '𝔄', '𝔖', '𝔇', '𝔉', '𝔊', 'ℌ', 'ℑ', '𝔎', '𝔏', 'ℨ', '𝔛', 'ℭ', '𝔙', '𝔅', '𝔑', '𝔐'];
            $Font_7 = ['𝙌', '𝙒', '𝙀', '𝙍', '𝙏', '𝙔', '𝙐', '𝙄', '𝙊', '𝙋', '𝘼', '𝙎', '𝘿', '𝙁', '𝙂', '𝙃', '𝙅', '??', '𝙇', '𝙕', '𝙓', '𝘾', '𝙑', '𝘽', '𝙉', '𝙈'];
            $Font_8 = ['𝘘', '𝘞', '𝘌', '𝘙', '𝘛', '𝘠', '𝘜', '𝘐', '𝘖', '𝘗', '𝘈', '𝘚', '𝘋', '𝘍', '𝘎', '𝘏', '𝘑', '𝘒', '𝘓', '𝘡', '𝘟', '𝘊', '𝘝', '𝘉', '𝘕', '𝘔'];
            $Font_9 = ['Q̶̶', 'W̶̶', 'E̶̶', 'R̶̶', 'T̶̶', 'Y̶̶', 'U̶̶', 'I̶̶', 'O̶̶', 'P̶̶', 'A̶̶', 'S̶̶', 'D̶̶', 'F̶̶', 'G̶̶', 'H̶̶', 'J̶̶', 'K̶̶', 'L̶̶', 'Z̶̶', 'X̶̶', 'C̶̶', 'V̶̶', 'B̶̶', 'N̶̶', 'M̶̶'];
            $Font_10 = ['Q̷̷', 'W̷̷', 'E̷̷', 'R̷̷', 'T̷̷', 'Y̷̷', 'U̷̷', 'I̷̷', 'O̷̷', 'P̷̷', 'A̷̷', 'S̷̷', 'D̷̷', 'F̷̷', 'G̷̷', 'H̷̷', 'J̷̷', 'K̷̷', 'L̷̷', 'Z̷̷', 'X̷̷', 'C̷̷', 'V̷̷', 'B̷̷', 'N̷̷', 'M̷̷'];
            $Font_11 = ['Q͟͟', 'W͟͟', 'E͟͟', 'R͟͟', 'T͟͟', 'Y͟͟', 'U͟͟', 'I͟͟', 'O͟͟', 'P͟͟', 'A͟͟', 'S͟͟', 'D͟͟', 'F͟͟', 'G͟͟', 'H͟͟', 'J͟͟', 'K͟͟', 'L͟͟', 'Z͟͟', 'X͟͟', 'C͟͟', 'V͟͟', 'B͟͟', 'N͟͟', 'M͟͟'];
            $Font_12 = ['Q͇͇', 'W͇͇', 'E͇͇', 'R͇͇', 'T͇͇', 'Y͇͇', 'U͇͇', 'I͇͇', 'O͇͇', 'P͇͇', 'A͇͇', 'S͇͇', 'D͇͇', 'F͇͇', 'G͇͇', 'H͇͇', 'J͇͇', 'K͇͇', 'L͇͇', 'Z͇͇', 'X͇͇', 'C͇͇', 'V͇͇', 'B͇͇', 'N͇͇', 'M͇͇'];
            $Font_13 = ['Q̤̤', 'W̤̤', 'E̤̤', 'R̤̤', 'T̤̤', 'Y̤̤', 'Ṳ̤', 'I̤̤', 'O̤̤', 'P̤̤', 'A̤̤', 'S̤̤', 'D̤̤', 'F̤̤', 'G̤̤', 'H̤̤', 'J̤̤', 'K̤̤', 'L̤̤', 'Z̤̤', 'X̤̤', 'C̤̤', 'V̤̤', 'B̤̤', 'N̤̤', 'M̤̤'];
            $Font_14 = ['Q̰̰', 'W̰̰', 'Ḛ̰', 'R̰̰', 'T̰̰', 'Y̰̰', 'Ṵ̰', 'Ḭ̰', 'O̰̰', 'P̰̰', 'A̰̰', 'S̰̰', 'D̰̰', 'F̰̰', 'G̰̰', 'H̰̰', 'J̰̰', 'K̰̰', 'L̰̰', 'Z̰̰', 'X̰̰', 'C̰̰', 'V̰̰', 'B̰̰', 'N̰̰', 'M̰̰'];
            $Font_15 = ['디', '山', '乇', '尺', '亇', '丫', '凵', '工', '口', 'ㄗ', '闩', '丂', '刀', '下', '彑', '⼶', '亅', '片', '乚', '乙', '乂', '亡', 'ム', '乃', '力', '从'];
            $Font_16 = ['ዓ', 'ሠ', 'ይ', 'ዩ', 'ፐ', 'ሃ', 'ሀ', 'ፗ', 'ዐ', 'የ', 'ል', 'ና', 'ሏ', 'ፑ', 'ፘ', 'ዘ', 'ጋ', 'ኸ', 'ረ', 'ጓ', 'ጰ', 'ር', 'ህ', 'ፎ', 'በ', 'ጠ'];
            $Font_17 = ['Ꭷ', 'Ꮃ', 'Ꭼ', 'Ꮢ', 'Ꭲ', 'Ꭹ', 'Ꮜ', 'Ꮖ', 'Ꮻ', 'Ꮲ', 'Ꭺ', 'Ꮪ', 'Ꭰ', 'Ꮀ', 'Ꮐ', 'Ꮋ', 'Ꭻ', 'Ꮶ', 'Ꮮ', 'Ꮓ', 'Ꮱ', 'Ꮯ', 'Ꮩ', 'Ᏼ', 'N', 'Ꮇ'];
            $Font_18 = ['Ǫ', 'Ѡ', 'Σ', 'Ʀ', 'Ϯ', 'Ƴ', 'Ʋ', 'Ϊ', 'Ѳ', 'Ƥ', 'Ѧ', 'Ƽ', 'Δ', 'Ӻ', 'Ǥ', 'ⴼ', 'Ɉ', 'Ҟ', 'Ɫ', 'Ⱬ', 'Ӽ', 'Ҁ', 'Ѵ', 'Ɓ', 'Ɲ', 'ᛖ'];
            $Font_19 = ['ꐎ', 'ꅐ', 'ꂅ', 'ꉸ', 'ꉢ', 'ꌦ', 'ꏵ', 'ꀤ', 'ꏿ', 'ꉣ', 'ꁲ', 'ꌗ', 'ꅓ', 'ꊰ', 'ꁅ', 'ꍬ', 'ꀭ', 'ꂪ', '꒒', 'ꏣ', 'ꉧ', 'ꊐ', 'ꏝ', 'ꃃ', 'ꊮ', 'ꂵ'];
            $Font_20 = ['ᘯ', 'ᗯ', 'ᕮ', 'ᖇ', 'ᙢ', 'ᖻ', 'ᑌ', 'ᖗ', 'ᗝ', 'ᑭ', 'ᗩ', 'ᔕ', 'ᗪ', 'ᖴ', 'ᘜ', 'ᕼ', 'ᒍ', 'ᖉ', 'ᒐ', 'ᘔ', '᙭', 'ᑕ', 'ᕓ', 'ᗷ', 'ᘉ', 'ᗰ'];
            $Font_21 = ['ᑫ', 'ᗯ', 'ᗴ', 'ᖇ', 'Ꭲ', 'Ꭹ', 'ᑌ', 'Ꮖ', 'ᝪ', 'ᑭ', 'ᗩ', 'ᔑ', 'ᗞ', 'ᖴ', 'Ꮐ', 'ᕼ', 'ᒍ', 'Ꮶ', 'Ꮮ', 'Ꮓ', '᙭', 'ᑕ', 'ᐯ', 'ᗷ', 'ᑎ', 'ᗰ'];
            $Font_22 = ['ℚ', 'Ꮤ', '℮', 'ℜ', 'Ƭ', 'Ꮍ', 'Ʋ', 'Ꮠ', 'Ꮎ', '⅌', 'Ꭿ', 'Ꮥ', 'ⅅ', 'ℱ', 'Ꮹ', 'ℋ', 'ℐ', 'Ӄ', 'ℒ', 'ℤ', 'ℵ', 'ℭ', 'Ꮙ', 'Ᏸ', 'ℕ', 'ℳ'];
            $Font_23 = ['Ԛ', 'ᚠ', 'ᛊ', 'ᚱ', 'ᛠ', 'ᚴ', 'ᛘ', 'ᛨ', 'θ', 'ᚹ', 'ᚣ', 'ᛢ', 'ᚦ', 'ᚫ', 'ᛩ', 'ᚻ', 'ᛇ', 'ᛕ', 'ᚳ', 'Z', 'ᚷ', 'ᛈ', 'ᛉ', 'ᛒ', 'ᚺ', 'ᚥ'];
            $Font_24 = ['𝓠', '𝓦', '𝓔', '𝓡', '𝓣', '𝓨', '𝓤', '𝓘', '𝓞', '𝓟', '𝓐', '𝓢', '𝓓', '𝓕', '𝓖', '𝓗', '𝓙', '𝓚', '𝓛', '𝓩', '𝓧', '𝓒', '𝓥', '𝓑', '𝓝', '𝓜'];
            $Font_25 = ['𝒬', '𝒲', 'ℰ', 'ℛ', '𝒯', '𝒴', '𝒰', 'ℐ', '𝒪', '𝒫', '𝒜', '𝒮', '??', 'ℱ', '𝒢', 'ℋ', '𝒥', '𝒦', 'ℒ', '𝒵', '𝒳', '𝒞', '𝒱', 'ℬ', '𝒩', 'ℳ'];
            $Font_26 = ['ℚ', '𝕎', '𝔼', 'ℝ', '𝕋', '𝕐', '𝕌', '𝕀', '𝕆', 'ℙ', '𝔸', '𝕊', '𝔻', '𝔽', '𝔾', 'ℍ', '??', '𝕂', '𝕃', 'ℤ', '𝕏', 'ℂ', '𝕍', '𝔹', 'ℕ', '𝕄'];
            $Font_27 = ['Ｑ', 'Ｗ', 'Ｅ', 'Ｒ', 'Ｔ', 'Ｙ', 'Ｕ', 'Ｉ', 'Ｏ', 'Ｐ', 'Ａ', 'Ｓ', 'Ｄ', 'Ｆ', 'Ｇ', 'Ｈ', 'Ｊ', 'Ｋ', 'Ｌ', 'Ｚ', 'Ｘ', 'Ｃ', 'Ｖ', 'Ｂ', 'Ｎ', 'Ｍ'];
            $Font_28 = ['ǫ', 'ᴡ', 'ᴇ', 'ʀ', 'ᴛ', 'ʏ', 'ᴜ', 'ɪ', 'ᴏ', 'ᴘ', 'ᴀ', 's', 'ᴅ', 'ғ', 'ɢ', 'ʜ', 'ᴊ', 'ᴋ', 'ʟ', 'ᴢ', 'x', 'ᴄ', 'ᴠ', 'ʙ', 'ɴ', 'ᴍ'];
            $Font_29 = ['𝚀', '𝚆', '𝙴', '𝚁', '𝚃', '𝚈', '𝚄', '𝙸', '𝙾', '𝙿', '𝙰', '𝚂', '𝙳', '𝙵', '𝙶', '𝙷', '𝙹', '𝙺', '𝙻', '𝚉', '𝚇', '𝙲', '𝚅', '𝙱', '𝙽', '𝙼'];
            $Font_30 = ['ᵟ', 'ᵂ', 'ᴱ', 'ᴿ', 'ᵀ', 'ᵞ', 'ᵁ', 'ᴵ', 'ᴼ', 'ᴾ', 'ᴬ', 'ˢ', 'ᴰ', 'ᶠ', 'ᴳ', 'ᴴ', 'ᴶ', 'ᴷ', 'ᴸ', 'ᶻ', 'ˣ', 'ᶜ', 'ⱽ', 'ᴮ', 'ᴺ', 'ᴹ'];
            $Font_31 = ['Ⓠ', 'Ⓦ', 'Ⓔ', 'Ⓡ', 'Ⓣ', 'Ⓨ', 'Ⓤ', 'Ⓘ', 'Ⓞ', 'Ⓟ', 'Ⓐ', 'Ⓢ', 'Ⓓ', 'Ⓕ', 'Ⓖ', 'Ⓗ', 'Ⓙ', 'Ⓚ', 'Ⓛ', 'Ⓩ', 'Ⓧ', 'Ⓒ', 'Ⓥ', 'Ⓑ', 'Ⓝ', 'Ⓜ️'];
            $Font_32 = ['🅀', '🅆', '🄴', '🅁', '🅃', '??', '🅄', '🄸', '🄾', '🄿', '🄰', '🅂', '🄳', '🄵', '🄶', '🄷', '🄹', '🄺', '🄻', '🅉', '🅇', '🄲', '🅅', '🄱', '🄽', '🄼'];
            $Font_33 = ['🅠', '🅦', '🅔', '🅡', '🅣', '🅨', '🅤', '🅘', '🅞', '🅟', '🅐', '🅢', '🅓', '🅕', '🅖', '🅗', '🅙', '🅚', '🅛', '🅩 ', '🅧', '🅒', '🅥', '🅑', '🅝', '🅜'];
            $Font_34 = ['🆀', '🆆', '🅴', '🆁', '🆃', '🆈', '🆄', '🅸', '🅾️', '🅿️', '🅰️', '🆂', '🅳', '🅵', '🅶', '🅷', '🅹', '🅺', '🅻', '🆉', '🆇', '🅲', '🆅', '🅱️', '🅽', '🅼'];
            $Font_35 = ['🇶 ', '🇼 ', '🇪 ', '🇷 ', '🇹 ', '🇾 ', '🇺 ', '🇮 ', '🇴 ', '🇵 ', '🇦 ', '🇸 ', '🇩 ', '🇫 ', '🇬 ', '🇭 ', '🇯 ', '🇰 ', '🇱 ', '🇿 ', '🇽 ', '🇨 ', '🇻 ', '🇧 ', '🇳 ', '🇲 '];
            //
            $nn = str_replace($Eng, $Font_0, $matn);
            $a = str_replace($Eng, $Font_1, $matn);
            $b = str_replace($Eng, $Font_2, $matn);
            $c = trim(str_replace($Eng, $Font_3, $matn));
            $d = str_replace($Eng, $Font_4, $matn);
            $e = str_replace($Eng, $Font_5, $matn);
            $f = str_replace($Eng, $Font_6, $matn);
            $g = str_replace($Eng, $Font_7, $matn);
            $h = str_replace($Eng, $Font_8, $matn);
            $i = str_replace($Eng, $Font_9, $matn);
            $j = str_replace($Eng, $Font_10, $matn);
            $k = str_replace($Eng, $Font_11, $matn);
            $l = str_replace($Eng, $Font_12, $matn);
            $m = str_replace($Eng, $Font_13, $matn);
            $n = str_replace($Eng, $Font_14, $matn);
            $o = str_replace($Eng, $Font_15, $matn);
            $p = str_replace($Eng, $Font_16, $matn);
            $q = str_replace($Eng, $Font_17, $matn);
            $r = str_replace($Eng, $Font_18, $matn);
            $s = str_replace($Eng, $Font_19, $matn);
            $t = str_replace($Eng, $Font_20, $matn);
            $u = str_replace($Eng, $Font_21, $matn);
            $v = str_replace($Eng, $Font_22, $matn);
            $w = str_replace($Eng, $Font_23, $matn);
            $x = str_replace($Eng, $Font_24, $matn);
            $y = str_replace($Eng, $Font_25, $matn);
            $z = str_replace($Eng, $Font_26, $matn);
            $aa = str_replace($Eng, $Font_27, $matn);
            $ac = str_replace($Eng, $Font_28, $matn);
            $ad = str_replace($Eng, $Font_29, $matn);
            $af = str_replace($Eng, $Font_30, $matn);
            $ag = str_replace($Eng, $Font_31, $matn);
            $ah = str_replace($Eng, $Font_32, $matn);
            $am = str_replace($Eng, $Font_33, $matn);
            $as = str_replace($Eng, $Font_34, $matn);
            $pol = str_replace($Eng, $Font_35, $matn);
            $readyfont = "1 - `$result[1]`
2 - `$result[2]`
3 - `$result[3]`
4 - `$result[4]`
5 - `$result[5]`
6 - `$result[6]`
7 - `$result[7]`
8 - `$result[8]`
9 - `$result[9]`
10 - `$result[10]`
11 - `$result[11]`
12 - `$result[12]`
13 - `$result[13]`
14 - `$result[14]`
15 - `$result[15]`
16 - `$result[16]`
17 - `$result[17]`
18 - `$result[18]`
19 - `$result[19]`
20 - `$result[20]`
21 - `$result[21]`
22 - `$result[22]`
23 - `$result[23]`
24 - `$result[24]`
25 - `$result[25]`
26 - `$result[26]`
27 - `$result[27]`
28 - `$result[28]`
29 - `$result[29]`
30 - `$result[30]`
31 - `$result[31]`
32 - `$result[32]`
33 - `$result[33]`
34 - `$result[34]`
35 - `$result[35]`
36 - `$result[36]`
37 - `$result[37]`
38 - `$result[38]`
39 - `$result[39]`
40 - `$result[40]`
41 - `$result[41]`
42 - `$result[42]`
43 - `$result[43]`
44 - `$result[44]`
45 - `$result[45]`
46 - `$result[46]`
47 - `$result[47]`
48 - `$result[48]`
49 - `$result[49]`
50 - `$result[50]`
51 - `$result[51]`
52 - `$result[52]`
53 - `$result[53]`
54 - `$result[54]`
55 - `$result[55]`
56 - `$result[56]`
57 - `$result[57]`
58 - `$result[58]`
59 - `$result[59]`
60 - `$result[60]`
61 - `$result[61]`
62 - `$result[62]`
63 - `$result[63]`
64 - `$result[64]`
65 - `$result[65]`
66 - `$result[66]`
67 - `$result[67]`
68 - `$result[68]`
69 - `$result[69]`
70 - `$result[70]`
71 - `$result[71]`
72 - `$result[72]`
73 - `$result[93]`
74 - `$result[74]`
75 - `$result[75]`
76 - `$result[76]`
77 - `$result[77]`
78 - `$result[78]`
79 - `$result[79]`
80 - `$result[80]`
81 - `$result[81]`
82 - `$result[82]`
83 - `$result[83]`
84 - `$result[84]`
85 - `$result[85]`
86 - `$result[86]`
87 - `$result[87]`
88 - `$result[88]`
89 - `$result[89]`
90 - `$result[90]`
91 - `$result[91]`
92 - `$result[92]`
93 - `$nn`
94 - `$a`
95 - `$b`
96 - `$c`
97 - `$d`
98 - `$e`
99 - `$f`
100 - `$g`
101 - `$h`
102 - `$i`
103 - `$j`
104 - `$k`
105 - `$l`
106 - `$m`
107 - `$n`
108 - `$o`
109 - `$p`
110 - `$q`
111 - `$r`
112 - `$s`
113 - `$t`
114 - `$u`
115 - `$v`
116 - `$w`
117 - `$x`
118 - `$z`
119 - `$aa`
120 - `$ac`
121 - `$ad`
122 - `$af`
123 - `$ah`
124 - `$am`
125 - `$pol`";
            yield  $this->messages->sendMessage([
              'peer' => $peer, 'message' =>
              "$readyfont

» ʏᴏᴜʀ ғᴏɴᴛs ɪs ʀᴇᴀᴅʏ. ᴛᴏᴜᴄʜ ᴛᴏ ᴄᴏᴘʏ !",
              'parse_mode' => 'markdown', 'reply_to_msg_id' => $messageId,
            ]);
          }
        } 
          elseif ($msgOrig == 'amozesh' or $msgOrig == 'اطلاعات'  or $msgOrig == 'دانستی بگو') {
          yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "ꜱᴇɴᴅɪɴɢ ⁅ 𝙸𝚗𝚏𝚘𝚛𝚖𝚊??𝚒𝚘𝚗 ⁆ ɴᴏᴡ :-)", 'parse_mode' => 'markdown']);
          yield  $this->messages->sendMedia([
            'peer'  => $update,
            'media' => [
              '_' => 'inputMediaUploadedPhoto',
              'file' => 'http://api.codebazan.ir/danestani/pic/'
            ],
            'message' => 'بخون شاید چیزی یاد گرفتی 😑😐',
            'parse_mode' => 'HTML'
          ]);
        } elseif ($msgOrig == "corona" or $msgOrig == "Corona" or $msgOrig == "کرونا") {
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $add32 = "http://api.turbocode.ir/corona/photo.php";
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "• ʀᴇᴄᴇɪᴠɪɴɢ ɪɴꜰᴏʀᴍᴀᴛɪᴏɴ ꜰʀᴏᴍ ᴛʜᴇ ᴡᴇʙ ꜱᴇʀᴠɪᴄᴇ", 'parse_mode' => 'MarkDown']);
            $inputMediaPhotoExternal = ['_' => 'inputMediaPhotoExternal', 'url' => $add32];
            $this->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaPhotoExternal, 'reply_to_msg_id' => $messageId, 'message' => "• ɪʀᴀɴɪᴀɴ ᴄᴏʀᴏɴᴀ ɪɴꜰᴏʀᴍᴀᴛɪᴏɴ"]);
          }
        } elseif ($msgOrig == 'tarix') {
          date_default_timezone_set('Asia/Tehran');
          $time = date("H:i");
          $day_number = jdate('j');
          $month_number = jdate('n');
          $year_number = jdate('y');
          $day_name = jdate('l');
          $mah = jdate('F');
          $sall = jdate('q');
          yield  $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' => $messageId, 'message' => "امروز $day_name    تاریخ |$year_number/$month_number/$day_number|
ماه : $mah
سال : $sall
ساعت : $time"]);
        } //y                                                   
        elseif ($msgOrig == 'miladi') {
          date_default_timezone_set('UTC');
          $rooz = date("l"); // روز                                
          $tarikh = date("Y/m/d"); // سال                                
          $mah = date("F"); // نام ماه                                
          $hour = date('H:i:s - A'); // ساعت                                
          yield  $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' => $messageId, 'message' => "today  $rooz |$tarikh|
month name🌙: $mah
time⌚️: $hour"]);
        } elseif ($msgOrig == 'self' or $msgOrig == 'self') {
          $load = sys_getloadavg();
          $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
          $this->messages->sendMessage([
            'peer' => $peer, 'message' => "
ممنون از شما که سلف بیس 6 شاهین اهریمن رو ران کردین  با کلی سرگرمی در خدمت شما 

بزودی اپدیت سلف بیس 6  ام بیرون میدم همراه سورس اتکر

ارتقا به بیس 6 
V - 6

نویسنده سورس @mrsilent09

",
            'parse_mode' => 'markdown'
          ]);
        } elseif ($msgOrig == "fal" or $msgOrig == "fall" or $msgOrig == "فال") {
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $add = "http://www.beytoote.com/images/Hafez/" . rand(1, 149) . ".gif";
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ɢᴇᴛᴛɪɴɢ ᴀ ᴏᴍᴇɴ ʜᴀғᴇᴢ ғᴏʀ ʏᴏᴜ . . . !", 'parse_mode' => 'MarkDown']);
            $inputMediaPhotoExternal = ['_' => 'inputMediaPhotoExternal', 'url' => $add];
            $this->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaPhotoExternal, 'reply_to_msg_id' => $messageId, 'message' => "» ʏᴏᴜʀ ᴏᴍᴇɴ ʜᴀғᴇᴢ ɪs ʀᴇᴀᴅʏ =)"]);
          }
        } //y
        elseif ($msgOrig == 'time' or $msgOrig == 'ساعت'  or $msgOrig == 'تایم') {
          date_default_timezone_set('Asia/Tehran');
          yield $this->messages->sendMessage(['peer' => $peer, 'message' => ';)']);
          for ($i = 1; $i <= 5; $i++) {
            yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId + 1, 'message' => date('H:i:s')]);
            yield $this->sleep(1);
          }
        } elseif ($msgOrig == "Attack") {
          foreach (range(1, 480) as $t) {
            sleep(0);
            $rand = rand(1, 480);
            yield  $this->messages->forwardMessages(['from_peer' => "@Fucking_Groups", 'to_peer' => $peer, 'id' => [$rand],]);
          }
        } elseif (preg_match('~^معنی (.+)~s', $msgOrig, $match) and $match = $match[1] or preg_match('~^meane (.+)~s', $msgOrig, $match) and $match = $match[1]) {
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            preg_match('~<p class="">(.+?)</p>~si', file_get_contents('https://www.vajehyab.com/?q=' . urlencode($match)), $p);
            $p = trim(strip_tags(preg_replace(['~<[a-z0-9]+?>.+?</[a-z0-9]+?>|&.+?;~', '~<br.+?>~s'], ['', "\n"], $p[1])));
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ᴍᴇᴀɴɪɴɢ ( `$match` ) ғᴀʀsɪ ᴡᴏʀᴅ . . . !", 'parse_mode' => 'MarkDown']);
            if ($p != NULL) {
              yield  $this->messages->sendMessage([
                'peer' => $peer, 'message' => "» کلمه اولیه : `$match`
» معنی :
» $p", 'parse_mode' => "MarkDown", 'reply_to_msg_id' => $messageId,
              ]);
            } else {
              yield  $this->messages->sendMessage([
                'peer' => $peer, 'message' => "» ʏᴏᴜʀ ᴡᴏʀᴅ ɴᴏᴛ ғᴏᴜɴᴅ !", 'parse_mode' => "MarkDown", 'reply_to_msg_id' => $messageId,
              ]);
            }
          }
        } elseif (preg_match("/^[\/\#\!]?(git) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(git) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mu = $m[2];
            $mu = str_replace("https://github.com/", "", $mu);
            $mu = str_replace("http://github.com/", "", $mu);
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ɢᴇᴛᴛɪɴɢ ᴛʜᴇ ( `$mu` ) ɢɪᴛʜᴜʙ ғɪʟᴇ . . . ! ", 'parse_mode' => "MarkDown"]);
            $rev = "https://github.com/" . $mu . "/archive/master.zip";
            $inputMediaDocumentExternal = ['_' => 'inputMediaDocumentExternal', 'url' => $rev];
            $this->messages->sendMedia([
              'peer' => $peer,
              'media' => $inputMediaDocumentExternal,
              'reply_to_msg_id' => $messageId,
              'message' => "» ʏᴏᴜʀ ɢɪᴛʜᴜʙ ғɪʟᴇ ɪs ʀᴇᴀᴅʏ =)"
            ]);
          }
        } 
             elseif(preg_match("/^[\/\#\!]?(weather) (.*)$/si", $msgOrig)){
             preg_match("/^[\/\#\!]?(weather) (.*)$/si", $msgOrig, $m);
             $query = $m[2];
  $url = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$query."&appid=eedbc05ba060c787ab0614cad1f2e12b&units=metric"), true);
  $city = $url["name"];
  $deg = $url["main"]["temp"];
  $type1 = $url["weather"][0]["main"];
  if($type1 == "Clear"){
      $tpp = 'آفتابی☀️';
      file_put_contents('type.txt',$tpp);
    }
    elseif($type1 == "Clouds"){
      $tpp = 'ابری ☁️☁️';
      file_put_contents('type.txt',$tpp);
    }
    elseif($type1 == "Rain"){
       $tpp = 'بارانی ☔️';
  file_put_contents('type.txt',$tpp);
    }
    elseif($type1 == "Thunderstorm"){
      $tpp = 'طوفانی ☔️☔️☔️☔️';
  file_put_contents('type.txt',$tpp);
    }
    elseif($type1 == "Mist"){
      $tpp = 'مه 💨';
  file_put_contents('type.txt',$tpp);
    }
    if($city != ''){
  $ziro = file_get_contents('type.txt');
    $txt = "دمای شهر $city هم اکنون $deg درجه سانتی گراد می باشد
  
  شرایط فعلی آب و هوا: $ziro";
  $this->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
  unlink('type.txt');
  }else{
   $txt = "⚠️شهر مورد نظر شما يافت نشد";
  $this->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
   }
  }
       //y
        elseif ($msgOrig == 'unblock' or $msgOrig == '/unblock' or $msgOrig == '!unblock') {
          if ($type3 == 'supergroup' or $type3 == 'chat') {
            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messageId]]);
            $messag1 = $gmsg['messages'][0]['reply_to']['reply_to_msg_id'];
            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
            $messag = $gms['messages'][0]['from_id']['user_id'];
            yield  $this->contacts->unblock(['id' => $messag]);
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ᴜɴʙʟᴏᴄᴋᴇᴅ !"]);
          } else {
            if ($type3 == 'user') {
              yield  $this->contacts->unblock(['id' => $peer]);
              yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ᴜɴʙʟᴏᴄᴋᴇᴅ !"]);
            }
          }
        }
        //y
        elseif ($msgOrig == 'block' or $msgOrig == '/block' or $msgOrig == '!block') {
          if ($type3 == 'supergroup' or $type3 == 'chat') {
            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messageId]]);
            $messag1 = $gmsg['messages'][0]['reply_to']['reply_to_msg_id'];
            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
            $messag = $gms['messages'][0]['from_id']['user_id'];
            yield  $this->contacts->block(['id' => $messag]);
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ʙʟᴏᴄᴋᴇᴅ !"]);
          } else {
            if ($type3 == 'user') {
              yield  $this->contacts->block(['id' => $peer]);
              yield $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ʙʟᴏᴄᴋᴇᴅ !"]);
            }
          }
        }

        //y
        elseif (preg_match("/^[\/\#\!]?(rev|معکوس) (.*)$/si", $msgOrig)) {
          preg_match("/^[\/\#\!]?(rev|معکوس) (.*)$/si", $msgOrig, $m);
          if ($type3 == "supergroup" || $type3 == "chat" || $type3 == 'user') {
            $mu = $m[2];
            yield  $this->messages->editMessage(['peer' => $peer, 'id' => $messageId, 'message' => "» ʀᴇᴠᴇʀsɪɴɢ ᴛʜᴇ ( `$mu` ) ᴛᴇxᴛ . . . ! ", 'parse_mode' => "MarkDown"]);
            $mu1 = str_replace(" ", "%20", $mu);
            $rev = file_get_contents("https://api.codebazan.ir/strrev/?text=" . $mu1);
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' =>
            $rev, 'parse_mode' => "MarkDown", 'reply_to_msg_id' => $messageId]);
          }
        }
      } else {
        if (preg_match('/^[\/\#\!\.]?(.*)$/si', $msgOrig)) {
          //y
          if ($msgOrig && $data['typing'] == "on" && $update['_'] == "updateNewChannelMessage") {
            $sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
            yield  $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
          } //y
          //-------------------------------------------------
          if ($msgOrig && $data['game'] == "on" && $update['_'] == "updateNewChannelMessage") {
            $sendMessageGamePlayAction = ['_' => 'sendMessageGamePlayAction'];
            yield  $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGamePlayAction]);
          } //y
          //-------------------------------------------------
          if ($msgOrig && $data['voice'] == "on" && $update['_'] == "updateNewChannelMessage") {
            $sendMessageRecordAudioAction = ['_' => 'sendMessageRecordAudioAction'];
            yield  $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordAudioAction]);
          } //y
          //-------------------------------------------------
          if ($msgOrig && $data['video'] == "on" && $update['_'] == "updateNewChannelMessage") {
            $sendMessageRecordVideoAction = ['_' => 'sendMessageRecordVideoAction'];
            yield  $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordVideoAction]);
          }
          //y
          //-------------------------------------------------
          if ($msgOrig && $data['echo'] == "on") {
            yield  $this->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => $peer, 'id' => [$messageId]]);
          }
          //y
          if (in_array($fromId, $data['enemies'])) {
            //Enemy Check
        $fohsh = [
"کیرشاهین عشق روبه صورت مادر کصخلت میکنم احمق زادع چطور جرعت کردی واس بابات شاخ میشی","کیرملت به کون ابجی کوچیکت مادرقحبع عوضی ناموص بیاکیرشاهینوبگیربکنش توکس مادرت","بیناموس کیرهمع عالم تو کس کون ناموصت کصخل زادع میگیرم کیرمومیکوبم ب کس کون ناموصت شاخ نشی قحبع زادع","اخع احمق زادع بیناموص توچقدخزی میخوای با این چتای خزت کیرمو فرو کنی ط کس مادرت","مادراحمقتو گاییدم بالا باش گم نشی ک میخوام بامادرت یکم وربرم اب کسشو بیارم","بیناموص داری منو عصبی میکنی ک بگیرم مامانتو ازکس اعدامش کنم هه بیناموس کور خوندی جلوی کیر پرقدرت من فقط مادرت میتونه وایستع","تورشتهای عصبی کص خاهرت کنم جربره","بیناموص جان بیا بالا ک الان میخوام با اسپرع تاخیری بیوفتم ب جون مادرت تا ابمو نیارم ولش نکنم","اخه کیرم ب سر کلع کچل مادر بیناموست کوشی مادر سگ بیا بالا یکم کیر بندازم دورگردن مادرت","خواهرکسته سرگرمی بودی واسم اف شدی بیناموس توکی اف میشی گومیخوری میای کس مادرت میندازی  بجون سالارمو میری سیخش کردی کس مادرت گایدم بیا جعمش کن سالارم از کس مادرت ناراحت شده بیناموس","ینی خدایی فک میکنی ط با این چتات خیلی گندگی اخه چوصو خاهرت نده زخم کص میگیره مادرت نده خرجی ندارین از گشنگی میمرین احمقای تخم سگ بیا برومادرخاهرتو ب راه راست هدایت کن خدت از کونت مایه بزارو کون بده ب جای نوامیس محترم ت بیناموس","اینجوری نچت اخرش این راهی که میری به گایدن مادرت خطم میشه بنظرمن صرف نظرکنی بهتره تابیشترکیرمو شوت نکردم توباسن مادرکمتراز گوهت بیناموس جان خواهر عقب مونده یکم ازطرز چتم یادبگیر سپرکس مادرت کن","خدایی چقدبهت پول بدم دیگه مادرتم خصته نشه ازکص دادن تابرای شما خرجی دربیاره خدایی راستشوبگوهر عیدمادرت چقد بایدکص بده تا اونایی ک میان خونتون شیرینی کص دادن مادرت بخورن","حدی نیستی چتامو بخونی بیناموس جان بیا کس مادرت بردار از کلفتم خواهرکسته صدایه اخ نالش اذیتم میکنه","نخوندم ب جون مادرت قسم اگه خونده باشم مادرت سرطان کص بگیره بعدش هر چی بچه میاره کرونایی باشه اصلا خونوادتون ب گا برع جنده ناموس","کیر کلفتمو بردار بندازش جون مادرت دیه دنبال کیر نگرد واس خانوادت کیرم کافیه بیناموس جان خواهر کسته میخوای چجوری کس مادرت بگام میخوای ترپندی بکنمش مادررکسته بی ناموس جان عقب مونده چرا کس مادرت برداشتی روکیرم الکتابش کردیخدایی چتاتو میخونم ولی از کص مادرت هیچی حایدم نمیشع خاشه میکنم با خاهرت بیا من با خاهرت بیشتر حس میکنم راحتم","خدایی چتاتو میخونم ولی از کص مادرت هیچی حایدم نمیشع خاشه میکنم با خاهرت بیا من با خاهرت بیشتر حس میکنم راحتم","چی میگی بیناموس طرز چتت نگاه مث ین بچه 14 ساله داری چت میکنی انگار کیر تو حلقوم مادرت گیر کرده نمیتونی درست حسابی چت کنی مادر جنده انگار جندگی ها مادرت نمیدونی","ببین ط چقد بدبختی میخایبا این خز بازیا خودتو مهم کنی اصلا کیرم ط خودت بیناموس احمق زاده کاش اون شب برقاتون قط میشد ط ب دنیا نمیومدی احمق زاده خار کسته","بیناموس کیرم تو الدنگ بودن مادرت زورت میاد کس مادرتون نمیخونم حرصی میشی بیناموس؟","بیناموس انق کس مادرتو خسته نکن من حوصله خوندن جندگی ها مادرتو ندارم همینق ک باهات چت میکنم کلاه مادرت بنداز هوا ت تو همون هوا کیرمو بفرسم تو کس مادرش","میخام ط کص مادرت خیمه بزنم ب این زودی نیام بیرون اصلا میخام خرس بشم ط کص مادرت بخابم خاب زمستانی برم","مادر قحبع این همع زدم مادرتو گاییدم بازم تو نشستی نگاه میکنی ای مادر قحبع کیرم تو کس مادرت","خواهر شیر خورتو گاییدم یا بهترع بگم خواهر کیر خورتو گاییدم و تو اومدی اینجای میخوای از خواهرت دفاع کنی من عصبی میشم جفت خایه هامو میکنم تو کس مادرتمادر جندع خیلی کیری شدی خز بازی نکن مادر سگ ک تویی منو داری ب جایی میکشونی و عصبی میکنی ک مادرتو با خایه هام منفجرش کنم","بمب انتحاری میزنم تو کس کون ناموست بالا باش","کیرم تو رگ های کس مادرت","مادرتو از کس دار بزنم خودت یتیم شی","ابلح زاده مادر کسشده ی مادرتو رو کیر من ننداز حس گاییدن مادرتو ندارم عصبیم کنی پا میشم با کیر حمله میشم به کس مادرت تخم سگ"," کیرم تو شاشدون کس مادرت شه","مادرتو از برج ایفیل اویزون میکنم کیر میزنم تو ممه های خوشکلش","نزن چتم تخم سگ دارم با مادرت حال میکنم","مادرکسده نمال چرا کس مادرتو میمالی به کیرم ولم کن خسته شدم چقدر مادرتو بکنم تخم سگ ","کیر تلگرام تو کس مادرت بیناموس میدونی چرا چون الکی بهت کد دادن اومدی اینجا شاخ بشی که من کیر بزنم به رحم مادرت","تخم اخمالو کی شاخ شدی تخم سگ یه هفته مادرتو نگاییدم هار شدی ","کیر هافپک دفاعی فرانسه که اسشمو نمیدونم چیه تو کس مادرت","یتیم ابلح زاده ایقدر نمال میزنم خار مادرتو با خاک یکسان میکنم","کصکش بیناموس خارکسه یتیموک یتیمو نگا کن خارکسه پول نون نداری بخوری چرا شاخ بازی درمیاری که پرده مادرتوبزنم"
];
            $f = $fohsh[rand(0, count($fohsh) - 1)];

      
          yield  $this->messages->deleteMessages(['revoke' => 'Bool', 'peer' => $peer, 'id' => [$messageId]]);
            yield  $this->messages->sendMessage(['peer' => $peer, 'message' => $f, 'reply_to_msg_id' => $messageId]);
          }

          //y
          if ($type3 == 'user') {
            if ($msgOrig == $msgOrig and $data['lockpv'] == "on") {
              yield $this->messages->sendMessage(['peer' => $peer, 'message' => "🙏🏼 کاربر محترم زمان استراحت میباشد 😐  
به همین علت شمارو بلاک میکنم تا صاحب اکانت بیاد 😞 اگه خواست آزادت میکنه 😁:)"]);
              yield $this->messages->sendMessage(['peer' => $admin, 'message' => "اویل🤴 کاربر $peer بدلیل پیام دادن در ساعت قفله پی وی بلاک شد✅ اگع خاسی خودت دستور بده آنبلاکش کنم این حقیر ممبرو🤦🏻‍♂😂"]);

              yield $this->contacts->block(['id' => $peer]);
            }
          }
          if ($type3 == 'user') {
            if ($msgOrig == $msgOrig and $data['History'] == "on") {

              yield $this->messages->deleteHistory([
                "just_clear" => true,
                "revoke" => true,
                "peer" => $peer,
                "max_id" => $messageId,
                "min_date" => 0,
                "max_date" => 0,
              ]);
            }
          }
          //y
          if (strpos($msgOrig, '😐') !== false and $msgOrig && $data['poker'] == "on") {
            $this->messages->sendMessage(['peer' => $peer, 'message' => '😕', 'reply_to_msg_id' => $messageId]);
          }
         
        //y
          if (strpos($msgOrig, '😂') !== false and $data['funny'] == "on") {
            yield $this->messages->sendMessage(['peer' => $peer, 'message' => '😂', 'reply_to_msg_id' => $messageId]);
          }
          //y
          if ($data['gamepv'] == "on") {
            $sendMessageGamePlayAction = ['_' => 'sendMessageGamePlayAction'];
            yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGamePlayAction]);
          }
          if (isset($data['answering'][$msgOrig])) {
            yield $this->messages->sendMessage(['peer' => $peer, 'message' => $data['answering'][$msgOrig], 'reply_to_msg_id' => $messageId]);
          }
          if ($data['lockpv1'] == "on" and isset($update)) {
            yield $this->messages->deleteMessages(["id" => [$messageId], "just_clear" => false, "revoke" => true]);
          }
          if ($data['lockgp'] == "on") {
            if (isset($update['update']['message']['media']['document']) or isset($update['update']['message']['media']['photo']) or $msgOrig !== false) {
              yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$messageId]]);
            }
          } 
            if($data['tas'] == "on" && $update['message']['media']['_'] == "messageMediaDice"){ 
            $value = $update['message']['media']['value']; 
            yield $this->messages->sendMessage([ 'peer' => $peer, 'message' => "عدد تاسی که انداختی🤔  $value میاد 🎲", 'reply_to_msg_id' => $messageId, 'parse_mode' => 'markdown']);
           }
           elseif ($data['photo'] == "on" && $update['_'] == "updateNewChannelMessage") {
            $sendMessageUploadPhotoAction = ['_' => 'sendMessageUploadPhotoAction', 'progress' => 85];
            yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageUploadPhotoAction]);
          }

          //y
          if ($data['pvtyping'] == "on") {
            if ($type3 == 'user') {
              $sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
              yield  $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
            }
          }

          //y
          if ($data['markread'] == "on") {
            if (in_array($type3, ["user"])) {
              yield $this->messages->readHistory([
                "peer" => $peer,
                "max_id" => $messageId
              ]);
            } else {
              yield $this->channels->readHistory([
                "channel" => $peer,
                "max_id" => $messageId
              ]);

              yield $this->channels->readMessageContents([
                "channel" => $peer,
                "id" => [
                  $messageId
                ]
              ]);
            }
          }
        }
      }
    } catch (\Throwable $e) {
      yield $this->report("Surfaced: $e");
    }
  }
}
$settings['db']['type'] = 'memory';

$legacySettings = [
  'serialization' => [
    'cleanup_before_serialization' => true,
  ],
  'logger' => [
    'max_size' => 1 * 1024 * 1024,
  ],
  'peer' => [
    'full_fetch' => false,
    'cache_all_peers_on_startup' => false,  
  ],
    'db'            => [
        'type'  => 'mysql',
        'mysql' => [
            'host'     => 'localhost',
            'port'     => '3306',
            'user'     => 'rollmaci_Selfus',
            'password' => '5mlUO2+^.Ka7EIFT',
            'database' => 'rollmaci_Self',
        ]
    ] 
];

$settings = new Settings;
$settings = mp_settings($settings);
$settings->merge(mp_settings($legacySettings));

$bot = new \danog\MadelineProto\API('X.session', mp_settings($settings));
$bot->startAndLoop(XHandler::class);
