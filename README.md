# SimpleWebsiteManagerPhp
A simple cms system written in php which is modular. Any articles/posts you want to add can be added without editing/re adding other web content like navbars,footers etc. 

How to use:
1. Create a new post from the Admin tools page (Authentication coming soon).
2. You can see all the articles in the code snippets page.
3. When the code snippets page is opened, new php links are generated and assigned automatically.
4. All the temporary files start with Zarticle (for easy deletion) and will be in the root folder - They will be generated every time the page is opened.

Current functionalities:
1. Header and Footer has inline css which can be modified separately while the base article css is in style.css file. Modifying the style.css file properties will effect all the article pages.
2. Responsive design - may not be pretty but will work on most sizes and devices.
3. Quotes(stored in a text file) are loaded and displayed randomly each time on banners.
4. Contact us Page.
5. Search functionality available (Not efficient but works).

Upcoming features:
1. Multiple JS slides and scrolls for use- just include the file name in index.php and replace the images.
2. Dynamic retrieval of recent articles and most viewed articles and display on home page(will be a separate module which can be put in any page).
3. Database connectivity (MySQL)
