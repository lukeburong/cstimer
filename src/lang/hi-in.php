<h1>csTimer संस्करण <?php echo $version;?> - व्यावसायिक स्पीडक्यूबिंग/प्रशिक्षण टाइमर</h1>
<?php include('lang.php') ?>
<h2>विषय-प्रवेश</h2>
<p>csTimer एक पेशेवर टाइमिंग प्रोग्राम है जो रूबिक्स क्यूब स्पीडसॉल्वर्स के लिए बनाया किया गया है, यह प्रदान करता है:</p>
<ul>
<li>विभिन्न प्रकार के स्क्रैंबल (फेरबदल) एल्गोरिदम, जिनमें हैं <strong>सभी WCA आधिकारिक कार्यक्रम</strong>, विभिन्न प्रकार की पेचीदा पहेलियाँ, विशिष्ट उप-चरणों के लिए <strong>प्रशिक्षण स्क्रैंबल</strong> (उदाहरण के लिए <strong>F2L, OLL, PLL, ZBLL</strong>, और मामलों को फ़िल्टर कर सकते हैं), आदि।</li>
<li>बहुत सारे सांख्यिकी कार्य, यह <strong>समय-विभाजित कर समय अभिलेखन</strong> कर सकता है; <strong>सत्रों की कितनी भी संख्या</strong>, सत्र विभाजन/विलय, आदि।</li>
<li>इन उप-चरणों को सीखने या प्रशिक्षित करने के लिए विभिन्न प्रकार के सॉल्वर, जैसे <strong>क्रॉस, एक्स-क्रॉस, 2x2x2 फेस, स्क्यूब फेस, SQ1 आकार</strong>।</li>
<li>अन्य सहायक उपकरण, जैसे स्क्रैम्बल इमेज, 8-सेकंड निरीक्षण (आवाज) अलर्ट, मेट्रोनोम, बैच-स्क्रैम्बल जनरेटर, आदि।</li>
<li>बैकअप फ़ंक्शन; डेटा गुम होने से बचाने के लिए आप अपने समयों का बैकअप स्थानीय फ़ाइलों, csTimer के सर्वर, या Google स्टोरेज पर ले सकते हैं।</li>
</ul>
<p>csTimer मोबाइल फोन, टैबलेट और डेस्कटॉप पर अधिकांश आधुनिक ब्राउज़र का समर्थन करता है। आप अपनी होम स्क्रीन पर csTimer भी जोड़ सकते हैं, और यह एक ऐप के रूप में काम करेगा।</p>
<p>csTimer ब्राउज़र कैश का लाभ उठाता है, जो नेटवर्क की खपत तभी करता है जब आप इसे पहली बार खोलते हैं। उसके बाद, csTimer नेटवर्क कनेक्शन के बिना काम कर सकता है (बैकअप जैसे कार्यों को छोड़कर)।</p>
<h3>प्रतिलिप्याधिकार</h3>
<p>csTimer एक ओपन-सोर्स सॉफ़्टवेयर है जो GPLv3 का अनुसरण करता है। यदि आपके पास csTimer पर कोई सुझाव या टिप्पणियाँ हैं, तो कृपया उन्हें <a class="click" href="https://github.com/cs0x7f/cstimer/issues" title="">यहां</a> भेजें।</p>
<p>लेखक: <a href="mailto:cs0x7f@gmail.com">Shuang Chen (cs0x7f@gmail.com)</a></p>
<p>यूआई निर्माता: <a href="mailto:liebe7@126.com">Yue Zhang (liebe7@126.com)</a></p>
<h2>मूल कार्य</h2>
<ul>
<li><strong>टाइमिंग कैसे प्रारंभ करें</strong> - स्पेस बार, या बाएँ और दाएँ दोनों Ctrl बटन (या मोबाइल डिवाइस पर स्क्रीन) दबाए रखें और टाइमर के हरे होने की प्रतीक्षा करें। स्पेस बार छूटते ही टाइमर टाइमिंग शुरू कर देगा। टाइमिंग रोकने के लिए कोई भी कीबोर्ड बटन (या मोबाईल पर स्क्रीन) दबाएं और हल करने का समय रिकॉर्ड हो जाएगा।</li>
<li><strong>यूआई विवरण</strong> - csTimer के चिह्न के पास 6 बटन हैं: विकल्प, निर्यात, स्क्रैम्बल, समय सूची, मदद करें, और उपकरण। संबंधित फ़ंक्शन पैनल खोलने के लिए <strong>स्क्रैम्बल</strong>, <strong>समय सूची</strong>, और <strong>उपकरण</strong> को दबाएं।</li>
<li><strong>स्क्रैम्बल पैनल</strong> - स्क्रैम्बल पैनल में, आप स्क्रैम्बल प्रकार का चयन कर सकते हैं, स्क्रैम्बल की लंबाई और केस फ़िल्टर सेट कर सकते हैं (यदि उपलब्ध हो), पिछले स्क्रैम्बल की समीक्षा कर सकते हैं, और अगला स्क्रैम्बल तैयार कर सकते हैं।</li>
<li><strong>List times panel</strong> - In the list times panel, you can open session manager by clicking "Session", select/add/delete sessions, empty session by the selector and the button next to, then you can view the current single/average, best single/average, and the full time list.</li>
<li><strong>Tools panel</strong> - In the tool panel, you can select specific auxiliary functions, including scramble image, scramble generators, solvers, other kinds of statistics, etc.</li>
</ul>
<h2>Keyboard shortcut</h2>
<table class="table" style="display: inline-block;">
<tr><th>Key</th><td>Function</td></tr>
<tr><th>Alt + 1</th><td>Scramble type to Square-1</td></tr>
<tr><th>Alt + 2 ~ 7</th><td>Scramble type to 2x2x2~7x7x7</td></tr>
<tr><th>Alt + p/m/c/s</th><td>Scramble type to pyra/megaminx/clock/skewb</td></tr>
<tr><th>Alt + i</th><td>Scramble type to input</td></tr>
<tr><th>Alt + d</th><td>Remove all solves in current session</td></tr>
<tr><th>Alt + z</th><td>Remove the latest solve</td></tr>
<tr><th>Alt + up/down</th><td>To next/last session</td></tr>
<tr><th>Alt + left/right</th><td>Display last/next scramble</td></tr>
<tr><th>Ctrl + 1/2/3</th><td>The latest solve is OK/+2/DNF</td></tr>
</table>

