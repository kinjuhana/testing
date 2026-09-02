<?php 
/**
 * The template for displaying page dmca
 *
 * @package www.g-silvers.website
 * @subpackage tmdbtwo
 * @since TMDB Two 1.0
 */
$hack_title = 'F.A.Q.';
$hack_description = "If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site.";
get_header(); ?>
<?php get_headmenus(); ?>
   <div class="container-fluid container-general" id="content" tabindex="-1">
      <div class="d-flex row p-2 mt-3 justify-content-center"><span class="badge badge-info t18 font-weight-normal">F.A.Q.</span></div>
      <div class="mt-3 p-2 section-faq rounded" id="accordion" role="tablist">
         <div class="card">
            <a data-toggle="collapse" data-parent="#accordion" href="#whatis">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">What is <?php echo config('sitename') ?>?</span></h6>
               </div>
            </a>
            <div id="whatis" class="collapse show" role="tabpanel">
               <div class="card-block p-2 px-4"><?php echo config('sitename') ?> is a fully automated Video Search engine. It does automated hourly scans of streaming websites and lists the best quality videos it found.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" name="becomevip" href="#becomevip">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">How do I donate and get VIP Access?</span></h6>
               </div>
            </a>
            <div id="becomevip" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">
                  <p>It's easy! :)</p>
                  <p>We use 'VIP Keys' to enable (or extend) VIP Access. You can purchase VIP Keys for 30 days, 90 days etc. <a href="/donate">here</a>.</p>
                  <p>After you've received your Key, please go <a href="/activatekey">here</a> to enable (or extend) your VIP Access.</p>
               </div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#cast">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Can use Google Chromecast or Apple Airplay to cast to my TV?</span></h6>
               </div>
            </a>
            <div id="cast" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">Casting with Chromecast and Airplay is enabled for VIP users on supported devices.<br>It depends on what type of device you use but (for example) on a Desktop, you should see the Chromecast <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAQAAAD8x0bcAAAAr0lEQVR4Aa3Rr0vEYBzH8RdrgphmFKPFMH9Ew5rJYNRk8PpxcOHCwd3/cIjVbBXLwtYtK0aTIphsA9NjsQz2bIZ9nvi84RW+Rt1aqYq80gpOBHU0qgXH5IJcbH+//4rAULRv7sLOMBc07qR93LYz9358Oo1zUxkOvfl20Mc9Se358iLp5nbNNGpbrgWX3dyVxLlgIfHuMcZtUHjFgw/ctM5yRKbyjIkCt4pWVFoacb/4b1SAWP+SNAAAAABJRU5ErkJggg==" width="18" height="18" alt="Chromecast"> -icon (when using Chrome) or the Airplay <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAQAAAD8x0bcAAAAcElEQVR4Ae3MQQ3CQBCG0SehKQioBhCwK6kSBmVFQnWAiGHTPTQh9EDCke8dZ/L7aTeL+4FFwFVaD59W6UKVqqP61f9JkWa1GUA0MKjNLBXOnnJTEbKJvrF5GOGk9CUhO9GXFKO9vrITPjSJN5NvegEnYFNb0qrrugAAAABJRU5ErkJggg==" width="18" height="18" alt="Airplay"> -icon (when using Safari) below the video.<br>Casting should work in Google Chrome (Android and Desktop) via Chromecast and in Safari (iOS and macOS) via AirPlay. Subtitles are currently not working when casting.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" name="icons" href="#icons">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">What do all the different Icons mean?</span></h6>
               </div>
            </a>
            <div id="icons" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">
                  These are the ones that are most used:
                  <p></p>
                  <table class="table table-sm">
                     <tbody>
                        <tr>
                           <td><span class="badge badge-info"><span class="fa fa-film fa-fw"></span></span></td>
                           <td>This is a Movie</td>
                        </tr>
                        <tr>
                           <td><span class="badge badge-info"><span class="fa fa-video-camera fa-fw"></span>&nbsp;<span class="fa fa-film fa-fw"></span></span></td>
                           <td>This is a Pre-Release</td>
                        </tr>
                        <tr>
                           <td><span class="badge badge-info"><span class="fa fa-television fa-fw"></span></span></td>
                           <td>This is a TV Show</td>
                        </tr>
                        <tr>
                           <td><span class="badge badge-info"><span class="fa fa-bars fa-fw"></span></span></td>
                           <td>This is an Episode</td>
                        </tr>
                        <tr>
                           <td><span class="badge badge-info font-weight-normal">2018</span></td>
                           <td>This Movie or TV Show was initially released in 2018</td>
                        </tr>
                        <tr>
                           <td><span class="badge badge-info font-weight-normal">S04 E03</span></td>
                           <td>This is Season 4, Episode 3</td>
                        </tr>
                        <tr>
                           <td><span class="badge badge-info font-weight-normal">S05 E01&nbsp;&nbsp;<span class="fa fa-flash fa-pulse2 goldc"></span></span></td>
                           <td>This is a Season or TV Show Premiere</td>
                        </tr>
                        <tr>
                           <td><span class="badge badge-info font-weight-normal"><span class="fa fa-star goldc fa-fw"></span>8.1</span></td>
                           <td>Others gave this Movie or TV Show an 8.1 rating</td>
                        </tr>
                        <tr>
                           <td><span class="fa fa fa-heart fa-fw text-info"></span></td>
                           <td>Click to toggle this Movie or TV Show as favorite</td>
                        </tr>
                        <tr>
                           <td><span class="fa fa-info-circle fa-fw text-info"></span></td>
                           <td>Info about the Movie, TV Show or Episode</td>
                        </tr>
                        <tr>
                           <td><span class="fa fa-download fa-fw text-info"></span></td>
                           <td>Download Movie or Episode</td>
                        </tr>
                        <tr>
                           <td><span class="fa fa-certificate fa-fw text-info"></span></td>
                           <td>The Movie or TV Show Parental Guidelines rating</td>
                        </tr>
                        <tr>
                           <td><span class="fa fa-globe fa-fw text-info"></span></td>
                           <td>The production country</td>
                        </tr>
                        <tr>
                           <td><span class="fa fa-volume-up fa-fw text-info"></span></td>
                           <td>The spoken language</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#whenavail">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">When will Movie X or Episode Y or TV Show Z be available?</span></h6>
               </div>
            </a>
            <div id="whenavail" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">Whenever it's on a site that we're scanning and it has a decent quality, it will appear here automatically.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#missing">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Why is Episode X missing?</span></h6>
               </div>
            </a>
            <div id="missing" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">Most listed TV Shows are complete with all Seasons and Episodes. If it's a <i>new</i> Episode that's missing, it will appear as soon as we find it. If it's an Episode somewhere within a Season, the previous Episode was probably a double Episode. If you're sure that it's not, please click the 'Report Issue' -link under the video player to let us know.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#videoissue">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Why is a Video is not loading?</span></h6>
               </div>
            </a>
            <div id="videoissue" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">First of all, if it's not loading but 'stuck on buffering', try reloading the page. Sometimes when a Video won't load, it gives an error. If this is with all videos, it's probably a temporary glitch and we'll fix it soon. If it's only one video, please hit the 'Report Issue' -link under the video player.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#lowquality">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Why isn't there a HD version of this video?</span></h6>
               </div>
            </a>
            <div id="lowquality" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">If it's an older movie or episode, it's probably all we have because we couldn't find anything better.<br>If it's a pre-release, then this is the best there is but the video will be replaced when we find something better.<br>If it's a video we just added, higher qualities will (most likely) follow within the next few hours because it takes some time to convert videos.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#nosound">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Why is there no sound?</span></h6>
               </div>
            </a>
            <div id="nosound" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">Some browsers Mute the sound by default and you must Un-Mute it manually. If it's a smart browser, you should only have to do this once and it should be ok the next time you watch a video.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#distortedsound">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Why is the sound distorted?</span></h6>
               </div>
            </a>
            <div id="distortedsound" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">Because we're boosting the Volume Gain, try lowering the Volume slider in our Player (up/down arrows) before increasing the volume on your device.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#videostutter">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Why is the Video stuttering, buffering or randomly stopping?</span></h6>
               </div>
            </a>
            <div id="videostutter" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">Maybe there was a connection glitch or you're downloading something at the same time so there's not enough bandwidth? Either way, try refreshing the page first. The video should continue where it left off.<br>If that doesn't help and you're using Safari, see if it still happens in Chrome. Before reporting an issue, use Chrome and try selecting <i>auto</i> or 360p in the quality settings to see if that works any better.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#videorepeating">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Why is the Video repeating/skipping back xx seconds every time?</span></h6>
               </div>
            </a>
            <div id="videorepeating" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">
                  <p>If you're using iOS, there's a bug that was introduced when iOS 11 came out. At the moment of this writing (6-2018), it's still not fixed. There is a discussion about it here: <a href="https://discussions.apple.com/thread/8082640" target="_blank">https://discussions.apple.com/thread/8082640</a><br>Long story short... either wait until Apple finally fixes the bug or use a browser like <i>Aloha</i>. This is one of the few available iOS browsers that uses it's own video engine.<br>In the iOS App Store, search for <i>Aloha Browser</i>. It's free.<br></p>
                  <p>For Chromecast users, we've seen it happening on the latest versions but only on slower connections. So where it previously would start buffering, it now skips back every time until it was able to download sufficient data to continue with the next part. We're not sure but perhaps Google is using Apple libraries for HLS streaming. Either way, we don't have a solution for Chromecast other than making sure that you're on a fast connection.</p>
               </div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#videoquality">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Why is the Video switching to a lower quality all of a sudden?</span></h6>
               </div>
            </a>
            <div id="videoquality" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">Most videos come in different qualities where 1080p is the highest and 360p the lowest. The higher the quality, the more bandwidth is needed for smooth playback. In the quality settings, you can select your preferred quality or select <i>auto</i>. With the <i>auto</i> -setting, our player will constantly monitor the bandwidth and adjust the quality to the highest possible for the available bandwidth.<br>Not all browsers (Safari etc.) let you change the quality. For these browsers, it's always set to <i>auto</i>.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#qualitychange">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">When I change the quality of a video, nothing happens.</span></h6>
               </div>
            </a>
            <div id="qualitychange" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">Unlike Youtube etc., our player doesn't reload the video when you change quality settings. Our player keeps playing whatever is in the buffer and then seamlessly switch to the new quality. It can take between 1 and 5 seconds or so.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#startbeginning">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Why isn't the video starting at the beginning?</span></h6>
               </div>
            </a>
            <div id="startbeginning" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">If you stop watching a video and you want to continue watching it the next day, it will continue at the same position where you left off. So you probably watched this video before already.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#badsubs">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Why are the Subtitles wrong/out of sync/not available in my language?</span></h6>
               </div>
            </a>
            <div id="badsubs" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">Because we don't host videos ourselves, it's quite difficult to find perfectly matching subtitles. Please don't report issues about Subtitles. Our system is constantly searching, adding and replacing subtitles.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#fullscreen">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">How do I make the Video go Fullscreen?</span></h6>
               </div>
            </a>
            <div id="fullscreen" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">You can toggle fullscreen with the 'f' -key, double click/double tap the video or just click the fullscreen -icon.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#bestbrowser">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">What Browsers are supported?</span></h6>
               </div>
            </a>
            <div id="bestbrowser" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">All modern/recent mobile and desktop browsers are supported but some perform better than others.<br>For example, Microsoft Edge works fine but things work much better with Chrome or Opera. Same with Safari. Safari works but we don't recommended it because it's so slow. This site works best with browsers like Chrome, Firefox, Opera, Brave etc..</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#secure">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Is this site Secure?</span></h6>
               </div>
            </a>
            <div id="secure" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">Yes. All communications between our servers and your browser is 100% secure.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#privacy">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">How do you handle my privacy?</span></h6>
               </div>
            </a>
            <div id="privacy" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">Except when you report a video via the 'Report Issue' -link, nothing is logged or stored. In fact, the server logging is turned off. We don't use cookies, store sessions, userid's or IP addresses. However, our CDN, Google Analytics or our Advertisers may set cookies but that's out of our control.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#trackviewing">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">If you don't store information, how come you track my viewing progress?</span></h6>
               </div>
            </a>
            <div id="trackviewing" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">That information is stored in your local browser storage and never reaches our servers. This is done so that when you reload the page or come back tomorrow, the video continues where it left off.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#ispknow">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Does my ISP know that I am visiting this site?</span></h6>
               </div>
            </a>
            <div id="ispknow" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">They know that you are visiting this site but they don't know what you did or what videos you watched. For them, it appears that you are watching Youtube videos. If you are concerned about them knowing that you visited this site, consider using a VPN.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#p2p">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">Are you using a P2P protocol like Bittorrent, Webtorrent, Popcorn Time etc.?</span></h6>
               </div>
            </a>
            <div id="p2p" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">No. Unlike many other sites, we don't. If we did, that would mean that you are uploading videos at the same time you are watching. That is considered illegal in most countries. Be careful when using other streaming sites.</div>
            </div>
         </div>
         <div class="card">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#contact">
               <div class="card-header" role="tab">
                  <h6 class="mb-0 p-0"><span class="text-dark">How can I contact you?</span></h6>
               </div>
            </a>
            <div id="contact" class="collapse" role="tabpanel">
               <div class="card-block p-2 px-4">Only if you think it's really important, you can email to important@<?php echo site_path() ?></div>
            </div>
         </div>
      </div>
   </div>
<?php get_footer(); ?>