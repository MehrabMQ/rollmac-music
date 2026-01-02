from __future__ import annotations

import asyncio
from dataclasses import dataclass
from typing import Optional, TYPE_CHECKING

from . import state

if TYPE_CHECKING:
    from telethon.tl.types import Message


@dataclass
class CommandResult:
    handled: bool
    response: Optional[str] = None
    edit: bool = True
    parse_mode: Optional[str] = None
    no_webpage: bool = True


HELP_TEXT = """
𝐕 ⁷
┏━━━ ꜱᴇʟꜰ ʙᴏᴛ ʜᴇʟᴘ ━━━┓
➲Hᴇʟᴘ Sᴇʟғ Eᴠɪʟ
➲`self`
╔══════⊗═════❍
➲`mnghelp`
➲`toolshelp`
╔══════⊗═════❍
➲`modehelp`
➲`Answering`
╔══════⊗═════❍
➲`achelp`
➲`timer`
╔══════⊗═════❍
➲`profhelp`
➲`help2`
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴍᴇᴍ ᴜsᴀɢᴇ : **{mem_usage}** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •
╲\
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ
      \╲
• ┅┅━━━━ • ━━━━┅┅ •
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
"""

HELP2_TEXT = """
𝐕 ⁷ 
╔══════⊗═════❍
➲` zaman`
╔══════⊗═════❍
➲`Attackpc`
╔══════⊗═════❍
➲`funhelp`
╔══════⊗═════❍
➲`game`
➲`game2`
╔══════⊗═════❍ 
➲`game3`
╔══════⊗═════❍
➲`panel`
➲ ᴍᴇᴍ ᴜsᴀɢᴇ : **{mem_usage}** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •
╲\
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ
      \╲
• ┅┅━━━━ • ━━━━┅┅ •
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
"""

MODEHELP_TEXT = """
𝐕 ⁷
➲ Mᴏᴅᴇ Hᴇʟᴘ
╔══════⊗═════❍
➲`part` on یا off 
➲`echo` on یا off
╔══════⊗═════❍
➲`poker` on یا off
➲`funny` on یا off
╔══════⊗═════❍
➲`lockgp` on or off
➲`lockpv` on or off
╔══════⊗═════❍
➲`History` on یا off
➲`mutepv` on or off
╔══════⊗═════❍
➲`tas` on یا off
➲`hashtag` on یا off
╔══════⊗═════❍
➲`italic` on یا off
➲`coding` on یا off
╔══════⊗═════❍
➲`underline` on یا off 
➲`deleted` on یا off
╔══════⊗═════❍
➲`bold` on یا off
➲`mention` on یا off
╔══════⊗═════❍
➲`mention2`on یا off
➲`reverse` on یا off
╔══════⊗═════❍
➲`online` on یا off
➲ ᴍᴇᴍ ᴜsᴀɢᴇ :  **{mem_usage}** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
"""

ANSWERING_TEXT = """
𝐕 ⁷
➲Aɴsᴡᴇʀ Sᴇʟғ Eᴠɪʟ 
╔══════⊗═════❍
➲`setanswer `
╔══════⊗═════❍
➲`delanswer`
➲`clean answers`
• ┅┅━━━━ • ━━━━┅┅ •  
➲ ᴍᴇᴍ ᴜsᴀɢᴇ : **{mem_usage}** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\  
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ 
      \╲
• ┅┅━━━━ • ━━━━┅┅ •  
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
"""

ACHELP_TEXT = """
𝐕 ⁷
➲Eᴄʜᴇʟᴘ
╔══════⊗═════❍
➲`gamepv` on یا off
➲`ac type` on یا off 
╔══════⊗═════❍
➲`ac voice` on یا off 
➲`ac video` on یا off 
╔══════⊗═════❍
➲`ac game` on یا off 
➲`photo` on یا off
╔══════⊗═════❍
➲`pvtyping` on یا off
➲`phot` on یا off
• ┅┅━━━━ • ━━━━┅┅ •  
➲ ᴍᴇᴍ ᴜsᴀɢᴇ :  **{mem_usage}** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
"""

