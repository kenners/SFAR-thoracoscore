## Bugfixes for SFAR's Thoracoscore calculator

### tl;dr

The [Société Française d’Anesthésie et de Réanimation][1] provides Google's [top-ranked result][2] for a [Thoracoscore][3] calculator. [Their Thorascore calculator][4] has a systematic error that introduces an addition of 0.05% to all scores that it calculates. We provide a patched version of their calculator's Javascript that corrects this error. We presented our findings at the Society for Cardiothoracic Surgery for Great Britain & Ireland's [2012 Annual Meeting][5].

### The Error

SFAR's Thoracoscore calculator uses the [following function][11] to attempt to round the calculated score (`x`) to 2 decimal places:
	
```javascript
	function Fmt(x) {
		var v
		if (x >= 0) {
			v = '' + (x + 0.05)
		} else {
			v = '' + (x - 0.05)
		}
		return v.substring(0,v.indexOf('.')+3)
	}
```

However, as `x` is _always_ ≥0, 0.05 is _always_ added to `v` before the `substring` method truncates the string to 2 places beyond the `.` (i.e. to 2 decimal places).

Instead of _rounding_ to 2 decimal places, this function __adds__ 0.05 and then __truncates__ the result to 2 decimal places.

We suggest the alternative:

```javascript
	function Fmt(x) {
		return Math.round(x * 100) / 100;
	}
```

### Files

We provide 3 files:

 - [thoracoscore2.php][8] - The original source from SFAR's website. Accessed 2012-04-15 19:00.
 - [calculator.html][9] - Tidied version of the original calculator.
 - [fixed.html][10] - Patched version of calculator.html

### Presentation

We presented our findings at the Society for Cardiothoracic Surgery for Great Britain & Ireland's [2012 Annual Meeting][5].
Our slides are [on SpeakerDeck][6]:

[![Title slide][7]][6]

### Authors

 - Kenrick Turner ([@kenners][12]), Norfolk & Norwich University Hospital
 - Andrew Ho ([@andrewlkho][13]), St. George's Hospital, London
 - Gunnar Rø ([@gulfa][14]), University of Durham
 - Filip Van Tornout, Norfolk & Norwich University Hospital

### Contact

Correspondance should be addressed to Kenrick: kenrickturner[at]nhs.net

[1]: http://www.sfar.org "Société Française d’Anesthésie et de Réanimation's website"
[2]: http://www.google.com/search?q=thoracoscore "Search Google for 'thoracoscore'"
[3]: http://dx.doi.org/10.1016/j.jtcvs.2006.09.020 "Falcoz et al. The Thoracic Surgery Scoring System. J Thorac Cardiovasc Surg. 2007 Feb;133(2):325-32"
[4]: http://www.sfar.org/scores2/thoracoscore2.php  "SFAR's Thoracoscore calculator"
[5]: http://www.scts.org/annual_meeting "SCTS Annual Meeting 2012"
[6]: http://speakerdeck.com/u/kenrick/p/an-error-in-a-web-based-thoracoscore-calculator "Our slides from the SCTS Annual Meeting"
[7]: https://speakerd.s3.amazonaws.com/presentations/4f7ef74fe711f6001f009075/thumb_slide_0.jpg "Title slide from our presentation"
[8]: https://github.com/kenners/SFAR-thoracoscore/blob/master/thoracoscore2.php
[9]: https://github.com/kenners/SFAR-thoracoscore/blob/master/calculator.html
[10]: https://github.com/kenners/SFAR-thoracoscore/blob/master/fixed.html
[11]: https://github.com/kenners/SFAR-thoracoscore/blob/master/thoracoscore2.php#L114
[12]: https://github.com/kenners "Kenrick on GitHub"
[13]: https://github.com/andrewlkho "Andrew on GitHub"
[14]: https://github.com/gulfa "Gunnar on GitHub"