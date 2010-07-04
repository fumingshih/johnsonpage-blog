<?php

class Job {
    var $title;
    var $name;
    var $from;
    var $to;

    var $blurb;
    var $points;
    
    function __construct($title, $name, $from, $to, $blurb, $points) {
        $this->title = $title;
        $this->name = $name;
        $this->from = $from;
        $this->to = $to;
        $this->blurb = $blurb;
        $this->points = $points;
    }
}

class Point {
    var $heading, $blurb;

    function __construct($heading, $blurb) {
        $this->heading = $heading;
        $this->blurb = $blurb;
    }
}

$jobs = array(
    new Job(
        'Lead Engineer',
        'Locatrix Communications',
        'December 2007',
        'Present',
        '<p>Worked as the lead developer in a team of five engineers, developing various web and mobile applications. The most notable of these projects is <a href="http://everyone.whereis.com">Whereis Everyone</a>, a web-application for sharing live mobile location information between friends and family.</p>',
        array(
            new Point('Technologies', 'Worked with a variety of technologies, including PHP5, HTML, CSS, Javascript (jQuery, Prototype, OpenLayers Mapping Engine), PostgreSQL and Ruby.'),
            new Point('Rapid Development', 'Strived to improve the company\'s rapid development process through the introduction and use of advanced tools, including object-relational mappers (Doctrine), inheritance-based template languages (Twig), Model View Controller patterns, and repeatable deployment processes (Capistrano).'),
            new Point('Testing', 'Developed comprehensive unit test suites, and implemented continuous integration including automated unit testing, syntax checking, style checking, and documentation generation.'),
        )
    ),
    new Job(
        'Senior Web Developer', 
        'ActionCOACH', 
        'September 2006', 
        'December 2007',
        '<p>Leadership role within a development team responsible for maintaining and developing a Customer Relations Management web application for an international business coaching franchise. The application\'s functionality included web-mail, calendar appointments, sales and invoicing.</p>',
        array(
            new Point('Development', 'Used PHP/MySQL and HTML/CSS/Javascript to improve and extend the application in terms of functionality, usability, reliability and maintainability.'),
            new Point('Management', 'Administered development servers including SVN, HTTP and MySQL. Successfully managed monthly deployments by co-ordinating team members and their respective responsibilities, while ensuring minimum downtime.'),
            new Point('Maintenance', 'Liased with users who reported faults in the system, diagnosing and resolving the defect or fault where appropriate.')
        )
    ),
    new Job(
        'Web Developer', 
        'Silv Designs', 
        'June 2006', 
        'September 2006',
        '<p>Independent role involving extending existing web applications and developing new applications from scratch.</p>',
        array(
            new Point('Development', 'Used PHP/MySQL and XHTML/CSS/Javascript to integrate, develop and maintain internal solutions including property management and image storage and manipulation.'),
            new Point('Management', 'Managed time effectively to deal with the changing deadlines and requirements, as determined through direct communication with the client.'),
        )
    ),
    new Job(
        'Advanced IT Project', 
        'University of Queensland', 
        'February 2005',
        'November 2005',
        '<p>Worked in a seven-person team for the year-long duration of the Advanced IT project to develop a restaurant administration application.</p>',
        array(
            new Point('Development', 'Used Java, JSP, XHTML/CSS/Javascript, Oracle and XML technologies to create a restaurant administration application, with a PDA-accessible web interface.'),
            new Point('Documentation', 'Developed comprehensive project documentation including Software Reqruirement Specifications, Gannt charts and periodic reporting.'),
            new Point('Communication', 'Interacted with clients through interviews and product demonstrations. Worked cohesively as an active member of seven-person development team, achieveing exceptional results for all project deliverables.')
        )
    ),
    new Job(
        'Developer, Designer and Administrator', 
        'Vegaji Websites',
        'January 2004', 
        'January 2005',
        '',
        array(
            new Point('Development', 'Developed a lightweight PHP/MySQL content management system for site updates.'),
            new Point('Design', 'Designed and implemented theme for Wordpress content management system to achieve a unique site design.'),
            new Point('Administration', 'Managed upgrades, downtime and filesystem on the server.')
        )
    )
);

$educations = array(
    new Job(
        'Bachelor of Information Technology', 
        'University of Queensland',
        'January 2003', 
        'December 2005',
        '',
        array(
            new Point('', 'Major in Software Design'),
            new Point('', 'Final GPA: 5.8')
        )
    ),
    new Job(
        'Dean\'s Commendation for High Achievement',
        'University of Queensland', 
        '', 
        '',
        '',
        array(
            new Point('', 'Semester One 2005'),
            new Point('', 'Semester Two 2004'),
            new Point('', 'Semester Two 2003'),
            new Point('', 'Semester One 2003'),
        )
    )
);


