# pg-accordion
Demonstration Accessible Accordion WP Block Created with Pinegrow

This is a [Pinegrow](https://pinegrow.com/) project with a relatively unstyled version of the accessible accordion I use in my WordPress plugins and themes. It uses Tailwind and Pinegrow Interactions(Greensock) but is perfectly readable. The Pinegrow Web Editor gives me a visual interface to the HTML and lets me speed up the WordPress block and theme creation process. The files are all native HTML, CSS, JS, and PHP and everything works just as well in VSCode or any other editor as it does in Pinegrow.

## Interactions Logic
### On Load: . accordion-content
- Hide at start

### On click: .accordion-content (Hides content)
- Apply to: .accordion-content
	- Remove display:none on .accordion-content
- Apply to: .accordion-button
	- Set aria-expanded=false

### On click: .accordion-header (Shows content)
- Set: .accordion-content
	- Set display:block 
	- overflow:hidden
	- height:0
- Set: .accordion-button
	- aria-expanded=true
-Tween: .accordion-content
	- auto opacity: 1
	- height:auto
-Tween: .accordion-icon
	- transform: rotateZ(180deg)
