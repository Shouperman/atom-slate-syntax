## 1.1.0 - Updated Selectors to Resolve PHP Fixes/Changes
### Visible Changes
* Updated minimum Atom version to 1.13. This should have been done for 1.0.1 due to the selector changes.
* Fixed bracket (brace, bracket, paren) coloring in classes.  Removed styling for syntax--meta.syntax--class, which had set the default color for all non-further-specified styles.
* Won't Fix function coloring.  Absence in PHP was the result of parsing, which has been fixed.  While a change, intended behavior is more consistent with other languages and themes.
* Added namspace\\use-block styling to render namespace segnments in a more subdued color.

### Project Changes
* Removed excessive and commented styles to reduce complexity and side-effects; issues above were mainly due to side-effects.
* Update directory structure to split definitions by focus.  Should assist with language-specific tweaks.

## 1.0.1 - First Release With a Proper Change Log
* 1.0.0 Updated less selectors; required due to deprecation of shadow DOM and update to BEM selector names.
