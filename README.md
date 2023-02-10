# get_forced_sub.php
Return forced subtitle track number from video file.  Useful in combination with media encoding software such as ffmpeg or handbrake-cli for retaining foriegn speaking subtitles with native language audio track.

Requires mediainfo binary.  
RHEL/CentOS/Rocky: <code>yum install mediainfo</code>
Debian/Ubuntu: <code>apt-get install mediainfo</code>

Usage: <code>get_forced_sub.php <i>filename</i></code><br>
Return: Track number of forced subtitle track or zero (0) it no track found
