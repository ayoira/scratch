# Scratch Theme

### Turn any static design into a WordPress theme

My name is Tania Rascia, and I created this code for [WordCamp Chicago 2017](https://2017.chicago.wordcamp.org/) as a simple introduction to WordPress theme creation. I struggled to learn WordPress when I began as a self-taught front end developer, as most WordPress tutorials and documentation I read were full of noise and fluff. I created the [Developing a WordPress Theme from Scratch](https://www.taniarascia.com/developing-a-wordpress-theme-from-scratch/) tutorial series as a straightforward approach to directly teaching the most important aspects of creating a website or blog with WordPress.

The simple fact is, you can design any website with HTML & CSS and integrate the WordPress system into it, and you don't have to know any PHP to start.

### [View demo](https://www.taniarascia.com/scratch/demo)

### Prerequisites

- Basic knowledge of HTML & CSS
- A server (MAMP for Mac or Windows, or a host)

### Goals

- Learn how to turn any HTML & CSS design into a functioning WordPress theme
- Understand WordPress theme structure


## Step 0: Installation

- Download and unzip WordPress files
- Famous 5 minute installation

## Step 1: The Basics

What and where.

A WordPress theme needs only two files to function.

- **style.css**
- **index.php**

A WordPress theme exists in **/wp-content/themes/NAME**.

## Step 2: Dividing the Layout into Sections

Use template partials to divide the layout into sections.

- **header.php**
- **content.php**
- **footer.php**

Use **index.php** to bring everything together

## Step 3: The Loop

- Use HTML to set the structure of the layout
- Use the Loop to dynamically display and repeat content from the database

## Step 4: Pages and Individual Posts

- **index.php** pulls in blog excerpt loop
  - **content.php**
- **single.php** pulls in individual posts
  - **content-single.php**
- **page.php** pulls in individual pages
  - **content-page.php**

## Reviews

> Thanks a million for your well-written, easy-to-follow and practical guides. I have always hated working in Wordpress because it has always felt a bit like trying to find the right tools in somebody else's kitchen—but now I feel confident in opening up an existing theme and knowing how it works.

> Thanks a lot for this introduction. I was getting very frustrated when working with predefined themes because they alway include things that you don’t need and I wasn’t able to figure out how to implement my own website structure and designs. Your tutorial was very helpful to get a starting point and I am confident, that I will be able to develop my own theme now.

> Just a quick message to say how great your tutorial on setting up a Wordpress theme is. I normally work in standard HTML, CSS, and PHP and wasn't sure how it all worked with WordPress but you explained it in such a clear and relaxed way I'm off and running!

> I just wanted to let you know your site and tutorials are seriously amazing. This is a truly awesome resource I recommend to as many of my fresh-faced WordPress friends as possible.

> This is really useful!! A million thank yous to you! I have always wanted to learn to make my own theme for Wordpress but other tutorials are too complicated and annoying. But after this tutorial, I finally know how to make my own theme. Thanks a lot!

> Tania, Thank you for putting up such an awesome tutorial, I’ve just started WP development and this tutorial has helped me a lot in the process. Danke!!

> Your tutorials are really great. I was reading an ebook about theme creation in WordPress and after some chapters I got lost… then I found your tutorials. They are really good and easy to follow, I am looking forward to reading the next part. Keep it up! Thanks a lot.

## Unlicense

This is free and unencumbered software released into the public domain.

Anyone is free to copy, modify, publish, use, compile, sell, or distribute this software, either in source code form or as a compiled binary, for any purpose, commercial or non-commercial, and by any means.

[Read more](LICENSE.md)
