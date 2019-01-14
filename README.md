Before you start
To prepare for this project you'll need to make sure you complete and understand these steps.

 2 steps
x Download the project files. We've supplied HTML/CSS shell files for you to connect your project.

x Convert the HTML files to PHP files and pull out the header and footer to be managed in one place.


Project Instructions
To complete this project, follow the instructions below. If you get stuck, ask a question on Slack or in the Treehouse Community.

 8 steps
After you convert the HTML files to PHP files and pull out the header and footer to be managed in one place, add a database.db file within a inc directory. Set the permission of both the directory and the file to everyone read/write/execute (chmod 777).

Create a PDO connection to the SQLite (database.db) file within the inc folder. Use prepared statements to add/edit/delete journal entries in the database.

Create “add/edit” view for the entry page that allows the user to add or edit journal entries with the following fields: Title, Date, Time Spent, What You Learned, Resources to Remember. Each journal entry should have a unique primary key.

Create “list” view for the index page. The list view contains a list of journal entries, which displays Title and Date for Entry. Title should be hyperlinked to the detail page for each journal entry. Entries should be sorted by date. Include a link to add an entry.

Create “details” view with the details displaying the journal entry with all fields: Title, Date, Time Spent, What You Learned, Resources to Remember. Include a link to edit the entry.

Add the ability to delete a journal entry.

Use the supplied HTML/CSS to build and style your pages.Use CSS to style headings, font colors, journal entry container colors, body colors.

Before you submit your project for review, make sure you can check off all of the items on the Student Project Submission Checklist. The checklist is designed to help you make sure you’ve met the grading requirements and that your project is complete and ready to be submitted!