ZAMAN_TEXT = """
𝐕 ⁷
➲ Zᴀᴍᴀɴ Hᴇʟᴘ
╔══════⊗═════❍
➲`timename1` on یا off
➲`timename2` on یا off 
╔══════⊗═════❍
➲`timebio1` on یا off 
➲`timebio2` on یا off 
╔══════⊗═════❍
➲`bioen` on یا off
➲`fontbio` on یا off
╔══════⊗═════❍
➲`biofa` on یا off
➲`timepic` on یا off
╔══════⊗═════❍
دوستان توجه کنید این قسمت دستور bioen یا biofa  با تایم های بالا فرق میکنید !

اگر قصد فعال کردن این دو کدو دارید حتما کد تایم بیو رو افلاین کنید سپس این دستورو انلاین کنید
• ┅┅━━━━ • ━━━━┅┅ •  
➲ ᴍᴇᴍ ᴜsᴀɢᴇ :  **{mem_usage}** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ  
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
"""

FUNHELP_TEXT = """
𝐕 ⁷
➲ғUɴ Hᴇʟᴘ
╔══════⊗═════❍
➲`music` [TEXT] 
➲`bazi` [TEXT]
╔══════⊗═════❍
➲`logo` [TEXT]
➲`encode` TEXT]
╔══════⊗═════❍
➲`fackecnt`[TEXT]
╔══════⊗═════❍
➲`decode` [TEXT]
➲`joke` [TEXT]
╔══════⊗═════❍
➲`jh` 
➲`weather`اب هوا
╔══════⊗═════❍
➲`gif`[Text] 
➲`pic`[Text] 
╔══════⊗═════❍
➲`ok` ذخیره عکس زمان دار
➲`rem` پاکسازی تاریخچه
╔══════⊗═════❍
➲`rem1` پاکسازی پیام پیوی با ریپلای
╔══════⊗═════❍
➲`apk`[Text] 
➲`prox `پروکسی
╔══════⊗═════❍
➲`like` [Text] 
╔══════⊗═════❍
➲`upload` [URL] 
➲`meme`[Text] 
╔══════⊗═════❍
➲`giff` [Text]
➲`font` [Text] 
╔══════⊗═════❍
➲`fafont` [Text
➲`age` (Y)(M)(D)
╔══════⊗═════❍
➲`rev` [Text] 
╔══════⊗═════❍
➲`meane` [Text] 
➲`kalame` [Level] 
╔══════⊗═════❍
➲`fal`
➲`icon`[Text] 
╔══════⊗═════❍
➲`id`
➲ ᴍᴇᴍ ᴜsᴀɢᴇ : **{mem_usage}** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ   
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
"""

PROFHELP_TEXT = """
𝐕 ⁷
➲Eᴄɴᴀᴍᴇ Hᴇʟᴘ
╔══════⊗═════❍
➲`setbio` [TEXT] 
╔══════⊗═════❍
➲`setfname` Text] 
➲`setlname` [Text] 
╔══════⊗═════❍
➲`setuser`[Text] 
➲ ᴍᴇᴍ ᴜsᴀɢᴇ : **{mem_usage}** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ   
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
"""

TIMER_TEXT = """
𝐕 ⁷
➲Tɪᴍᴇʀ Hᴇʟᴘ
╔══════⊗═════❍
➲`tarix`
➲`miladi`
╔══════⊗═════❍
➲`corona`
➲`time`
╔══════⊗═════❍
➲`crn` iran + آمار کرونا
╔══════⊗═════❍
➲`tag` در گپ
➲`amozesh`
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴍᴇᴍ ᴜsᴀɢᴇ : **{mem_usage}** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ   
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
"""

ATTACK_TEXT = """
𝐕 ⁷
➲Aᴛᴛᴀᴄᴋʜᴇʟᴘ
╔══════⊗═════❍
➲`spam`
➲`spam ss`
╔══════⊗═════❍
➲`code hang`
➲`Attack`
╔══════⊗═════❍
➲`NumberEn`
• ┅┅━━━━ • ━━━━┅┅ •
➲ ᴍᴇᴍ ᴜsᴀɢᴇ :  **{mem_usage}** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ   
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
"""

MNGHELP_TEXT = """
𝐕 ⁷
➲Mᴀɴɢʜᴘ
➲`bot`[on] یا [off] 
╔══════⊗═════❍
➲`/test`
➲`left`
╔══════⊗═════❍
➲`join`text
➲`leave`text
╔══════⊗═════❍
➲`ping`
➲`/config`
╔══════⊗═════❍
➲`block` [UserName] یا Rreply] 
➲`unblock`[UserName] یا Rreply] 
╔══════⊗═════❍
➲`restart`
➲`clean all`
╔══════⊗═════❍
➲`delchat`[Rreply در Gp]
╔══════⊗═════❍
➲`status`
╔══════⊗═════❍
➲`setenemy` (Reply) or (InPV)
➲`delenemy`(Reply) or (InPV)
╔══════⊗═════❍
➲`enemylist`
➲`cleanenemylist`
• ┅┅━━━━ • ━━━━┅┅ •
➲ᴍᴇᴍ ᴜsᴀɢᴇ : **{mem_usage}** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ   
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
"""

