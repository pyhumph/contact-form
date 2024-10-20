# Contact Form
This is a simple contact form that allows users to submit their name, email, phone number, website, and message. The form is processed using PHP, and JavaScript handles the form submission asynchronously using AJAX. It provides real-time validation feedback to the user without reloading the page. The data is sent via email to a designated recipient.

## Features
- Form submission without page reload using AJAX.
- Basic client-side validation to ensure required fields are filled.
- PHP backend for email handling and form processing.
- Feedback to the user on successful or unsuccessful submission.

## Technologies Used
- **HTML5**: For the structure of the form.
- **CSS3**: For the styling of the form.
- **JavaScript (AJAX)**: To handle form submission and provide real-time feedback.
- **PHP**: For processing the form data and sending it via email.

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/contact-form.git

2. Move to the project directory:
   ```bash
    cd contact-form
   
3. Configure the PHP script:
- Open the message.php file.
- Replace humphrey.david.dev@gmail.com with the recipient email where you want to receive the form submissions.
  
4. Upload the project to a PHP-compatible server (e.g., using cPanel or FTP).

## Usage
1. Open the form in your browser.
2. Fill out the required fields:
- Name
- Email
- Phone
- Website (optional)
- Message
3. Click Submit to send the form. You will receive real-time feedback without reloading the page.
4. The form data will be emailed to the address specified in the PHP file.

## File Structure
- **index.html**: The main HTML file that contains the form structure.
- **style.css**: The stylesheet used for styling the contact form.
- **script.js**: JavaScript file handling the form submission via AJAX.
- **message.php**: PHP file that processes the form data and sends the email.

## How It Works
### Form Submission:
- The user fills out the form and clicks Submit.
- JavaScript intercepts the form submission and sends the form data using an AJAX request to **message.php**.

## Server Processing (PHP):
- The **message.php** script receives the data, validates it (e.g., checks for required fields and validates the email format), and sends an email to the specified recipient.

- The PHP script returns a response (success or failure), which is displayed to the user in real time without refreshing the page.

## Customization
- To change the recipient of the email, edit the following line in **message.php**:
  ```bash
    $receiver = "your-email@example.com"
- You can customize the subject line or body of the email by modifying the **$subject** and **$body** variables in the **message.php** file.


## Contributing
- Feel free to contribute to this project by submitting a pull request. If you find a bug or have a suggestion for improvement, please open an issue.


