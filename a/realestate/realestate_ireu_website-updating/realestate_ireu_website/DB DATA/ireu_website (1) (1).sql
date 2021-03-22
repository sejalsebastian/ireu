-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 06:24 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ireu_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `abt_id` int(11) NOT NULL,
  `abt_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `abt_overview` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `abt_banner_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `abt_vision_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abt_vision_desc` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `abt_mission_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abt_mission_desc` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `abt_commitment_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abt_commitment_desc` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `abt_why_ireu_title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `abt_ceo_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abt_ceo_quote` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abt_ceo_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `abt_ceo_desc` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`abt_id`, `abt_title`, `abt_overview`, `abt_banner_img`, `abt_vision_title`, `abt_vision_desc`, `abt_mission_title`, `abt_mission_desc`, `abt_commitment_title`, `abt_commitment_desc`, `abt_why_ireu_title`, `abt_ceo_title`, `abt_ceo_quote`, `abt_ceo_img`, `abt_ceo_desc`) VALUES
(1, 'Knowledge@IREU', '<b>\"We make you Rich - Education, Experience, Exposure . . . . .\"</b> IREU Tech Education Private limited is focused in providing technology driven education in emerging areas - Real Estate, Banking, Finance, Insurance, Analytics, Digital Marketing, Data Science, Technology and Digital Education. The mission is to educate 50,000 Student Professionals who will master in these sectors and boost economy of the country and impact the growth. As a Professional skilling powerhouse for graduates and working Professionals, we equip students with key compentence and skill, leadership that allows a student to kick start his or her Professional career in the Real Estate World.', 'abt.jpg', 'Vision', '“IREU aims to be an internationally acclaimed technology-based education platform providing easy access to higher education. Following the best practices SOP in the industry, IREU will provide the highest quality of education and necessary skill sets to aspiring students.”', 'Mission', '“Offering Real-Estate, Banking and Finance, Technology education - Technology Enhanced Learning (TEL) of International standards with practical knowledge to enhance the industry needed skill sets.”', 'IREU Commitment', '“To ensure we provide the Indian youth with tailor made and industry vetted educational courses that bridges the gap between the current formal education system and what the Industry requirements are, thereby making our students contribute for the economy of the country and support towards employable.”', 'Why IREU Education?', 'Message from the group CEO -THEJASVI DS', '“The ability to learn is the most important quality a leader can have”.', 'tej.png', 'The post Covid times, Education ecosystem went through rapid changes which brought the adoption of technology transformation, and Edtech industry became main stream of education. The New Education Policy 2020 by government of India has been emphasizing strongly on the need for skilling and innovative ways of teaching.\r\nIREU research team study says that Indian education sector is expected to grow fast at 38% YOY from $2.8B in 2021 to $10B by 2025. IREU Magazine 2021, the third edition, is our attempt to present the happenings at IREU Education company and also share our learnings and research in Education\\ edutech sectors with you all.\r\nIREU Education will bring in the best of value education to students and is committed to delivering education in par with International standards and requirements. All efforts will be made to provide industry needed skilling, and to start with Real Estate and Construction Industry related educational degree programs will be launching in partnership with Jain - Deemed to be University from April 2021.IREU Team targets to enroll 50,000 student per year by year 2023.Our mission is to bridge the skill gap, education and training in Real Estate and Construction areas. Welcome to all.');

-- --------------------------------------------------------

--
-- Table structure for table `abt_why_answers`
--

CREATE TABLE `abt_why_answers` (
  `abt_why_id` int(11) NOT NULL,
  `abt_id` int(11) NOT NULL,
  `abt_why_answers` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abt_why_answers`
--

INSERT INTO `abt_why_answers` (`abt_why_id`, `abt_id`, `abt_why_answers`) VALUES
(1, 1, 'Experienced Faculty, Mentors and Unique teaching methodology'),
(2, 1, 'Course design addressing interdisciplinary and cross functional areas'),
(3, 1, 'Connect with Corporate Executives, CEO, CXO, CMO, CFO\'s for experiential learning and Industry experts through knowledge series'),
(4, 1, 'Blended Teaching: THEORY – PRACTICAL – PROJECT'),
(5, 1, 'Case based approach'),
(6, 1, 'Addressing Program Educational outcomes, Program outcomes, Course outcomes'),
(7, 1, 'Project Exposure and Internships @ MNC’s'),
(8, 1, 'Skills enhancement - through well designed padagogy'),
(9, 1, 'Incubation center support and startup opportunity'),
(10, 1, 'Career assistance and job design for each student'),
(11, 1, 'Centre of Excellence for student advantage'),
(12, 1, 'Collaboration with real World of work and solving real World problems');

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `ace_id` int(10) NOT NULL,
  `aca_tilte` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aca_exp_pdf`
--

CREATE TABLE `aca_exp_pdf` (
  `aca_exp_pdf_id` int(11) NOT NULL,
  `aca_exp_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aca_exp_tempName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aca_pdf_loca` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aca_exp_pdf`
--

INSERT INTO `aca_exp_pdf` (`aca_exp_pdf_id`, `aca_exp_name`, `aca_exp_tempName`, `aca_pdf_loca`) VALUES
(63, 'exp', 'Experiential Learning', 'pdf/Experential Learning .....pdf');

-- --------------------------------------------------------

--
-- Table structure for table `ac_ certificate`
--

