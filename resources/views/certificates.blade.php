@extends('Layouts.layout')

@section('content')

<div class="wrapper">
        <div class="cert-form">
        <img id="left" src="{{ asset('img/arms.png') }}">
        <img id="right" src="{{ asset('img/ksg.png') }}"><br/><br />
        <p class="mssg">{{session('mssg')}}</p>
        <h1 class="header-cert">Add new Certificate entry</h1>
           <form action="/certificates" method="POST" class="certificateform validate-form">
           @csrf 
           
           <label for="cert_serial">Certficate Serial Number:</label>
           <input type="text" name="cert_serial" placeholder="Certficate Serial Number"><br />
           <label for="participant_name">Participant Name:</label>
           <input type="text" name="participant_name" placeholder="Participant Name"><br />
           
           <label for="course_name">Course Name:</label>
             <select name="course_name" id="course_name">
                <option value="advanced_excel">Advanced excel and data modelling</option>
                <option value="anti-terrorism">Anti-Terrorism Course</option>
                <option value="bus_dev">Business Development and Marketing Workshop</option>
                <option value="climate_change">Climate Change Policy Planning and Budgeting</option>
                <option value="minute_writing">Conduct of Meeting and Minutes Writing</option>
                <option value="docu_mgmt">Electronic Document Management System</option>
                <option value="envt_impact">Environmental Imapct Assessment</option>
                <option value="social_protection">E-Transform Online Social Protection Course</option>
                <option value="exchange_program">Exchange Programme</option>
                <option value="first_aid">First Aid Course</option>
                <option value="frauud">Fraud Investigation</option>
                <option value="hospitality_skills">Hospitality Skills Development</option>
                <option value="icpak">ICPAK (CPD)</option>
                <option value="ihrm">IHRM (CPD)</option>
                <option value="induction_course">Induction Course</option>
                <option value="info_sec">Information Security Management System Training</option>
                <option value="labour_law">Labour Law Compliance Summit</option>
                <option value="talent_trends">Levereging on Talent Trends for Organization</option>
                <option value="congress_classification">Library of Congress Classification Scheme</option>
                <option value="facilitators_course">Online Facilitators Course</option>
                <option value="online_ettiquette">Online Program on Protocol, Ettiquette and Event Management</option>
                <option value="ped_big">Pedagogical Approaches for Delivery of Big Four</option>
                <option value="policy_research">Policy Research and Publications</option>
                <option value="pr_cc">PR and CC</option>
                <option value="prot_ettiq">Protocol, Ettiquette and Event Management</option>
                <option value="prot_ettiq_presntation">Protocol, Ettiquette and Presentation Skills</option>
                <option value="records_erp">Records Management, Policy, SOP and ERP</option>
                <option value="records_operating systems">Records Management Policy and Standard Operating Systems</option>
                <option value="refresher_defensive">Refresher Defensive and First Aid Courses for Drivers</option>
                <option value="smc">Senior Management Course</option>
                <option value="sldp">Strategic Leadership Development Program</option>
                <option value="supervisory">Supervisory Skills Development Course</option>
                <option value="tot_economic">TOT Economic and Social Cultural Rights</option>
                <option value="tot_social">TOT in Social Protection</option>
                <option value="tot_pedagogical">TOT Pedagogiacal Approaches For the Delivery of Big..</option>
                <option value="tot">Training of Trainers</option>
                <option value="tot_social_protection">Training of Trainers Program in Social Protection</option>
             </select>
             <br />
             <br />
             <label for="completion_date">Completion Date:</label>
             <input type="date" id="completion_date" name="completion_date" value="2020-07-22" min="1990-01-01" max="2021-12-31"> <br/>
             
             <br/><button type="submit" name="btn" class="verify-btn">Submit</button>  

        
@endsection