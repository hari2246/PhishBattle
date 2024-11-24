# PhishBattle
Strengthening cybersecurity awareness through immersive learning.

## Inspiration
Phishing is one of the most common cybersecurity threats, and many people fall victim due to a lack of awareness. The idea for Phish Battle was born out of the need to create an engaging way for users to learn about phishing and develop the skills to identify and avoid such attacks in real-life situations.

## What it does
Phish Battle is a web-based training platform designed to educate users about phishing. It offers interactive modules that simulate phishing scenarios, challenging users to identify legitimate and malicious content. The platform tracks user progress, scores their performance, and provides immediate feedback to enhance their learning experience.
User can check whether a particular link is malicious or legitimate using the bot.

## How we built it
The project was built using PHP for backend logic and MySQL for database management. The scenarios, user responses, and scores are managed in a structured database schema. HTML and CSS were used for creating the front-end interface, while session management ensures secure user authentication and progress tracking. Each module dynamically fetches scenarios from the database, and user submissions are processed to calculate and store scores in real time.

## Challenges we ran into
- Database Design: Structuring the database to efficiently track user progress while preventing duplicate submissions.
- Real-Time Feedback: Implementing immediate feedback for user answers, including correctly displaying the right answers after submission.
- Session Management: Ensuring secure login sessions and handling edge cases like users trying to resubmit completed modules.
- Dynamic Updates: Managing score calculations and updates without disrupting the flow of user interaction.

## Accomplishments that we're proud of
- Successfully creating a fully functional platform for phishing education and training.
- Building a dynamic scoring and feedback system that helps users understand their mistakes immediately.
- Implementing a database structure that efficiently tracks user progress and prevents duplicate data entries.
- Designing an intuitive and accessible interface that makes learning enjoyable.

## What we learned
- The importance of secure and efficient session management for user authentication.
- Techniques for dynamically fetching and displaying content based on user interactions.
- Best practices for integrating learning feedback with gamification.
- Valuable insights into user behavior when engaging with educational cybersecurity tools.

## What's next for Phish Battle
- Adding more detailed reports to show user progress over time and identify areas for improvement.
- Introducing more phishing techniques like vishing (voice phishing) and smishing (SMS phishing) in future modules.
- Expanding the platform to support mobile-friendly designs for broader accessibility.
- Collaborating with organizations to use Phish Battle as a training tool for employees.
- Integrating advanced analytics to provide tailored phishing simulations based on user performance.