TOOLSHELP_TEXT = """
𝐕 ⁷
➲Tᴏᴏʟs Hᴇʟᴘ
╔══════⊗═════❍
➲`info` [UserName] یا [UserID] 
╔══════⊗═════❍
➲`gpinfo`
➲`flood` [Count] [Text]
╔══════⊗═════❍
➲`save` [Reply] 
➲`id`[reply] 
╔══════⊗═════❍
➲`!php` Code 
➲`whois` Domain 
╔══════⊗═════❍
➲`scr Url `
➲`ping Url`
╔══════⊗═════❍
➲`brc` Url
➲`git` (username/project) or (Url)
╔══════⊗═════❍
➲`user`UserID
➲ᴍᴇᴍ ᴜsᴀɢᴇ :  **{mem_usage}** ᴍɢ
• ┅┅━━━━ • ━━━━┅┅ •  
╲\   
    📡 Sᴇʟғ Bᴏᴛ Eᴠɪʟ   
      \╲
• ┅┅━━━━ • ━━━━┅┅ •   
Rᴀʙᴀᴛsᴀᴢ :[un](https://t.me/mrsilent09)
"""


TOGGLE_FILE_COMMANDS = {
    "part": ("part.txt", "⇨ 𝗽𝗮𝗿𝘁 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "timename1": ("timename1.txt", "⇨ 𝘁𝗶𝗺𝗲𝗻𝗮𝗺𝗲1 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "timename2": ("timename2.txt", "⇨ 𝘁𝗶𝗺𝗲𝗻𝗮𝗺𝗲2 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "timebio1": ("timebio1.txt", "⇨ 𝘁𝗶𝗺𝗲𝗯𝗶𝗼1 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "timebio2": ("timebio2.txt", "⇨ 𝘁𝗶𝗺𝗲𝗯𝗶𝗼12 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀{value}"),
    "bioen": ("bioen.txt", "⇨ 𝗯𝗶𝗼𝗲𝗻 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "biofa": ("biofa.txt", "⇨ 𝗯𝗶𝗼𝗳𝗮 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "fontbio": ("fontbio.txt", "⇨ 𝗳𝗼𝗻𝘁 𝗯𝗶𝗼 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "timepic": ("timepic.txt", "⇨ 𝘁𝗶𝗺𝗲𝗽𝗶𝗰 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "hashtag": ("hashtag.txt", "⇨ 𝗵𝗮𝘀𝗵𝘁𝗮𝗴 𝗺𝗼𝗱𝘄  𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "mention": ("mention.txt", "⇨ 𝗺𝗲𝗻𝘁𝗶𝗼𝗻 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "mention2": ("mention2.txt", "⇨ 𝗺𝗲𝗻𝘁𝗶𝗼𝗻2 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "underline": ("underline.txt", "⇨ 𝘂𝗻𝗱𝗲𝗿𝗹𝗶𝗻𝗲 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "bold": ("bold.txt", "⇨ 𝙗𝙤𝙡𝙙 𝙢𝙤𝙙𝙚 𝙣𝙤𝙬 𝙞𝙨 {value}"),
    "italic": ("italic.txt", "⇨ 𝗶𝘁𝗮𝗹𝗶𝗰𝗸 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "coding": ("coding.txt", "⇨ 𝗰𝗼𝗱𝗶𝗻𝗴 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "deleted": ("deleted.txt", "⇨ 𝗱𝗲𝗹𝗲𝘁𝗲𝗱 𝗺𝗼𝗱𝗲 𝗻??𝘄 𝗶𝘀 {value}"),
    "reverse": ("reversemode.txt", "⇨ 𝗿𝗲𝘀𝗲𝘃𝗲𝗿 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "online": ("online.txt", "⇨ 𝗼𝗻𝗹𝗶𝗻𝗲 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
}

TOGGLE_DATA_COMMANDS = {
    "bot": ("power", " ⇨ 𝗯𝗼𝘁 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "poker": ("poker", "⇨ 𝗽𝗼𝗸𝗲𝗿 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "funny": ("funny", "⇨ 𝗳𝘂𝗻𝗻𝘆 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "photo": ("photo", "⇨ 𝗽𝗵𝗼𝘁𝗼 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "echo": ("echo", " ⇨ 𝙚𝙘𝙝𝙤 𝙣𝙤𝙬 𝙞𝙨 {value}"),
    "tas": ("tas", "⇨ 𝘁𝗮𝘀 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "markread": ("markread", "⇨ 𝗺𝗮𝗿𝗸𝗿𝗲𝗮𝗱 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "ac type": ("typing", "⇨ 𝘁𝗵𝗲 𝘁𝘆𝗽𝗲 𝗮𝗰𝘁𝗶𝗼𝗻 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "gamepv": ("gamepv", "⇨ 𝗴𝗮𝗺𝗲𝗶𝗻𝗴 𝗽𝘃 𝗺𝗼𝗱𝗲 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "pvtyping": ("pvtyping", "⇨ 𝗽𝘃 𝘁𝘆𝗽𝗶𝗻𝗴 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "lockgp": ("lockgp", "⇨ 𝗹𝗼𝗰𝗸𝗴𝗽 𝗻𝗼𝘄 ??𝘀 {value}"),
    "mutepv": ("lockpv1", "⇨ 𝗺𝘂𝘁𝗲𝗽𝘃 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "lockpv": ("lockpv", "⇨ 𝗹𝗼𝗰𝗸𝗽𝘃 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "History": ("History", "⇨ 𝗵𝗶𝘀𝘁𝗼𝗿𝘆 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "ac video": ("video", "⇨ 𝘁𝗵𝗲 𝘃𝗶𝗱𝗲𝗼 𝗮𝗰𝘁𝗶𝗼𝗻 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "ac game": ("game", "⇨ 𝘁𝗵𝗲 𝗴𝗮𝗺𝗲 𝗮𝗰𝘁𝗶𝗼𝗻 𝗻𝗼𝘄 𝗶𝘀 {value}"),
    "ac voice": ("voice", "⇨ 𝘁𝗵𝗲 𝘃𝗼𝗶𝗰𝗲 𝗮𝗰𝘁𝗶𝗼𝗻 𝗻𝗼𝘄 𝗶𝘀 {value}"),
}


def _memory_usage_mb() -> float:
    try:
        import psutil

        process = psutil.Process()
        return round(process.memory_info().rss / 1024 / 1024, 1)
    except Exception:
        return 0.0


def _format_help(text: str) -> str:
    return text.format(mem_usage=_memory_usage_mb())


def _normalize(message: str) -> str:
    return message.strip()


def handle_help_command(text: str) -> Optional[str]:
    normalized = _normalize(text)
    mapping = {
        "help": HELP_TEXT,
        "Help": HELP_TEXT,
        "راهنما": HELP_TEXT,
        "help2": HELP2_TEXT,
        "Help2": HELP2_TEXT,
        "راهنما 2": HELP2_TEXT,
        "/modehelp": MODEHELP_TEXT,
        "modehelp": MODEHELP_TEXT,
        "رهنمای مود": MODEHELP_TEXT,
        "Answering": ANSWERING_TEXT,
        "Answerhelp": ANSWERING_TEXT,
        "رهنمای آنسور": ANSWERING_TEXT,
        "/achelp": ACHELP_TEXT,
        "achelp": ACHELP_TEXT,
        "رهنمای اکشن": ACHELP_TEXT,
        "zaman": ZAMAN_TEXT,
        "راهنمای زمان": ZAMAN_TEXT,
        "/funhelp": FUNHELP_TEXT,
        "funhelp": FUNHELP_TEXT,
        "رهنمای فان": FUNHELP_TEXT,
        "/profhelp": PROFHELP_TEXT,
        "profhelp": PROFHELP_TEXT,
        "راهنمای اکانت": PROFHELP_TEXT,
        "timer": TIMER_TEXT,
        "رهنما تایمر": TIMER_TEXT,
        "/Attackpc": ATTACK_TEXT,
        "Attackpc": ATTACK_TEXT,
        "راهنمای اتک": ATTACK_TEXT,
        "/mnghelp": MNGHELP_TEXT,
        "mnghelp": MNGHELP_TEXT,
        "رهنمای مدیریت": MNGHELP_TEXT,
        "/toolshelp": TOOLSHELP_TEXT,
        "toolshelp": TOOLSHELP_TEXT,
        "رهنمای کاربردی": TOOLSHELP_TEXT,
    }
    if normalized in mapping:
        return _format_help(mapping[normalized])
    return None


def handle_toggle_command(text: str) -> Optional[str]:
    text = _normalize(text)
    parts = text.split()
    if len(parts) != 2:
        return None
    command = " ".join(parts[:-1])
    value = parts[-1].lower()
    if value not in ("on", "off"):
        return None
    if command in TOGGLE_FILE_COMMANDS:
        filename, template = TOGGLE_FILE_COMMANDS[command]
        state.write_text(filename, value)
        return template.format(value=value)
    if command in TOGGLE_DATA_COMMANDS:
        key, template = TOGGLE_DATA_COMMANDS[command]
        data = state.load_data()
        data[key] = value
        state.save_data(data)
        return template.format(value=value)
    return None


async def apply_modes(client, message: Message, admin_id: int) -> None:
    text = message.message or ""
    if not text:
        return
    if text in DASTOORAT:
        return
    if len(text) >= 150:
        return
    partmode = state.read_text("part.txt")
    reversemode = state.read_text("reversemode.txt")
    hashtagmode = state.read_text("hashtag.txt")
    boldmode = state.read_text("bold.txt")
    italicmode = state.read_text("italic.txt")
    underlinemode = state.read_text("underline.txt")
    deletedmode = state.read_text("deleted.txt")
    mentionmode = state.read_text("mention.txt")
    mention2mode = state.read_text("mention2.txt")
    codingmode = state.read_text("coding.txt")

    if partmode == "on":
        text_adjusted = text.replace(" ", "‌")
        for idx in range(1, len(text_adjusted) + 1):
            await client.edit_message(message.chat_id, message.id, text_adjusted[:idx])
            await asyncio.sleep(0.1)
        return
    if reversemode == "on":
        rev = "".join(reversed(text))
        await client.edit_message(message.chat_id, message.id, rev)
        return
    if hashtagmode == "on":
        await client.edit_message(message.chat_id, message.id, f"#{text.replace(' ', '_')}")
        return
    if boldmode == "on":
        await client.edit_message(message.chat_id, message.id, f"**{text}**", parse_mode="markdown")
        return
    if italicmode == "on":
        await client.edit_message(message.chat_id, message.id, f"<i>{text}</i>", parse_mode="html")
        return
    if underlinemode == "on":
        await client.edit_message(message.chat_id, message.id, f"<u>{text}</u>", parse_mode="html")
        return
    if deletedmode == "on":
        await client.edit_message(message.chat_id, message.id, f"<del>{text}</del>", parse_mode="html")
        return
    if mentionmode == "on":
        await client.edit_message(message.chat_id, message.id, f"[{text}](tg://user?id={admin_id})", parse_mode="markdown")
        return
    if mention2mode == "on":
        if message.is_reply:
            replied = await message.get_reply_message()
            if replied and replied.sender_id:
                await client.edit_message(
                    message.chat_id,
                    message.id,
                    f"[{text}](tg://user?id={replied.sender_id})",
                    parse_mode="markdown",
                )
        return
    if codingmode == "on":
        await client.edit_message(message.chat_id, message.id, f"`{text}`", parse_mode="markdown")


DASTOORAT = {
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
    "/help",
    "پینگ",
    "ربات",
    "time name off",
    "gamepv on",
    "part off",
    "echo off",
    "poker off",
    "markread off",
    "bot off",
    "hashtag off",
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
}


async def handle_admin_command(client, message: Message, admin_id: int) -> CommandResult:
    text = message.message or ""
    if not text:
        return CommandResult(False)
    normalized = _normalize(text)
    if normalized.lower() in ("ping", "ربات") or normalized.startswith("/ping"):
        return CommandResult(
            True,
            response="✵ Eᴠɪʟ ʙᴏᴛ 𖢊 [OᑎᒪIᑎE](https://t.me/mrsilent09)",
            parse_mode="markdown",
        )
    if normalized.lower() in ("restart", "ریستارت"):
        await client.send_message(message.chat_id, "**✵𝘦𝘷𝘪𝘭 𝘴𝘦𝘭𝘧 𝘳𝘦𝘴𝘵𝘢𝘳𝘵𝘪𝘯𝘨 !**", reply_to=message.id, parse_mode="markdown")
        await client.disconnect()
        return CommandResult(True)

    toggle_response = handle_toggle_command(normalized)
    if toggle_response:
        return CommandResult(True, response=toggle_response)

    help_text = handle_help_command(normalized)
    if help_text:
        await client.edit_message(message.chat_id, message.id, "➲ ʜᴇʟᴘ sᴇɴᴅ ғᴏʀ ʏᴏᴜ !")
        await client.send_message(
            message.chat_id,
            help_text,
            reply_to=message.id,
            parse_mode="markdown",
            link_preview=False,
        )
        return CommandResult(True)

    return CommandResult(False)
