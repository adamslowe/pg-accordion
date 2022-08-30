# pg-accordion
Demonstration Accessible Accordion WP Block Created with Pinegrow

This is a [Pinegrow](https://pinegrow.com/) project with a relatively unstyled version of the accessible accordion I use in my WordPress plugins and themes. It uses Tailwind and Pinegrow Interactions(Greensock) but is perfectly readable. The Pinegrow Web Editor gives me a visual interface to the HTML and lets me speed up the WordPress block and theme creation process. The files are all native HTML, CSS, JS, and PHP and everything works just as well in VSCode or any other editor as it does in Pinegrow.

## Interactions Logic
### On Load: . accordion-content
- Hide at start

### On click: .accordion-content (Hides content)
- Apply to: .accordion-content
	- Remove display:none
- Apply to: .accordion-button
	- Set aria-expanded=false

### On click: .accordion-header (Shows content)
- Set: .accordion-content
	- Set display:block 
	- overflow:hidden
	- height:0
- Set: .accordion-button
	- aria-expanded=true
- Tween: .accordion-content
	- auto opacity: 1
	- height:auto
- Tween: .accordion-icon
	- transform: rotateZ(180deg)

### Apply to many is set on .accordion-header 

## WordPress Block Actions
Then, I create two WordPress blocks; one for the wrapper Accordion and another block for each accordion item. 

### Accordion Wrapper
- Includes an empty div with a Block Inner Content that only accepts accordion item blocks

### Accordion Item
- Only usable on parent accordion wrapper blocks
- Sets an {{accordion_item_id}} variable for the accordion item ID suffix. Some day I’ll make this happen programmatically, for now it’s set manually on each accordion item block in the WP block editor. 

#### Accordion Item - Header
- Sets the ID to accordion-header-{{accordion_item_id}})

#### Accordion Item - Button
- Sets aria-controls = accordion-content-{{accordion_item_id}}

#### Accordion Item - spam
- Allows the content of the H3 Accordion Header to be set in the block editor

### Accordion Content
- Sets ID to accordion-content-{{accordion_item_id}}
- Sets aria-labelledby = accordion-header-{{accordion_item_id}}

#### Accordion Content - div
- Allows Block editor content of any type
