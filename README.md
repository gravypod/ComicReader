# Comic Book Reader.

I'm releasing this software so others may continue to improve the idea. The
software in this repository is a website for reading comic books, textbooks, 
and anything text-filled. The main feature of this system is that your browser
will remember what page you left off on and automatically drop you back into 
your book where you last were. 

## Features 

1. Fuzzy Search for book title in file
2. Caches a few pages so you can continue reading even if you drop internet
3. No configuration
4. No logins
5. No database
6. No hassel

## Setup

1. Clone the repo
2. Move the repo into webserver file system that has php and glob
3. Find a document to convert and use `pdfimages` to turn it into images
4. Consider using gnu parallel & libwebp to convert images to webp format

Done!
