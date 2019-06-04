# hh_video_extender
hh_video_extender is a TYPO3 extension.
Extends TYPO3 core videorenderer with following properties:
- for vimeo and youtube: defer loading (uses javascript to load video resource after page load)
- for internal videos webp, mp4 and so on: loop, muted, preload, controls

### Installation
... like any other TYPO3 extension

### Features
- added default html5 video attributes to enable at the TYPO3 backend
- no changes in FLUID required
- automatically add TypoScript, can be disabled in the extension configuration (BE). Then you can choose it from template-modul = static-templates.

### Todos
- currently nothing

### Deprecated
- currently nothing


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