<table class="table" style="display: inline-block;">
<tr><th>Gesture</th><td>Function</td></tr>
<tr><th>Up left</th><td>The latest solve is DNF</td></tr>
<tr><th>Up</th><td>The latest solve is +2</td></tr>
<tr><th>Up right</th><td>The latest solve is OK</td></tr>
<tr><th>Left</th><td>Last scramble</td></tr>
<tr><th>Right</th><td>Next scramble</td></tr>
<tr><th>Down left</th><td>Add comment to the latest solve</td></tr>
<tr><th>Down</th><td>Remove the latest solve</td></tr>
<tr><th>Down right</th><td>Check the latest solve</td></tr>
</table>

<table class="table" id="vrckey" style="display: inline-block;">
<tr><th colspan=10>Virtual Cube Key Map</th></tr>
</table>

<h2>Option details</h2>
<ul>
<li><strong data="opt_ahide">समय रिकॉर्ड करते समय सभी तत्वों को छिपाएँ</strong>. Hide logo and all panels when timing.</li>
<li><strong data="opt_useMilli">मिलीसेकंड का उपयोग करें</strong>. Display the millisecond digit, no matter whether it is checked, the internal timing accuracy of csTimer is 1 millisecond.</li>
<li><strong data="opt_timeFormat">समय प्रारूप</strong>. Time format to display.</li>
<li><strong data="opt_atexpa">Auto Export (per 100 solves)</strong>. If checked, csTimer will export the solves automatically per 100 solves to the specified place, local file, csTimer server, or Google Storage.</li>
<li><strong data="opt_expp">Import non-latest data</strong>. If you've uploaded multiple backups, you can import from one of the up to 10 most recently uploaded backups, if you accidentally upload an empty backup, this option will help you retrieve your solves.</li>
<li><strong data="opt_useLogo">Hint messages in logo</strong>. csTimer's Logo will serve as an information display panel that prompts for a variety of information you may be interested in, such as breaking PB.</li>
<li><strong data="opt_showAvg">Show Avg Label</strong>. Two lines of labels are displayed below the the main timer, the current two averages, ao5 and ao12 by default.</li>
<li><strong data="opt_zoom">बड़ा करें</strong>. You can adjust sizes of all elements by this option.</li>
<li><strong data="opt_font">टाइमर का फ़ॉन्ट चुनें</strong>. Font of the main timer.</li>
<li><strong data="opt_uidesign">UI design is</strong>. You can switch ui design to material-like, or hide shadows by this option.</li>
<li><strong data="opt_view">इंटरफ़ेस शैली है</strong>. Switch between desktop and mobile views.</li>
<li><strong data="opt_wndScr">फेरबदल पैनल प्रदर्शन शैली</strong>. Make scramble panel embedded into background.</li>
<li><strong data="opt_wndStat">सांख्यिकी पैनल प्रदर्शन शैली</strong>. Make list times panel embedded into background.</li>
<li><strong data="opt_wndTool">उपकरण पैनल प्रदर्शन शैली</strong>. Make tool panel embedded into background.</li>
<li><strong data="opt_bgImgO">background image opacity</strong>. Opacity of the background image.</li>
<li><strong data="opt_bgImgS">background image</strong>. You can select your own image as the background image, however, only https urls are available due to security constraint of the browser.</li>
<li><strong data="opt_timerSize">टाइमर का विस्तार</strong>. Set the size of main timer.</li>
<li><strong data="opt_smallADP">दशमलव बिंदु के बाद छोटे फ़ॉन्ट का उपयोग करें</strong>. Use a smaller font size after the digital point in main timer.</li>
<li><strong data="opt_useMouse">माउस टाइमर का उपयोग करें</strong>. Use mouse to start timer, keyboard-trigger will also be available.</li>
<li><strong data="opt_useIns">WCA निरीक्षण का उपयोग करें</strong>. Enable WCA inspection procedure, which is a 15-second countdown, auto +2/DNF penalty will also be enabled if you inspecting more than 15 seconds.</li>
<li><strong data="opt_voiceIns">WCA निरिक्षण के लिए आवाज़ की चेतावनी</strong>. Alert at 8s/12s of inspection, to simulate the alert from judge in WCA competitions.</li>
<li><strong data="opt_voiceVol">Voice volume</strong>. Voice level of the alert above.</li>
<li><strong data="opt_input">समयों का अभिलेखन किसके साथ करें?</strong>. csTimer is able to add solves by several ways, it supports manually input, automatically record from a stackmat timer, connect to a bluetooth smart cube or play virtual Rubik's cube, besides keyboard timing.</li>
<li><strong data="opt_intUN">Unit when entering an integer</strong>. When you type an integer XXX in the input box, what does it mean, XXX second or XXX centisecond or XXX millisecond?</li>
<li><strong data="opt_timeU">टाइमर अद्यतन है</strong>. How timer is updated when timing.</li>
<li><strong data="opt_preTime">स्पेसबार को नीचे रखने का समय (सेकंड)</strong>. How long the space bar should be held before the timer turns green.</li>
<li><strong data="opt_phases">एकाधिक-स्थिति</strong>. Number of phases, press any key to mark a split point when timing.</li>
<li><strong data="opt_stkHead">Use Stackmat Status Information</strong>. Stackmat will report its state, e.g. whether left or right area is touched, then csTimer is able to use these information, however, the data error might occur and cause unexpected behavior.</li>
<li><strong data="opt_scrSize">फेरबदल का विस्तार</strong>. Size of the scramble text.</li>
<li><strong data="opt_scrASize">Auto scramble size</strong>. The size of the scramble text will be automatically adjusted by the length of the scramble, which works with together previous option.</li>
<li><strong data="opt_scrMono">मोनोस्पेस करी हुई फेरबदल</strong>. Use monospaced font for scramble text.</li>
<li><strong data="opt_scrLim">फेरबदल क्षेत्र की ऊंचाई सीमित करें</strong>. When the scramble area is too high, a scroll bar will occur to avoid the raising of the scramble panel.</li>
<li><strong data="opt_scrAlign">फेरबदल क्षेत्र का संरेखण</strong>. Alignment of the whole scramble area, include scramble type selector.</li>
<li><strong data="opt_preScr">pre-scramble</strong>. Pre moves before scramble, which is used for virtual Rubik's cube and scramble image.</li>
<li><strong data="opt_scrFast">4x4x4 के लिए तेज़ फेरबदल का उपयोग करें (अनौपचारिक)</strong>. WCA official 4x4x4 scramble requires huge computation resources, select this option to use a random-move scramble for 4x4x4 instead.</li>
<li><strong data="opt_scrKeyM">फेरबदल में मुख्य चालों को अंकित करें</strong>. Mark a key move in the scramble, e.g. the move that take the state away from square shape in SQ1 scrambles.</li>
<li><strong data="opt_scrClk">Action when clicking scramble</strong>. Behavior when you click on the scramble text, copy scramble or generate next scramble.</li>
<li><strong data="opt_trim">Number of solves trimmed at better side</strong>. Number of solves trimmed at head and tail of solves when calculating average.</li>
<li><strong data="opt_statsum">show summary before time list</strong>. Show the statistics table before time list.</li>
<li><strong data="opt_printScr">print scramble(s) in statistics</strong>. Print scramble in round statistics dialog.</li>
<li><strong data="opt_printDate">print solving date in statistics</strong>. Print solving date in round statistics dialog.</li>
<li><strong data="opt_imrename">rename session immediately after creation</strong>. Immediately rename a session after creating it.</li>
<li><strong data="opt_scr2ss">create new session when switching scramble type</strong>. When switching scramble type, a new session will be created.</li>
<li><strong data="opt_statinv">Inverse time list</strong>. Invert the time list, thus, latest solves will at the bottom of the time list.</li>
<li><strong data="opt_statclr">Enable session emptying</strong>. When disabled, an '+' button (for session creating) will replace the 'X' button besides the session selector, thus, when clicked, a new empty session will be created instead of clearing the whole session.</li>
<li><strong data="opt_absidx">Show absolute index in statistics report</strong>. Show absolute index in the session instead of 1 to number of solves (e.g. 1/2/3 for mo3) in round statistics.</li>
<li><strong data="opt_rsfor1s">Show stat. when clicking solve number</strong>. When click the first row of the time list, show a round statistics for a single solve.</li>
<li><strong data="opt_statal">Statistical indicators</strong>. Statistical indicator for the statistics table, when customizing, aoX and moX are available.</li>
<li><strong data="opt_delmul">Enable Multiple Deletion</strong>. Able to delete multiple solves starts from a solve, for avoid misunderstand, the selected solve will be the oldest solve to delete.</li>
<li><strong data="opt_disPrec">time distribution precision</strong>. Time interval for the time distribution tool.</li>
<li><strong data="opt_solSpl">Show solution progressively</strong>. If selected, only the length of a solution from a solver is displayed, and you can view the solution one move by one move, otherwise, the whole solution is displayed.</li>
<li><strong data="opt_imgSize">फेरबदल की छवि का आकार</strong>. Set the size of scramble image.</li>
<li><strong data="opt_NTools">उपकरणों की संख्या</strong>. csTimer is able to show up to 4 tools simultaneously.</li>
<li><strong data="opt_useKSC">कीबोर्ड शॉर्टकट का उपयोग करें</strong>. Use keyboard shortcut to switch scramble type, generate next scramble, switch between sessions, etc.</li>
<li><strong data="opt_vrcSpeed">वर्चुअल क्यूब - आधार गति (टीपीएस)</strong>. Base turn speed of the virtual Rubik's cube, the turn will be speed up if there are multiple moves to turn.</li>
<li><strong data="opt_vrcMP">एकाधिक-स्थिति</strong>. Automatic multi-phase split for virtual Rubik's cube and bluetooth cube.</li>
<li><strong data="opt_giiVRC">Show virtual bluetooth cube</strong>. Show a virtual Rubik's cube in the main timer when connecting to a bluetooth cube.</li>
<li><strong data="opt_giiSD">Mark scrambled if stay</strong>. For a bluetooth cube, csTimer cannot know whether a move is from for scrambling or solving.</li>
<li><strong data="opt_giiSK">Mark scrambled with spacebar</strong>. When the space bar is pressed, the bluetooth cube is marked scrambled, any turns after that will treated as the start of timing.</li>
<li><strong data="opt_giiSM">Mark scrambled by doing</strong>. Use specific move sequences on the bluetooth cube to mark scrambled.</li>
<li><strong data="opt_giiBS">Beep when mark scrambled</strong>. Beep when some of scramble-finish signal is triggered.</li>
<li><strong data="opt_giiRST">Reset bluetooth cube when connect</strong>. When connecting to a bluetooth cube, csTimer will detect whether it is solved, if not, there might be some hardware problems or the cube is really unsolved.</li>
<li><strong data="opt_giiAED">Auto hardware error detection</strong>. Some bluetooth cubes will loss some of moves due to hardware failure, csTimer will try to detect such case.</li>
</ul>
<h2>Tools detail</h2>
<ul>
<li><strong data="tool_scrgen">ScrambleGenerator</strong>. You are able to generate up to 999 scrambles with one click by this tool.</li>
<li><strong data="tool_cfm">समय की पुष्टि</strong>. Tool to view current solves with its comment, scramble, solving date and reconstruction if available, which is also the dialog when you click on a solve.</li>
<li><strong data="tool_hugestats">विभिन्न सत्रों के आँकड़े</strong>. You are able to do cross-session statistics with this tool.</li>
<li><strong data="tool_stats">सांख्यिकी</strong>. Statistic table similar with the table in the list times panel.</li>
<li><strong data="tool_distribution">समयों का वितरण</strong>. Time distribution and stability analysis, &lt;X Y/Z means there are totally Z solves less than X seconds, and all of the latest Y solves are less than X seconds in the session.</li>
<li><strong data="tool_trend">समय की प्रवृत्ति</strong>. Shows a trend curve of all solves in current session.</li>
<li><strong data="tool_dlystat">Daily Statistics</strong>. Count number of solves each day/week/month/year.</li>
<li><strong data="tool_image">फेरबदल का चित्र बनाएं</strong>. Scramble image to verify a correct scramble, all WCA puzzles are supported.</li>
<li><strong data="tool_roux1">Solvers &gt; Roux S1</strong>. Roux 1st step solver, which solves a 1x2x3 block.</li>
<li><strong data="tool_eoline">Solvers &gt; इ.ओ. लाइन</strong>. EO line solver, which solves orientations of all 12 edges, and positions of DF and DB edges.</li>
<li><strong data="tool_cross">Solvers &gt; क्रॉस</strong>. Cross solver, which solve DF, DL, DR, DB edges.</li>
<li><strong data="tool_222face">Solvers &gt; 2x2x2 face</strong>. 2x2x2 face solver, which solves a face of 2x2x2 cube.</li>
<li><strong data="tool_333cf">Solvers &gt; Cross + F2L</strong>. Cross and F2L solver, which solves Cross and 4 F2Ls with computer search, so the solution might be far from human solutions.</li>
<li><strong data="tool_333roux">Solvers &gt; Roux S1 + S2</strong>. Roux 1st and 2nd step solver, which firstly solves a 1x2x3 block on the left face and then expend another 1x2x3 block on the right face with R, M, r, U.</li>
<li><strong data="tool_333petrus">Solvers &gt; 2x2x2 + 2x2x3</strong>. Petrus 1st and 2nd step solver, which firstly solves an 2x2x2 block on the left and then expend it to a 2x2x3 on the left.</li>
<li><strong data="tool_333zz">Solvers &gt; EOLine + ZZF2L</strong>. Eoline and ZZF2L solver, which firstly solves the EOLine and then solve one of left 1x2x3 or right 1x2x3 and the solve the other 2x2x3.</li>
<li><strong data="tool_sq1cs">Solvers &gt; SQ1 S1 + S2</strong>. SQ1 1st and 2nd step solver, which firstly solves the shape of SQ1 and then split U pieces and D pieces.</li>
<li><strong data="tool_pyrv">Solvers &gt; Pyraminx V</strong>. Pyraminx V solver, which solves three corners and two edges to shape into a 'V' pattern for pyraminx.</li>
<li><strong data="tool_skbl1">Solvers &gt; Skewb Face</strong>. Skewb face solver, which solves a layer of skewb, more specifically, 1 center and 4 neighbor corners.</li>
<li><strong data="tool_giikerutil">ब्लूटूथ क्यूब</strong>. Auxiliary tool for bluetooth cube, which is able to show current state, battery power, real-time reconstruction etc.</li>
<li><strong data="tool_mtrnm">ताल-मापनी</strong>. Metronome, besides beeping at specific frequency, you make it beep at specific time after starting solve as well.</li>
<li><strong data="tool_syncseed">Common Scramble</strong>. Using same scrambles with friends by setting a common seed.</li>
<li><strong data="tool_stackmatutil">stackmat</strong>. Auxiliary tool for Stackmat, which is able to view the status, power and noise level of the signal, etc.</li>
</ul>
<h2>Links</h2>
<ul>
<li><a class="click" href="https://cubingchina.com/" title="">Cubing China</a></li>
<li><a class="click" href="/new/" title="">csTimer beta version</a></li>
<li><a class="click" href="/src/" title="">csTimer beta version with uncompressed files</a></li>
<li><a class="click" href="https://github.com/cs0x7f/cstimer" title="">csTimer source code</a></li>
<li><a class="click" href="/2019.12.24/" title="">csTimer version 2019.12.24</a></li>
<li><a class="click" href="/2018.11.05/" title="">csTimer version 2018.11.05</a></li>
<li><a class="click" href="/2015.12.12/" title="">csTimer version 2015.12.12</a></li>
<li><a class="click" href="/2012.03.15/" title="">csTimer version 2012.03.15</a></li>
<li><a class="click" href="/2012.02.29/" title="">csTimer version 2012.02.29</a></li>
</ul>
<h2>Color schemes</h2>
<?php include('color.php') ?>
<div class="donate" style="line-height:1.5em;">
<p>Thank you for your willingness to support csTimer! Your donation will be used to support our development and maintenance costs.</p>
<p>If you would like to offer us a donation through PayPal, please click the button below or through <a class="click" href="https://www.paypal.me/cs0x7f" title="">PayPal.me</a>.</p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="NW25HME3QUEZY">
<input type="image" src="data:image/gif;base64,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" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
</form>
<p>You can also fund us by Alipay, scan the next two-dimensional code or please pay to the account: cs0x7f@gmail.com</p>
<p><img style="display:inline-block; width:10em; height:10em;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGwAAABsCAIAAAAABMCaAAABoklEQVR42u3aUY6DMAwFQO5/6e0JViq1XwjO5LOqIAxSHJ5z/RnlcSGACHEk4hUY/974i/9/83vlXl3PBREixPmIpYX25oNVrl95GV3PBREixLMQ05OuXD9RoG5fByJEiBCfnDREiBAhDkashAulTTJEiBAhbhJAJIKM41IciBAhLkOMNHQ2+P313T6IECEuQ9z60FBTcYjMDSJEiCMRKx//K4tMYvNcOkwAESLEoxBXNukTwW1XKAsRIsRzEZ9CqUAkClQpxYEIEeIYxApo1+b2qeK2xRcLRIgQH0dMLPaVSVeg080piBAhzkdMB59dQWn6BTxWnSFChLgtYrqAlCYdPmwVCWUhQoQ4HjFRZBIHCBIbeIgQIUJs/WhPLPDhxhlEiBDPQkyPdIFKo99OtiFChPhqxHRzZ+Xho3SwAhEixLMQ0wt/2wOEN+dtoSxEiBDHIO7QhFrZtLr94iFChAgx1AzqKmgrwwiIECFC7ERMh69dG2yIECFCXBFAVIpAegP/mhQHIkSIUcSVjar0hjkeJEOECHEkovFjIUUAEeKU8QE0apeVMce/LwAAAABJRU5ErkJggg=="></p>
<p>Thank you again for your donation!</p>
</div>
<div class="instruction">
<p><strong>In case of failure check that Bluetooth is enabled on your system!</strong></p>
<p>Browser you are using must support Web Bluetooth API. Consider using compatible browser, the best choice is:</p>
<ul>
<li>Chrome on macOS, Linux, Android or Windows</li>
<li>Bluefy on iOS</li>
</ul>
<p>Also you can check complete list of <a class="click" href="https://github.com/WebBluetoothCG/web-bluetooth/blob/main/implementation-status.md" title="">supported browsers</a>.</p>
<p>For some bluetooth cubes, we need you to provide the MAC address of your cube to decrypt the data. <strong>csTimer is able to automatically read MAC address of the cube if you properly setup your browser:</strong></p>
<ul>
<li>Chrome: enable chrome://flags/#enable-experimental-web-platform-features flag in browser settings.</li>
<li>Bluefy: turn on Enable BLE Advertisements option in browser settings.</li>
</ul>
<p>If you have difficulties with cube MAC address, you may read <a class="click" href="https://gist.github.com/afedotov/52057533a8b27a0277598160c384ae71" title="">GAN Smart Cubes MAC address FAQ</a>.</p>
</div>