CREATE TABLE `ac_ certificate` (
  `ac_cert_id` int(10) NOT NULL,
  `ac_cert_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_ certificate`
--

INSERT INTO `ac_ certificate` (`ac_cert_id`, `ac_cert_title`) VALUES
(1, 'Add-On Certification addressing Real Estate:');

-- --------------------------------------------------------

--
-- Table structure for table `ac_certi_heading`
--

CREATE TABLE `ac_certi_heading` (
  `ac_cer_sub_id` int(10) NOT NULL,
  `ac_cer_id` int(10) NOT NULL,
  `ac_cer_sub_heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_certi_heading`
--

INSERT INTO `ac_certi_heading` (`ac_cer_sub_id`, `ac_cer_id`, `ac_cer_sub_heading`) VALUES
(1, 1, 'General Certification:'),
(2, 1, 'Marketing'),
(3, 1, 'HR'),
(4, 1, 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `ac_certi_sub`
--

CREATE TABLE `ac_certi_sub` (
  `ac_cer_subhg-id` int(10) NOT NULL,
  `ac_cer_sub_id` int(10) NOT NULL,
  `ac_cer_sub_points` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_certi_sub`
--

INSERT INTO `ac_certi_sub` (`ac_cer_subhg-id`, `ac_cer_sub_id`, `ac_cer_sub_points`) VALUES
(1, 1, 'BEC - British English Certification'),
(2, 2, 'Business Analytics, certified by Microsoft'),
(3, 2, 'Digital Marketing by Google'),
(4, 3, 'HR Analytics'),
(5, 4, 'Advanced Excel'),
(6, 4, 'Certified Financial Planner'),
(7, 4, 'NCFM/NISM Certifications'),
(8, 4, 'Certifications in Investment Banking'),
(9, 4, 'Certifications on Financial Risk Management');

-- --------------------------------------------------------

--
-- Table structure for table `ac_corp_mentors`
--

CREATE TABLE `ac_corp_mentors` (
  `ac_corp_id` int(10) NOT NULL,
  `ac_corp_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_corp_mentors`
--

INSERT INTO `ac_corp_mentors` (`ac_corp_id`, `ac_corp_title`) VALUES
(1, 'Corporate Mentors');

-- --------------------------------------------------------

--
-- Table structure for table `ac_corp_mentors_sub`
--

CREATE TABLE `ac_corp_mentors_sub` (
  `ac_sub_corp_id` int(10) NOT NULL,
  `ac_corp_id` int(10) NOT NULL,
  `ac_sub_corp_points` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_corp_mentors_sub`
--

INSERT INTO `ac_corp_mentors_sub` (`ac_sub_corp_id`, `ac_corp_id`, `ac_sub_corp_points`) VALUES
(1, 1, 'Each student / group of students will be assigned with Corporate Mentors, once the admissions formalities is closed;'),
(2, 1, 'A Mapping of students skill set will be undertaken with licensed Software Report generated. This will be the guide for Mentor for entire course for career planning, persona shaping and fine tuning of the skills;'),
(3, 1, 'Each mid and end semester, the progress will be reviewed and further action plan will be done;'),
(5, 1, 'The training and development of each students towards Industry readiness will be undertaken at the Finishing school along with Corporate Mentors;'),
(6, 1, 'The Corporate Mentors will be available for each student for crafting the career graph.');

-- --------------------------------------------------------

--
-- Table structure for table `ac_ experiential_learning`
--

CREATE TABLE `ac_ experiential_learning` (
  `ac_exp_id` int(10) NOT NULL,
  `ac_exp_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ac_exp_pdf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ac_exp_temp` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_ experiential_learning`
--

INSERT INTO `ac_ experiential_learning` (`ac_exp_id`, `ac_exp_name`, `ac_exp_pdf`, `ac_exp_temp`) VALUES
(2, 'Experiential Learning\r\n', 'pdf/Experential%20Learning%20.....pdf', 111);

-- --------------------------------------------------------

--
-- Table structure for table `ac_imsn_pgm`
--

CREATE TABLE `ac_imsn_pgm` (
  `ac_impgm_id` int(10) NOT NULL,
  `ac_imsnpgm_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_imsn_pgm`
--

INSERT INTO `ac_imsn_pgm` (`ac_impgm_id`, `ac_imsnpgm_title`) VALUES
(1, 'Global Real Estate Hackathon Series, powered by IREU Group of Companies');

-- --------------------------------------------------------

--
-- Table structure for table `ac_imsn_pgm_sub`
--

CREATE TABLE `ac_imsn_pgm_sub` (
  `ac_impgm_sub_id` int(10) NOT NULL,
  `ac_impgm_id` int(10) NOT NULL,
  `ac_impgm_points` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_imsn_pgm_sub`
--

INSERT INTO `ac_imsn_pgm_sub` (`ac_impgm_sub_id`, `ac_impgm_id`, `ac_impgm_points`) VALUES
(2, 1, 'Learn from the best – attend an International Masterclass organised at different place each year'),
(3, 1, 'Participate in an exciting hackathon to find the best solution for a Real Estate business, based on pre qualifier'),
(4, 1, 'Attend a special interactive workshop with the leading CEO / Vice President of International Venture Capital firm/ Investor'),
(5, 1, 'Get an International Certificate of Participation jointly signed and issued by Participating and Host Organisation'),
(6, 1, 'Win a paid internship to work on your idea, once it gets through Investors Nod');

-- --------------------------------------------------------

--
-- Table structure for table `ac_initivities`
--

CREATE TABLE `ac_initivities` (
  `ac_initia_id` int(11) NOT NULL,
  `ac_initia_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ac_initia_pdf` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_initivities`
--

INSERT INTO `ac_initivities` (`ac_initia_id`, `ac_initia_name`, `ac_initia_pdf`) VALUES
(1, 'IREU Initiatives', 'pdf/IREU Initiatives .jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ac_overview`
--

CREATE TABLE `ac_overview` (
  `ac_overview_id` int(10) NOT NULL,
  `ac_about` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_overview`
--

INSERT INTO `ac_overview` (`ac_overview_id`, `ac_about`) VALUES
(13, 'IREU offers the best in class, education and training realted to Management, Technology, Degree, Diploma and certifications programs in the field of Real Estate, Banking, Finance, Insurance, Analytics, Digital Marketing, Data Science, and Digital Education. These programs are designed to mould the students into successful professionals in the desired industry and manage the sector in future. IREU equips its students with industry related information and global management skills for the growing Education and IT industry. IREU understands the paradigm shift in the quality of professionals required by the industry today, and the need for students to keep abreast with the present market trends and understand all facets of business.');

-- --------------------------------------------------------

--
-- Table structure for table `ac_overview_section`
--

CREATE TABLE `ac_overview_section` (
  `ac_sub_over_id` int(10) NOT NULL,
  `ac_overview_id` int(10) NOT NULL,
  `ac_heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ac_content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ac_over_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_overview_section`
--

INSERT INTO `ac_overview_section` (`ac_sub_over_id`, `ac_overview_id`, `ac_heading`, `ac_content`, `ac_over_img`) VALUES
(1, 13, 'IREU School for Real Estate and Construction Management', 'IREU Real Estate Education offers real estate industry mapped programs to equip the students and real estate professionals with the skills to make them competitive to face the challenging environment of real estate sector.\r\n\r\nIREU Real estate education programs provide real time real estate industry knowledge base, training proficiency and on the job practical exposure to face new challenges and accelerates the career ladder in the real estate world.\r\n\r\nWith the roboust and industry feedback syllabus, the course is driven with latest teaching padagogy and blended learning model.', './img/banner/aca_RE.jpg'),
(2, 13, 'IREU School for Digital and Technology Education', 'IREU has designed Industry specific programs for students which increase the chances of getting hired by the IT Industry in the Technology domain. These workplace-readiness training programs are curated to mould students into successful professionals in the IT industry.\r\n\r\nIREU Tech Education aspires to equip its students with Technology industry related information and global management skills for the growing IT industry.', './img/banner/aca_t_d.png'),
(3, 13, 'IREU School for Banking, Financial services and Insurance Education', 'Banking and financial institutions are in a quest for hiring entry level positions. The IREU BFSI courses are mapped by Industry professionals providing real time knowledge and exposure for a person to get started with job on the very first day and for the Banking Professionals, various courses are designed to fast track their career.', './img/banner/aca_b_f.jpg'),
(4, 13, 'IREU Online University Education', 'Earn a degree while you work! Sounds great right. That’s the advantage of IREU Education.\r\n\r\nIREU has designed online programs in various domains of Real Estate, Technology and BFSI to make the students learn at their own pace and at their most comfortable environment. Working professionals can upgrade their skills ANYTIME - ANYWHERE - ANYPLACE through online education, which always is an added advantage and that’s what IREU thrives for.\r\n\r\nread more', './img/banner/aca_online.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ac_research_report`
--

CREATE TABLE `ac_research_report` (
  `ac_res_id` int(10) NOT NULL,
  `ac_res_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_research_report`
--

INSERT INTO `ac_research_report` (`ac_res_id`, `ac_res_title`) VALUES
(1, 'Research Report');

-- --------------------------------------------------------

--
-- Table structure for table `ac_research_sub`
--

CREATE TABLE `ac_research_sub` (
  `ac_res_sub_id` int(10) NOT NULL,
  `ac_res_id` int(10) NOT NULL,
  `ac_res_sub_point` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_research_sub`
--

INSERT INTO `ac_research_sub` (`ac_res_sub_id`, `ac_res_id`, `ac_res_sub_point`) VALUES
(1, 1, 'Each student / group of students will be assigned with In-house Faculty, once the admissions formalities is closed;'),
(2, 1, 'Each course in IREU requires to have Project work undertaken and Report generated;'),
(3, 1, 'Each Report will be guided by Internal and External-Organisation Guides, based on the theme and specialisation of the student;'),
(4, 1, 'The format for Project submission will be communicated from time to time;'),
(5, 1, 'The Plagiarism similarly percentage for every report is permissible at 10%; Any second submission with same % is liable for rejection of the report; The student has to redo the entire work/report.');

-- --------------------------------------------------------

--
-- Table structure for table `ac_usp`
--

CREATE TABLE `ac_usp` (
  `ac_usp_id` int(10) NOT NULL,
  `ac_usp_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_usp`
--

INSERT INTO `ac_usp` (`ac_usp_id`, `ac_usp_title`) VALUES
(1, 'USP of IREU-MBA:');

-- --------------------------------------------------------

--
-- Table structure for table `ac_usp_list`
--

CREATE TABLE `ac_usp_list` (
  `ac_sub_usp_id` int(10) NOT NULL,
  `ac_usp_id` int(10) NOT NULL,
  `ac_usp_id_list` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ac_usp_list`
--

INSERT INTO `ac_usp_list` (`ac_sub_usp_id`, `ac_usp_id`, `ac_usp_id_list`) VALUES
(2, 1, 'Legacy of running and managing real Estate Business for years'),
(3, 1, 'Experienced Faculty + PhD level background'),
(4, 1, 'Comprehensive four day Induction Programme / Immersion Program'),
(5, 1, 'Ideal Faculty- Student Ratio; hence each student get focused attention and good connect with Professors'),
(6, 1, 'Blending Theory & Practice / Flipped teaching methodology / Gamification'),
(7, 1, 'Certification Courses, based on ASK- Attitude; Skills; Knowledge'),
(13, 1, 'Extensive exposure to industry and familiarise the student with the actual work situations'),
(14, 1, 'Finishing School - Each student with Profiling Career Map/ Personality'),
(15, 1, 'Career development centre and Network with Recruiters for Students advantage Industry\r\nConnect / Visits / interaction with professionals & industry veterans'),
(16, 1, 'Pedagogy - the rigours of countless assignments, committee work and quizzes, fieldwork / real time case study'),
(17, 1, 'Extensive Mentoring / Coaching for Start up, and Incubation support'),
(18, 1, 'Rigorous Research basics / All course with Project based'),
(19, 1, 'Engaged community citizenship and connects with NGO'),
(20, 1, 'Celebrates different cultures throughout cultural activities and fests throughout the year / sports meets, musical performances, dance groups, dramatics'),
(21, 1, 'Intense focus on extra curricular activities and various opportunities to display leadership'),
(22, 1, 'Clubs for academic development and exposure');

-- --------------------------------------------------------

--
-- Table structure for table `add_eligi`
--

CREATE TABLE `add_eligi` (
  `add_id` int(11) NOT NULL,
  `add_heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_eligi`
--

INSERT INTO `add_eligi` (`add_id`, `add_heading`) VALUES
(1, 'UG Eligibility'),
(2, 'PG Eligibility');

-- --------------------------------------------------------

--
-- Table structure for table `add_sub_list`
--

CREATE TABLE `add_sub_list` (
  `add_sub_id` int(11) NOT NULL,
  `add_id` int(11) NOT NULL,
  `add_sub_content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_sub_list`
--

INSERT INTO `add_sub_list` (`add_sub_id`, `add_id`, `add_sub_content`) VALUES
(1, 1, 'Pre-University/Higher Secondary/10+2 Examinations or equivalent from any recognized Board or Council in any discipline.'),
(2, 1, 'Obtained at least 45% marks (40% in case of candidate belonging to reserved category) in the subjects taken in standard 12 or equivalent.'),
(3, 2, 'Candidates must have a 10 + 2 + 3-year bachelor’s degree from a recognized university/institution or an equivalent qualification as recognized by the Association of Indian Universities or other competent bodies, in any discipline.');

-- --------------------------------------------------------

--
-- Table structure for table `ad_admission_process`
--

CREATE TABLE `ad_admission_process` (
  `ad_ad_id` int(11) NOT NULL,
  `ad_ad_about` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ad_Helpline_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_helpline_Subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad_admission_process`
--

INSERT INTO `ad_admission_process` (`ad_ad_id`, `ad_ad_about`, `ad_Helpline_title`, `ad_helpline_Subtitle`) VALUES
(1, 'All candidates must meet the program specific eligibility criteria. (Eligibility criteria for each program is on the admissions page of the specific program). Candidates meeting the eligibility criteria should follow the below-mentioned steps:', 'Helplines', 'Office of Admissions');

-- --------------------------------------------------------

--
-- Table structure for table `ad_eligibility`
--

CREATE TABLE `ad_eligibility` (
  `ad_eligibility_id` int(11) NOT NULL,
  `ad_main_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_ele_heading_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_ele_des` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad_eligibility`
--

INSERT INTO `ad_eligibility` (`ad_eligibility_id`, `ad_main_title`, `ad_ele_heading_title`, `ad_ele_des`) VALUES
(1, 'Eligibility', 'UG Eligibility', 'Pre-University/Higher Secondary/10+2 Examinations or equivalent from any recognized Board or Council in any discipline.\r\nObtained at least 45% marks (40% in case of candidate belonging to reserved category) in the subjects taken in standard 12 or equivalent.'),
(2, 'Eligibility\r\n', 'PG Eligibility', 'Candidates must have a 10 + 2 + 3-year bachelor’s degree from a recognized university/institution or an equivalent qualification as recognized by the Association of Indian Universities or other competent bodies, in any discipline.');

-- --------------------------------------------------------

--
-- Table structure for table `ad_helpline_numbers`
--

CREATE TABLE `ad_helpline_numbers` (
  `ad_num_id` int(11) NOT NULL,
  `ad_ad_id` int(11) NOT NULL,
  `ad_help_course_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_help_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad_helpline_numbers`
--

INSERT INTO `ad_helpline_numbers` (`ad_num_id`, `ad_ad_id`, `ad_help_course_title`, `ad_help_number`) VALUES
(1, 1, 'Under Graduate', '+91 82963 08193'),
(2, 1, 'Under Graduate', '+91 89717 55988'),
(3, 1, 'Under Graduate', '+91 9916735114'),
(4, 1, 'Post Graduate', '+91 82963 08193'),
(5, 1, 'Post Graduate', '+91 89717 55988'),
(6, 1, 'Post Graduate', '+91 9916735114'),
(7, 1, 'Diploma', '+91 82963 08193'),
(8, 1, 'Diploma', '+91 89717 55988'),
(9, 1, 'Diploma', '+91 9916735114');

-- --------------------------------------------------------

--
-- Table structure for table `ad_sub_adn_pro`
--

CREATE TABLE `ad_sub_adn_pro` (
  `ad_sub_pro` int(11) NOT NULL,
  `ad_sub_adn_id` int(11) NOT NULL,
  `ad_sub_adn_off_list` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad_sub_adn_pro`
--

INSERT INTO `ad_sub_adn_pro` (`ad_sub_pro`, `ad_sub_adn_id`, `ad_sub_adn_off_list`) VALUES
(1, 2, 'Jain (Deemed-to-be University) reserves the right to change / alter the dates or timing at any given time during the application process'),
(2, 2, 'Jain (Deemed-to-be University) will not be held responsible for any loss or damage to the Application and supporting documents that are sent through post / courier or received at the Study Campus Administrative Office or Admissions Office'),
(3, 2, 'Jain (Deemed-to-be University) will not be held responsible for any inadvertent error that may have crept in the online submission of application or Jain Entrance Test Hall Ticket / Results being published'),
(4, 2, 'The University does not collect any type of capitation / donation and do not authorize any third party to issue or process the admission'),
(5, 2, 'If the application is incomplete or incorrect, the University has the right to reject it'),
(6, 2, 'Applicant(s) are advised to keep a photocopy of the printed application form, for further reference'),
(7, 2, 'Please be aware that ignorance of the guidelines / terms & conditions, will not be accepted as an excuse');

-- --------------------------------------------------------

--
-- Table structure for table `ad_sub_adn_process`
--

CREATE TABLE `ad_sub_adn_process` (
  `ad_sub _adn_id` int(11) NOT NULL,
  `ad_ad_id` int(11) NOT NULL,
  `ad_ad_heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ad_ad_content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ad_ad_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad_sub_adn_process`
--

INSERT INTO `ad_sub_adn_process` (`ad_sub _adn_id`, `ad_ad_id`, `ad_ad_heading`, `ad_ad_content`, `ad_ad_link`) VALUES
(1, 1, 'Online Application:', 'A non-refundable application fee for the preferred program should be paid through Online Payment gateway Mode with the valid Credit Card / Debit Card or Net Banking facility.', '#'),
(2, 1, 'Offline Application:', 'Candidates can purchase a non-refundable online application coupon from the Admissions Office and redeem the same by entering the specific coupon code in the Online Payment Gateway under the heading \'Coupon Code\'.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `app_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `fee_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`app_id`, `stu_id`, `fee_status`) VALUES
(1, 3, NULL),
(2, 3, NULL),
(3, 2, NULL),
(4, 2, NULL),
(5, 2, NULL),
(6, 2, NULL),
(7, 2, 'paid'),
(8, 2, NULL),
(9, 2, NULL),
(10, 2, NULL),
(11, 25, NULL),
(12, 4, NULL),
(13, 4, NULL),
(14, 25, NULL),
(15, 41, NULL),
(16, 41, NULL),
(17, 41, NULL),
(18, 41, NULL),
(19, 41, NULL),
(20, 41, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `career assistance and support`
--

CREATE TABLE `career assistance and support` (
  `cas_id` int(11) NOT NULL,
  `cas_main_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cas_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cas_overview` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `cas_pre_place_activity_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cas_resources_main_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `career assistance and support`
--

INSERT INTO `career assistance and support` (`cas_id`, `cas_main_title`, `cas_img`, `cas_overview`, `cas_pre_place_activity_title`, `cas_resources_main_title`) VALUES
(1, 'Career Assistance and Support', 'placements.jpg', 'MBA is more sought after program for any student and it is because of the curriculum that helps to give students deeper insights into core areas of business and management. The peculiar feature of IREU MBA is the Career Development Centre (CDC), which has the best team who constantly attempt to develop a value added relationships with industry professionals from across the sectors. IREU MBA believes in holistic development of management students and this is well achieved through CDC. Students are given training on various areas- Technical, Domain specific, Selling, Financial Analysis, Negotiation, Project Proposal Writing, Presentation, Interview skills and general communication.\r\n\r\nOur Alumni - Our Pride: IREU MBA is able to make successful placement offers through networking which operates under CDC. Each student will be given several opportunity to have interaction and discussion with the Corporate Connect which IREU has built over a period of time, and all the efforts will be done to have career planning and support to each and every student of IREU Group.', 'Pre-placement activities at IREU MBA:', 'Your Career Resources:');

-- --------------------------------------------------------

--
-- Table structure for table `cas_pre-placement activities`
--

CREATE TABLE `cas_pre-placement activities` (
  `cas_pre_id` int(11) NOT NULL,
  `cas_id` int(11) NOT NULL,
  `cas_pre_place_activities` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cas_pre-placement activities`
--

INSERT INTO `cas_pre-placement activities` (`cas_pre_id`, `cas_id`, `cas_pre_place_activities`) VALUES
(1, 1, 'Aptitude Tests (Tie up with CoCubes; Aspiring Minds; First Naukri)'),
(2, 1, 'Professional resume writing exercises (IREU resume format)'),
(3, 1, 'Personal Interview skills'),
(4, 1, 'Technical Interview Skills (Domain specific training)'),
(5, 1, 'Group Discussion and Debate (Mock sessions)'),
(6, 1, 'Presentation and Negotiation');

-- --------------------------------------------------------

--
-- Table structure for table `cas_resources`
--

CREATE TABLE `cas_resources` (
  `cas_res_id` int(11) NOT NULL,
  `cas_id` int(11) NOT NULL,
  `cas_res_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cas_res_title_desc` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cas_resources`
--

INSERT INTO `cas_resources` (`cas_res_id`, `cas_id`, `cas_res_title`, `cas_res_title_desc`) VALUES
(1, 1, 'A Dedicated Team', 'Placement and Career Wing is committed to help both students and alumni realize their unique career vision. IREU mentor team guide students and alumni through their career journey, and also provide valuable programming for both students and alumni and create valuable employers, skills required for better work and the competency that are essential.'),
(2, 1, 'Experienced Coaches', 'In addition to our team, students and alumni can interact with career coaches who are trained to work with them throughout their career trajectories. Proctors and Coaches are experienced professionals who help you craft resumes, cover letters, create and execute a search strategy, prepare for interviews, and facing group interactions.'),
(3, 1, 'Company Connections', 'CDC organises network with corporate, companies, arranges interviews, presentations and networking events. Both students and alumni have access to our exclusive database, where you can search by industry, location, function and experience. You can also make company connections through the various student-led Clubs on campus, which network with various organisations, Professional Association and Corporate. From the moment you are on onboard (admitted) to wherever you go after graduation, you\'ll have access to thousands of job postings, videos and career education resources tailored to your individual needs.'),
(4, 1, 'Fostering Entrepreneurship', 'Explore the world of entrepreneurship with unique programming and opportunities, New Venture Start Up talks, discussion and presentation. Students have access to entrepreneurship cell and can have discussion with experts in setting up their own venture. A data base of Venture Capitalist is provided for students support.');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `prog_id` int(11) NOT NULL,
  `course_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `prog_id`, `course_name`) VALUES
(1, 1, 'Bachelor of Business Administration (BBA)'),
(2, 1, 'Bachelor of Computer Application(BCA)'),
(3, 2, ' Master of Business Administration (MBA)'),
(4, 2, 'Master of Computer Applications (MCA)');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courses_id` int(11) NOT NULL,
  `prog_id` int(11) NOT NULL,
  `course_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courses_id`, `prog_id`, `course_name`) VALUES
(1, 1, 'Bachelor of Business Administration (BBA) -  Real Estate Management'),
(2, 1, 'Bachelor of Vocational (B.Voc) - Real Estate Management'),
(3, 2, ' Master of Business Administration (MBA) - Real Estate Management '),
(4, 2, 'Master of Vocational (M.Voc) - Real Estate\r\nManagement '),
(5, 3, 'PGDM - Real Estate Management '),
(6, 3, 'PGDM Leadership - Real Estate\r\nManagement'),
(7, 2, 'MBA - Real Estate Management + Advanced Certification Program in Real Estate Management from IREU');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `cour_det_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `cour_picture` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cour_eligibility` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `cour_pdf` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cour_cat` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cour_overview` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `cour_duration` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `cour_fee` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `cour_video` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`cour_det_id`, `course_id`, `cour_picture`, `cour_eligibility`, `cour_pdf`, `cour_cat`, `cour_overview`, `cour_duration`, `cour_fee`, `cour_video`) VALUES
(1, 1, NULL, 'Pre-University/Higher Secondary/10+2 Examinations or equivalent from any recognized Board or Council in any discipline.\r\n\r\nObtained at least 45% marks (40% in case of candidate belonging to reserved category) in the subjects taken in standard 12 or equivalent.', NULL, NULL, 'The B. Com. (Hons.) course aims at building competence in particular areas of business studies while providing the students with a wide range of managerial skills. The program imparts strong subject-matter expertise by focusing on the learning that includes the knowledge of basic theories, principles, methods and procedures of commerce and accounting.\r\n\r\nThe curriculum of the B. Com. (Hons.) degree course is rigorous and progressive, and prepares its graduates for careers in commerce and accountancy as well as for other professional roles such as economic, business and security analysts.\r\n\r\nA bachelor\'s degree in commerce is a fundamental graduating qualification, and opens up opportunities in higher education for graduates to pursue Master\'s-level courses such as M. Com and MBA. The B. Com. (Hons.) graduate also has opportunities to apply for professional courses in commerce and accountancy such as CA, CS, ICWA, CIMA, CFA and CMA etc.', 'three years (Full-time)', '10000rs', ''),
(2, 2, NULL, '', NULL, NULL, 'hello', '465', 'asdf', NULL),
(3, 7, NULL, 'Bachelor\'s Degree (Minimum of 3 Years Degree Program), with at least 50% marks or equivalent CGPA (45% in case of Reserved Category) from a University recognized by University Grants Commission (UGC) or an equivalent qualification.\r\n\r\nStudents who are in the final year of the Bachelor’s Degree are also eligible to apply.', NULL, NULL, 'Real estate attracted around Rs. 43,780 crores (US$ 6.26 billion) in investment in 2019 and is expected to touch Rs. 65,000 crores by 2040 according to an IBEF report. The Securities and Exchange Board of India (SEBI) has given its approval for the Real Estate Investment Trust (REIT) platform, which will allow all kinds of investors to invest in the Indian real estate market. The Government of India promoted Pradhan Mantri Awas Yojana (PMAY), Smart City Project, and several other initiatives that are only going to boost investment in the Real Estate sector. The Real Estate industry will play a pivotal role in the economy and of late has become a very competitive sector. The pandemic has changed the dynamics of the Real Estate sector. With the Real Estate Regulatory Authority (RERA) in place, the sector is getting more organized by the day and is moving away from family owned to professionally managed business houses. The need for specialist knowledge within this sector such as property valuation, risk management, law, and compliances has increased demand for professionals with a sound understanding of the sector. Top Real Estate Developers and Boutique Firms look for candidates who have undergone a professional management education with a concentration in Real Estate. \r\n\r\nThis specialization provides an opportunity to understand and study the various characteristics of a real estate business and the industry as a whole. The program will deliver a professional education in real estate and provide a perfect grounding for a career in real estate. It will provide a structured framework to understand the complex world of real estate management.', '2 Years\r\n', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_features`
--

CREATE TABLE `course_features` (
  `cour_fea_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_feat_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_features`
--

INSERT INTO `course_features` (`cour_fea_id`, `course_id`, `course_feat_desc`) VALUES
(1, 1, 'State-of-the-art ambience created by the appropriate use of technology.'),
(2, 1, 'Excellent industry specific curriculum delivered by accomplished faculty and renowned industry practitioners.'),
(3, 1, 'Rigorous coaching with stipulated contact hours.'),
(4, 1, 'Regular industrial visits and lectures by industry experts.'),
(5, 1, 'Library with an extensive collection of books, magazines and journals.'),
(6, 1, 'Professional programs like CA-CPT, ACCA, CMA(US) are encouraged.'),
(10, 2, 'the dark night rises'),
(11, 7, 'Strong foundation in understanding the Real Estate ecosystem'),
(12, 7, 'Thorough understanding of advanced courses like Property Valuation, Risk Analysis, Project Management, etc.'),
(13, 7, 'Focus on adopting a data-driven approach to managing business risks in Real Estate and construction area'),
(14, 7, 'Industry aligned curriculum that delivers technical excellence and supplements professional skills'),
(15, 7, 'Achieve business mastery with a unique blend of Real Estate and Management courses'),
(16, 7, 'Analyze problems and propose actions in real-world situations as part of the Master Thesis');

-- --------------------------------------------------------

--
-- Table structure for table `course_history`
--

CREATE TABLE `course_history` (
  `course_history_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name_old` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `course_name_new` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `course_details_old` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `course_details_new` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `course_image_old` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `course_image_new` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `modified_by_old` int(11) NOT NULL,
  `modified_by_new` int(11) NOT NULL,
  `modified_datetime_old` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `modified_datetime_new` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_structure`
--

CREATE TABLE `course_structure` (
  `cour_str_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `cour_year` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course_structure`
--

INSERT INTO `course_structure` (`cour_str_id`, `course_id`, `cour_year`) VALUES
(1, 1, 'Year 1'),
(2, 1, 'Year 2'),
(3, 1, 'Year 3'),
(4, 2, 'Year 1'),
(5, 7, 'Year 1'),
(6, 7, 'Year 2');

-- --------------------------------------------------------

--
-- Table structure for table `cour_stu_details`
--

CREATE TABLE `cour_stu_details` (
  `cour_stu_det_id` int(11) NOT NULL,
  `cour_str_id` int(11) NOT NULL,
  `sem_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cour_sem_details` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cour_stu_details`
--

INSERT INTO `cour_stu_details` (`cour_stu_det_id`, `cour_str_id`, `sem_type`, `cour_sem_details`) VALUES
(1, 1, 'Frist Semester', 'Language: English -Phase A'),
(2, 1, 'Frist Semester', 'Fundamental of Management'),
(3, 1, 'Second Semester', 'Language: English -Phase B'),
(4, 1, 'Second Semester', 'Business Ethics and CSR'),
(5, 2, 'Third Semester', 'Accounting using Tally ERP'),
(6, 2, 'Third Semester', 'Business English and Communication -I'),
(7, 2, 'Fourth Semester', 'Business English and Communication -II'),
(8, 2, 'Fourth Semester', 'Indian Constitution'),
(9, 3, 'Sixth Semester', 'Commercial Law'),
(10, 3, 'Sixth Semester', 'Principle and Practice of Indirect Taxation'),
(11, 3, 'Fifth Semester', 'Commercial Banking'),
(12, 3, 'Fifth Semester', 'Small Industries Development'),
(13, 5, 'First Semester', 'Principles of Economics & Markets'),
(14, 5, 'First Semester', 'Managerial Effectiveness & Ethics'),
(15, 5, 'First Semester', 'Accounting & Finance'),
(16, 5, 'First Semester', 'Organizational Behaviour & Human Resources Management'),
(17, 5, 'First Semester', 'Quantitative Techniques & Analytics'),
(18, 5, 'Second Semester', 'Entrepreneurship'),
(19, 5, 'Second Semester', 'Marketing Management & Research'),
(20, 5, 'Second Semester', 'Introduction to Real Estate'),
(21, 5, 'Second Semester', 'Urban Planning and Governance'),
(22, 5, 'Second Semester', 'Laws and Regulations for Real Estate'),
(23, 6, 'Third Semester', 'Business Environment & Strategy'),
(24, 6, 'Third Semester', 'Operations Management'),
(25, 6, 'Third Semester', 'Real estate Development & Property Valuation'),
(26, 6, 'Third Semester', 'Real Estate Investment and Risk Analysis'),
(27, 6, 'Third Semester', 'Residential & Commercial Property Marketing'),
(28, 6, 'Third Semester', 'Open Elective Course'),
(29, 6, 'Fourth Semester', 'Project Financing '),
(30, 6, 'Fourth Semester', 'Real Estate: Digital Marketing and Sales'),
(31, 6, 'Fourth Semester', 'Real Estate Project Management'),
(32, 6, 'Fourth Semester', 'International Real Estate Markets & Opportunities'),
(33, 6, 'Fourth Semester', 'Cross-Functional Elective Course'),
(34, 6, 'Fourth Semester', 'Master Thesis / Project ');

-- --------------------------------------------------------

--
-- Table structure for table `disclaimer`
--

CREATE TABLE `disclaimer` (
  `dis_id` int(11) NOT NULL,
  `dis_main_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dis_subheading` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `disclaimer`
--

INSERT INTO `disclaimer` (`dis_id`, `dis_main_title`, `dis_subheading`) VALUES
(1, 'Disclaimer', 'We reserve the right in our sole discretion to edit or delete any documents, information or other content appearing on the Site.');

-- --------------------------------------------------------

--
-- Table structure for table `dis_subheading_description`
--

CREATE TABLE `dis_subheading_description` (
  `dis_sub_id` int(11) NOT NULL,
  `dis_id` int(11) NOT NULL,
  `dis_sub_desc` varchar(800) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dis_subheading_description`
--

INSERT INTO `dis_subheading_description` (`dis_sub_id`, `dis_id`, `dis_sub_desc`) VALUES
(1, 1, 'You agree to indemnify, defend and hold us and our partners, attorneys, staff and affiliates (collectively, \"Affiliated Parties\") harmless from any liability, loss, claim and expense, including reasonable attorney\'s fees, related to your violation of this Agreement or use of the Site.'),
(2, 1, 'Your right to use the Site is not transferable. Any password or right given to you to obtain information or documents is not transferable.'),
(3, 1, 'The information and services may contain bugs, errors, problems or other limitations. We and our affiliated parties have no liability whatsoever for your use of any information or service. In particular, but not as a limitation thereof, we and our affiliated parties are not liable for any indirect, special, incidental or consequential damages (including damages for loss of business, loss of profits, litigation, or the like), whether based on breach of contract, breach of warranty, tort (including negligence), product liability or otherwise, even if advised of the possibility of such damages.'),
(4, 1, 'The negation of damages set forth above are fundamental elements of the basis of the bargain between us and you. This site and the information would not be provided without such limitations. No advice or information, whether oral or written, obtained by you from us through the site shall create any warranty, representation or guarantee not expressly stated in this agreement.'),
(5, 1, 'We reserve the right, and you authorize us, to the use and assignment of all information regarding Site uses by you and all information provided by you in any manner consistent with our Privacy Policy.'),
(6, 1, 'Our Privacy Policy, as it may change from time to time, is a part of this Agreement.');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `faq_title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `course_id`, `faq_title`) VALUES
(1, 1, 'Accounting and Financial Management'),
(2, 1, 'Human Resource Management'),
(3, 1, 'Marketing Management'),
(4, 7, 'What is the Validity & Credibility of Online Degrees? '),
(5, 7, 'What is the Eligibility Criteria to apply for the Program? '),
(6, 7, 'How do I Attend Classes? '),
(7, 7, 'How are Examinations Conducted Online? '),
(8, 7, 'What is the Pass Percentage for this Program? '),
(9, 7, 'Do you Offer Placement Assistance? ');

-- --------------------------------------------------------

--
-- Table structure for table `faq_details`
--

CREATE TABLE `faq_details` (
  `faq_det_id` int(11) NOT NULL,
  `faq_id` int(11) NOT NULL,
  `faq_questions` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `faq_answer` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq_details`
--

INSERT INTO `faq_details` (`faq_det_id`, `faq_id`, `faq_questions`, `faq_answer`) VALUES
(1, 1, 'Advanced Financial Accounting', 'Investment Management'),
(2, 1, 'Corporate Financial Reporting and Analysis', 'International Financial Management'),
(3, 2, 'Corporate Leadership and Organizational Development', 'Labor Laws and Welfare'),
(4, 2, 'International Human Resource Management', 'Human Resource Development'),
(5, 3, 'Consumer Behavior and Market Research', 'Integrated Marketing Communication'),
(6, 3, 'Sales and Distribution Management', 'Retail Management'),
(8, 4, 'Designed as per the University Grants Commission (UGC) Regulations, 2020, Jain (Deemed-to-be University)’s Online Degree Programmes are recognized at par with on-campus programmes Degrees are widely accepted Worldwide by governments, corporate organizations, and higher education institutions.', ''),
(9, 5, 'Candidates must have a 10 + 2 + 3-year bachelor\'s degree from a recognized university/institution or an equivalent qualification as recognized by the Association of Indian Universities or other competent bodies, in any discipline.', ''),
(10, 6, 'Live Online Classes are Scheduled on the Weekends for 7 to 8 Hours. Self-Learning Materials in the form of Video and PDF formats are available on the Learning Management System.', ''),
(11, 7, 'Examinations are conducted through Online Technology Enabled Proctored mode. The exam pattern comprises of internal and external assessments. The weightage is as follows: Internal(assignments) 30% and External (Semester examination) 70%. Section A- Subjective, Section B- Case Studies and Section C- MCQs', ''),
(12, 8, 'The minimum passing criteria is 5.5 SGPA(Semester Grade Point Average) and 6 CGPA (Cumulative Grade Point Average.', ''),
(13, 9, 'Yes, We offer placement assistance with Jain (Deemed-to-be University) Connect To Careers Virtual Job Fair and on Connect To Careers e-Portal, a Digital Platform that can help you expand your job search by allowing you to meet multiple recruiting organizations looking for interns and employees.', '');

-- --------------------------------------------------------

--
-- Table structure for table `hm_academics`
--

CREATE TABLE `hm_academics` (
  `hm_acd_id` int(11) NOT NULL,
  `hm_id` int(11) NOT NULL,
  `hm_academic_info` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `hm_academic_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hm_academics`
--

INSERT INTO `hm_academics` (`hm_acd_id`, `hm_id`, `hm_academic_info`, `hm_academic_img`) VALUES
(2, 1, 'IREU School for Real Estate and Construction Management', 'Real Estate and Construction management.jpg'),
(3, 1, 'IREU School for Digital and Technology Education', 'Digital and Technology education1.png'),
(4, 1, 'IREU School for Banking, Financial Services and Insurance Education', 'Banking, Financial services and Insurance Education1.jpg'),
(5, 1, 'IREU Online University Education', 'IREU Online University Education.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hm_academic_collaboration`
--

CREATE TABLE `hm_academic_collaboration` (
  `hm_ac_collab_id` int(11) NOT NULL,
  `hm_id` int(11) NOT NULL,
  `hm_ac_collab_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hm_academic_collaboration`
--

INSERT INTO `hm_academic_collaboration` (`hm_ac_collab_id`, `hm_id`, `hm_ac_collab_img`) VALUES
(1, 1, 'westcliff-logo.jpg'),
(2, 1, 'logo-pace.png'),
(3, 1, 'logo-svsu.png'),
(4, 1, 'Jain-logo.png'),
(5, 1, 'logo-geneva.png'),
(6, 1, 'IUKL-Logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `hm_banner_images`
--

CREATE TABLE `hm_banner_images` (
  `hm_ban_id` int(11) NOT NULL,
  `hm_id` int(11) NOT NULL,
  `hm_ban_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hm_ban_img_docname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hm_banner_images`
--

INSERT INTO `hm_banner_images` (`hm_ban_id`, `hm_id`, `hm_ban_image`, `hm_ban_img_docname`) VALUES
(1, 1, 'hm_1.jpg', 'hm_1.jpg'),
(2, 1, 'hm_3.jpg', 'hm_3.jpg'),
(3, 1, 'hm_2.jpg', 'hm_2.jpg'),
(4, 1, 'hm_4.jpg', 'hm_4.jpg'),
(5, 1, 'hm_5.jpg', 'hm_5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hm_course_re`
--

CREATE TABLE `hm_course_re` (
  `hm_course_re_id` int(11) NOT NULL,
  `hm_id` int(11) NOT NULL,
  `hm_course_re_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hm_course_re_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hm_course_re_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hm_course_re`
--

INSERT INTO `hm_course_re` (`hm_course_re_id`, `hm_id`, `hm_course_re_image`, `hm_course_re_name`, `hm_course_re_link`) VALUES
(1, 1, 'HRM.jpg', 'MBA Real Estate', NULL),
(2, 1, 'Data-Analytics.jpg', 'PGDM Real Estate', NULL),
(3, 1, 'why-tal_01.jpg', 'BBA Real Estate', NULL),
(4, 1, 'Managemnt.jpg', 'Certification in Real Estate', NULL),
(5, 1, 'browse-course-2.jpg', 'M. Voc Real Estate', NULL),
(6, 1, 'Finance.jpg', 'B. Voc Real Estate', NULL),
(7, 1, 'scm.jpg', 'DIPLOMA', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hm_credentials`
--

CREATE TABLE `hm_credentials` (
  `hm_credential_id` int(11) NOT NULL,
  `hm_id` int(11) NOT NULL,
  `hm_credential_list` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hm_credentials`
--

INSERT INTO `hm_credentials` (`hm_credential_id`, `hm_id`, `hm_credential_list`) VALUES
(1, 1, 'PhD guide, Dean-Director-Head of Management program:'),
(2, 1, 'First Postion to the department in PG-PMIR course'),
(3, 1, 'Securing 7th rank to the University'),
(4, 1, 'APO-NCP alumni, and UKIERI-AICTE trained Education leader'),
(5, 1, '10 Global HRM certification from CAMI-USA and AHRB-India'),
(6, 1, 'Holding a PhD in HR area'),
(7, 1, 'Second PhD in Management (HR), with scholarship from the Karnatak University'),
(8, 1, 'Published 150 popular writings and research papers'),
(9, 1, 'Awarded and honoured with the Best Research Paper Publication of 2001 by ISTD'),
(10, 1, 'Completed Major ICSSR/AICTE research project'),
(11, 1, 'AICTE career award for young teacher.'),
(12, 1, 'He has 15 PhD work awards, 11 M.Phil. awards, 600+ Master Thesis work observation and examiner in his name');

-- --------------------------------------------------------

--
-- Table structure for table `hm_partners _infra`
--

CREATE TABLE `hm_partners _infra` (
  `hm_partners _infra_id` int(11) NOT NULL,
  `hm_id` int(11) NOT NULL,
  `hm_partners _infra_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hm_partners _infra`
--

INSERT INTO `hm_partners _infra` (`hm_partners _infra_id`, `hm_id`, `hm_partners _infra_image`) VALUES
(1, 1, '1.jpg'),
(2, 1, '2.jpg'),
(3, 1, '3.png'),
(4, 1, '4.png'),
(5, 1, '5.png'),
(6, 1, '6.jpg'),
(7, 1, '7.jpg'),
(8, 1, '8.jpg'),
(9, 1, '9.png'),
(10, 1, '14.jpg'),
(11, 1, '15.jpg'),
(12, 1, '16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hm_research`
--

CREATE TABLE `hm_research` (
  `hm_res_id` int(11) NOT NULL,
  `hm_id` int(11) NOT NULL,
  `hm_research_features` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hm_research`
--

INSERT INTO `hm_research` (`hm_res_id`, `hm_id`, `hm_research_features`) VALUES
(1, 1, 'Center for Studies in Real Estate'),
(2, 1, 'Center for Smart City'),
(3, 1, 'Center for Urban Planning'),
(4, 1, 'Center for Financial Innovation in\r\nReal Estate'),
(5, 1, 'Center for Technology / Digitalization in Real Estate'),
(6, 1, 'Center for Excellence in Construction Management'),
(7, 1, 'Center for Excellence in Academics');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `hm_id` int(11) NOT NULL,
  `hm_ac_collab_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hm_academic_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hm_course_re_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hm_research_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hm_research_sub_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `hm_fac_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hm_fac_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `hm_fac_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hm_fac_description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `hm_fac_credential_title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `hm_fac_credential_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `hm_partners _infra_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`hm_id`, `hm_ac_collab_title`, `hm_academic_title`, `hm_course_re_title`, `hm_research_title`, `hm_research_sub_title`, `hm_fac_title`, `hm_fac_image`, `hm_fac_name`, `hm_fac_description`, `hm_fac_credential_title`, `hm_fac_credential_link`, `hm_partners _infra_title`) VALUES
(1, 'Global Academic Collaboration', 'Academics', 'Courses in Real Estate Management', 'Research', 'At IREU, we firmly believe in the importance of research and hence our conscious step towards setting up various centers for research.', 'Academic Head-IREU', 'MM-Bagali-Pic-1.jpg', 'Dr. M M. Bagali', 'A Gold medalist, holding experience of 24 years in teaching, 14 years in research, 14 years in coaching, 16 years in training, 08 years in consultancy, 16 years in mentoring, 14 years in Industry-Academics interface and 08 years as Post-Doctoral.', 'Credentials', 'https://linktr.ee/mmbagali', 'Partners Infrastructure');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `Inq_id` int(10) NOT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `programtype` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '1=ug, 2=pg,3=diploma',
  `coursename` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`Inq_id`, `nationality`, `name`, `email`, `mobile`, `programtype`, `coursename`) VALUES
(1, 'INDIAN NATIONAL', 'daniel', 'cmedan@gmail.com', '9901535846', '1', 'Bachelor of Business Administration (BBA) -  Real Estate Management');

-- --------------------------------------------------------

--
-- Table structure for table `privacy policy`
--

CREATE TABLE `privacy policy` (
  `Priv_id` int(11) NOT NULL,
  `Priv_main_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Priv_subheading` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `privacy policy`
--

INSERT INTO `privacy policy` (`Priv_id`, `Priv_main_title`, `Priv_subheading`) VALUES
(1, 'Privacy Policy', 'We respect the privacy of those who visit our web site. In accordance with this, we have created this policy in order to demonstrate our privacy commitment to our users.');

-- --------------------------------------------------------

--
-- Table structure for table `priv_subheading_decription`
--

CREATE TABLE `priv_subheading_decription` (
  `priv_sub_id` int(11) NOT NULL,
  `priv_id` int(11) NOT NULL,
  `priv_sub_desc` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `priv_subheading_decription`
--

INSERT INTO `priv_subheading_decription` (`priv_sub_id`, `priv_id`, `priv_sub_desc`) VALUES
(1, 1, 'This Privacy Policy covers our treatment of personally identifiable information that we collect when you are on our site, and when you use our services. This policy also covers our treatment of any personally identifiable information that third parties share with us.'),
(2, 1, 'This policy does not apply to the practices of organizations that we do not own or control, or to people that we do not employ or manage.'),
(3, 1, 'We collect personally identifiable information when you register on our website, when you use our services, and when you visit our pages. We may also receive personally identifiable information from third parties.'),
(4, 1, 'When you register with us, we ask for your name, email address, zip code, occupation, industry, and personal interests. Once you register with us and sign in to our services, you are not anonymous to us.'),
(5, 1, 'We use this information for three general purposes: to customize the content you see, to fulfill your requests for certain services, and to contact you about services.'),
(6, 1, 'We also automatically receive and record information on our server logs from your browser including your IP address, cookie information and the page you requested. This information is not linked to your account and will not be used to identify you.'),
(7, 1, 'We have your consent to share the information.'),
(8, 1, 'We respond to subpoenas, court orders or legal process,; or'),
(9, 1, 'We find that your actions on our web sites violate the Terms of Service.');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `prog_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `prog_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prog_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`prog_id`, `stu_id`, `app_id`, `prog_type`, `prog_name`) VALUES
(1, 3, 1, 'pg', 'mca data analytics'),
(2, 3, 2, 'pg-diploma', 'real estate'),
(3, 2, 3, 'ug', 'bca analytics'),
(4, 2, 4, 'pg-diploma', 'real estate'),
(5, 2, 5, 'pg', 'mcaanalytics'),
(6, 2, 6, '', ''),
(7, 2, 7, 'pg', 'mcaanalytics'),
(8, 2, 8, 'pg', 'mcaanalytics'),
(9, 2, 9, 'ug', 'bca analytics'),
(10, 2, 10, 'ug', 'bca analytics'),
(11, 25, 11, '', 'MBA - Real Estate Management + Advanced Certification Program in Real Estate Management from IREU'),
(12, 4, 12, '', ' Master of Business Administration (MBA) - Real Estate Management '),
(13, 4, 13, '', ' Master of Business Administration (MBA) - Real Estate Management '),
(14, 25, 14, '', ' Master of Business Administration (MBA) - Real Estate Management '),
(15, 41, 15, '', ' Master of Business Administration (MBA) - Real Estate Management '),
(16, 41, 16, '', ' Master of Business Administration (MBA) - Real Estate Management '),
(17, 41, 17, '', 'Master of Vocational (M.Voc) - Real Estate\r\nManagement '),
(18, 41, 18, '1', 'Bachelor of Business Administration (BBA) -  Real Estate Management'),
(19, 41, 19, '2', 'Master of Vocational (M.Voc) - Real Estate\r\nManagement '),
(20, 41, 20, '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE `programmes` (
  `prog_id` int(11) NOT NULL,
  `prog_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`prog_id`, `prog_name`) VALUES
(1, 'UG PROGRAM'),
(2, 'PG PROGRAM'),
(3, 'DIPLOMA');

-- --------------------------------------------------------

--
-- Table structure for table `pwd_reset`
--

CREATE TABLE `pwd_reset` (
  `pwdreset_id` int(11) NOT NULL,
  `pwdResetEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pwdResetSelector` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pwdResetToken` longtext COLLATE utf8_unicode_ci NOT NULL,
  `pwdResetExpires` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pwd_reset`
--

INSERT INTO `pwd_reset` (`pwdreset_id`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(4, 'ireutech@gmail.com', 'a27348ddb7141f1a', '$2y$10$tS1on6MPbVIke3Y3lPsYTebMQlVHeMPR4tCMOeaHZ6q5HnptaKSde', '1615196128'),
(5, 'ashwathijayadev@gmail.com', 'd217bee74a7b8df5', '$2y$10$oJoQTfxVwYms1n2qBXsOxOqWt5t1dCmEpf/z9GL4jQyJMaNnZwR4m', '1615196435');

-- --------------------------------------------------------

--
-- Table structure for table `registeredusers`
--

CREATE TABLE `registeredusers` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registeredusers`
--

INSERT INTO `registeredusers` (`id`, `email`, `password`) VALUES
(1, 'cmedan@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_nationality` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `stu_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `stu_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `stu_ph_num` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `stu_password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_nationality`, `stu_name`, `stu_email`, `stu_ph_num`, `stu_password`) VALUES
(2, 'a', 'daniel', 'cmedan@gmail.com', '09901535846', 'test'),
(3, 'c', 'vikas', 'vk@gmail.com', '9901535847', 'test'),
(41, 'INDIAN NATIONAL', 'ashwathi', 'ashwathijayadev@gmail.com', '9620104745', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `stu_com_info`
--

CREATE TABLE `stu_com_info` (
  `com_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `corr_add_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `corr_add_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `corr_state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `corr_city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `corr_pincode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `per_add_1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `per_add_2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `per_state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `per_city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `per_pincode` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stu_com_info`
--

INSERT INTO `stu_com_info` (`com_id`, `stu_id`, `app_id`, `corr_add_1`, `corr_add_2`, `corr_state`, `corr_city`, `corr_pincode`, `per_add_1`, `per_add_2`, `per_state`, `per_city`, `per_pincode`) VALUES
(1, 3, 1, 'fdfdf', 'aaaaa', 'Chandigarh', 'badd', '56924', 'fdfdf', 'aaaaa', 'Chandigarh', 'badd', '56924'),
(2, 3, 2, 'hebbal', 'karnataka', 'Karnataka', 'bangalore', '560094', 'hebbal', 'karnataka', 'Karnataka', 'bangalore', '560094'),
(3, 2, 3, 'hebbal', 'jaynagr', 'Karnataka', 'banglore', '560094', 'hebbal', 'jaynagr', 'Karnataka', 'banglore', '560094'),
(4, 2, 4, 'hebbal', 'jaynagr', 'Haryana', 'banglore', '560094', 'hebbal', 'jaynagr', 'Haryana', 'banglore', '560094'),
(5, 2, 5, 'hebbal', 'jaynagr', 'Jammu and Kashmir', 'banglore', '560094', 'hebbal', 'jaynagr', 'Jammu and Kashmir', 'banglore', '560094'),
(6, 2, 6, '', '', '', '', '', '', '', '', '', ''),
(7, 2, 7, 'hebbal', 'jaynagr', 'Jharkhand', 'banglore', '560094', 'hebbal', 'jaynagr', 'Jharkhand', 'banglore', '560094'),
(8, 2, 8, 'hebbal', 'jaynagr', 'Himachal Pradesh', 'banglore', '560094', 'hebbal', 'jaynagr', 'Himachal Pradesh', 'banglore', '560094'),
(9, 2, 9, 'hebbal', 'jaynagr', 'Kenmore', 'banglore', '560094', 'hebbal', 'jaynagr', 'Kenmore', 'banglore', '560094'),
(10, 2, 10, 'hebbal', 'jaynagr', 'Jharkhand', 'banglore', '560094', 'hebbal', 'jaynagr', 'Jharkhand', 'banglore', '560094'),
(11, 25, 11, 'kalayan Nagar', 'KALAYAN NAGAR', 'Karnataka', 'bangalore', '562100', 'kalayan Nagar', 'KALAYAN NAGAR', 'Karnataka', 'bangalore', '562100'),
(12, 4, 12, 'kalayan Nagar', 'KALAYAN NAGAR', 'Karnataka', 'bangalore', '562100', 'kalayan Nagar', 'KALAYAN NAGAR', 'Karnataka', 'bangalore', '562100'),
(13, 4, 13, 'kalayan Nagar', 'KALAYAN NAGAR', 'Karnataka', 'bangalore', '562100', 'kalayan Nagar', 'KALAYAN NAGAR', 'Karnataka', 'bangalore', '562100'),
(14, 25, 14, 'kalayan Nagar', 'KALAYAN NAGAR', 'Andhra Pradesh', 'bangalore', '562100', 'kalayan Nagar', 'KALAYAN NAGAR', 'Andhra Pradesh', 'bangalore', '562100'),
(15, 41, 15, 'kalayan Nagar', 'KALAYAN NAGAR', 'Kerala', 'bangalore', '562100', 'kalayan Nagar', 'KALAYAN NAGAR', 'Kerala', 'bangalore', '562100'),
(16, 41, 16, 'kalayan Nagar', 'KALAYAN NAGAR', 'Andaman and Nicobar Islands', 'bangalore', '562100', 'kalayan Nagar', 'KALAYAN NAGAR', 'Andaman and Nicobar Islands', 'bangalore', '562100'),
(17, 41, 17, 'kalayan Nagar', 'KALAYAN NAGAR', 'Karnataka', 'bangalore', '562100', 'kalayan Nagar', 'KALAYAN NAGAR', 'Karnataka', 'bangalore', '562100'),
(18, 41, 18, 'kalayan Nagar', 'KALAYAN NAGAR', 'Jharkhand', 'bangalore', '562100', 'kalayan Nagar', 'KALAYAN NAGAR', 'Jharkhand', 'bangalore', '562100'),
(19, 41, 19, 'kalayan Nagar', 'KALAYAN NAGAR', 'Kenmore', 'bangalore', '562100', 'kalayan Nagar', 'KALAYAN NAGAR', 'Kenmore', 'bangalore', '562100'),
(20, 41, 20, 'kalayan Nagar', 'KALAYAN NAGAR', 'Kenmore', 'bangalore', '562100', 'kalayan Nagar', 'KALAYAN NAGAR', 'Kenmore', 'bangalore', '562100');

-- --------------------------------------------------------

--
-- Table structure for table `stu_docs`
--

CREATE TABLE `stu_docs` (
  `stu_docs_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `doc_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `doc_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doc_org_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stu_docs`
--

INSERT INTO `stu_docs` (`stu_docs_id`, `stu_id`, `app_id`, `doc_type`, `doc_name`, `doc_org_name`) VALUES
(1, 3, 1, 'photo', 'photo_1_3_2021-01-19 05:47:240139559001611031644jpg', 'download (2).jpg'),
(2, 3, 1, '10th', '10th_1_3_2021-01-19 05:47:240139559001611031644jpg', 'download (3).jpg'),
(3, 3, 1, '2ndpuc', '2ndpuc_1_3_2021-01-19 05:47:240139559001611031644jpg', 'download (4).jpg'),
(4, 3, 1, '1stpuc', '1stpuc_1_3_2021-01-19 05:47:240139559001611031644jpg', 'download (6).jpg'),
(5, 3, 1, 'diploma', 'diploma_1_3_2021-01-19 05:47:240139559001611031644jpg', 'Dwayne_Johnson_Horses_Jumanji_New_level_Kevin_Hart'),
(6, 3, 2, 'photo', 'photo_2_3_2021-01-19 05:52:240912959001611031944jpg', 'download (6).jpg'),
(7, 3, 2, '10th', '10th_2_3_2021-01-19 05:52:240912959001611031944jpg', 'download.jpg'),
(8, 3, 2, '2ndpuc', '2ndpuc_2_3_2021-01-19 05:52:240912959001611031944jpg', 'download (1).jpg'),
(9, 3, 2, '1stpuc', '1stpuc_2_3_2021-01-19 05:52:240912959001611031944jpg', 'Dwayne_Johnson_Horses_Jumanji_New_level_Kevin_Hart'),
(10, 3, 2, 'diploma', 'diploma_2_3_2021-01-19 05:52:240912959001611031944jpg', 'download (4).jpg'),
(11, 2, 3, 'photo', 'photo_3_2_2021-02-09 13:42:000702567001612874520jpg', 'Hydrangeas.jpg'),
(12, 2, 3, '10th', '10th_3_2_2021-02-09 13:42:000702567001612874520jpg', 'Desert.jpg'),
(13, 2, 3, '2ndpuc', '2ndpuc_3_2_2021-02-09 13:42:000702567001612874520jpg', 'Penguins.jpg'),
(14, 2, 4, 'photo', 'photo_4_2_2021-02-06 13:39:150618491001612615155jpg', 'download (1).jpg'),
(15, 2, 4, '10th', '10th_4_2_2021-02-06 13:39:150618491001612615155jpg', 'download (3).jpg'),
(16, 2, 4, '2ndpuc', '2ndpuc_4_2_2021-02-06 13:39:150618491001612615155jpg', 'download (2).jpg'),
(17, 2, 4, 'ug', 'ug_4_2_2021-02-06 13:39:150618491001612615155jpg', 'download.jpg'),
(18, 2, 5, 'photo', 'photo_5_2_2021-02-09 06:31:440813864001612848704jpg', 'black_panther.jpg'),
(19, 2, 5, '10th', '10th_5_2_2021-02-09 06:31:440813864001612848704jpg', 'Chrysanthemum.jpg'),
(20, 2, 5, '2ndpuc', '2ndpuc_5_2_2021-02-09 06:31:440813864001612848704jpg', 'Desert.jpg'),
(21, 2, 5, 'ug', 'ug_5_2_2021-02-09 06:31:440813864001612848704jpg', 'Hydrangeas.jpg'),
(22, 2, 6, 'photo', 'photo_6_2_2021-02-09 13:21:080648756001612873268jpg', 'Koala.jpg'),
(23, 2, 6, '10th', '10th_6_2_2021-02-09 13:21:080648756001612873268jpg', 'Lighthouse.jpg'),
(24, 2, 6, '2ndpuc', '2ndpuc_6_2_2021-02-09 13:21:080648756001612873268jpg', 'Hydrangeas.jpg'),
(25, 2, 7, 'photo', 'photo_7_2_2021-02-09 13:41:330379669001612874493jpg', 'Lighthouse.jpg'),
(26, 2, 7, '10th', '10th_7_2_2021-02-09 13:41:330379669001612874493jpg', 'Penguins.jpg'),
(27, 2, 7, '2ndpuc', '2ndpuc_7_2_2021-02-09 13:41:330379669001612874493jpg', 'Hydrangeas.jpg'),
(28, 2, 7, 'ug', 'ug_7_2_2021-02-09 13:41:330379669001612874493jpg', 'Desert.jpg'),
(29, 2, 8, 'photo', 'photo_8_2_2021-02-09 14:20:140597300001612876814jpg', 'Lighthouse.jpg'),
(30, 2, 8, '10th', '10th_8_2_2021-02-09 14:20:140597300001612876814jpg', 'Lighthouse.jpg'),
(31, 2, 8, '2ndpuc', '2ndpuc_8_2_2021-02-09 14:20:140597300001612876814jpg', 'Penguins.jpg'),
(32, 2, 8, 'ug', 'ug_8_2_2021-02-09 14:20:140597300001612876814jpg', 'Penguins.jpg'),
(33, 2, 9, 'photo', 'photo_9_2_2021-02-10 12:52:000872141001612957920jpg', 'Chrysanthemum.jpg'),
(34, 2, 9, '10th', '10th_9_2_2021-02-10 12:52:000872141001612957920jpg', 'Hydrangeas.jpg'),
(35, 2, 9, '2ndpuc', '2ndpuc_9_2_2021-02-10 12:52:000872141001612957920jpg', 'Chrysanthemum.jpg'),
(36, 2, 10, 'photo', 'photo_10_2_2021-02-10 15:05:180205566001612965918jpg', 'black_panther.jpg'),
(37, 2, 10, '10th', '10th_10_2_2021-02-10 15:05:180205566001612965918jpg', 'Penguins.jpg'),
(38, 2, 10, '2ndpuc', '2ndpuc_10_2_2021-02-10 15:05:180205566001612965918jpg', 'Desert.jpg'),
(39, 25, 11, 'photo', 'photo_11_25_2021-03-06 07:07:560521966001615010876png', '1.png'),
(40, 25, 11, '10th', '10th_11_25_2021-03-06 07:07:560521966001615010876jpg', '2.jpg'),
(41, 25, 11, '2ndpuc', '2ndpuc_11_25_2021-03-06 07:07:560521966001615010876jpg', '3.jpg'),
(42, 4, 12, 'photo', 'photo_12_4_2021-03-06 07:51:590959456001615013519jpg', '3.jpg'),
(43, 4, 12, '10th', '10th_12_4_2021-03-06 07:51:590959456001615013519jpg', '2.jpg'),
(44, 4, 12, '2ndpuc', '2ndpuc_12_4_2021-03-06 07:51:590959456001615013519png', '1.png'),
(45, 4, 13, 'photo', 'photo_13_4_2021-03-06 08:25:460685313001615015546jpg', '2.jpg'),
(46, 4, 13, '10th', '10th_13_4_2021-03-06 08:25:460685313001615015546png', '1.png'),
(47, 4, 13, '2ndpuc', '2ndpuc_13_4_2021-03-06 08:25:460685313001615015546jpg', '3.jpg'),
(48, 25, 14, 'photo', 'photo_14_25_2021-03-06 08:39:220655712001615016362png', '1.png'),
(49, 25, 14, '10th', '10th_14_25_2021-03-06 08:39:220655712001615016362jpg', '2.jpg'),
(50, 25, 14, '2ndpuc', '2ndpuc_14_25_2021-03-06 08:39:220655712001615016362jpg', '3.jpg'),
(51, 25, 14, 'ug', 'ug_14_25_2021-03-06 08:39:220655712001615016362png', '1.png'),
(52, 41, 15, 'photo', 'photo_15_41_2021-03-06 14:09:320012274001615036172png', '1.png'),
(53, 41, 15, '10th', '10th_15_41_2021-03-06 14:09:320012274001615036172jpg', '2.jpg'),
(54, 41, 15, '2ndpuc', '2ndpuc_15_41_2021-03-06 14:09:320012274001615036172jpg', '3.jpg'),
(55, 41, 15, 'ug', 'ug_15_41_2021-03-06 14:09:320012274001615036172png', '1.png'),
(56, 41, 16, 'photo', 'photo_16_41_2021-03-06 14:27:160648414001615037236png', '1.png'),
(57, 41, 16, '10th', '10th_16_41_2021-03-06 14:27:160648414001615037236jpg', '2.jpg'),
(58, 41, 16, '2ndpuc', '2ndpuc_16_41_2021-03-06 14:27:160648414001615037236jpg', '3.jpg'),
(59, 41, 16, 'ug', 'ug_16_41_2021-03-06 14:27:160648414001615037236png', '1.png'),
(60, 41, 17, 'photo', 'photo_17_41_2021-03-07 15:35:200203924001615127720jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(61, 41, 17, '10th', '10th_17_41_2021-03-07 15:35:200203924001615127720jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(62, 41, 17, '2ndpuc', '2ndpuc_17_41_2021-03-07 15:35:200203924001615127720jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(63, 41, 17, 'ug', 'ug_17_41_2021-03-07 15:35:200203924001615127720jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(64, 41, 18, 'photo', 'photo_18_41_2021-03-07 15:42:120507168001615128132jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(65, 41, 18, '10th', '10th_18_41_2021-03-07 15:42:120507168001615128132jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(66, 41, 18, '2ndpuc', '2ndpuc_18_41_2021-03-07 15:42:120507168001615128132jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(67, 41, 18, 'ug', 'ug_18_41_2021-03-07 15:42:120507168001615128132jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(68, 41, 19, 'photo', 'photo_19_41_2021-03-07 16:37:530839507001615131473jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(69, 41, 19, '10th', '10th_19_41_2021-03-07 16:37:530839507001615131473jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(70, 41, 19, '2ndpuc', '2ndpuc_19_41_2021-03-07 16:37:530839507001615131473jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(71, 41, 19, 'ug', 'ug_19_41_2021-03-07 16:37:530839507001615131473jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(72, 41, 20, 'photo', 'photo_20_41_2021-03-07 16:48:200079402001615132100jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(73, 41, 20, '10th', '10th_20_41_2021-03-07 16:48:200079402001615132100jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(74, 41, 20, '2ndpuc', '2ndpuc_20_41_2021-03-07 16:48:200079402001615132100jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg'),
(75, 41, 20, 'ug', 'ug_20_41_2021-03-07 16:48:200079402001615132100jpg', '4K-Dark-Desktop-Wallpapers-1024x576.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stu_edu`
--

CREATE TABLE `stu_edu` (
  `stu_edu` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `stu_class_type` int(2) NOT NULL COMMENT '1=10th,2=1stpuc',
  `stu_inst` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `stu_cgpa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `stu_yr_pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stu_edu`
--

INSERT INTO `stu_edu` (`stu_edu`, `stu_id`, `app_id`, `stu_class_type`, `stu_inst`, `stu_cgpa`, `stu_yr_pass`) VALUES
(1, 3, 1, 1, 'daniel', '5.3', '2010'),
(2, 3, 1, 2, 'daniel PRASHANTH', '8.9', '2017'),
(3, 3, 2, 1, 'daniel', '8.9', '2010'),
(4, 3, 2, 2, 'nam', '8.9', '2016'),
(5, 2, 3, 1, 'SPIderman', '5.6', '2009'),
(6, 2, 3, 2, 'BATMAN', '8.39', '2015'),
(7, 2, 4, 1, 'SPIderman', '8.9', '2005'),
(8, 2, 4, 2, 'BATMAN', '9.8', '2013'),
(9, 2, 5, 1, 'SPIderman', '0.05', '2007'),
(10, 2, 5, 2, 'BATMAN', '50', '2009'),
(11, 2, 6, 1, '', '', ''),
(12, 2, 6, 2, '', '', ''),
(13, 2, 7, 1, 'SPIderman', '0.04', '2006'),
(14, 2, 7, 2, 'BATMAN', '0.04', '2009'),
(15, 2, 8, 1, 'SPIderman', '0.04', '2007'),
(16, 2, 8, 2, 'BATMAN', '0.04', '2009'),
(17, 2, 9, 1, 'SPIderman', '0.07', '2009'),
(18, 2, 9, 2, 'BATMAN', '0.06', '2015'),
(19, 2, 10, 1, 'SPIderman', '-0.04', '2006'),
(20, 2, 10, 2, 'BATMAN', '0.04', '2016'),
(21, 25, 11, 1, 'abc', '9', '2012'),
(22, 25, 11, 2, 'dfg', '8', '2015'),
(23, 4, 12, 1, 'abc', '9', '2007'),
(24, 4, 12, 2, 'dfg', '8', '2004'),
(25, 4, 13, 1, 'abc', '9', '2007'),
(26, 4, 13, 2, 'dfg', '8', '2007'),
(27, 25, 14, 1, 'abc', '8', '2009'),
(28, 25, 14, 2, 'dfg', '9', '2007'),
(29, 41, 15, 1, 'abc', '9', '2009'),
(30, 41, 15, 2, 'dfg', '8', '2013'),
(31, 41, 16, 1, 'abc', '9', '2008'),
(32, 41, 16, 2, 'dfg', '8', '2004'),
(33, 41, 17, 1, 'abc', '3', '2010'),
(34, 41, 17, 2, 'dfg', '0.02', '2005'),
(35, 41, 18, 1, 'abc', '0.03', '2007'),
(36, 41, 18, 2, 'dfg', '0.02', '2005'),
(37, 41, 19, 1, 'abc', '0.02', '2006'),
(38, 41, 19, 2, 'dfg', '0.02', '2005'),
(39, 41, 20, 1, 'abc', '0.02', '2006'),
(40, 41, 20, 2, 'dfg', '0.02', '2005');

-- --------------------------------------------------------

--
-- Table structure for table `stu_othr_info`
--

CREATE TABLE `stu_othr_info` (
  `stu_othr_info_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `extra_cur_activ` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `knw_jain` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `host_acc` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `app_jain` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `puc_at_jain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jain_test_loc` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stu_othr_info`
--

INSERT INTO `stu_othr_info` (`stu_othr_info_id`, `stu_id`, `app_id`, `extra_cur_activ`, `knw_jain`, `host_acc`, `app_jain`, `puc_at_jain`, `jain_test_loc`) VALUES
(1, 3, 1, 'fishing', 'LinkedIn', 'Yes', 'No', 'No', 'BANGALORE'),
(2, 3, 2, 'swam', 'Banner', 'Yes', 'Yes', 'Yes', 'BANGALORE'),
(3, 2, 3, 'saWm', 'Facebook', 'Yes', 'Yes', 'Yes', 'BANGALORE'),
(4, 2, 4, 'saWm to himalyaa', 'Facebook', 'Yes', 'Yes', 'Yes', 'BANGALORE'),
(5, 2, 5, 'saWm', 'Facebook', 'Yes', 'Yes', 'Yes', 'BANGALORE'),
(6, 2, 6, '', '', '', '', '', ''),
(7, 2, 7, 'saWm', 'E-mailer', 'Yes', 'Yes', 'Yes', 'BANGALORE'),
(8, 2, 8, 'saWm', 'Alumni', 'Yes', 'Yes', 'Yes', 'BANGALORE'),
(9, 2, 9, 'ran to ', 'Word of Mouth', 'Yes', 'Yes', 'No', 'BANGALORE'),
(10, 2, 10, 'saWm sdsd', 'Website', 'Yes', 'Yes', 'Yes', 'BANGALORE'),
(11, 25, 11, 'gaming', 'Website', 'No', 'No', 'No', 'BANGALORE'),
(12, 4, 12, 'gaming', 'Website', 'No', 'No', 'No', 'BANGALORE'),
(13, 4, 13, 'gaming', 'Facebook', 'No', 'No', 'No', 'BANGALORE'),
(14, 25, 14, 'gaming', 'Facebook', 'Yes', 'No', 'No', 'BANGALORE'),
(15, 41, 15, 'gaming', 'Facebook', 'No', 'No', 'No', 'BANGALORE'),
(16, 41, 16, 'gaming', 'Facebook', 'No', 'No', 'No', 'BANGALORE'),
(17, 41, 17, 'gaming', 'Facebook', 'No', 'No', 'No', 'BANGALORE'),
(18, 41, 18, 'gaming', 'Google Search', 'No', 'No', 'No', 'BANGALORE'),
(19, 41, 19, 'gaming', 'E-mailer', 'No', 'No', 'No', 'BANGALORE'),
(20, 41, 20, 'gaming', 'E-mailer', 'No', 'No', 'No', 'BANGALORE');

-- --------------------------------------------------------

--
-- Table structure for table `stu_per_info`
--

CREATE TABLE `stu_per_info` (
  `stu_info_id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dateofbirth` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `registered_mob_num` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alternative_mob_num` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `caste` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aadhar_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blood_group` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pwd_disability` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `father_mob_num` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `father_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mother_mob_number` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mother_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_annual_inc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pref_poc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `local_gaurdian_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gaur_mob_num` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gaur_relat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stu_per_info`
--

INSERT INTO `stu_per_info` (`stu_info_id`, `stu_id`, `app_id`, `firstname`, `lastname`, `email`, `dateofbirth`, `registered_mob_num`, `alternative_mob_num`, `gender`, `religion`, `caste`, `category`, `aadhar_no`, `blood_group`, `pwd_disability`, `father_name`, `father_mob_num`, `father_email`, `father_occupation`, `mother_name`, `mother_mob_number`, `mother_email`, `mother_occupation`, `parent_annual_inc`, `pref_poc`, `local_gaurdian_name`, `gaur_mob_num`, `gaur_relat`) VALUES
(1, 3, 1, 'DANIEL', 'PRASHANTH', 'ireugroup@gmail.com', '25-08-1995', '9901535846', '9901535846', 'MALE', 'CHRISTIANITY', 'rc', 'GENERAL', '12354456', 'AB+', 'NO', 'DANMAN', '9901535846', 'cmedan19@gmail.com', 'driver', 'PRICEROCKY', '9901535847', 'CMEDAN@GMAIL.COM', 'engenie', '10Lakh to 15Lakh', 'GUARDIAN', 'dancaN', '9901535847', 'BAD'),
(2, 3, 2, 'dan', 'dav', 'vk@gmail.com', '23-09-2016', '9901535847', '9901535847', 'FEMALE', 'CHRISTIANITY', 'rc', 'EWS', '654321', 'B-', 'NO', 'DANMAN', '9901535847', 'cmedan19@gmail.com', 'ridiver', 'PRICE', '9901535846', 'CMEDAN19@GMAIL.COM', 'engenie', '10Lakh to 15Lakh', 'GUARDIAN', 'dancaN', '9901535846', 'dad'),
(3, 2, 3, 'DAniel', 'Prashanth', 'cmedan19@gmail.com', '1995-08-25', '9901535846', '', 'MALE', 'CHRISTIANITY', 'rc', 'GENERAL', '123456', 'A+', 'YES', 'rocky', '9901535846', '', '', 'ROCKY MAIVAIA', '9901535846', '', '', '10Lakh to 15Lakh', 'Both the Parents', '', '', ''),
(4, 2, 4, 'DAniel', 'Prashanth', 'ireutech19@gmail.com', '2009-02-06', '9901535846', '', 'MALE', 'CHRISTIANITY', '', 'GENERAL', '', 'AB+', 'YES', 'rocky', '9901535846', '', '', 'ROCKY MAIVAIA', '9901535846', '', '', '10Lakh to 15Lakh', 'FATHER', '', '', ''),
(5, 2, 5, 'DAniel', 'Prashanth', 'cmedan19@gmail.com', '2021-02-10', '9901535846', '', 'FEMALE', 'ISLAM', '', 'WBC', '', 'AB-', 'NO', 'rocky', '9901535846', '', '', 'ROCKY MAIVAIA', '9901535846', '', '', '10Lakh to 15Lakh', 'FATHER', '', '', ''),
(6, 2, 6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 2, 7, 'DAniel', 'Prashanth', 'cmedan19@gmail.com', '2021-02-09', '9901535846', '', 'MALE', 'HINDUISM', '', 'UR(GEN)', '', 'B-', 'YES', 'rocky', '9901535846', '', '', 'ROCKY MAIVAIA', '9901535846', '', '', '5Lakh to 10Lakh', 'FATHER', '', '', ''),
(8, 2, 8, 'DAniel', 'Prashanth', 'cmedan19@gmail.com', '2021-02-22', '9901535846', '', 'MALE', 'CHRISTIANITY', '', 'WBC', '', 'A+', 'YES', 'rocky', '9901535846', '', '', 'ROCKY MAIVAIA', '9901535846', '', '', '15Lakh to 20+', 'GUARDIAN', '', '', ''),
(9, 2, 9, 'aswhathi', 'Prashanth', 'ash@gmail.com', '2021-02-10', '9901535846', '', 'MALE', 'JAINISM', '', 'GENERAL', '', 'A+', 'NO', 'rocky', '9901535846', '', '', 'ROCKY MAIVAIA', '9901535846', '', '', '5Lakh to 10Lakh', 'FATHER', '', '', ''),
(10, 2, 10, 'solomon', 'Prashanth', 'vk@gmail.com', '2021-02-02', '9901535846', '', 'MALE', 'ISLAM', '', 'GENERAL', '', 'A+', 'YES', 'rocky', '9901535846', '', '', 'ROCKY MAIVAIA', '9901535846', '', '', '3Lakh to 5Lakh', 'FATHER', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tc_subheading_description`
--

CREATE TABLE `tc_subheading_description` (
  `tc_sub_id` int(11) NOT NULL,
  `tc_id` int(11) NOT NULL,
  `tc_sub_desc` varchar(800) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tc_subheading_description`
--

INSERT INTO `tc_subheading_description` (`tc_sub_id`, `tc_id`, `tc_sub_desc`) VALUES
(1, 1, 'All information displayed on the www.ireu.education and other website(s) maintained by the IREU Group is meant for general information. Visitors may download information available on the website(s) for non-commercial, personal use only and no part of information, either in whole or part, shall be printed, distributed, transmitted, modified, displayed or otherwise reproduced without the prior written permission of IREU Education.'),
(2, 1, 'Every effort is made to keep the website(s) up and running smoothly. However, the IREU Education takes no responsibility for and will not be liable for the website(s) being temporarily unavailable due to technical issues beyond its control.'),
(3, 1, 'No responsibility will be accepted by the IREU Education for damage or loss or any kind of hardships or expense encountered by its students or any other person or entities for such changes, additions, deletions, omissions or errors, no matter how they are caused.'),
(4, 1, 'IREU Education may share information about the visitors and/or users of its website(s) to communicate with the concerned visitors and/or users or otherwise as deemed necessary.'),
(5, 1, 'IREU Education reserves the right to make changes, extend or partly/completely delete any material/content on the website(s) and all other information including the offers, if any, without notice.'),
(6, 1, 'Visitors of our website(s) hereby agree to indemnify and hold the IREU Education, its management, officers, employees, information providers and other persons or entities associated with the IREU Education harmless for any claims, losses or damages resulting from the breach of these terms or relying upon or use of its web site(s) as well as any links to or from other sites or other resources.'),
(7, 1, 'Use of any information at the website(s) is at one\'s own risk. While every effort is made to secure our network communications, however, IREU Education may not always be able to ensure the privacy of online communications and other information of the visitors, unless otherwise specifically provided for. Moreover, any information that one provides using this web site(s) may become part of a public record subject to disclosure under the relevant regulations from time to time.'),
(8, 1, 'IREU may at any time modify the Terms & Conditions without any prior notification. You can access the latest version of the Terms & Conditions at any given time. You should regularly review the Terms & Conditions.'),
(9, 1, 'The Disclaimer and Privacy Policy shall be read part and parcel of these Terms & Conditions.'),
(10, 1, 'This agreement is governed and construed in accordance with the Laws of Union of India. You hereby irrevocably consent to the exclusive jurisdiction and venue of courts in Bengaluru, Karnataka, India in all disputes arising out of or relating to the use of the website(s).');

-- --------------------------------------------------------

--
-- Table structure for table `terms & conditions`
--

CREATE TABLE `terms & conditions` (
  `tc_id` int(11) NOT NULL,
  `tc_main_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tc_subheading` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `terms & conditions`
--

INSERT INTO `terms & conditions` (`tc_id`, `tc_main_title`, `tc_subheading`) VALUES
(1, 'Terms & Conditions', 'All the terms and conditions must be read very carefully. By using the website, you accept that this will form a legal binding agreement between you and IREU Education.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`) VALUES
(1, 'daniel', 'test1'),
(2, 'ashwathi', 'test123'),
(3, 'danman', 'qwerty'),
(4, 'ashwathi', 'qwertyuiop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`abt_id`);

--
-- Indexes for table `abt_why_answers`
--
ALTER TABLE `abt_why_answers`
  ADD PRIMARY KEY (`abt_why_id`),
  ADD KEY `abt_why_answers_fk0` (`abt_id`);

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`ace_id`);

--
-- Indexes for table `aca_exp_pdf`
--
ALTER TABLE `aca_exp_pdf`
  ADD PRIMARY KEY (`aca_exp_pdf_id`);

--
-- Indexes for table `ac_ certificate`
--
ALTER TABLE `ac_ certificate`
  ADD PRIMARY KEY (`ac_cert_id`);

--
-- Indexes for table `ac_certi_heading`
--
ALTER TABLE `ac_certi_heading`
  ADD PRIMARY KEY (`ac_cer_sub_id`),
  ADD KEY `ac_certi_heading_fk0` (`ac_cer_id`);

--
-- Indexes for table `ac_certi_sub`
--
ALTER TABLE `ac_certi_sub`
  ADD PRIMARY KEY (`ac_cer_subhg-id`),
  ADD KEY `ac_certi_sub_fk0` (`ac_cer_sub_id`);

--
-- Indexes for table `ac_corp_mentors`
--
ALTER TABLE `ac_corp_mentors`
  ADD PRIMARY KEY (`ac_corp_id`);

--
-- Indexes for table `ac_corp_mentors_sub`
--
ALTER TABLE `ac_corp_mentors_sub`
  ADD PRIMARY KEY (`ac_sub_corp_id`),
  ADD KEY `ac_corp_mentors_sub_fk0` (`ac_corp_id`);

--
-- Indexes for table `ac_ experiential_learning`
--
ALTER TABLE `ac_ experiential_learning`
  ADD PRIMARY KEY (`ac_exp_id`);

--
-- Indexes for table `ac_imsn_pgm`
--
ALTER TABLE `ac_imsn_pgm`
  ADD PRIMARY KEY (`ac_impgm_id`);

--
-- Indexes for table `ac_imsn_pgm_sub`
--
ALTER TABLE `ac_imsn_pgm_sub`
  ADD PRIMARY KEY (`ac_impgm_sub_id`),
  ADD KEY `ac_imsn_pgm_sub_fk0` (`ac_impgm_id`);

--
-- Indexes for table `ac_initivities`
--
ALTER TABLE `ac_initivities`
  ADD PRIMARY KEY (`ac_initia_id`);

--
-- Indexes for table `ac_overview`
--
ALTER TABLE `ac_overview`
  ADD PRIMARY KEY (`ac_overview_id`);

--
-- Indexes for table `ac_overview_section`
--
ALTER TABLE `ac_overview_section`
  ADD PRIMARY KEY (`ac_sub_over_id`),
  ADD KEY `ac_overview_section_fk0` (`ac_overview_id`);

--
-- Indexes for table `ac_research_report`
--
ALTER TABLE `ac_research_report`
  ADD PRIMARY KEY (`ac_res_id`);

--
-- Indexes for table `ac_research_sub`
--
ALTER TABLE `ac_research_sub`
  ADD PRIMARY KEY (`ac_res_sub_id`),
  ADD KEY `ac_research_sub_fk0` (`ac_res_id`);

--
-- Indexes for table `ac_usp`
--
ALTER TABLE `ac_usp`
  ADD PRIMARY KEY (`ac_usp_id`);

--
-- Indexes for table `ac_usp_list`
--
ALTER TABLE `ac_usp_list`
  ADD PRIMARY KEY (`ac_sub_usp_id`),
  ADD KEY `ac_usp_list_fk0` (`ac_usp_id`);

--
-- Indexes for table `add_eligi`
--
ALTER TABLE `add_eligi`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `add_sub_list`
--
ALTER TABLE `add_sub_list`
  ADD PRIMARY KEY (`add_sub_id`),
  ADD KEY `add_id` (`add_id`);

--
-- Indexes for table `ad_admission_process`
--
ALTER TABLE `ad_admission_process`
  ADD PRIMARY KEY (`ad_ad_id`);

--
-- Indexes for table `ad_eligibility`
--
ALTER TABLE `ad_eligibility`
  ADD PRIMARY KEY (`ad_eligibility_id`);

--
-- Indexes for table `ad_helpline_numbers`
--
ALTER TABLE `ad_helpline_numbers`
  ADD PRIMARY KEY (`ad_num_id`),
  ADD KEY `ad_helpline_numbers_fk0` (`ad_ad_id`);

--
-- Indexes for table `ad_sub_adn_pro`
--
ALTER TABLE `ad_sub_adn_pro`
  ADD PRIMARY KEY (`ad_sub_pro`),
  ADD KEY `ad_sub_adn_pro_fk0` (`ad_sub_adn_id`);

--
-- Indexes for table `ad_sub_adn_process`
--
ALTER TABLE `ad_sub_adn_process`
  ADD PRIMARY KEY (`ad_sub _adn_id`),
  ADD KEY `ad_sub_adn_process_fk0` (`ad_ad_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `application_fk0` (`stu_id`);

--
-- Indexes for table `career assistance and support`
--
ALTER TABLE `career assistance and support`
  ADD PRIMARY KEY (`cas_id`);

--
-- Indexes for table `cas_pre-placement activities`
--
ALTER TABLE `cas_pre-placement activities`
  ADD PRIMARY KEY (`cas_pre_id`),
  ADD KEY `cas_Pre-placement activities_fk0` (`cas_id`);

--
-- Indexes for table `cas_resources`
--
ALTER TABLE `cas_resources`
  ADD PRIMARY KEY (`cas_res_id`),
  ADD KEY `cas_id` (`cas_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_fk0` (`prog_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courses_id`),
  ADD KEY `prog_id` (`prog_id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`cour_det_id`),
  ADD KEY `course_details_fk0` (`course_id`);

--
-- Indexes for table `course_features`
--
ALTER TABLE `course_features`
  ADD PRIMARY KEY (`cour_fea_id`),
  ADD KEY `course_features_fk0` (`course_id`);

--
-- Indexes for table `course_history`
--
ALTER TABLE `course_history`
  ADD PRIMARY KEY (`course_history_id`),
  ADD KEY `course_history_fk0` (`course_id`),
  ADD KEY `course_history_fk1` (`modified_by_old`),
  ADD KEY `course_history_fk2` (`modified_by_new`);

--
-- Indexes for table `course_structure`
--
ALTER TABLE `course_structure`
  ADD PRIMARY KEY (`cour_str_id`),
  ADD KEY `course_structure_fk0` (`course_id`);

--
-- Indexes for table `cour_stu_details`
--
ALTER TABLE `cour_stu_details`
  ADD PRIMARY KEY (`cour_stu_det_id`),
  ADD KEY `cour_stu_details_fk0` (`cour_str_id`);

--
-- Indexes for table `disclaimer`
--
ALTER TABLE `disclaimer`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `dis_subheading_description`
--
ALTER TABLE `dis_subheading_description`
  ADD PRIMARY KEY (`dis_sub_id`),
  ADD KEY `dis_subheading_description_fk0` (`dis_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`),
  ADD KEY `FAQ_fk0` (`course_id`);

--
-- Indexes for table `faq_details`
--
ALTER TABLE `faq_details`
  ADD PRIMARY KEY (`faq_det_id`),
  ADD KEY `FAQ_details_fk0` (`faq_id`);

--
-- Indexes for table `hm_academics`
--
ALTER TABLE `hm_academics`
  ADD PRIMARY KEY (`hm_acd_id`),
  ADD KEY `hm_academics_fk0` (`hm_id`);

--
-- Indexes for table `hm_academic_collaboration`
--
ALTER TABLE `hm_academic_collaboration`
  ADD PRIMARY KEY (`hm_ac_collab_id`),
  ADD KEY `hm_academic_collaboration_fk0` (`hm_id`);

--
-- Indexes for table `hm_banner_images`
--
ALTER TABLE `hm_banner_images`
  ADD PRIMARY KEY (`hm_ban_id`),
  ADD KEY `hm_banner_images_fk0` (`hm_id`);

--
-- Indexes for table `hm_course_re`
--
ALTER TABLE `hm_course_re`
  ADD PRIMARY KEY (`hm_course_re_id`),
  ADD KEY `hm_course_re_fk0` (`hm_id`);

--
-- Indexes for table `hm_credentials`
--
ALTER TABLE `hm_credentials`
  ADD PRIMARY KEY (`hm_credential_id`),
  ADD KEY `hm_credentials_fk0` (`hm_id`);

--
-- Indexes for table `hm_partners _infra`
--
ALTER TABLE `hm_partners _infra`
  ADD PRIMARY KEY (`hm_partners _infra_id`),
  ADD KEY `hm_partners _infra_fk0` (`hm_id`);

--
-- Indexes for table `hm_research`
--
ALTER TABLE `hm_research`
  ADD PRIMARY KEY (`hm_res_id`),
  ADD KEY `hm_research_fk0` (`hm_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`hm_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`Inq_id`);

--
-- Indexes for table `privacy policy`
--
ALTER TABLE `privacy policy`
  ADD PRIMARY KEY (`Priv_id`);

--
-- Indexes for table `priv_subheading_decription`
--
ALTER TABLE `priv_subheading_decription`
  ADD PRIMARY KEY (`priv_sub_id`),
  ADD KEY `Priv_subheading_decription_fk0` (`priv_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`prog_id`),
  ADD KEY `program_fk0` (`stu_id`),
  ADD KEY `program_fk1` (`app_id`);

--
-- Indexes for table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`prog_id`);

--
-- Indexes for table `pwd_reset`
--
ALTER TABLE `pwd_reset`
  ADD PRIMARY KEY (`pwdreset_id`);

--
-- Indexes for table `registeredusers`
--
ALTER TABLE `registeredusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `stu_com_info`
--
ALTER TABLE `stu_com_info`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `stu_com_info_fk0` (`stu_id`),
  ADD KEY `stu_com_info_fk1` (`app_id`);

--
-- Indexes for table `stu_docs`
--
ALTER TABLE `stu_docs`
  ADD PRIMARY KEY (`stu_docs_id`),
  ADD KEY `stu_docs_fk0` (`stu_id`),
  ADD KEY `stu_docs_fk1` (`app_id`);

--
-- Indexes for table `stu_edu`
--
ALTER TABLE `stu_edu`
  ADD PRIMARY KEY (`stu_edu`),
  ADD KEY `stu_edu_fk0` (`stu_id`),
  ADD KEY `stu_edu_fk1` (`app_id`);

--
-- Indexes for table `stu_othr_info`
--
ALTER TABLE `stu_othr_info`
  ADD PRIMARY KEY (`stu_othr_info_id`),
  ADD KEY `stu_othr_info_fk0` (`stu_id`),
  ADD KEY `stu_othr_info_fk1` (`app_id`);

--
-- Indexes for table `stu_per_info`
--
ALTER TABLE `stu_per_info`
  ADD PRIMARY KEY (`stu_info_id`),
  ADD KEY `stu_per_info_fk0` (`stu_id`),
  ADD KEY `stu_per_info_fk1` (`app_id`);

--
-- Indexes for table `tc_subheading_description`
--
ALTER TABLE `tc_subheading_description`
  ADD PRIMARY KEY (`tc_sub_id`),
  ADD KEY `tc_subheading_description_fk0` (`tc_id`);

--
-- Indexes for table `terms & conditions`
--
ALTER TABLE `terms & conditions`
  ADD PRIMARY KEY (`tc_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `abt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `abt_why_answers`
--
ALTER TABLE `abt_why_answers`
  MODIFY `abt_why_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `ace_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aca_exp_pdf`
--
ALTER TABLE `aca_exp_pdf`
  MODIFY `aca_exp_pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `ac_ certificate`
--
ALTER TABLE `ac_ certificate`
  MODIFY `ac_cert_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ac_certi_heading`
--
ALTER TABLE `ac_certi_heading`
  MODIFY `ac_cer_sub_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ac_certi_sub`
--
ALTER TABLE `ac_certi_sub`
  MODIFY `ac_cer_subhg-id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ac_corp_mentors`
--
ALTER TABLE `ac_corp_mentors`
  MODIFY `ac_corp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ac_corp_mentors_sub`
--
ALTER TABLE `ac_corp_mentors_sub`
  MODIFY `ac_sub_corp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ac_ experiential_learning`
--
ALTER TABLE `ac_ experiential_learning`
  MODIFY `ac_exp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ac_imsn_pgm`
--
ALTER TABLE `ac_imsn_pgm`
  MODIFY `ac_impgm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ac_imsn_pgm_sub`
--
ALTER TABLE `ac_imsn_pgm_sub`
  MODIFY `ac_impgm_sub_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ac_initivities`
--
ALTER TABLE `ac_initivities`
  MODIFY `ac_initia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ac_overview`
--
ALTER TABLE `ac_overview`
  MODIFY `ac_overview_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ac_overview_section`
--
ALTER TABLE `ac_overview_section`
  MODIFY `ac_sub_over_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ac_research_report`
--
ALTER TABLE `ac_research_report`
  MODIFY `ac_res_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ac_research_sub`
--
ALTER TABLE `ac_research_sub`
  MODIFY `ac_res_sub_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ac_usp`
--
ALTER TABLE `ac_usp`
  MODIFY `ac_usp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ac_usp_list`
--
ALTER TABLE `ac_usp_list`
  MODIFY `ac_sub_usp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `add_eligi`
--
ALTER TABLE `add_eligi`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_sub_list`
--
ALTER TABLE `add_sub_list`
  MODIFY `add_sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ad_admission_process`
--
ALTER TABLE `ad_admission_process`
  MODIFY `ad_ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ad_eligibility`
--
ALTER TABLE `ad_eligibility`
  MODIFY `ad_eligibility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ad_helpline_numbers`
--
ALTER TABLE `ad_helpline_numbers`
  MODIFY `ad_num_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ad_sub_adn_pro`
--
ALTER TABLE `ad_sub_adn_pro`
  MODIFY `ad_sub_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ad_sub_adn_process`
--
ALTER TABLE `ad_sub_adn_process`
  MODIFY `ad_sub _adn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `career assistance and support`
--
ALTER TABLE `career assistance and support`
  MODIFY `cas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cas_pre-placement activities`
--
ALTER TABLE `cas_pre-placement activities`
  MODIFY `cas_pre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cas_resources`
--
ALTER TABLE `cas_resources`
  MODIFY `cas_res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `cour_det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_features`
--
ALTER TABLE `course_features`
  MODIFY `cour_fea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course_history`
--
ALTER TABLE `course_history`
  MODIFY `course_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_structure`
--
ALTER TABLE `course_structure`
  MODIFY `cour_str_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cour_stu_details`
--
ALTER TABLE `cour_stu_details`
  MODIFY `cour_stu_det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `disclaimer`
--
ALTER TABLE `disclaimer`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dis_subheading_description`
--
ALTER TABLE `dis_subheading_description`
  MODIFY `dis_sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq_details`
--
ALTER TABLE `faq_details`
  MODIFY `faq_det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hm_academics`
--
ALTER TABLE `hm_academics`
  MODIFY `hm_acd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hm_academic_collaboration`
--
ALTER TABLE `hm_academic_collaboration`
  MODIFY `hm_ac_collab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hm_banner_images`
--
ALTER TABLE `hm_banner_images`
  MODIFY `hm_ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hm_course_re`
--
ALTER TABLE `hm_course_re`
  MODIFY `hm_course_re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hm_credentials`
--
ALTER TABLE `hm_credentials`
  MODIFY `hm_credential_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hm_partners _infra`
--
ALTER TABLE `hm_partners _infra`
  MODIFY `hm_partners _infra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hm_research`
--
ALTER TABLE `hm_research`
  MODIFY `hm_res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `hm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `Inq_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privacy policy`
--
ALTER TABLE `privacy policy`
  MODIFY `Priv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `priv_subheading_decription`
--
ALTER TABLE `priv_subheading_decription`
  MODIFY `priv_sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pwd_reset`
--
ALTER TABLE `pwd_reset`
  MODIFY `pwdreset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registeredusers`
--
ALTER TABLE `registeredusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `stu_com_info`
--
ALTER TABLE `stu_com_info`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `stu_docs`
--
ALTER TABLE `stu_docs`
  MODIFY `stu_docs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `stu_edu`
--
ALTER TABLE `stu_edu`
  MODIFY `stu_edu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `stu_othr_info`
--
ALTER TABLE `stu_othr_info`
  MODIFY `stu_othr_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tc_subheading_description`
--
ALTER TABLE `tc_subheading_description`
  MODIFY `tc_sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `terms & conditions`
--
ALTER TABLE `terms & conditions`
  MODIFY `tc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abt_why_answers`
--
ALTER TABLE `abt_why_answers`
  ADD CONSTRAINT `abt_why_answers_fk0` FOREIGN KEY (`abt_id`) REFERENCES `about` (`abt_id`);

--
-- Constraints for table `ac_certi_heading`
--
ALTER TABLE `ac_certi_heading`
  ADD CONSTRAINT `ac_certi_heading_fk0` FOREIGN KEY (`ac_cer_id`) REFERENCES `ac_ certificate` (`ac_cert_id`);

--
-- Constraints for table `ac_certi_sub`
--
ALTER TABLE `ac_certi_sub`
  ADD CONSTRAINT `ac_certi_sub_fk0` FOREIGN KEY (`ac_cer_sub_id`) REFERENCES `ac_certi_heading` (`ac_cer_sub_id`);

--
-- Constraints for table `ac_corp_mentors_sub`
--
ALTER TABLE `ac_corp_mentors_sub`
  ADD CONSTRAINT `ac_corp_mentors_sub_fk0` FOREIGN KEY (`ac_corp_id`) REFERENCES `ac_corp_mentors` (`ac_corp_id`);

--
-- Constraints for table `ac_imsn_pgm_sub`
--
ALTER TABLE `ac_imsn_pgm_sub`
  ADD CONSTRAINT `ac_imsn_pgm_sub_fk0` FOREIGN KEY (`ac_impgm_id`) REFERENCES `ac_imsn_pgm` (`ac_impgm_id`);

--
-- Constraints for table `ac_overview_section`
--
ALTER TABLE `ac_overview_section`
  ADD CONSTRAINT `ac_overview_section_fk0` FOREIGN KEY (`ac_overview_id`) REFERENCES `ac_overview` (`ac_overview_id`);

--
-- Constraints for table `ac_research_sub`
--
ALTER TABLE `ac_research_sub`
  ADD CONSTRAINT `ac_research_sub_fk0` FOREIGN KEY (`ac_res_id`) REFERENCES `ac_research_report` (`ac_res_id`);

--
-- Constraints for table `ac_usp_list`
--
ALTER TABLE `ac_usp_list`
  ADD CONSTRAINT `ac_usp_list_fk0` FOREIGN KEY (`ac_usp_id`) REFERENCES `ac_usp` (`ac_usp_id`);

--
-- Constraints for table `add_sub_list`
--
ALTER TABLE `add_sub_list`
  ADD CONSTRAINT `add_sub_list_ibfk_1` FOREIGN KEY (`add_id`) REFERENCES `add_eligi` (`add_id`);

--
-- Constraints for table `ad_helpline_numbers`
--
ALTER TABLE `ad_helpline_numbers`
  ADD CONSTRAINT `ad_helpline_numbers_fk0` FOREIGN KEY (`ad_ad_id`) REFERENCES `ad_admission_process` (`ad_ad_id`);

--
-- Constraints for table `ad_sub_adn_pro`
--
ALTER TABLE `ad_sub_adn_pro`
  ADD CONSTRAINT `ad_sub_adn_pro_fk0` FOREIGN KEY (`ad_sub_adn_id`) REFERENCES `ad_sub_adn_process` (`ad_sub _adn_id`);

--
-- Constraints for table `ad_sub_adn_process`
--
ALTER TABLE `ad_sub_adn_process`
  ADD CONSTRAINT `ad_sub_adn_process_fk0` FOREIGN KEY (`ad_ad_id`) REFERENCES `ad_admission_process` (`ad_ad_id`);

--
-- Constraints for table `cas_pre-placement activities`
--
ALTER TABLE `cas_pre-placement activities`
  ADD CONSTRAINT `cas_Pre-placement activities_fk0` FOREIGN KEY (`cas_id`) REFERENCES `career assistance and support` (`cas_id`);

--
-- Constraints for table `cas_resources`
--
ALTER TABLE `cas_resources`
  ADD CONSTRAINT `cas_resources_ibfk_1` FOREIGN KEY (`cas_id`) REFERENCES `career assistance and support` (`cas_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
