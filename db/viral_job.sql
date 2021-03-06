-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 07:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viral_job`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` longtext NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `descr`, `meta_title`, `meta_descr`) VALUES
(1, 'Why Us', '<p>There is no doubt that thousands of other websites provide job services.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Its very logical question to ask that what difference we will make and what really we can do for you which others cannot?</p>\r\n\r\n<p>Before starting our new venture Jobaapka.com, this is what Ideators Technologies has achieved that makes us stand out from the big crowd of job websites and give us strong edge over our competitors.</p>\r\n\r\n<p><strong>1) CLUTCH,USA CERTIFIED</strong>&nbsp;-&nbsp;<a href=\"https://clutch.co/profile/ideators-technologies\" style=\"box-sizing: border-box; color: rgb(107, 115, 156); text-decoration-line: none; background-color: transparent; transition: all 0.4s ease 0s;\" target=\"_blank\">https://clutch.co/profile/ideators-technologies</a></p>\r\n\r\n<p>Clutch is an independent platform that collects objective feedback from clients about each company registered on the site. They perform in-depth interviews with clients and customers about the quality of their interaction with each Clutch-registered company. Based on the data gathered, the service formulates a fair rating of all the firms. Clutch categorises companies by their geographic location,a field of their expertise and the focus on proven skills</p>\r\n\r\n<p><a href=\"https://clutch.co/\" style=\"box-sizing: border-box; color: rgb(107, 115, 156); text-decoration-line: none; background-color: transparent; transition: all 0.4s ease 0s;\" target=\"_blank\">Read more here - https://clutch.co/</a></p>\r\n\r\n<p><a href=\"https://clutch.co/\" style=\"box-sizing: border-box; color: rgb(107, 115, 156); text-decoration-line: none; background-color: transparent; transition: all 0.4s ease 0s;\"><strong>2) GOOGLE SEARCH ADS CERTIFIED</strong>&nbsp;-&nbsp;</a><a href=\"https://academy.exceedlms.com/student/award/33034979\" style=\"box-sizing: border-box; color: rgb(107, 115, 156); text-decoration-line: none; background-color: transparent; transition: all 0.4s ease 0s;\" target=\"_blank\">https://academy.exceedlms.com/student/award/33034979</a></p>\r\n\r\n<p>Every second, there are 2.3 million searches performed on Google, and the majority of search results pages include Google ads.Whenever you look for a product or service online, Google (or any other search-engine provider) displays a results page consisting of both organic and sponsored results.</p>\r\n\r\n<p><a href=\"https://support.google.com/google-ads/answer/9029201\" style=\"box-sizing: border-box; color: rgb(107, 115, 156); text-decoration-line: none; background-color: transparent; transition: all 0.4s ease 0s;\" target=\"_blank\">Read more here - https://support.google.com/google-ads/answer/9029201</a></p>\r\n\r\n<p><a href=\"https://support.google.com/google-ads/answer/9029201\" style=\"box-sizing: border-box; color: rgb(107, 115, 156); text-decoration-line: none; background-color: transparent; transition: all 0.4s ease 0s;\"><strong>3) PREVIOUS DOMAIN RESELLER FOR GODADDY</strong>&nbsp;-&nbsp;</a><a href=\"https://in.godaddy.com/reseller-program/hosting\" style=\"box-sizing: border-box; color: rgb(107, 115, 156); text-decoration-line: none; background-color: transparent; transition: all 0.4s ease 0s;\" target=\"_blank\">https://in.godaddy.com/reseller-program/hosting</a></p>\r\n\r\n<p><strong>4) OUR SERVICES</strong>&nbsp;- We provide you all the requisite services at the most lowest cost for both Employers and Jobseekers. Learn more about that in <a href=\"http://employer_info\">Our plan</a></p>', 'Why Us', 'Why Us'),
(2, 'About Us', '<p>&lt;div class=&quot;col-md-12 col-lg-12&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;single-candidate-bottom-left&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;single-candidate-widget&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h3&gt;ABOUT JOBAAPKA&lt;/h3&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;AFTER SUCCESSFUL WORKING OF IDEATORS, A TECHNOLOGY DEVELOPMENT AS WELL AS DIGITAL MARKETING AND BIG DATA TRAINING COMPANY BASED OUT OF THANE,THIS IS OUR NEW INITIATIVE AND VENTURE, JOBAAPKA.COM&lt;/p&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;OUR OBJECTIVE IS NOT JUST TO MAKE THE CANDIDATES/JOBSEEKERS FIND THE SUITABLE AND THE RIGHT JOB BUT MAKE THEM SKILLED,EFFICIENT AND PRODUCTIVE IN THEIR JOB HUNT THROUGH OUR OPTIONAL SERVICES.&lt;/p&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;WE AIM TO MAKE THE EMPLOYERS GROW NOT ONLY IN TERMS OF HIRING RIGHT PEOPLE BUT ALSO EMPOWERING THEM WITH THE MOST EFFECTIVE AND HIGHLY WORKABLE TECHNOLOGY WHICH WILL ADDRESS THEIR BUSINESS ISSUES.&lt;/p&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;p&gt;THIS PORTAL PROVIDES THE MOST UNIQUE SERVICE IN TERMS OF HIRING/RECRUITMENT AND TECHNOLOGY CONSULTING FOR THE EMPLOYERS AS WELL AS INTERVIEW PREPARATION,CV WRITING AND JOB ASSISTANCE SERVICE FOR THE JOBSEEKERS.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/p&gt;&lt;/div&gt;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;p&gt;&lt;/p&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;h6&gt;BELOW POINTS EXPLAIN YOU HOW -&lt;/h6&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;br&gt;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;single-candidate-list&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;main-comment business_service&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-image&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;img src=&quot;&lt;?= base_url().IMG_ABOUT;?&gt;single_recruitment solution.jpg&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-text&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;candidate-info&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-title&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;h3&gt;A SINGLE PLAN SOLUTION&lt;/h3&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;candidate-text-inner&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hassle free and only one simple plan for your Hiring as well as Technology needs at a very low price which you would have never got or thought before.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;single-candidate-list&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;main-comment business_service&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-image&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;img src=&quot;&lt;?= base_url().IMG_ABOUT;?&gt;win_win.jpg&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-text&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;candidate-info&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-title&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;h3&gt;A WIN WIN SCENARIO FOR BOTH EMPLOYERS AND JOBSEEKERS&lt;/h3&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;candidate-text-inner&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Our working style and systematic process makes this a favourable situation for both the parties as we give you ample time to resolve your issues.Know more about that in &lt;a href=&quot;http://localhost/viral/job/employer_info&quot;&gt;Our plan&lt;/a&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;single-candidate-list&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;main-comment business_service&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-image&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;img src=&quot;&lt;?= base_url().IMG_ABOUT;?&gt;technology.jpg&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-text&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;candidate-info&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-title&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;h3&gt;TECHNOLOGY CONSULTING AS PER YOUR BUSINESS PROBLEMS &lt;/h3&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;candidate-text-inner&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;We understand your business not only in terms of your manpower requirement but also in form of a highly affordable technology that you can decide through our free technology consulting session.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;single-candidate-list&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;main-comment business_service&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-image&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;img src=&quot;&lt;?= base_url().IMG_ABOUT;?&gt;job_assistance.jpg&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-text&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;candidate-info&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-title&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;h3&gt;PERSONAL JOB ASSISTANCE FOR JOBSEEKERS &lt;/h3&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;candidate-text-inner&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;We help candidates who have subscribed for &lt;a href=&quot;http://localhost/viral/job/jobseeker_info&quot;&gt;our plan&lt;/a&gt; with CV writing,Interview preparation as well as second job or 6 months of support ,whatever comes first after losing out on their previous job.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;single-candidate-list&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;main-comment business_service&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-image&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;img src=&quot;&lt;?= base_url().IMG_ABOUT;?&gt;100_guarantee.jpg&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-text&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;candidate-info&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;div class=&quot;candidate-title&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;h3&gt;100% CREDIBLE AND TRUSTWORTHY &lt;/h3&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;div class=&quot;candidate-text-inner&quot;&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;With all our credentials and reputation we have gained,you can easily rely on us and be certainly assured of 100% quality and perfect services from us.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &lt;/div&gt;<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&lt;/div&gt;</p>', 'About Us', 'About Us'),
(3, 'Privacy Policy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer</p>\r\n\r\n<p>took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'Privacy Policy', 'Privacy Policy'),
(4, 'Terms & Condition', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer</p>\r\n\r\n<p>took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', 'Terms & Condition', 'Terms & Condition');

-- --------------------------------------------------------

--
-- Table structure for table `apply_job_without_login`
--

CREATE TABLE `apply_job_without_login` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `exp_year` int(11) NOT NULL,
  `exp_month` int(11) NOT NULL,
  `details` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_job_without_login`
--

INSERT INTO `apply_job_without_login` (`id`, `employer_id`, `job_id`, `name`, `email`, `mobile`, `exp_year`, `exp_month`, `details`, `location`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(7, 13, 12, 'jack', 'jack@gmail.com', '989898989', 1, 1, 'lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum \r\n\r\nlorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum \r\n\r\nlorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum lorie lipsum ', '1,2,3', 'resume_hitesh8.docx', 0, 0, '2020-01-12 16:24:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `date` datetime NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `descr`, `date`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'Tammy Dixon', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n\r\n<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n\r\n<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n\r\n<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n', '2020-01-28 00:00:00', '5e306c3481601_1.jpg', 1, 0, '2020-01-28 17:49:05', '2020-01-28 19:01:53'),
(2, 'Tammy Dixon', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n', '2020-01-28 00:00:00', '5e306c3d80a3a_1.jpg', 1, 0, '2020-01-28 17:51:50', '2020-01-28 18:15:42'),
(3, 'Tammy Dixon', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n', '2020-01-28 00:00:00', '5e306c448e2a5_1.jpg', 1, 0, '2020-01-28 17:52:09', '2020-01-28 18:15:49'),
(4, 'New Article', '<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n\r\n<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n\r\n<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n\r\n<p><span style=\"color:rgb(119, 119, 119); font-family:open sans,sans-serif; font-size:14px\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</span></p>\r\n', '2020-01-28 00:00:00', '5e30775655fd2_job_1.png', 1, 0, '2020-01-28 19:03:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `title`, `slug`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'Clerk', 'clerk', 1, 0, '2019-12-15 03:03:58', '0000-00-00 00:00:00'),
(2, 'Supervisor', 'supervisor', 1, 0, '2019-12-15 03:04:06', '0000-00-00 00:00:00'),
(3, 'Assistant Manager', 'assistant-manager', 1, 0, '2019-12-15 03:04:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `consultin`
--

CREATE TABLE `consultin` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `con_contact` varchar(255) NOT NULL,
  `con_email` varchar(255) NOT NULL,
  `con_mobile` varchar(255) NOT NULL,
  `con_company_name` varchar(255) NOT NULL,
  `con_problem` text NOT NULL,
  `con_appointment` varchar(255) NOT NULL,
  `con_office_address` varchar(255) NOT NULL,
  `con_appointment_time` varchar(255) NOT NULL,
  `con_other` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultin`
--

INSERT INTO `consultin` (`id`, `employer_id`, `title`, `con_contact`, `con_email`, `con_mobile`, `con_company_name`, `con_problem`, `con_appointment`, `con_office_address`, `con_appointment_time`, `con_other`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(2, 7, '', '1', '2', '3', '4', '5', 'our_office', '6', '7', '8', 0, 0, '2020-01-08 21:42:17', '0000-00-00 00:00:00'),
(3, 7, '', '1', '2', '3', '4', '5', 'our_office', '6', '7', '8', 0, 0, '2020-01-08 21:42:53', '0000-00-00 00:00:00'),
(4, 7, '', '5', '6', '4', '8', '4564', 'our_office', 'Shastrinagar st no-4, Nr. gandhigram, Rajkot', 'asdf', 'asd', 0, 0, '2020-01-08 21:43:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `from_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `from_email`, `subject`, `country`, `title`, `descr`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, '', '', '', 'about us', '<h6 style=\"margin: 30px 0px 20px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-weight:=\"\" 600;=\"\" color:=\"\" rgb(102,=\"\" 102,=\"\" 102);=\"\" font-size:=\"\" 18px;=\"\" letter-spacing:=\"\" 0.5px;=\"\" font-style:=\"\" italic;\"=\"\"><b>Pushing out limits to provide the highest quality services</b></h6><p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: \" open=\"\" sans\",=\"\" sans-serif;\"=\"\">Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est.&nbsp;<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi.&nbsp;<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor,</p>', 1, 0, '2019-08-04 08:51:12', '0000-00-00 00:00:00'),
(2, '', '', '', 'Privacy Policy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer</p><p> took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', 1, 0, '2019-08-04 08:51:12', '0000-00-00 00:00:00'),
(3, '', '', '', 'Terms', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer</p><p> took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<br></p>', 1, 0, '2019-08-04 08:51:12', '0000-00-00 00:00:00'),
(4, 'hmvadoliya.iipl2013@gmail.com', 'xxxxxxxxxxxxxxxxxxx', '', 'Hitesh', 'asdfasdf\r\na\r\nsdf\r\na\r\nsdf\r\nasd', 1, 0, '2019-08-04 08:51:12', '0000-00-00 00:00:00'),
(5, 'hmvadoliya.iipl2013@gmail.com', 'xxxxxxxxxxxxxxxxxxx', '', 'Hitesh', 'asdfasdf\r\na\r\nsdf\r\na\r\nsdf\r\nasd', 1, 0, '2019-08-04 08:51:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` longtext NOT NULL,
  `title_2` varchar(500) NOT NULL,
  `descr_2` text NOT NULL,
  `title_3` varchar(500) NOT NULL,
  `descr_3` text NOT NULL,
  `isDelete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `descr`, `title_2`, `descr_2`, `title_3`, `descr_3`, `isDelete`) VALUES
(1, 'WORKSHOP', '<p>Get addicted to the wonderful world of resin. Be part of a group class or enjoy the time with MRS.COLORBERRY in an individually one to one class.</p>', 'E-CLASSES', '<p>Because of the huge demand MRS.COLORBERRY will offer soon her e-classes for resin art: abstract art and geode art. Learn more here!</p>\r\n', 'ART-SUPPLIES', '<p>Original resin pigment pastes, resin book &ldquo;basics&rdquo; or the COLORBERRY holographic glitter. SHOP NOW and get your starter set as long as it is as long as it is available!</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `designation_level`
--

CREATE TABLE `designation_level` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `seq` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `designation_level`
--

INSERT INTO `designation_level` (`id`, `title`, `slug`, `seq`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'Junior Engineer', 'junior-engineer', 1, 1, 0, '2019-12-15 02:43:57', '0000-00-00 00:00:00'),
(2, 'Associate Manager', 'associate-manager', 1, 1, 0, '2019-12-15 02:44:07', '0000-00-00 00:00:00'),
(3, 'Senior Manager', 'senior-manager', 1, 1, 0, '2019-12-15 02:44:14', '0000-00-00 00:00:00'),
(4, 'Group Manager', 'group-manager', 1, 1, 0, '2019-12-15 02:44:21', '0000-00-00 00:00:00'),
(5, 'Deputy General Manager', 'deputy-general-manager', 1, 1, 0, '2019-12-15 02:44:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `seq` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `slug`, `seq`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'S.S.C. (10Th)', 'ssc-10th', 1, 1, 0, '2019-12-14 11:21:17', '2020-01-06 06:28:00'),
(2, 'S.H.C. (12th)', 'shc-12th', 1, 1, 0, '2019-12-14 11:21:23', '2020-01-06 06:29:59'),
(3, 'Biochemistry (BS)', 'biochemistry-bs', 1, 1, 0, '2019-12-14 11:21:27', '2020-01-06 06:31:07'),
(4, 'Biology (BS, BA)', 'biology-bs-ba', 1, 1, 0, '2019-12-14 11:21:30', '2020-01-06 06:31:32'),
(5, 'Civil Engineering', 'civil-engineering', 1, 1, 0, '2019-12-14 11:21:34', '2020-01-06 06:31:48'),
(6, 'Computer Science', 'computer-science', 1, 1, 0, '2020-01-06 06:32:04', '0000-00-00 00:00:00'),
(7, 'Criminal Justice (AS)', 'criminal-justice-as', 1, 1, 0, '2020-01-06 06:32:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `descr`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'question 1', '<p>Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;</p>', '', 1, 0, '2020-01-21 17:45:02', '2020-01-21 17:45:09'),
(2, 'question 2', '<p>Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;</p>', '', 1, 0, '2020-01-21 17:45:02', '2020-01-21 17:45:09'),
(3, 'question 3', '<p>Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;</p>', '', 1, 0, '2020-01-21 17:45:02', '2020-01-21 17:45:09'),
(4, 'question 4', '<p>Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;</p>', '', 1, 0, '2020-01-21 17:45:02', '2020-01-21 17:45:09'),
(5, 'question 5', '<p>Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;</p>', '', 1, 0, '2020-01-21 17:45:02', '2020-01-21 17:45:09'),
(6, 'question 6', '<p>Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;</p>', '', 1, 0, '2020-01-21 17:45:02', '2020-01-21 17:45:09'),
(7, 'question 7', '<p>Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;</p>', '', 1, 0, '2020-01-21 17:45:02', '2020-01-21 17:45:09'),
(8, 'question 8', '<p>Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;Lorie lipsum&nbsp;</p>', '', 1, 0, '2020-01-21 17:45:02', '2020-01-21 17:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `img_src_multi` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `descr`, `img_src`, `img_src_multi`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'd', '<p>d</p>\r\n', '5d58ed444a201_dummy-500x500-Map.jpg', '[\"5d58ed48563f6_dummy-500x500-Mosque.jpg\",\"5d58ed4887f3f_dummy-500x500-RedDots.jpg\",\"5d58eda72ff66_dummy-500x500-White.jpg\",\"5d58edd035547_dummy-500x500-RedDots.jpg\",\"5d58edd035547_dummy-500x500-RedDots.jpg\",\"5d58edefb5aac_dummy-500x500-FairyLights.jpg\",\"5d58ee240e5e4_3.jpg\",\"5d58ee6b34afe_6.jpg\",\"5d58ee6b34afe_6.jpg\",\"5d58eec59762b_11.jpg\",\"5d58eee59afdf_22.jpg\",\"5d58eefad055a_44.jpg\",\"5d58ef2a99f22_22.jpg\",\"5d58ef4da958c_pvc-ceiling-tiles-500x500.jpg\",\"5d58ef6c0877f_11.jpg\",\"5d58ef6c44eec_22.jpg\",\"5d58ef6c76ed0_33.jpg\",\"5d58efc0b9669_6.jpg\",\"5d58efc0ea0d0_7.jpg\",\"5d58efc11f6ba_11.jpg\",\"5d58efc144004_22.jpg\",\"5d58eff5700a4_6.jpg\",\"5d58eff5a0f40_7.jpg\",\"5d58eff5d1434_11.jpg\",\"5d58eff608f9a_22.jpg\"]', 1, 0, '2019-08-18 08:16:42', '2019-08-18 08:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `hwt_user`
--

CREATE TABLE `hwt_user` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `img_src` varchar(400) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pass_txt` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_function` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `exp_year` varchar(255) NOT NULL,
  `exp_month` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile` varchar(150) NOT NULL,
  `phone` int(15) NOT NULL,
  `home_town` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` enum('M','F','O') NOT NULL DEFAULT 'M',
  `status` tinyint(1) NOT NULL,
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `created_timestamp` int(30) NOT NULL,
  `updated_timestamp` int(30) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `verify_string` varchar(255) NOT NULL,
  `fbid` varchar(255) NOT NULL,
  `gid` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `shortlist` varchar(255) NOT NULL,
  `applied_job` varchar(255) NOT NULL,
  `shortlist_employer` text NOT NULL,
  `history` text NOT NULL,
  `plan_id` int(11) NOT NULL,
  `plan_purchase_date` date NOT NULL,
  `plan_expiry_date` date NOT NULL,
  `plan_status` tinyint(1) NOT NULL,
  `oauth_provider` varchar(255) NOT NULL,
  `oauth_uid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hwt_user`
--

INSERT INTO `hwt_user` (`id`, `type`, `fname`, `lname`, `img_src`, `email`, `password`, `pass_txt`, `company_name`, `job_function`, `industry`, `job_location`, `exp_year`, `exp_month`, `username`, `mobile`, `phone`, `home_town`, `city`, `gender`, `status`, `isDelete`, `created_at`, `updated_at`, `created_timestamp`, `updated_timestamp`, `address`, `state`, `zip`, `verify_string`, `fbid`, `gid`, `country_id`, `shortlist`, `applied_job`, `shortlist_employer`, `history`, `plan_id`, `plan_purchase_date`, `plan_expiry_date`, `plan_status`, `oauth_provider`, `oauth_uid`) VALUES
(13, 'employer', 'Dhiru', '', 'download.jpg', 'dhiru@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'Reliance', '2', '6', '1', '', '', '', '9898989898', 0, '', '', 'M', 1, 0, '2020-01-12 15:42:13', '0000-00-00 00:00:00', 0, 0, '', '', '', '', '', '', 0, '12', '', '14', '', 1, '2020-01-29', '2020-07-29', 1, '', ''),
(14, 'employer', 'TATA', '', 'TATA_14.png', 'tata@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'tata', '1', '4', '', '', '', '', '963963963', 0, '', '', 'M', 1, 0, '2020-01-12 16:34:48', '0000-00-00 00:00:00', 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 0, '', ''),
(15, 'jobseeker', 'Hitesh', '', 'download.jpg', 'hit@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', '', '', '1', '14', '8', '', '96396396', 0, '', 'rajkot', 'M', 1, 0, '2020-01-12 16:54:49', '0000-00-00 00:00:00', 0, 0, 'gandhigram', '', '360007', '475808', '', '', 100, '12,14,,13', '12,14', '', '[\"Khadi Bhavan\\r\\n\\r\\nLorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum ,,\\r\\n\\r\\nLorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum Lorei lipsum \",\"test\"]', 1, '2020-01-15', '2020-07-15', 0, '', ''),
(20, 'jobseeker', 'Hitesh', '', '', 'hmvadoliya.iipl2013@gmail.com', '', '', '', '', '', '', '', '', '', '', 0, '', '', 'M', 1, 0, '2020-01-19 13:21:02', '0000-00-00 00:00:00', 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, '0000-00-00', '0000-00-00', 0, 'linkedin', 'goSa0pnvc_');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`id`, `title`, `icon`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'Financial Services & Software', '<i class=\"fa fa-briefcase\"></i>', '5df2626a3925c_account_cat.jpg', 1, 0, '2019-12-12 16:53:15', '2020-01-06 05:46:14'),
(2, 'Telecom/ Internet', '<i class=\"fa fa-briefcase\"></i>', '5e12ce547eb0c_images_hwt_(5).jpg', 1, 0, '2019-12-12 16:54:18', '2020-01-06 06:06:13'),
(3, 'Textile', '<i class=\"fa fa-briefcase\"></i>', '5df262bcb0eff_design_art.jpg', 1, 1, '2019-12-12 16:54:38', '2020-01-06 11:36:38'),
(4, 'Engineering Services', 'service', '5e12cb64b392a_Insights-MoBT-44-Engineering-the-switch-to-digital-1536x1536-400_Standard.jpg', 1, 0, '2020-01-06 05:53:43', '0000-00-00 00:00:00'),
(5, 'Textile', 'Textile', '5e12cc206cfbf_images.jpg', 1, 0, '2020-01-06 05:56:51', '0000-00-00 00:00:00'),
(6, 'Digital CX', 'Digital CX', '5e12cc5e09c74_images_hwt_(1).jpg', 1, 0, '2020-01-06 05:57:50', '0000-00-00 00:00:00'),
(7, 'Tyres Industry', 'Tyres Industry', '5e12cca141fa3_Tyre-black-1-1.png', 1, 0, '2020-01-06 05:58:58', '0000-00-00 00:00:00'),
(8, 'Banking', 'Banking', '5e12ccdeaa2b7_bl29bankingvirtualpix.jpg', 1, 0, '2020-01-06 05:59:59', '0000-00-00 00:00:00'),
(9, 'Building Materials', 'Building Materials', '5e12cd1ec6e6f_images_hwt_(2).jpg', 1, 0, '2020-01-06 06:01:03', '0000-00-00 00:00:00'),
(10, 'BPO/KPO', 'BPO/KPO', '5e12cd6730cd4_images_hwt_(3).jpg', 1, 0, '2020-01-06 06:02:15', '0000-00-00 00:00:00'),
(11, 'Jewellery Industry', 'Jewellery Industry', '5e12cddbba804_images_hwt_(4).jpg', 1, 0, '2020-01-06 06:04:12', '0000-00-00 00:00:00'),
(12, 'Healthcare/Pharma', 'Healthcare/Pharma', '5e12ce190481e_images.png', 1, 0, '2020-01-06 06:05:13', '0000-00-00 00:00:00'),
(13, 'Software Services', 'Software Services', '5e12cebd9e2a2_it-software-services.jpg', 1, 0, '2020-01-06 06:07:59', '0000-00-00 00:00:00'),
(14, 'Financial Services & Software', '<i class=\"fa fa-briefcase\"></i>', '5df2626a3925c_account_cat.jpg', 1, 0, '2019-12-12 16:53:15', '2020-01-06 05:46:14'),
(15, 'Telecom/ Internet', '<i class=\"fa fa-briefcase\"></i>', '5e12ce547eb0c_images_hwt_(5).jpg', 1, 0, '2019-12-12 16:54:18', '2020-01-06 06:06:13'),
(16, 'Textile', '<i class=\"fa fa-briefcase\"></i>', '5df262bcb0eff_design_art.jpg', 1, 1, '2019-12-12 16:54:38', '2020-01-06 11:36:38'),
(17, 'Engineering Services', 'service', '5e12cb64b392a_Insights-MoBT-44-Engineering-the-switch-to-digital-1536x1536-400_Standard.jpg', 1, 0, '2020-01-06 05:53:43', '0000-00-00 00:00:00'),
(18, 'Textile', 'Textile', '5e12cc206cfbf_images.jpg', 1, 0, '2020-01-06 05:56:51', '0000-00-00 00:00:00'),
(19, 'Digital CX', 'Digital CX', '5e12cc5e09c74_images_hwt_(1).jpg', 1, 0, '2020-01-06 05:57:50', '0000-00-00 00:00:00'),
(20, 'Tyres Industry', 'Tyres Industry', '5e12cca141fa3_Tyre-black-1-1.png', 1, 0, '2020-01-06 05:58:58', '0000-00-00 00:00:00'),
(21, 'Banking', 'Banking', '5e12ccdeaa2b7_bl29bankingvirtualpix.jpg', 1, 0, '2020-01-06 05:59:59', '0000-00-00 00:00:00'),
(22, 'Building Materials', 'Building Materials', '5e12cd1ec6e6f_images_hwt_(2).jpg', 1, 0, '2020-01-06 06:01:03', '0000-00-00 00:00:00'),
(23, 'BPO/KPO', 'BPO/KPO', '5e12cd6730cd4_images_hwt_(3).jpg', 1, 0, '2020-01-06 06:02:15', '0000-00-00 00:00:00'),
(24, 'Jewellery Industry', 'Jewellery Industry', '5e12cddbba804_images_hwt_(4).jpg', 1, 0, '2020-01-06 06:04:12', '0000-00-00 00:00:00'),
(25, 'Healthcare/Pharma', 'Healthcare/Pharma', '5e12ce190481e_images.png', 1, 0, '2020-01-06 06:05:13', '0000-00-00 00:00:00'),
(26, 'Software Services', 'Software Services', '5e12cebd9e2a2_it-software-services.jpg', 1, 0, '2020-01-06 06:07:59', '0000-00-00 00:00:00'),
(27, 'Financial Services & Software', '<i class=\"fa fa-briefcase\"></i>', '5df2626a3925c_account_cat.jpg', 1, 0, '2019-12-12 16:53:15', '2020-01-06 05:46:14'),
(28, 'Telecom/ Internet', '<i class=\"fa fa-briefcase\"></i>', '5e12ce547eb0c_images_hwt_(5).jpg', 1, 0, '2019-12-12 16:54:18', '2020-01-06 06:06:13'),
(29, 'Textile', '<i class=\"fa fa-briefcase\"></i>', '5df262bcb0eff_design_art.jpg', 1, 1, '2019-12-12 16:54:38', '2020-01-06 11:36:38'),
(30, 'Engineering Services', 'service', '5e12cb64b392a_Insights-MoBT-44-Engineering-the-switch-to-digital-1536x1536-400_Standard.jpg', 1, 0, '2020-01-06 05:53:43', '0000-00-00 00:00:00'),
(31, 'Textile', 'Textile', '5e12cc206cfbf_images.jpg', 1, 0, '2020-01-06 05:56:51', '0000-00-00 00:00:00'),
(32, 'Digital CX', 'Digital CX', '5e12cc5e09c74_images_hwt_(1).jpg', 1, 0, '2020-01-06 05:57:50', '0000-00-00 00:00:00'),
(33, 'Tyres Industry', 'Tyres Industry', '5e12cca141fa3_Tyre-black-1-1.png', 1, 0, '2020-01-06 05:58:58', '0000-00-00 00:00:00'),
(34, 'Banking', 'Banking', '5e12ccdeaa2b7_bl29bankingvirtualpix.jpg', 1, 0, '2020-01-06 05:59:59', '0000-00-00 00:00:00'),
(35, 'Building Materials', 'Building Materials', '5e12cd1ec6e6f_images_hwt_(2).jpg', 1, 0, '2020-01-06 06:01:03', '0000-00-00 00:00:00'),
(36, 'BPO/KPO', 'BPO/KPO', '5e12cd6730cd4_images_hwt_(3).jpg', 1, 0, '2020-01-06 06:02:15', '0000-00-00 00:00:00'),
(37, 'Jewellery Industry', 'Jewellery Industry', '5e12cddbba804_images_hwt_(4).jpg', 1, 0, '2020-01-06 06:04:12', '0000-00-00 00:00:00'),
(38, 'Healthcare/Pharma', 'Healthcare/Pharma', '5e12ce190481e_images.png', 1, 0, '2020-01-06 06:05:13', '0000-00-00 00:00:00'),
(39, 'Financial Services & Software', '<i class=\"fa fa-briefcase\"></i>', '5df2626a3925c_account_cat.jpg', 1, 0, '2019-12-12 16:53:15', '2020-01-06 05:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `descr` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `fname`, `lname`, `subject`, `contact`, `email`, `descr`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'Hitesh', '', '', '', 'hmvadoliya.iipl2013@gmail.com', 'asdf', 1, 0, '2019-10-09 22:42:30', '0000-00-00 00:00:00'),
(2, 'Hitesh', '', '', '', 'hmvadoliya.iipl2013@gmail.com', 'asdf', 1, 0, '2019-10-09 22:42:51', '0000-00-00 00:00:00'),
(3, 'Hitesh', '', '', '323', 'hmvadoliya.iipl2013@gmail.com', 'dfasdf\r\na\r\nsdfasd', 1, 0, '2019-10-09 22:47:43', '0000-00-00 00:00:00'),
(4, 'Hitesh', '', '', '1312312312', 'hmvadoliya.iipl2013@gmail.com', 'asdf\r\nasdf\r\na\r\nsdf\r\na\r\nsdfasd', 1, 0, '2019-10-09 22:51:19', '0000-00-00 00:00:00'),
(5, 'Hitesh', '', '', '1312312312', 'hmvadoliya.iipl2013@gmail.com', 'asdf\r\nasdf\r\na\r\nsdf\r\na\r\nsdfasd', 1, 0, '2019-10-09 22:51:23', '0000-00-00 00:00:00'),
(6, 'Hitesh', '', '', 'asdf', 'hmvadoliya.iipl2013@gmail.com', 'asd', 1, 0, '2019-11-12 21:30:16', '0000-00-00 00:00:00'),
(7, 'Hitesh', '', '', 'asdf', 'hmvadoliya.iipl2013@gmail.com', 'asdf', 1, 0, '2019-11-12 21:31:06', '0000-00-00 00:00:00'),
(8, 'Hitesh', '', '', 'ads', 'hmvadoliya.iipl2013@gmail.com', 'asd', 1, 0, '2019-11-12 21:31:42', '0000-00-00 00:00:00'),
(9, 'Hitesh', '', '', 'asd', 'hmvadoliya.iipl2013@gmail.com', 'asd', 1, 0, '2019-11-12 21:32:12', '0000-00-00 00:00:00'),
(10, 'Hitesh', '', '', 'asd', 'hmvadoliya.iipl2013@gmail.com', 'asd', 1, 0, '2019-11-12 21:32:43', '0000-00-00 00:00:00'),
(11, 'asdfasdf', '', '', '1231', 'asdf', 'dfasd', 1, 0, '2019-11-16 12:57:31', '0000-00-00 00:00:00'),
(12, 'asdfasdf', '', '', '1231', 'asdf', 'dfasd', 1, 0, '2019-11-16 12:57:33', '0000-00-00 00:00:00'),
(13, 'sdf', '', '', 'asdfasdf', 'asdfasdf', 'asdf', 1, 0, '2019-11-16 12:58:35', '0000-00-00 00:00:00'),
(14, 'asf', '', '', 'asdf', 'asdf', 'asdf', 1, 0, '2019-11-16 12:58:52', '0000-00-00 00:00:00'),
(15, 'Hitesh', '', '', 'ddddddd', 'hmvadoliya.iipl2013@gmail.com', 'ddddddddddddddd', 1, 0, '2019-11-16 12:59:29', '0000-00-00 00:00:00'),
(16, 'Hiteshd', '', '', 'dddddddddddd', 'hmvadoliya.iipl2013@gmail.com', 'ddddddddd', 1, 0, '2019-11-16 13:00:01', '0000-00-00 00:00:00'),
(17, 'Hitesh', '', '', 'd', 'hmvadoliya.iipl2013@gmail.com', 'd', 1, 0, '2019-11-16 13:00:22', '0000-00-00 00:00:00'),
(18, 'Hitesh', '', '', 'd', 'hmvadoliya.iipl2013@gmail.com', 'sasd', 1, 0, '2019-11-16 13:01:17', '0000-00-00 00:00:00'),
(19, 'Hitesh', '', 'asdf', '', 'hmvadoliya.iipl2013@gmail.com', 'asdf', 1, 0, '2019-12-12 21:43:02', '0000-00-00 00:00:00'),
(20, 'Hitesh', '', 'asdf', '', 'hmvadoliya.iipl2013@gmail.com', 'asdf', 1, 0, '2019-12-12 21:43:46', '0000-00-00 00:00:00'),
(21, 'Hitesh', '', 'my subject', '', 'hmvadoliya.iipl2013@gmail.com', 'lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum \r\n\r\nlores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum \r\n\r\nlores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum lores lipsum ', 1, 0, '2019-12-12 21:45:50', '0000-00-00 00:00:00'),
(22, 'Hitesh', '', 'asdf', '', 'hmvadoliya.iipl2013@gmail.com', 'asfd', 1, 0, '2019-12-12 21:47:06', '0000-00-00 00:00:00'),
(23, 'Hitesh', '', 'asdf', '', 'hmvadoliya.iipl2013@gmail.com', 'asfd', 1, 0, '2019-12-12 21:47:08', '0000-00-00 00:00:00'),
(24, 'Hitesh', '', 'asdf', '', 'hmvadoliya.iipl2013@gmail.com', 'asfd', 1, 0, '2019-12-12 21:47:17', '0000-00-00 00:00:00'),
(25, 'Hitesh', '', 'asd', '', 'hmvadoliya.iipl2013@gmail.com', 'fasd', 1, 0, '2019-12-12 21:49:58', '0000-00-00 00:00:00'),
(26, 'Hitesh', '', 'asdf', '', 'hmvadoliya.iipl2013@gmail.com', 'asd', 1, 0, '2019-12-12 21:50:16', '0000-00-00 00:00:00'),
(27, 'last one', '', '2132', '', 'last@gmail.com', 'asdf\r\nasd\r\nf\r\nasd', 1, 0, '2020-01-09 21:30:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `job_date` date NOT NULL,
  `job_date_expired` date NOT NULL,
  `job_title` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `job_industry` varchar(255) NOT NULL,
  `job_job_location` varchar(255) NOT NULL,
  `job_job_function` varchar(255) NOT NULL,
  `job_education` varchar(255) NOT NULL,
  `job_exp_year` int(11) NOT NULL,
  `job_exp_month` int(11) NOT NULL,
  `job_salary` int(255) NOT NULL,
  `job_skill` text NOT NULL,
  `job_additional_skill` text NOT NULL,
  `job_descr` text NOT NULL,
  `job_additional_role` text NOT NULL,
  `employer_tags` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0-no 1-yes',
  `pay_info` tinyint(4) NOT NULL DEFAULT '1',
  `isDelete` tinyint(1) NOT NULL,
  `job_expire` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1-expire',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `employer_id`, `job_date`, `job_date_expired`, `job_title`, `slug`, `job_industry`, `job_job_location`, `job_job_function`, `job_education`, `job_exp_year`, `job_exp_month`, `job_salary`, `job_skill`, `job_additional_skill`, `job_descr`, `job_additional_role`, `employer_tags`, `status`, `pay_info`, `isDelete`, `job_expire`, `created_at`, `updated_at`) VALUES
(12, 13, '0000-00-00', '0000-00-00', 'php developer', '', '2,4,6', '2,4,7', '1,3', '4,6', 2, 1, 5000, 'test', 'test', 'test', 'test', '1,as,1223', 1, 1, 0, 0, '2020-01-12 16:02:58', '2020-01-15 22:44:07'),
(13, 13, '0000-00-00', '0000-00-00', 'laravel developer', '', '1,4,6', '2,4,3', '1,3', '2,6', 2, 4, 1000, 'test', 'et', 'test', 'test', 'laravel', 1, 1, 0, 0, '2020-01-12 16:03:35', '2020-01-13 03:21:00'),
(14, 14, '0000-00-00', '0000-00-00', 'tata job', '', '1,4,6', '1,3', '1,4', '1,3', 2, 1, 10000, 'test', 'test', 'test', 'test', 't,as,df,sf', 1, 1, 0, 0, '2020-01-12 16:36:49', '2020-01-12 19:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_edu`
--

CREATE TABLE `jobseeker_edu` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `post_graduation` text NOT NULL,
  `graduation` text NOT NULL,
  `other` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker_edu`
--

INSERT INTO `jobseeker_edu` (`id`, `jobseeker_id`, `post_graduation`, `graduation`, `other`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 9, 'Post Graduation details', 'Graduation details', 'Other', 0, 0, '2019-12-24 22:00:16', '0000-00-00 00:00:00'),
(2, 15, 'PGDCA', 'MAC', 'TYBCOM', 0, 0, '2020-01-12 17:10:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_education`
--

CREATE TABLE `jobseeker_education` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker_education`
--

INSERT INTO `jobseeker_education` (`id`, `jobseeker_id`, `title`, `descr`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 15, 'Post Graducation344', 'dseasdf\r\nasdf\r\na\r\nsdf', '', 0, 1, '2020-01-30 00:12:41', '0000-00-00 00:00:00'),
(2, 15, 'Msc IT', 'asd2f1as23df13a2sdf132asdf\r\nasd\r\nf1as\r\n3df', '', 0, 0, '2020-01-30 00:13:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_history`
--

CREATE TABLE `jobseeker_history` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker_history`
--

INSERT INTO `jobseeker_history` (`id`, `jobseeker_id`, `title`, `descr`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(3, 15, '5555555', 'ddddddddd', '', 0, 0, '2020-01-12 16:58:52', '0000-00-00 00:00:00'),
(4, 15, '113333', '22', '', 0, 1, '2020-01-12 16:58:52', '0000-00-00 00:00:00'),
(5, 15, '113333', '22', '', 0, 0, '2020-01-29 23:35:53', '0000-00-00 00:00:00'),
(6, 15, '113333', '22', '', 0, 1, '2020-01-29 23:37:37', '0000-00-00 00:00:00'),
(7, 15, 'testasdfaas', 'asdfasdf', '', 0, 0, '2020-01-29 23:58:15', '0000-00-00 00:00:00'),
(8, 15, '3', 's', '', 0, 0, '2020-01-30 00:00:34', '0000-00-00 00:00:00'),
(9, 15, 'fff', 'd', '', 0, 0, '2020-01-30 00:01:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_other`
--

CREATE TABLE `jobseeker_other` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `specific_role` text NOT NULL,
  `project` text NOT NULL,
  `achivement` text NOT NULL,
  `awards` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker_other`
--

INSERT INTO `jobseeker_other` (`id`, `jobseeker_id`, `specific_role`, `project`, `achivement`, `awards`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,   \r\n\r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, 0, '2019-12-24 22:00:39', '0000-00-00 00:00:00'),
(2, 15, 'lore 1', 'lore 12', 'lore 13', 'lore 14', 0, 0, '2020-01-12 17:10:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_skill`
--

CREATE TABLE `jobseeker_skill` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `skill` text NOT NULL,
  `exp_year` int(11) NOT NULL,
  `exp_month` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `job_function` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `jobseeker_tags` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker_skill`
--

INSERT INTO `jobseeker_skill` (`id`, `jobseeker_id`, `title`, `skill`, `exp_year`, `exp_month`, `designation`, `job_type`, `salary`, `job_function`, `location`, `industry`, `category`, `jobseeker_tags`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(3, 15, 'Wordpress Developer', 'my skill', 1, 3, '1,2,3,4', '1,2,3,4', '1,2,3', '1', '1,3,5', '2,4,5,8', '2,3', 'php,laravel,asdf,asdfasd', 'resume_hitesh9.docx', 0, 0, '2020-01-12 16:58:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_function`
--

CREATE TABLE `job_function` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `seq` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `job_function`
--

INSERT INTO `job_function` (`id`, `title`, `slug`, `seq`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'Computer operator', 'computer-operator', 1, 1, 0, '2019-12-14 11:07:46', '2020-01-06 06:13:58'),
(2, 'Data Entry Operator', 'data-entry-operator', 1, 1, 0, '2019-12-14 11:07:52', '2020-01-06 06:14:18'),
(3, 'Content Writer', 'content-writer', 1, 1, 0, '2019-12-14 11:07:55', '2020-01-06 06:14:43'),
(4, 'Graphic Designer', 'graphic-designer', 1, 1, 0, '2019-12-14 11:07:59', '2020-01-06 06:15:01'),
(5, 'HTML Designer', 'html-designer', 1, 1, 0, '2019-12-14 11:08:02', '2020-01-06 06:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `seq` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`id`, `title`, `slug`, `seq`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'Agriculture', 'agriculture', 1, 1, 0, '2019-12-15 02:50:02', '0000-00-00 00:00:00'),
(2, 'Arts', 'arts', 1, 1, 0, '2019-12-15 02:50:13', '0000-00-00 00:00:00'),
(3, 'Education and Training', 'education-and-training', 1, 1, 0, '2019-12-15 02:50:21', '0000-00-00 00:00:00'),
(4, 'Government', 'government', 1, 1, 0, '2019-12-15 02:50:30', '0000-00-00 00:00:00'),
(5, 'Information Technology.', 'information-technology', 1, 1, 0, '2019-12-15 02:50:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `seq` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `title`, `slug`, `seq`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'Mumbai', 'mumbai', 1, 1, 0, '2019-12-14 11:15:49', '2020-01-06 06:15:39'),
(2, 'Thane', 'thane', 1, 1, 0, '2019-12-14 11:15:57', '2020-01-06 06:15:50'),
(3, 'Andheri West', 'andheri-west', 1, 1, 0, '2019-12-14 11:16:02', '2020-01-06 06:16:03'),
(4, 'Bandra', 'bandra', 1, 1, 0, '2019-12-14 11:16:07', '2020-01-06 06:16:52'),
(5, 'Worli', 'worli', 1, 1, 0, '2019-12-14 11:16:12', '2020-01-06 06:17:09'),
(6, 'Juhu', 'juhu', 1, 1, 0, '2020-01-06 06:17:22', '0000-00-00 00:00:00'),
(7, 'Lokhandwala', 'lokhandwala', 1, 1, 0, '2020-01-06 06:17:34', '0000-00-00 00:00:00'),
(8, 'Lower Parel', 'lower-parel', 1, 1, 0, '2020-01-06 06:17:46', '0000-00-00 00:00:00'),
(9, 'Konkan', 'konkan', 1, 1, 0, '2020-01-06 06:18:20', '0000-00-00 00:00:00'),
(10, 'Kurla', 'kurla', 1, 1, 0, '2020-01-06 06:18:34', '0000-00-00 00:00:00'),
(11, 'Borivali', 'borivali', 1, 1, 0, '2020-01-06 06:18:46', '0000-00-00 00:00:00'),
(12, 'Altamount Road', 'altamount-road', 1, 1, 0, '2020-01-06 06:19:34', '0000-00-00 00:00:00'),
(13, 'Hiranandani, Powai', 'hiranandani-powai', 1, 1, 0, '2020-01-06 06:19:46', '0000-00-00 00:00:00'),
(14, 'Seven Bungalows, Versova', 'seven-bungalows-versova', 1, 1, 0, '2020-01-06 06:20:05', '0000-00-00 00:00:00'),
(15, 'Breach Candy', 'breach-candy', 1, 1, 0, '2020-01-06 06:20:20', '0000-00-00 00:00:00'),
(16, 'Cuffe Parade', 'cuffe-parade', 1, 1, 0, '2020-01-06 06:20:33', '0000-00-00 00:00:00'),
(17, 'Byculla', 'byculla', 1, 1, 0, '2020-01-06 06:21:18', '0000-00-00 00:00:00'),
(18, 'Colaba', 'colaba', 1, 1, 0, '2020-01-06 06:21:32', '0000-00-00 00:00:00'),
(19, 'Chembur', 'chembur', 1, 1, 0, '2020-01-06 06:21:44', '0000-00-00 00:00:00'),
(20, 'Dadar', 'dadar', 1, 1, 0, '2020-01-06 06:21:55', '0000-00-00 00:00:00'),
(21, 'Dahisar', 'dahisar', 1, 1, 0, '2020-01-06 06:22:05', '0000-00-00 00:00:00'),
(22, 'Dongri', 'dongri', 1, 1, 0, '2020-01-06 06:22:16', '0000-00-00 00:00:00'),
(23, 'Elphinston Road', 'elphinston-road', 1, 1, 0, '2020-01-06 06:22:29', '0000-00-00 00:00:00'),
(24, 'Gamdevi', 'gamdevi', 1, 1, 0, '2020-01-06 06:22:44', '0000-00-00 00:00:00'),
(25, 'Goregaon', 'goregaon', 1, 1, 0, '2020-01-06 06:22:55', '0000-00-00 00:00:00'),
(26, 'Ghatkopar', 'ghatkopar', 1, 1, 0, '2020-01-06 06:23:03', '0000-00-00 00:00:00'),
(27, 'Jogeshwari', 'jogeshwari', 1, 1, 0, '2020-01-06 06:23:20', '0000-00-00 00:00:00'),
(28, 'Kalbadevi', 'kalbadevi', 1, 1, 0, '2020-01-06 06:23:31', '0000-00-00 00:00:00'),
(29, 'Kandivali', 'kandivali', 1, 1, 0, '2020-01-06 06:23:42', '0000-00-00 00:00:00'),
(30, 'Khar', 'khar', 1, 1, 0, '2020-01-06 06:23:52', '0000-00-00 00:00:00'),
(31, 'Kurla', 'kurla-1', 1, 1, 0, '2020-01-06 06:24:03', '0000-00-00 00:00:00'),
(32, 'Mandavi', 'mandavi', 1, 1, 0, '2020-01-06 06:24:22', '0000-00-00 00:00:00'),
(33, 'Mazgaon', 'mazgaon', 1, 1, 0, '2020-01-06 06:24:34', '0000-00-00 00:00:00'),
(34, 'Matunga', 'matunga', 1, 1, 0, '2020-01-06 06:24:45', '0000-00-00 00:00:00'),
(35, 'Marine Lines', 'marine-lines', 1, 1, 0, '2020-01-06 06:24:54', '0000-00-00 00:00:00'),
(36, 'Malad', 'malad', 1, 1, 0, '2020-01-06 06:25:04', '0000-00-00 00:00:00'),
(37, 'Mulund', 'mulund', 1, 1, 0, '2020-01-06 06:25:13', '0000-00-00 00:00:00'),
(38, 'Mahalakshmi', 'mahalakshmi', 1, 1, 0, '2020-01-06 06:25:29', '0000-00-00 00:00:00'),
(39, 'Nariman Point', 'nariman-point', 1, 1, 0, '2020-01-06 06:25:40', '0000-00-00 00:00:00'),
(40, 'Prabhadevi', 'prabhadevi', 1, 1, 0, '2020-01-06 06:25:56', '0000-00-00 00:00:00'),
(41, 'Saki Naka', 'saki-naka', 1, 1, 0, '2020-01-06 06:26:05', '0000-00-00 00:00:00'),
(42, 'Sahar', 'sahar', 1, 1, 0, '2020-01-06 06:26:15', '0000-00-00 00:00:00'),
(43, 'Trombay', 'trombay', 1, 1, 0, '2020-01-06 06:26:26', '0000-00-00 00:00:00'),
(44, 'Turbhe', 'turbhe', 1, 1, 0, '2020-01-06 06:26:36', '0000-00-00 00:00:00'),
(45, 'Vashi', 'vashi', 1, 1, 0, '2020-01-06 06:26:47', '0000-00-00 00:00:00'),
(46, 'Vile Parle', 'vile-parle', 1, 1, 0, '2020-01-06 06:26:55', '0000-00-00 00:00:00'),
(47, 'Vikhroli', 'vikhroli', 1, 1, 0, '2020-01-06 06:27:05', '0000-00-00 00:00:00'),
(48, 'Wadala', 'wadala', 1, 1, 0, '2020-01-06 06:27:14', '0000-00-00 00:00:00'),
(49, 'Yogakshema', 'yogakshema', 1, 1, 0, '2020-01-06 06:27:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `title`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'a@gmail.com', 1, 0, '2020-01-07 22:32:27', '2020-01-07 22:45:39'),
(2, 'sa@gmail.com', 1, 0, '2020-01-07 22:40:37', '2020-01-07 22:45:40'),
(3, 'asdfas@gmail.com', 1, 0, '2020-01-07 22:40:57', '2020-01-07 22:45:41'),
(4, 'xxx@gmail.com', 1, 0, '2020-01-07 22:46:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `opportunity`
--

CREATE TABLE `opportunity` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opportunity`
--

INSERT INTO `opportunity` (`id`, `cat_id`, `title`, `post`, `descr`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(6, 1, 'Hiring  PHP Developer With 2 Year Experience', 'PHP', '<p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">We are Hiring for PHP Developer Having 2+ Year of experience.&nbsp;<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Interview Details :&nbsp;<br style=\"margin: 0px; padding: 0px;\">31/08/2019 (Sunday)</p><p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">Morning 10:00 AM to 5:00 PM<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Required Document :&nbsp;</p><p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">CV &amp; Passport size Photo</p>', 'joomla-php-requirements1.jpg', 1, 0, '2019-08-04 07:38:57', '2019-08-05 21:20:10'),
(7, 1, 'Hiring  PHP Developer With 2 Year Experience', 'PHP', '<p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">We are Hiring for PHP Developer Having 2+ Year of experience.&nbsp;<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Interview Details :&nbsp;<br style=\"margin: 0px; padding: 0px;\">31/08/2019 (Sunday)</p><p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">Morning 10:00 AM to 5:00 PM<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Required Document :&nbsp;</p><p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">CV &amp; Passport size Photo</p>', 'joomla-php-requirements1.jpg', 1, 0, '2019-08-04 07:38:57', '2019-08-05 21:20:10'),
(8, 1, 'Hiring  PHP Developer With 2 Year Experience', 'PHP', '<p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">We are Hiring for PHP Developer Having 2+ Year of experience.&nbsp;<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Interview Details :&nbsp;<br style=\"margin: 0px; padding: 0px;\">31/08/2019 (Sunday)</p><p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">Morning 10:00 AM to 5:00 PM<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Required Document :&nbsp;</p><p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">CV &amp; Passport size Photo</p>', 'joomla-php-requirements1.jpg', 1, 0, '2019-08-04 07:38:57', '2019-08-05 21:20:10'),
(9, 1, 'Hiring  PHP Developer With 2 Year Experience', 'PHP', '<p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">We are Hiring for PHP Developer Having 2+ Year of experience.&nbsp;<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Interview Details :&nbsp;<br style=\"margin: 0px; padding: 0px;\">31/08/2019 (Sunday)</p><p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">Morning 10:00 AM to 5:00 PM<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Required Document :&nbsp;</p><p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">CV &amp; Passport size Photo</p>', 'joomla-php-requirements1.jpg', 1, 0, '2019-08-04 07:38:57', '2019-08-05 21:20:10'),
(10, 1, 'Hiring  PHP Developer With 2 Year Experience', 'PHP', '<p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">We are Hiring for PHP Developer Having 2+ Year of experience.&nbsp;<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Interview Details :&nbsp;<br style=\"margin: 0px; padding: 0px;\">31/08/2019 (Sunday)</p><p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">Morning 10:00 AM to 5:00 PM<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\">Required Document :&nbsp;</p><p style=\"padding: 0px; color: rgb(111, 111, 111); line-height: 24px; text-rendering: optimizelegibility; font-family: &quot;Open Sans&quot;, sans-serif;\">CV &amp; Passport size Photo</p>', 'joomla-php-requirements1.jpg', 1, 0, '2019-08-04 07:38:57', '2019-08-05 21:20:10');

-- --------------------------------------------------------

--
-- Table structure for table `ourteam`
--

CREATE TABLE `ourteam` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourteam`
--

INSERT INTO `ourteam` (`id`, `title`, `post`, `descr`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(3, 'Micle Richard', 'PHP Developer', '<p>There are many variations of passages of Lorem Ipsum available</p>\r\n', '5d56dfc63740d_book.jpg', 1, 1, '2019-05-18 06:37:01', '2019-08-17 21:48:12'),
(5, 'John Mcline', 'Laravel Developer', '<p>There are many variations of passages of Lorem Ipsum available</p>\r\n', '5d58d96e4d056_6.jpeg', 1, 0, '2019-08-01 19:10:27', '2019-08-18 06:51:59'),
(6, 'Richard Smith', 'IOS Developer', '<p>There are many variations of passages of Lorem Ipsum available</p>\r\n', '5d56dfdad4ca8_512x512bb.jpg', 1, 0, '2019-05-18 06:37:01', '2019-08-16 18:54:52'),
(7, 'Andriyu Care', 'SEO Expert', '<p>There are many variations of passages of Lorem Ipsum available</p>\r\n', '5d56dffeed0ee_anonymous_897439873434.jpg', 1, 0, '2019-08-01 19:10:27', '2019-08-16 18:55:28'),
(11, 'test', '', '<p>sfasdf</p>', '5d537664351ac_book1.png', 0, 0, '2019-08-14 04:48:05', '2019-08-18 10:23:09'),
(12, 'John Mcline 1', 'Laravel Developer', '<p>There are many variations of passages of Lorem Ipsum available</p>\r\n', '5d56dfd0a6075_3-8-cm.jpg', 1, 0, '2019-08-01 19:10:27', '2019-08-17 22:02:55'),
(13, 'Richard Smith 2', 'IOS Developer', '<p>There are many variations of passages of Lorem Ipsum available</p>\r\n', '5d56dfdad4ca8_512x512bb.jpg', 1, 0, '2019-05-18 06:37:01', '2019-08-17 22:02:58'),
(14, 'Andriyu Care 3', 'SEO Expert', '<p>There are many variations of passages of Lorem Ipsum available</p>\r\n', '5d56dffeed0ee_anonymous_897439873434.jpg', 1, 0, '2019-08-01 19:10:27', '2019-08-17 22:03:02'),
(15, 'test', '', '<p>sfasdf</p>', '5d537664351ac_book1.png', 0, 0, '2019-08-14 04:48:05', '2019-08-18 10:23:11'),
(16, 'test', '', '<p>sfasdf</p>', '5d537664351ac_book1.png', 0, 0, '2019-08-14 04:48:05', '2019-08-18 10:23:20'),
(17, 'Mical Jackson', '', '<p>There are many variations of passages of Lorem Ipsum available</p>\r\n', '5d58d9a6151d8_6.jpeg', 1, 0, '2019-08-18 06:52:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `our_clients`
--

CREATE TABLE `our_clients` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `alt_tag` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_clients`
--

INSERT INTO `our_clients` (`id`, `title`, `url`, `img_src`, `alt_tag`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(2, '', '', '5df462ca5f4fd_b_logo.png', '', 1, 1, '2019-12-12 16:26:07', '2019-12-14 09:49:28'),
(3, '', '', '5df25c7271c9e_2.png', 'JobAapka', 1, 0, '2019-12-12 16:26:13', '2019-12-14 05:44:08'),
(4, '', '', '5df25c779b655_4.png', 'JobAapka', 1, 0, '2019-12-12 16:26:30', '2019-12-14 05:44:12'),
(5, '', '', '5df26e7ea40f3_1.png', 'JobAapka', 1, 0, '2019-12-12 17:44:47', '2019-12-14 05:44:20'),
(6, '', '', '5df463a55a3ad_b_logo_2.png', 'test', 1, 1, '2019-12-14 05:23:02', '2019-12-14 10:13:20'),
(7, '', '', '5df46476437fe_blog-1.jpg', 'tesasddddsss', 1, 1, '2019-12-14 05:26:31', '2019-12-14 10:13:22'),
(8, '', '', '5df468323d123_blog-2.jpg', 'sdfasdf', 1, 1, '2019-12-14 05:42:27', '2019-12-14 10:13:24');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(150) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `product_id` varchar(150) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `payment_id` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `amount` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `plan_purchase_date` date NOT NULL,
  `plan_expiry_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `isDelete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `product_id`, `payment_id`, `amount`, `plan_purchase_date`, `plan_expiry_date`, `created_at`, `status`, `isDelete`) VALUES
(1, '13', '3', 'pay_EAOdlekaf2i9NP', '100000', '2020-01-29', '2020-07-29', '2020-01-30 00:19:56', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` longtext NOT NULL,
  `period` varchar(255) NOT NULL,
  `meta_descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `title`, `descr`, `period`, `meta_descr`) VALUES
(1, '5000', '', '6', '');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `cat_id`, `title`, `url`, `descr`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 1, 'DTech Technologies', 'http://www.google.com', '<h3>Where can I get some?</h3>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<h3>Where can I get some?</h3>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '2.jpg', 1, 0, '2019-08-05 19:11:40', '2019-08-05 19:13:59'),
(2, 1, 'DTech Technologies', 'http://www.google.com', '<h3>Where can I get some?</h3>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<h3>Where can I get some?</h3>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '3.jpg', 1, 0, '2019-08-05 19:11:40', '2019-08-05 19:14:34'),
(3, 2, 'DTech Technologies', 'http://www.google.com', '<h3>Where can I get some?</h3>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<h3>Where can I get some?</h3>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '3.png', 1, 0, '2019-08-05 19:11:40', '2019-08-05 19:14:48'),
(4, 3, 'DTech Technologies', 'http://www.google.com', '<h3>Where can I get some?</h3>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<h3>Where can I get some?</h3>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '4.jpg', 1, 0, '2019-08-05 19:11:40', '2019-08-05 19:15:01'),
(5, 4, 'DTech Technologies', 'http://www.google.com', '<h3>Where can I get some?</h3>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<h3>Where can I get some?</h3>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '4.png', 1, 0, '2019-08-05 19:11:40', '2019-08-05 19:15:43'),
(6, 1, 'DTech Technologies', 'http://www.google.com', '<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '5.png', 1, 0, '2019-08-05 19:11:40', '2019-08-05 19:20:51'),
(7, 6, 'DTech Technologies', 'http://www.google.com', '<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '456.png', 1, 0, '2019-08-05 19:11:40', '2019-08-05 19:16:40'),
(8, 7, 'DTech Technologies', 'http://www.google.com', '<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'header-portfolio.png', 1, 0, '2019-08-05 19:11:40', '2019-08-05 19:16:55'),
(9, 9, 'DTech Technologies', 'http://www.google.com', '<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', 'never-do-this.png', 1, 0, '2019-08-05 19:11:40', '2019-08-05 19:17:06'),
(10, 10, 'DTech Technologies', 'http://www.google.com', '<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '41.jpg', 1, 0, '2019-08-05 19:11:40', '2019-08-05 19:18:01'),
(11, 1, 'DTech Technologies', 'http://www.google.com', '<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '', 0, 0, '2019-08-05 19:11:40', '2019-08-05 22:48:34'),
(12, 1, 'DTech Technologies', 'http://www.google.com', '<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n\r\n<h2>Where can I get some?</h2>\r\n\r\n<p style=\"text-align:justify\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '', 0, 0, '2019-08-05 19:11:40', '2019-08-05 22:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `img_src_multi` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `title`, `size`, `code`, `is_featured`, `descr`, `img_src`, `img_src_multi`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(2, 0, '1', '335 X 420 X 45 MM', '', 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '5d9815858c02b_anonymous_897439873434.jpg', '', 1, 1, '2019-10-05 06:00:04', '2019-10-05 11:39:32'),
(3, 3, 'Ganesha Clock', '335 X 420 X 45 MM', '78DAE5', 0, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '5d982809927cf_1537369024-7526.jpg', '', 1, 0, '2019-10-05 07:20:11', '2019-10-09 19:29:10'),
(4, 2, 'R - 137 Wood Finish Clock', '335 X 420 X 45 MM', 'REASRE', 0, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '5d98286d603b0_1537422362-4682.jpg', '', 1, 0, '2019-10-05 07:21:50', '2019-10-09 19:29:15'),
(5, 1, 'R - 297 Islamic Clock', '335 X 420 X 45 MM', 'AWASDF', 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '5d98287b89f9a_1537369312-8249.jpg', '', 1, 0, '2019-10-05 07:22:06', '2019-10-09 19:29:31'),
(6, 4, 'R - 257 Antique Clock', '335 X 420 X 45 MM', 'ADE234', 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '5d9828871a66d_1537369497-2980.jpg', '', 1, 0, '2019-10-05 07:22:19', '2019-10-09 19:29:40'),
(7, 4, 'R - 267 Antique Clock', '335 X 420 X 45 MM', 'ADE56W', 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '5d9828946f805_1537369880-8775.jpg', '', 1, 0, '2019-10-05 07:22:30', '2019-10-09 19:29:46'),
(8, 5, 'Hut Clock', '335 X 420 X 45 MM', 'ADEGRS', 1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '5d9828a1905fe_1537370036-1608.jpg', '', 1, 0, '2019-10-05 07:22:42', '2019-10-09 19:29:53'),
(9, 6, 'R - 237 Picture Clock', '335 X 420 X 45 MM', 'ASDFE3', 1, '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '5d9834a4571c9_1537422667-8712.jpg', '', 1, 0, '2019-10-05 08:13:58', '2019-10-09 19:30:02'),
(10, 1, 'R - 167 Bamboo Picture & Clock', '280 X 335 X 65 MM', '242DAD', 1, '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '5d9834cb1afef_1537422925-3572.jpg', '', 1, 0, '2019-10-05 08:14:37', '2019-10-09 19:30:09'),
(11, 2, 'R - 227 Ganesha Clock', '560 X 320 X 70 MM', 'SDF456', 1, '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '5d9834f9c6ca1_1537423055-7799.jpg', '', 1, 0, '2019-10-05 08:15:23', '2019-10-09 19:30:15'),
(12, 1, 'R - 227 Scenery Clock', '305 X 485 X 65 MM', 'SDEEF5', 1, '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '5d98352e6ca64_1537423577-7616.jpg', '', 1, 0, '2019-10-05 08:16:15', '2019-10-09 19:30:24'),
(13, 1, 'tes', 'tes', '', 0, '<p>te</p>\r\n', '5dc38859a8b8a_1_test.jpg', '', 1, 0, '2019-11-07 03:58:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `request_demo`
--

CREATE TABLE `request_demo` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `demo_email` varchar(255) NOT NULL,
  `demo_contact` varchar(255) NOT NULL,
  `demo_date` date NOT NULL,
  `demo_time` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_demo`
--

INSERT INTO `request_demo` (`id`, `fname`, `organization_name`, `demo_email`, `demo_contact`, `demo_date`, `demo_time`, `type`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'person', 'org name', 'test@gmail.com', '12345678', '0000-00-00', '4', 'employer', 1, 0, '2020-01-23 21:44:54', '0000-00-00 00:00:00'),
(2, 'person', 'org name', 'test@gmail.com', '12345678', '2020-01-08', '4', 'employer', 1, 0, '2020-01-23 21:45:42', '0000-00-00 00:00:00'),
(3, 'asdf', 'asdf', 'hmvadoliya.iipl2013@gmail.com', '121', '2020-01-28', '2', 'employer', 1, 0, '2020-01-23 21:48:42', '0000-00-00 00:00:00'),
(4, 'Hitesh', 'asdf', 'hmvadoliya.iipl2013@gmail.com', '12221', '2020-01-28', '3', 'employer', 1, 0, '2020-01-23 21:50:22', '0000-00-00 00:00:00'),
(5, 'Hitesh', 'asdf', 'hmvadoliya.iipl2013@gmail.com', '123456', '2020-01-29', '3', 'employer', 1, 0, '2020-01-23 21:52:27', '0000-00-00 00:00:00'),
(6, 'Hitesh', 'asf', 'hmvadoliya.iipl2013@gmail.com', '12345678', '2020-01-20', '3', 'employer', 1, 0, '2020-01-23 22:01:13', '0000-00-00 00:00:00'),
(7, 'Hitesh', 'asdf', 'hmvadoliya.iipl2013@gmail.com', '23', '2020-01-22', '3', 'employer', 1, 0, '2020-01-23 22:38:53', '0000-00-00 00:00:00'),
(8, 'Hitesh', 'asdf', 'hmvadoliya.iipl2013@gmail.com', '23', '2020-01-22', '3', 'employer', 1, 0, '2020-01-23 22:39:29', '0000-00-00 00:00:00'),
(9, 'Hitesh', 'asdf', 'hmvadoliya.iipl2013@gmail.com', '23', '2020-01-22', '3', 'employer', 1, 0, '2020-01-23 22:39:59', '0000-00-00 00:00:00'),
(10, 'Hitesh', 'asdf', 'hmvadoliya.iipl2013@gmail.com', '23', '2020-01-22', '3', 'employer', 1, 0, '2020-01-23 22:42:40', '0000-00-00 00:00:00'),
(11, 'Hitesh', 'tet', 'hmvadoliya.iipl2013@gmail.com', '12312', '2020-01-29', '18', 'employer', 1, 0, '2020-01-25 11:37:14', '0000-00-00 00:00:00'),
(12, 'Hitesh', 'asdf', 'hmvadoliya.iipl2013@gmail.com', '12312', '2020-01-28', '17', 'employer', 1, 0, '2020-01-25 14:37:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `seq` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `title`, `slug`, `seq`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, '5000', '5000', 1, 1, 0, '2019-12-15 02:54:17', '2019-12-15 07:32:31'),
(2, '10000', '10000', 1, 1, 0, '2019-12-15 02:54:22', '0000-00-00 00:00:00'),
(3, '15000', '15000', 1, 1, 0, '2019-12-15 02:54:28', '0000-00-00 00:00:00'),
(4, '20000', '20000', 1, 1, 0, '2019-12-15 02:54:33', '0000-00-00 00:00:00'),
(5, '30000', '30000', 1, 1, 0, '2019-12-15 02:54:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_descr` text NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `sub_descr`, `descr`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(5, '<i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>', 'Website Maintenance', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</p>\r\n', 'ipad3.png', 1, 0, '2019-08-01 19:10:27', '2019-08-08 05:06:37'),
(6, '<i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>', 'Website Development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</p>\r\n', 'ipad2.png', 1, 0, '2019-08-01 19:10:27', '2019-08-08 05:05:53'),
(7, '<i class=\"fa fa-mobile\" aria-hidden=\"true\"></i>', 'Mobile App Development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</p>\r\n', 'ipad1.png', 1, 0, '2019-08-01 19:10:27', '2019-08-08 05:05:24'),
(8, '<i class=\"fa fa-keyboard-o\" aria-hidden=\"true\"></i>', 'Web/Graphics Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</p>\r\n', 'img-responsive.png', 1, 0, '2019-08-01 19:10:27', '2019-08-08 05:04:54'),
(9, '<i class=\"fa fa-diamond\" aria-hidden=\"true\"></i>', 'UI/UX Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text.</p>\r\n', 'ipad.png', 1, 0, '2019-08-08 05:02:57', '0000-00-00 00:00:00'),
(10, '<i class=\"fa fa-bullhorn\"></i>', 'Digital Marketing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue.</p>\r\n', 'ipad4.png', 1, 0, '2019-08-08 05:07:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `language` varchar(10) NOT NULL,
  `notification` tinyint(1) NOT NULL,
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `uid`, `language`, `notification`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 7, '1', 1, 0, '2019-04-17 19:26:53', '2019-05-19 09:34:02'),
(2, 8, '', 1, 0, '2019-04-25 22:46:44', '2019-06-22 14:22:23'),
(3, 4, '', 0, 0, '2019-04-25 22:47:03', '2019-07-31 23:08:57'),
(4, 10, '', 1, 0, '2019-04-25 22:47:18', '2019-06-22 14:22:23'),
(5, 11, '', 1, 0, '2019-04-25 22:47:26', '2019-06-22 14:22:23'),
(6, 12, '', 1, 0, '2019-05-14 22:29:28', '2019-06-22 14:22:23'),
(7, 13, '', 1, 0, '2019-05-18 14:26:17', '2019-06-22 14:22:23'),
(8, 14, '', 1, 0, '2019-05-18 16:36:37', '2019-06-22 14:22:23'),
(9, 15, '', 1, 0, '2019-05-26 14:34:10', '2019-06-22 14:22:23'),
(10, 17, '', 1, 0, '2019-06-14 23:57:28', '2019-06-22 14:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL,
  `site_logo` varchar(255) NOT NULL,
  `site_favicon` varchar(255) NOT NULL,
  `meta_tag` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `fb_link` text NOT NULL,
  `instagram_link` text NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `map_embeded` text NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `paypal_username` varchar(255) NOT NULL,
  `paypal_password` varchar(255) NOT NULL,
  `paypal_sign` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_name`, `site_title`, `site_logo`, `site_favicon`, `meta_tag`, `meta_keyword`, `meta_description`, `fb_link`, `instagram_link`, `twitter_link`, `map_embeded`, `latitude`, `longitude`, `address`, `email`, `phone`, `paypal_username`, `paypal_password`, `paypal_sign`, `updated_at`) VALUES
(1, 'JobAapka', 'JobAapka', 'jobaapka.png', 'jobaapka1.png', 'JobAapka', 'JobAapka', 'JobAapka', 'https://www.facebook.com/JobAapka', 'https://www.linkedin.com/company/job-aapka/', 'https://twitter.com/jobaapka', '', '-33.8498426', '', 'A-403, 4th flr.,\r\nKrishna Plaza, \r\nOpp. CKP Bank,\r\nAbove Krishna Sweets, \r\nNear Thane Railway Station,\r\nThane (West),Maharashtra \r\nPin – 400601 ', 'info@jobaapka.com', 'Mo : +91 8657430699', '', '', '', '2020-01-21 21:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `alt_tag` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `url`, `img_src`, `alt_tag`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, '', '', '5df25ec05afb4_slider-1.jpg', 'JobAapka', 1, 0, '2019-12-12 16:37:38', '2019-12-14 05:43:53'),
(2, '', '', '5df25ee108fe9_slider-2.jpg', 'JobAapka', 1, 0, '2019-12-12 16:38:10', '2019-12-14 05:43:58'),
(3, '', '', '5df4624f0cc17_abt-1.jpg', 'teasd', 1, 1, '2019-12-14 05:17:20', '2019-12-14 09:51:08'),
(5, '', '', '5df46811db269_design_art.jpg', 'tasdfasdddddddddddddddddd', 1, 1, '2019-12-14 05:41:40', '2019-12-14 10:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 12:38:17'),
(2, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 13:05:34'),
(3, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 13:28:26'),
(4, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 14:38:33'),
(5, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 14:44:14'),
(6, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 14:47:46'),
(7, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 14:56:21'),
(8, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 14:57:04'),
(9, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 14:57:34'),
(10, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 15:00:24'),
(11, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 15:00:32'),
(12, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-06-01 10:10:34'),
(13, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-06-01 12:20:32'),
(14, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-06-02 09:04:20'),
(15, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-06-02 09:46:32'),
(16, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.86', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 'Windows 8.1', '2019-04-04 20:19:36'),
(17, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-12 21:53:15'),
(18, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-14 11:13:36'),
(19, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-14 11:28:35'),
(20, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-14 16:54:40'),
(21, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-14 16:58:07'),
(22, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-20 13:02:57'),
(23, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-20 20:23:19'),
(24, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-21 09:33:50'),
(25, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-21 14:31:06'),
(26, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-21 14:40:47'),
(27, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-23 22:57:30'),
(28, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-24 07:38:30'),
(29, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-24 21:33:57'),
(30, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-25 22:29:26'),
(31, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-28 10:46:02'),
(32, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 73.0.3683.103', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 'Windows 8.1', '2019-04-28 13:40:39'),
(33, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.131', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'Windows 8.1', '2019-05-13 22:15:31'),
(34, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.131', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 'Windows 8.1', '2019-05-14 22:33:27'),
(35, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.157', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'Windows 8.1', '2019-05-18 08:59:32'),
(36, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.157', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'Windows 8.1', '2019-05-18 14:27:12'),
(37, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.157', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'Windows 8.1', '2019-05-19 09:46:23'),
(38, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.157', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'Windows 8.1', '2019-05-19 12:43:18'),
(39, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.157', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'Windows 8.1', '2019-05-19 19:14:21'),
(40, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.157', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'Windows 8.1', '2019-05-20 23:25:19'),
(41, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.157', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'Windows 8.1', '2019-05-21 22:14:51'),
(42, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.157', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.157 Safari/537.36', 'Windows 8.1', '2019-05-23 22:05:33'),
(43, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.169', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 'Windows 8.1', '2019-05-25 22:12:00'),
(44, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.169', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 'Windows 8.1', '2019-05-26 12:58:16'),
(45, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.169', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 'Windows 8.1', '2019-05-26 22:16:16'),
(46, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.169', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 'Windows 8.1', '2019-06-02 18:03:23'),
(47, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.169', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 'Windows 8.1', '2019-06-04 21:47:06'),
(48, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.169', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 'Windows 8.1', '2019-06-09 09:04:22'),
(49, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.169', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 'Windows 8.1', '2019-06-09 12:26:56'),
(50, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 74.0.3729.169', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36', 'Windows 8.1', '2019-06-14 22:09:19'),
(51, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 'Windows 8.1', '2019-06-25 01:14:08'),
(52, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 'Windows 8.1', '2019-06-27 22:16:00'),
(53, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 'Windows 8.1', '2019-06-28 22:46:15'),
(54, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 'Windows 8.1', '2019-07-04 22:42:21'),
(55, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 'Windows 8.1', '2019-07-05 21:38:14'),
(56, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 'Windows 8.1', '2019-07-06 21:14:49'),
(57, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 'Windows 8.1', '2019-07-10 21:55:37'),
(58, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 'Windows 8.1', '2019-07-15 21:37:19'),
(59, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Windows 8.1', '2019-07-16 21:49:09'),
(60, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Windows 8.1', '2019-08-01 21:22:00'),
(61, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Windows 8.1', '2019-08-02 22:06:55'),
(62, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Windows 8.1', '2019-08-03 09:47:40'),
(63, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Windows 8.1', '2019-08-03 20:35:30'),
(64, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Windows 8.1', '2019-08-04 08:51:44'),
(65, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Windows 8.1', '2019-08-05 22:04:11'),
(66, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Windows 8.1', '2019-08-06 22:45:29'),
(67, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Windows 8.1', '2019-08-07 22:58:42'),
(68, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Windows 8.1', '2019-08-08 07:06:47'),
(69, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Windows 8.1', '2019-08-09 00:02:56'),
(70, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 76.0.3809.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'Windows 8.1', '2019-08-10 17:24:11'),
(71, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 76.0.3809.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'Windows 8.1', '2019-08-13 22:08:25'),
(72, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 76.0.3809.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'Windows 8.1', '2019-08-14 07:26:42'),
(73, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 76.0.3809.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'Windows 8.1', '2019-08-15 00:19:43'),
(74, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 76.0.3809.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'Windows 8.1', '2019-08-16 22:24:07'),
(75, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 76.0.3809.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'Windows 8.1', '2019-08-17 21:54:24'),
(76, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 76.0.3809.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'Windows 8.1', '2019-08-18 09:18:07'),
(77, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 76.0.3809.100', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36', 'Windows 8.1', '2019-08-19 22:05:38'),
(78, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Windows 8.1', '2019-10-05 08:35:54'),
(79, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Windows 8.1', '2019-10-05 08:53:34'),
(80, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Windows 8.1', '2019-10-09 21:04:08'),
(81, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Windows 8.1', '2019-10-10 21:29:20'),
(82, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 78.0.3904.87', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.87 Safari/537.36', 'Windows 8.1', '2019-11-07 08:26:03'),
(83, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 8.1', '2019-11-30 08:07:07'),
(84, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 8.1', '2019-11-30 08:20:54'),
(85, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 8.1', '2019-11-30 14:28:47'),
(86, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 8.1', '2019-12-06 23:30:24'),
(87, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 8.1', '2019-12-12 20:19:45'),
(88, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 8.1', '2019-12-13 08:06:17'),
(89, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 8.1', '2019-12-14 09:35:53'),
(90, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 8.1', '2019-12-14 15:14:19'),
(91, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 78.0.3904.108', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36', 'Windows 8.1', '2019-12-15 07:08:09'),
(92, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '43.241.146.130', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-06 11:12:28'),
(93, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '43.241.146.130', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 10', '2020-01-06 13:26:59'),
(94, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.88', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.88 Safari/537.36', 'Windows 8.1', '2020-01-07 21:02:36'),
(95, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 8.1', '2020-01-09 21:29:23'),
(96, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 8.1', '2020-01-09 22:21:51'),
(97, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 8.1', '2020-01-10 06:28:46'),
(98, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 8.1', '2020-01-10 06:38:00'),
(99, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 8.1', '2020-01-10 22:48:51'),
(100, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 8.1', '2020-01-12 23:01:51'),
(101, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.117', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.117 Safari/537.36', 'Windows 8.1', '2020-01-15 23:32:59'),
(102, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 8.1', '2020-01-21 19:52:58'),
(103, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 8.1', '2020-01-22 01:37:29'),
(104, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 8.1', '2020-01-24 21:22:27'),
(105, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 8.1', '2020-01-28 21:53:43'),
(106, 11, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Admin\"}', '::1', 'Chrome 79.0.3945.130', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36', 'Windows 8.1', '2020-01-29 21:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(11, 'admin@gmail.com', '$2y$10$4kxpQVMfT432IeKHLZ3PhuKs2GVzO1IcoOMqasQbv7Z/kRUlwn4u6', 'Admin', '', 1, 0, 1, '2018-05-31 23:37:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `title`, `post`, `company_name`, `descr`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, '', 'Director - Dieu Consultancy Pvt.Ltd.', 'DIVYESH JAIN', '<p>&quot;AN INNOVATIVE CONCEPT THAT PREPARES CANDIDATES FOR THE INTERVIEW AND ASSISTS THEM WITH A NEW JOB AS WELL&quot;</p>\r\n', '5e2756aaa13ff_image18.png', 1, 0, '2019-12-12 18:12:50', '2020-01-21 20:55:36'),
(2, '', 'Co Founder, Shop-a-Joy', 'AMARJEET DHANJAL', '<p>&quot;A PROMISING VENTURE THAT HAS CREDENTIALS TO ADDRESS ALL THA EMPLOYMENT AND GROWTH ISSUES FACED BY SMALL AND MEDIUM SCALE COMPANIES&quot;</p>\r\n', '5e2756b31df9f_image16.png', 1, 0, '2019-12-12 18:14:51', '2020-01-21 20:57:30'),
(3, '', 'Marketer', 'TATA', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est.</p>\r\n', '5df275a05a5fa_testimonial-3.jpg', 0, 0, '2019-12-12 18:15:13', '2020-01-22 01:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `title`, `descr`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, 'test', '<p>asdf</p>\r\n\r\n<p>asd</p>\r\n\r\n<p>f</p>\r\n\r\n<p>asd</p>\r\n', '', 1, 1, '2019-08-19 18:43:37', '2019-08-19 22:49:24'),
(2, 'PRIVATE CLASS', '<p>COURSE INFO:<br />\r\nWHAT YOU LEARN.</p>\r\n\r\n<ul>\r\n	<li>General knowledge about resin and its processing</li>\r\n	<li>proper use of Resin during the painting process</li>\r\n	<li>Information about preparation and follow-up</li>\r\n	<li>Information on the basic equipment of a Resin artist</li>\r\n	<li>Basic techniques about painting with resin</li>\r\n</ul>\r\n\r\n<p>WHAT YOU GET.</p>\r\n\r\n<ul>\r\n	<li>Create your first resin artwork under instruction (50x50cm)</li>\r\n	<li>Wide range of additional color options during the course</li>\r\n	<li>Handout with all important information about &ldquo;Resin&quot;</li>\r\n	<li>U can bring of course your own colors and materials to the workshop</li>\r\n	<li>Resin has to be paid for this class seperately (30 Euro)</li>\r\n	<li>If necessary, the complete basic equipment for you worried (not included in the course price &ndash; is organized separately)</li>\r\n</ul>\r\n\r\n<p>DESCRIPTION.<br />\r\nMRS.COLORBERRY (Stephanie Walberer and her assistant) already have several years of experience working with Resin and they will help you make your first artwork with Resin. In addition, you will get properties and peculiarities of the resin taught, which are shown alternately with theory and practice:</p>\r\n\r\n<ul>\r\n	<li>What is Resin and what security measures must I follow?</li>\r\n	<li>Which substrates are suitable for working with Resin?</li>\r\n	<li>What colors / additives can I put in the resin? What special features are there?</li>\r\n	<li>Create your own artwork and use the colors of your choice</li>\r\n	<li>Learn the secrets of a super smooth resin coating</li>\r\n</ul>\r\n\r\n<p>The workshop is specially designed for all beginners, trendsetters and Resin artists who want to refresh their knowledge. Resin is a unique, sticky and not exactly easy medium, which you will love after a short time.</p>\r\n\r\n<p>The resin takes 24 hours to cure completely &ndash; so you can only pick up your picture with me the next day.</p>\r\n', '', 1, 0, '2019-08-19 18:43:46', '2019-08-19 19:19:21'),
(3, 'PRIVATE CLASS \"resin basics\"', '<p>COURSE INFO:<br />\r\nWHAT YOU LEARN.</p>\r\n\r\n<ul>\r\n	<li>General knowledge about resin and its processing</li>\r\n	<li>proper use of Resin during the painting process</li>\r\n	<li>Information about preparation and follow-up</li>\r\n	<li>Information on the basic equipment of a Resin artist</li>\r\n	<li>Basic techniques about painting with resin</li>\r\n</ul>\r\n\r\n<p>WHAT YOU GET.</p>\r\n\r\n<ul>\r\n	<li>Create your first resin artwork under instruction (50x50cm)</li>\r\n	<li>Wide range of additional color options during the course</li>\r\n	<li>Handout with all important information about &ldquo;Resin&quot;</li>\r\n	<li>U can bring of course your own colors and materials to the workshop</li>\r\n	<li>Resin has to be paid for this class seperately (30 Euro)</li>\r\n	<li>If necessary, the complete basic equipment for you worried (not included in the course price &ndash; is organized separately)</li>\r\n</ul>\r\n\r\n<p>DESCRIPTION.<br />\r\nMRS.COLORBERRY (Stephanie Walberer and her assistant) already have several years of experience working with Resin and they will help you make your first artwork with Resin. In addition, you will get properties and peculiarities of the resin taught, which are shown alternately with theory and practice:</p>\r\n\r\n<ul>\r\n	<li>What is Resin and what security measures must I follow?</li>\r\n	<li>Which substrates are suitable for working with Resin?</li>\r\n	<li>What colors / additives can I put in the resin? What special features are there?</li>\r\n	<li>Create your own artwork and use the colors of your choice</li>\r\n	<li>Learn the secrets of a super smooth resin coating</li>\r\n</ul>\r\n\r\n<p>The workshop is specially designed for all beginners, trendsetters and Resin artists who want to refresh their knowledge. Resin is a unique, sticky and not exactly easy medium, which you will love after a short time.</p>\r\n\r\n<p>The resin takes 24 hours to cure completely &ndash; so you can only pick up your picture with me the next day.</p>\r\n', '', 1, 0, '2019-08-19 18:43:59', '2019-08-19 19:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `workshop_slider`
--

CREATE TABLE `workshop_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-no 1-yes',
  `isDelete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop_slider`
--

INSERT INTO `workshop_slider` (`id`, `title`, `descr`, `img_src`, `status`, `isDelete`, `created_at`, `updated_at`) VALUES
(1, '', '', '5d98248aaab11_1.jpg', 1, 0, '2019-10-05 07:03:54', '2019-10-05 07:05:15'),
(2, '', '', '5d982501ef42d_banner-clock.jpg', 0, 0, '2019-10-05 07:07:15', '2019-10-05 10:40:44'),
(3, '', '', '5d98259083fe5_1800-x-600-banner-vejrhoj.jpg', 1, 0, '2019-10-05 07:09:38', '0000-00-00 00:00:00'),
(4, '', '', '5d982597ef676_banner1.jpg', 1, 0, '2019-10-05 07:09:45', '0000-00-00 00:00:00'),
(5, '', '', '5d98259f0d39f_clocks-banner-2.jpg', 1, 0, '2019-10-05 07:09:52', '0000-00-00 00:00:00'),
(6, '', '', '5d9825a53c6ac_Fall12_Banner.jpg', 1, 0, '2019-10-05 07:09:59', '0000-00-00 00:00:00'),
(7, '', '', '5d9825acefd22_managed_slide1.jpg', 1, 0, '2019-10-05 07:10:07', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_job_without_login`
--
ALTER TABLE `apply_job_without_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `consultin`
--
ALTER TABLE `consultin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_level`
--
ALTER TABLE `designation_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hwt_user`
--
ALTER TABLE `hwt_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `jobseeker_edu`
--
ALTER TABLE `jobseeker_edu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobseeker_history`
--
ALTER TABLE `jobseeker_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobseeker_other`
--
ALTER TABLE `jobseeker_other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobseeker_skill`
--
ALTER TABLE `jobseeker_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_function`
--
ALTER TABLE `job_function`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opportunity`
--
ALTER TABLE `opportunity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteam`
--
ALTER TABLE `ourteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_clients`
--
ALTER TABLE `our_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_demo`
--
ALTER TABLE `request_demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop_slider`
--
ALTER TABLE `workshop_slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `apply_job_without_login`
--
ALTER TABLE `apply_job_without_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `consultin`
--
ALTER TABLE `consultin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
--
-- AUTO_INCREMENT for table `designation_level`
--
ALTER TABLE `designation_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hwt_user`
--
ALTER TABLE `hwt_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `jobseeker_edu`
--
ALTER TABLE `jobseeker_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jobseeker_education`
--
ALTER TABLE `jobseeker_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jobseeker_history`
--
ALTER TABLE `jobseeker_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jobseeker_other`
--
ALTER TABLE `jobseeker_other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jobseeker_skill`
--
ALTER TABLE `jobseeker_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `job_function`
--
ALTER TABLE `job_function`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `opportunity`
--
ALTER TABLE `opportunity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `our_clients`
--
ALTER TABLE `our_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `request_demo`
--
ALTER TABLE `request_demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `workshop_slider`
--
ALTER TABLE `workshop_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
