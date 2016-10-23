# TechRevel.com #
## 
Project Documentation ##


A made-to-order blog (news) website using Laravel and MongoDB as the backend. Backend should ease up the current process/ workflow and minimize the steps and manual intervention involved. 

Backend Features such as:


**User management**: Create, edit, disable different user types (available to admin only)
Writer: Can manage articles written by this very user only (can not access other’s work from backend).+ SEO
SEO: Can manage SEO section for articles written by all users.
Editor and SEO: Can manage all articles published by all users as well as the SEO.
Admin: Can do everything including what an Editor and SEO can do  along with other settings, user management, configurations, email subscribers etc.

Add user: 
(Mandatory fields)
Full Name: Text field (100 characters) 
Email id: email validation 
Access rights: Radio buttons (options: Writer, SEO, Editor and SEO, Admin)
User will be registered using google login? As mentioned below

We will simply enter a google ID from admin panel for every admin user we create. On the Admin-Login page we will only have Login using Google option. For example, check this page:
http://jatinder.aphroecs.com/aphro_crm/admin/users/login

IF the google-logged in user id is available in Admin - we allow the user access. Otherwise send email to admin that another google user tried login to the system. 


(non mandatory fields)
Image: Browse (upto 10 mb - image stores into AWS S3 bucket)
About text: Editor
Facebook link:
Twitter link:
Linkedin link: 
Others1: 
Others 2:
Others 3:


	

**Social media settings**: links for all social media networks can be managed from here (available to Admin only)
Facebook
LinkedIn
Twitter
Instagram
Youtube

**Ads management**: Ads for home, category page and article pages can be managed (available to Admin only)
Please explain this features in details like fields, validation, payment info(if any there), visibility etc.
These will simple textarea fields. For example home page has 5 ads displayed. So we will have option for 5 text areas in admin for home page - admin can enter the ad script/ code in the text area. Front end will pull this information. Nothing else to be done. 


**Configuration management** (available to Admin only)
API details for CopyScrap website 
Enable/ disable mandatory CopyScrap check
Percentage of content that needs to be original to be able to save in DB
Google Analytics Code
Google webmasters code

**Subscriber’s list** - View or download (CSV) users who have subscribed their emails for newsletter along with categories. (available to Admin only) + Validation that its not a robot

**
Category Manager**: Manage categories and sub-categories under them (available to Admin only)
There will be 2 level of category?
Yes. Simple two level categories. I think you can make it N level too? Pretty simple.

**Manage articles**: (accessible by Writer, Editor and Admin) - add/ edit/ disable.
Select sub categories (multiple) - checkboxes. (mandatory to select atleast one sub category)
Alias (for url structure) - all spaces will be changed with “-” - lets limit the url to some standard character limit (no special characters must be allowed)
Featured photo upload (max 10mb) - to be uploaded to AWS S3 bucket
Photo source/ credit (text box - non mandatory)
Title - no limit on number of characters. Let writer decide on his/her own
Main Article - Editor (will decide on which one to use)
Tags - textbox to allow multiple keywords separated by comma 
Summary (enabled by default (checkbox ticked) and mandatory field - user can manually disable(uncheck) and it won’t stay mandatory then)
Check box (unchecked by default) “Video article” 
Buttons:
Save as draft (not published - not visible on website anywhere). 
	Save and Publish (if copyscrape API is enabled - it will check the percentage pre-defined by admin and save if that’s fulfilled. If not, show error message and ask user to correct the article to be able to save it. 

**SEO Manager** (accessible by SEO, Editor and Admin)
Show list of articles (sort by latest first, and where SEO is not yet done)
Click on article will open fields for meta tags 
Show article (in same way as on front end) below the meta tags option. Article only needs to be viewed and not edited from here. 
Show page views (+1 each time the article is open in front end) 




NOTE: I suggest to keep login function for admin(and other admin users) by gmail verification only. This will be much more secure than anything we can develop. So all your users will need to have a gmail id to be able to login to the admin panel.  

User will be registered using gmail ID? System will auto detect registered user email id and map with logged in user.
Only admin can create a user - users can not register on their own. Once user logs in using google - it will check for the gmail id in database and accordingly open the admin panel.



Front End: 
Header: Logo, Search box, Social media icon
Navigation Menu - News, Gadgets, Reviews, Science, Social, Videos
Option for a running ticker (new headlines)


News, Gadgets, Reviews, Science, Social, Videos there are category? - YES
running ticker (new headlines) - how this data will be populated? - basically a marquee based new headline. It will pull out 5 latest headlines and then show them in marquee (right to left) one by one. Check newsonly.tv and you will notice a BLUE hindi based text running from right to left every few seconds (in the header area).



Horizontal Ad placement 



Other than home page, we will have Category page and individual article page. Nothing special in them except related articles to be shown (based on similar categories). 

Another small “Contact us” page, terms of use, privacy policies. 



There will be CMS page management also? For terms of use, privacy policies etc. No - we will be using the blog pages as CMS as well. Will just create a category/ sub category and use it for CMS pages. 


Please share frontend UI design. - Not made yet. But take techcrunch.com for example