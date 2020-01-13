<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id = $_GET['id'];

    $mouseOverDesign = [
        'nameSurname' => '<p>Write your resume in the language that you would use at your workplace.<br> This is a great chance to show the company’s representatives that you can express yourself.<hr> It’s better to send a CV without a photo, than with one that makes you seem unprofessional. <br> One CV isn’t suitable for every job position. Adapt your CV for the job position you’re applying for. <hr> Templates aren’t suitable for a designer, except if you are applying to a job call that explicitly wants that format. Make it just one page, and don’t write all the projects you’ve worked on – only the ones relevant to the position. <br> Advice: This builder is a great start to help you with the content of the CV, but try making it in Photoshop or Illustrator. </p>', 

        'shortInfo' => '<p>Write a short intro that truly represents you – not a cheesy quote, but something you truly believe in.</p>', 

        'workExperience' => '<p>Describe every job experience with a few words about your most relevant responsibilities and projects connected to the title you’re applying for. <hr>  Dates are a time frame in which you have been on a certain job title. If you are still working there, leave a hyphen ( - ). <hr> First write your most recent experience, and the oldest ones last. We want to enable the reader to see what he needs to about your experience right away.</p>',

        'contact' => '<p>Email, phone number and date of birth are the practical part of the assembly of a CV. <hr> Enter your professional email address, preferably on Gmail. <hr> Your city of living is an information that interests your potential employers. <br> Don’t leave your home address. <hr> Leave a link to your <strong>LinkedIn</strong> profile, or Behance/Dribbble/WiX. <hr> Make sure it’s clickable, and shorten it.</p>',

        'education' => '<p>List relevant education , including workshops or lectures you have visited. If you have a bachelor in Sports, and now you are applying as a designer because you finished a course, the course should be the highest in your “education” section. <hr> <strong>Don’t</strong> put in high and elementary school.</p>',

        'skillsDiv' => '<p> List all the skills, tools and technologies that you know well. <hr>
        <strong>Tip</strong>: Play with the font size. The visual part of the CV is also important, so use different colors and dimensions.</p>',
        // linked and Laika bellow
        'linkedIntro'=> 'Make sure that your title matches your skills. E.g., if you only finished an academy or course, don’t say you are a Graphic Design Expert. <br>
        Skip the abbreviations and titles – keep it short and modest. Be concise and easy to understand. <hr> Don’t use overdone motivational quotes about work ethics and inspiration, try to make the ‘about’ section as personal and as reflective of you as possible.<br>
        Use the “Open for business” feature. State your area of expertise and industry, to let recruiters know they can reach you. <hr>
        Don’t write in things that you wouldn’t like to happen. For example, if you say you work good under pressure, employers might have an ace up their sleeve when stacking a lot of work with a short deadline, because you said so. Value your skills and free time accordingly. ',
    
        'linkedArticles' => 'Under education, the formal and non-formal education relevant to your current title. <hr> For example, if you put Brainster Graphic Design Academy as an education, list all the modules and projects you have worked on. 
        Make sure to list your major and bachelor/master/doctor thesis subject under the university education.',
        
        'linkedExperience' => 'Explain every work experience you’ve had in detail – what were your obligations and tasks, what was your job title, which technologies and tools did you use etc. List experience that isn’t connected to your current profession. <hr> Volunteering at a local community center, summer jobs, projects you were a part of, pro bono work you did to improve your skills and gain experience – everything counts. <br> Plus, every experience serves as proof to your work ethics and adaptability. <hr> Tip: If you have no experience and education to build up your profile, do some pro bono. You can help someone, and at the same time enrich your portfolio.',

        'linkedInterests'=> ' Tip:  Add connections from the same field of work as you; even people you don’t know personally. That way, recruiters have a bigger chance of coming across your profile. Put in the skills you are most experienced in, so you can be endorsed from other people. <hr> Tip: Ask friends and coworkers to endorse you. List all your relevant accomplishments. Don’t say you have a black belt in karate, but mention an award from a design competition.',

        // laika is bellow
        'laikaPersonal_info' => 'Tip: Make sure you leave an email that you check regularly. Choose up to 8 technologies, but make sure you really know their ins and outs. The matching algorithm
        connects you to companies whose job openings have precise technologies listed.
        ',

        'laikaPortfolio' => 'Link all your social media and portfolios you want companies and recruiters to be able to see (LinkedIn,
        Facebook, Behance, Dribbble, your personal website etc.) <hr>
        Be realistic when choosing the reason why you have a portfolio on Laika. This will help recruiters know whether you are suitable for the position on the long run. ',

        'laikaSkills_experience' => 'You can only pick 1 industry out of the given 9 (Software Engineering, Design, Marketing and Communication, Data Science, IT and Sysadmin, Sales and Business Development, HR and Recruitment, Project and Product Management, Customer Support). <hr>
        Choose up to 8 technologies, but make sure you really know their ins and outs. The matching algorithm connects you to companies whose job openings have precise technologies listed.',

        'laikaEducation' => 'Education is also not mandatory, but it adds weight to your portfolio if you have any academic knowledge.',

        'laikaSalary_levelEx' => '<p>You can pick up to 5 options in the Expertise field. Make sure your choices are realistic and they truly reflect the skills you are most confident in.</p>
        <p>Please be honest when selecting the level of your experience. </p>
        <p>Select your desired salary. Don’t try to be too accessible, but please be realistic – make sure your.</p> 

        <p>Salary is in accordance to your experience.  
        You can choose multiple choices for your desired job plan 
        You can choose out of four locations, or multiple 
        You can choose between a job in office, remote, or both. 
        Let the companies know what is your current job title. </p>

        <p>Be honest about the motivation behind looking for a new opportunity. This will help us and the
        companies searching for new employees. 
        Work experience is not mandatory, but it helps companies know what kind of experience and in which
        industry you have.</p>'

    
    ];
    echo json_encode($mouseOverDesign[$id]);
}