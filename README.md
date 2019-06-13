# hh_video_extender
hh_video_extender is a TYPO3 extension.
Extends sys_file_reference video/media. Added attributes to select in content element (eg textmedia) e.g.: muted, loop, controls, previewImage and so on.

Extends TYPO3 core videorenderer with properties like:
- for vimeo and youtube: defer loading (uses javascript to load video resource after page load)
- for youtube: loop, controls, relatedVideos, autoplay
- for internal videos webp, mp4 and so on: loop, muted, preload, controls

### Installation
... like any other TYPO3 extension [extensions.typo3.org](https://extensions.typo3.org/extension/hh_video_extender/ "TYPO3 Extension Repository")

### Features
- added default html5 video attributes to enable at the TYPO3 backend
- no changes in FLUID required
- automatically add TypoScript, can be disabled in the extension configuration (BE). Then you can choose it from template-modul = static-templates.
- previewImage / poster-image can be set in the backend directly in the content-element
- defaultPreviewImage can be set too (Configuration/TypoScript/setup.typoscript)
- determines whether in the same directory as the mp4 video synonymous webm or ogg / ogv / ogm videos are with the same name, if so they are added as source

### Todos
- move preview-image to a css background solution

### Deprecated
- currently nothing

### IMPORTENT NOTICE
- Vimeo is not tested!
- If you have problems with autoplay video on IE/EDGE then try to set "options.preload" to "auto".

![example picture from backend](github/images/preview.jpg?raw=true "Title")

##### Copyright notice

This repository is part of the TYPO3 project. The TYPO3 project is
free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

The GNU General Public License can be found at
http://www.gnu.org/copyleft/gpl.html.

This repository is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

This copyright notice MUST APPEAR in all copies of the repository!

##### License
----
GNU GENERAL PUBLIC LICENSE Version 3
