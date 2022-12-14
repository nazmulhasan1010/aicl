-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 10:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ussdanir_atherton`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `total_vacancy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `description`, `deadline`, `total_vacancy`, `status`, `created_at`, `updated_at`) VALUES
(2, 'AREA SALES MANAGER', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\">Be sure to include both educational history and experience for the position. Write a detailed overview of your recent position and responsibilities, and how your role will contribute to the success of Atherton Group. Candidates with experience in supply chain management and relevant education are encouraged to apply. Must provide clearance from the previous company.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\">Job description included but not limited to following:</p><ul class=\"career_list\" style=\"margin-right: 0px; margin-left: 20px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Managing organizational sales by developing a business plan that covers sales, revenue and expense controls.</li><li style=\"margin: 0px; padding: 0px;\">Meeting planned sales goals.</li><li style=\"margin: 0px; padding: 0px;\">Setting individual sales targets with the sales team.</li><li style=\"margin: 0px; padding: 0px;\">Tracking sales goals and reporting results as necessary.</li><li style=\"margin: 0px; padding: 0px;\">Overseeing the activities and performance of the sales team.</li><li style=\"margin: 0px; padding: 0px;\">Coordinating with marketing on lead generation.</li><li style=\"margin: 0px; padding: 0px;\">The ongoing training of your salespeople.</li><li style=\"margin: 0px; padding: 0px;\">Promoting the organization and products.</li><li style=\"margin: 0px; padding: 0px;\">Understand our ideal customers and how they relate to our products.</li></ul><p style=\"margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\">Qualification:</p><ul class=\"career_list\" style=\"margin-right: 0px; margin-left: 20px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Bachelor???s degree in business or related field.</li><li style=\"margin: 0px; padding: 0px;\">Experience in planning and implementing sales strategies.</li><li style=\"margin: 0px; padding: 0px;\">Experience in customer relationship management.</li><li style=\"margin: 0px; padding: 0px;\">Experience managing and directing a sales team.</li><li style=\"margin: 0px; padding: 0px;\">Excellent written and verbal communication skills.</li><li style=\"margin: 0px; padding: 0px;\">Dedication to providing great customer service.</li><li style=\"margin: 0px; padding: 0px;\">Ability to lead a sale team.</li></ul>', '2021-04-21', '10', 1, '2021-04-16 00:20:47', '2021-04-16 00:20:47'),
(3, 'AREA SALES MANAGER', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\">Be sure to include both educational history and experience for the position. Write a detailed overview of your recent position and responsibilities, and how your role will contribute to the success of Atherton Group. Candidates with experience in supply chain management and relevant education are encouraged to apply. Must provide clearance from the previous company.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\">Job description included but not limited to following:</p><ul class=\"career_list\" style=\"margin-right: 0px; margin-left: 20px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Managing organizational sales by developing a business plan that covers sales, revenue and expense controls.</li><li style=\"margin: 0px; padding: 0px;\">Meeting planned sales goals.</li><li style=\"margin: 0px; padding: 0px;\">Setting individual sales targets with the sales team.</li><li style=\"margin: 0px; padding: 0px;\">Tracking sales goals and reporting results as necessary.</li><li style=\"margin: 0px; padding: 0px;\">Overseeing the activities and performance of the sales team.</li><li style=\"margin: 0px; padding: 0px;\">Coordinating with marketing on lead generation.</li><li style=\"margin: 0px; padding: 0px;\">The ongoing training of your salespeople.</li><li style=\"margin: 0px; padding: 0px;\">Promoting the organization and products.</li><li style=\"margin: 0px; padding: 0px;\">Understand our ideal customers and how they relate to our products.</li></ul><p style=\"margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\">Qualification:</p><ul class=\"career_list\" style=\"margin-right: 0px; margin-left: 20px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Bachelor???s degree in business or related field.</li><li style=\"margin: 0px; padding: 0px;\">Experience in planning and implementing sales strategies.</li><li style=\"margin: 0px; padding: 0px;\">Experience in customer relationship management.</li><li style=\"margin: 0px; padding: 0px;\">Experience managing and directing a sales team.</li><li style=\"margin: 0px; padding: 0px;\">Excellent written and verbal communication skills.</li><li style=\"margin: 0px; padding: 0px;\">Dedication to providing great customer service.</li><li style=\"margin: 0px; padding: 0px;\">Ability to lead a sale team.</li></ul>', '2022-11-25', '10', 1, '2022-11-06 23:16:14', '2022-11-06 23:16:14'),
(4, 'AREA SALES MANAGER', '<p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\">Be sure to include both educational history and experience for the position. Write a detailed overview of your recent position and responsibilities, and how your role will contribute to the success of Atherton Group. Candidates with experience in supply chain management and relevant education are encouraged to apply. Must provide clearance from the previous company.</p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\">Job description included but not limited to following:</p><ul class=\"career_list\" style=\"margin-right: 0px; margin-left: 20px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Managing organizational sales by developing a business plan that covers sales, revenue and expense controls.</li><li style=\"margin: 0px; padding: 0px;\">Meeting planned sales goals.</li><li style=\"margin: 0px; padding: 0px;\">Setting individual sales targets with the sales team.</li><li style=\"margin: 0px; padding: 0px;\">Tracking sales goals and reporting results as necessary.</li><li style=\"margin: 0px; padding: 0px;\">Overseeing the activities and performance of the sales team.</li><li style=\"margin: 0px; padding: 0px;\">Coordinating with marketing on lead generation.</li><li style=\"margin: 0px; padding: 0px;\">The ongoing training of your salespeople.</li><li style=\"margin: 0px; padding: 0px;\">Promoting the organization and products.</li><li style=\"margin: 0px; padding: 0px;\">Understand our ideal customers and how they relate to our products.</li></ul><p style=\"margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\">Qualification:</p><ul class=\"career_list\" style=\"margin-right: 0px; margin-left: 20px; padding: 0px; color: rgb(33, 37, 41); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\"><li style=\"margin: 0px; padding: 0px;\">Bachelor???s degree in business or related field.</li><li style=\"margin: 0px; padding: 0px;\">Experience in planning and implementing sales strategies.</li><li style=\"margin: 0px; padding: 0px;\">Experience in customer relationship management.</li><li style=\"margin: 0px; padding: 0px;\">Experience managing and directing a sales team.</li><li style=\"margin: 0px; padding: 0px;\">Excellent written and verbal communication skills.</li><li style=\"margin: 0px; padding: 0px;\">Dedication to providing great customer service.</li><li style=\"margin: 0px; padding: 0px;\">Ability to lead a sale team.</li></ul>', '2022-11-25', '20', 1, '2022-11-06 23:16:14', '2022-11-06 23:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auto_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `design` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editable` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `auto_code`, `parent_id`, `category_name`, `category_name_bn`, `slug`, `design`, `editable`, `status`, `created_at`, `updated_at`) VALUES
(7, '100', NULL, 'Pestiside', '?????????????????????', 'pestiside', '<div class=\"container\">\r\n        <div class=\"row\">\r\n          <div class=\"col-sm-12 col-md-12 col-lg-12\">\r\n            <h4>insecticide</h4>\r\n            \r\n          </div>\r\n        </div>\r\n        <div class=\"row\">\r\n          <div class=\"col-sm-12 col-md-3 col-lg-3\">\r\n            <div class=\"insect_icon_1\">\r\n              <div id=\"comp-jhhgzt6a\" class=\"animate__animated animate__fadeInLeft\" data-angle=\"27.723259909859337\" data-angle-style-location=\"style\" style=\"visibility: inherit;\"><div data-testid=\"svgRoot-comp-jhhgzt6a\" class=\"_36XXs _3Qjwl\"><svg preserveAspectRatio=\"xMidYMid meet\" data-bbox=\"20.501 10 158.998 179.997\" viewBox=\"20.501 10 158.998 179.997\" height=\"100%\" width=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" data-type=\"color\" role=\"img\">\r\n                <g>\r\n                    <path d=\"M176.889 184.874c-6.942-12.56-17.515-15.315-17.515-15.315 1.783-23.902-8.28-33.386-8.28-33.386 8.662-32.36-9.044-55.749-9.235-56.07.064.064.191.128.255.192 7.834 5.831 10.764 13.521 10.764 13.521l.255-2.307c6.942-2.051 16.177 6.857 16.177 6.857l.382-1.666c1.911 3.973 4.331 3.717 4.331 3.717 2.866-.705 2.038-3.268 2.038-3.268-3.694-7.497-18.216-9.42-18.216-9.42-12.356-16.404-22.992-17.75-22.992-17.75s-2.165-7.369.955-9.163c3.121-1.794 2.866-6.728 2.866-6.728l-.51-14.546c.127-6.536-2.42-7.369-2.42-7.369 8.025-6.408 6.369-12.431 6.369-13.969s-1.21-5.447 3.121-5.319c4.331.128 1.21-.833 1.21-.833-4.331.703-4.203-2.052-7.324-2.052h-.574l-.829 1.026c3.824-.257 3.123 1.796 3.123 1.796.956 3.014-1.785 5.066-1.785 5.066-3.952 2.18-5.991 13.146-5.991 13.146l-1.466.257c-.829 6.413 1.785 17.378 2.613 22.059.829 4.681-2.422 2.886-2.422 2.886l-8.859-11.607c-2.295-3.527-2.996-1.09-2.996-1.09s0 2.18-2.167 2.18 1.466-6.028 1.466-6.028c.829-3.014-1.912-1.796-1.912-1.796l-6.501 2.886c.064-.128 1.912-5.066 10.325-6.99 8.541-1.924 9.114-9.427 9.114-9.427 0-1.796.127-2.437-1.211-2.886-1.338-.449-1.466.834-1.466.834-.191 9.619-9.178 10.068-9.178 10.068-6.119.257-10.07 6.284-10.07 6.284-2.231-3.014-7.521-2.822-8.413-2.757-.892-.064-6.182-.257-8.413 2.757 0 0-3.952-6.028-10.07-6.284 0 0-8.987-.385-9.114-10.132 0 0-.127-1.218-1.466-.834-1.338.385-1.211 1.09-1.211 2.886 0 0 .574 7.503 9.114 9.427 8.413 1.86 10.262 6.797 10.325 6.99l-6.501-2.886s-2.741-1.218-1.912 1.796c0 0 3.697 6.028 1.466 6.028-2.167 0-2.167-2.18-2.167-2.18s-.701-2.437-2.996 1.09l-8.859 11.607s-3.251 1.796-2.422-2.886c.829-4.681 3.378-15.583 2.613-22.059l-1.466-.257s-2.04-10.966-5.991-13.146c0 0-2.741-2.052-1.785-5.066 0 0-.701-2.052 3.123-1.796l-.829-.321h-.577c-3.109 0-2.982 2.745-7.295 2.042 0 0-3.109.957 1.205.83 4.314-.128 3.109 3.83 3.109 5.298s-1.649 7.468 6.344 13.914c0 0-2.601.83-2.411 7.34l-.571 14.425s-.254 4.915 2.855 6.702.952 9.127.952 9.127-10.531 1.34-22.901 17.68c0 0-14.464 1.915-18.144 9.382 0 0-.825 2.617 2.03 3.255 0 0 2.411.255 4.314-3.702l.381 1.659s9.199-8.872 16.114-6.829l.254 2.298s2.982-7.787 10.975-13.595c-.254.319-17.826 23.616-9.199 55.848 0 0-10.023 9.382-8.247 33.253 0 0-10.531 2.745-17.446 15.254 0 0-1.459-.574-2.601 2.042.127-.064 5.139-2.489 5.963 3.127 0 0 .952-.83 1.078-4.085s2.157-5.553 4.314-6l.571 1.34s5.265-1.213 11.229-9.382c0 0 1.903-1.213 3.806.255 0 0-4.441-18.127 2.982-29.041 0 0 13.449 45.189 49.165 45.189h.469c35.794 0 49.36-45.368 49.36-45.368 7.452 10.958 2.993 29.22 2.993 29.22 1.911-1.474 3.821-.32 3.821-.32 5.987 8.202 11.273 9.42 11.273 9.42l.573-1.346c2.165.384 4.204 2.755 4.331 6.023.127 3.268 1.083 4.101 1.083 4.101.828-5.639 5.796-3.204 5.987-3.14-1.145-2.56-2.61-1.983-2.61-1.983zm-121.838-70.67c-6.246.257-3.251-11.607-3.251-11.607s3.251-12.376 6.82-11.543c0 0 6.374-.962 5.418 7.246 0 .001-2.741 15.584-8.987 15.904zm13.894 54.315c-13.321-5.579-10.325-17.955-10.325-17.955.191-1.475 1.657-2.309 1.657-2.309 11.855-2.437 14.405 14.108 14.405 14.108.764 8.978-5.737 6.156-5.737 6.156zm6.693-31.935c-6.437 0-11.6-5.707-11.6-12.761s5.226-12.761 11.6-12.761c6.437 0 11.6 5.707 11.6 12.761.064 7.054-5.163 12.761-11.6 12.761zm24.283-35.654c-12.939-.064-12.62-9.875-12.62-9.875-1.211-13.338 4.525-18.404 4.525-18.404 4.334 1.988 7.457 8.336 8.158 9.811.701-1.475 3.824-7.823 8.158-9.811 0 0 5.736 5.066 4.525 18.404-.062-.064.193 9.811-12.746 9.875zm12.684 22.893c0-7.054 5.226-12.761 11.6-12.761 6.437 0 11.6 5.707 11.6 12.761s-5.226 12.761-11.6 12.761-11.6-5.707-11.6-12.761zm18.356 44.696s-6.501 2.886-5.736-6.156c0 0 2.613-16.544 14.405-14.108 0 0 1.402.834 1.657 2.309 0 0 2.995 12.312-10.326 17.955zm13.831-54.315c-6.246-.257-8.987-15.903-8.987-15.903-.956-8.208 5.418-7.246 5.418-7.246 3.506-.834 6.82 11.543 6.82 11.543s2.995 11.863-3.251 11.606z\" fill=\"#C40E0E\" data-color=\"1\"></path>\r\n                </g>\r\n                </svg>\r\n                </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"insect_icon_2\">\r\n              <div id=\"comp-jhhh59di\" class=\"animate__animated animate__fadeInLeft\" data-angle=\"26.893398450072823\" data-angle-style-location=\"style\" style=\"visibility: inherit;\"><div data-testid=\"svgRoot-comp-jhhh59di\" class=\"_36XXs _3Qjwl\"><svg preserveAspectRatio=\"xMidYMid meet\" data-bbox=\"53.5 18.201 92.8 163.721\" viewBox=\"53.5 18.201 92.8 163.721\" height=\"100%\" width=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" data-type=\"color\" role=\"img\"><defs><style>#comp-jhhh59di svg [data-color=\"1\"] {fill: #67BD31;}</style></defs>\r\n                <g>\r\n                    <path d=\"M137.8 139.4l-12.9-8.8c-3.8-2.8-1-8.1-1-8.1 2.8-7 .3-6.8.3-6.8l-5.9-1.1c-1.2-.4-2.8-.7-2.4-2.5.3-1.8 5.9-.7 5.9-.7 4.5.7 3.4-2.5 3.4-2.5 2.2-1.7 1.9-4.1 1.9-4.1l.3-10.9c-.6-5.6 1.7-7.3 1.7-7.3-2.7-.7-1.7-2.5-1.7-2.5 2.8-5.6 9.6-8 9.6-8l9.3-5.1-.6-1.4-3.1 2.5L145 69l-.9-.7c-2.3 5.2-7.5 7-7.5 7-1 .5-1.3.2-1.2-.3.1-1.3 2.1-4.2 2.1-4.2 2.1-4.6-1.5-5.7-1.5-5.7.9 2.2-.9 2.4-.9 2.4 2.2.3 2.5 1.3.7 3.6-1.1 1.4-1.1 2.9-1.2 3.9 0 .7-.2 1.1-.6 1.2-1.2.3-1.9-.4-1.9-.4-2.8-4.2-13.7-4.1-13.7-4.1-4.4-.7 1.2-4.7 1.2-4.7 12.5-9.3 9.7-24.6 9.7-24.6-3.4-27.1-11.2-24.1-11.2-24.1 2.8.7 4.4 7 2.4 6.4s-2.8.6-2.8.6 6.1.4 6 19.3c-.1 18.9-7.1 13.1-7.1 13.1l-4.1-4.1c-1.7-1.8-1.1.7-1.1.7l1.3 4.1c1.7 8.1-7.5 10.2-7.5 10.2.3-1 0-2.5 0-2.5-.2-2.6-3.1-4.4-3.7-3.4-.6 1 .3 1 .3 1 3.3.4 2.4 4.3 2.4 4.3.4 5.5-4.4 5.6-4.4 5.6h.2s-4.9-.1-4.4-5.6c0 0-.9-3.4 2.4-3.9 0 0 .9-.2.3-1.2-.6-1-3.5.6-3.7 3.3 0 0-.3 1.5 0 2.5 0 0-9.2-2.1-7.5-10.2l1.3-4.1s.7-2.6-1.1-.7l-4.1 4.1s-7 5.7-7.1-13.1c-.1-18.9 6-19.3 6-19.3s-.8-1.2-2.8-.6c-1.9.7-.3-5.6 2.4-6.4 0 0-7.8-3-11.2 24.1 0 0-2.8 15.4 9.7 24.6 0 0 5.6 4 1.2 4.7 0 0-10.9-.1-13.7 4.1 0 0-.7.7-1.9.4-.5-.1-.6-.6-.6-1.2-.1-1-.1-2.5-1.2-3.9-1.8-2.4-1.4-3.4.7-3.6 0 0-1.8-.2-.9-2.4 0 0-3.6 1.2-1.5 5.7 0 0 2 3 2.1 4.2 0 .6-.3.8-1.2.3 0 0-5.2-1.8-7.5-7l-.9.6 2.4 3.1-3.1-2.5-.6 1.4 9.3 5.1s6.7 2.4 9.6 8c0 0 1 1.9-1.7 2.5 0 0 2.3 1.8 1.7 7.3l.3 10.9s-.3 2.5 1.9 4.1c0 0-1.2 3.2 3.4 2.5 0 0 5.6-1.2 5.9.7.3 1.8-1.2 2.2-2.4 2.5l-5.9 1.1s-2.4-.1.3 6.8c0 0 2.8 5.3-1 8.1L62 139.4s-6 .2-6 3.5c0 0 2.5-2.8 4.6-1.3l-1.5 2.4L78 129.7s1.8-1.4 2.1-3.7c.2-1.2 0-2.6-1-4.2 0 0-2.6-2.8.3-2.9 0 0 1.9-.8 1.5 4.6l-.3 2.5-.6 5.1s-8 .1-5.6 7.1l5.7 11.9s1.7 3.2 1.1 4.9H83s1.2.3-3.1 7.8l-8.7 13.5s-1.4 1.7-4.5 2.1c0 0-.9.1-.3.9.6.8 4.5-1.5 4.5-1.5l-1 4.1s.6.3 1.2-1.3c0 0 .7-3.2 3-6.2 2.4-3 10.3-14.1 10.6-21.4 0 0 3.3 10.9 15 11.9 11.7-.9 15-11.9 15-11.9.3 7.2 8.2 18.3 10.6 21.4 2.4 3 3 6.2 3 6.2.7 1.5 1.2 1.3 1.2 1.3l-1-4.1s4 2.3 4.5 1.4c.6-.8-.3-1-.3-1-3.1-.4-4.5-2.4-4.5-2.4l-8.7-13.1c-4.3-7.6-3.1-7.8-3.1-7.8h1.8c-.7-1.8 1.1-4.9 1.1-4.9l5.7-11.5c2.4-7-5.6-7.4-5.6-7.4l-.7-5.5-.3-2.4c-.3-5.4 1.5-4.6 1.5-4.6 2.9.2.3 2.9.3 2.9-1 1.4-1.2 2.8-1.1 3.9.3 2.5 2.2 3.9 2.2 3.9l18.8 14.4-1.5-2.4c2.1-1.5 4.6 1.3 4.6 1.3.7-3-5.4-3.2-5.4-3.2zm-19.7-47.3l1.4-3.3c1.5-2.7-1.6-3.5-1.6-3.5v-2.8c3.1-3.4 1.5-9.1 1.5-9.1 8.1-1.7 12 3.4 12 3.4-5.9 3.5-7.5 9.5-7.5 9.5l-1.5-1.8-1.6 4.1c2.4 1.8 1.5 8.9 1.5 8.9v9.6l-3.7-2.2c-4-1.4 1.4-8.1 1.4-8.1l-1.9-4.7zm-39 4.8s4.6 6.7.6 8.1l-5.6 2.2v-9.6s.8-7.2 3.2-8.9l-.3-4.1-1.4 1.8s-1.7-6-7.6-9.5c0 0 2.8-5 10.8-3.4 0 0-3.1 5.6 0 9.1v2.8s-1.4.8 0 3.5l2.6 3.3-2.3 4.7zM78 138.2s-1.3-1.8.7-1.8c0 0 2.3-.7 2.9 3.8l.7 5.6-4.3-7.6zm41.2 2c.7-4.5 2.9-3.8 2.9-3.8 1.9-.1.7 1.8.7 1.8l-4.2 7.7.6-5.7z\" fill=\"#443931\" data-color=\"1\"></path>\r\n                </g>\r\n                </svg>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <div class=\"col-sm-12 col-md-6 col-lg-6 product_head_text\">\r\n            <ul>\r\n              <li>??????????????????????????? ????????? ????????????????????????????????? ???.??? ??? ??????</li>\r\n              <li>??????????????????????????? ???.???% ??? ??????</li>\r\n              <li>??????????????????????????? ????????????????????? ???% ?????? ??????</li>\r\n              <li>?????????????????? ??????% + ???????????????????????????????????? ???% ?????? ??????</li>\r\n              <li>??????????????????????????? ????????????????????? ??????% + ??????????????????????????????????????? ??????%</li>\r\n              <li>??????????????????????????????????????? ???% + ???????????????????????????????????? ??????%</li>\r\n              <li>???????????????????????????????????? ??????% ??? ??????</li>\r\n              <li>??????????????????????????????????????? ??????% ????????????????????? ??????</li>\r\n              <li>?????????????????????????????????????????? ??????% ?????? ??????</li>\r\n              <li>??????????????????????????????????????? ??????% ??? ??????</li>\r\n              <li>???????????????????????????????????? ??????% ??? ??????</li>\r\n            </ul>\r\n          </div>\r\n          <div class=\"col-sm-12 col-md-3 col-lg-3\">\r\n            <div class=\"insect_icon_3\">\r\n              <div id=\"comp-jhfy5l75\" class=\"animate__animated animate__fadeInRight\" data-angle=\"305.68524374908384\" data-angle-style-location=\"style\" style=\"visibility: inherit;\"><div data-testid=\"svgRoot-comp-jhfy5l75\" class=\"_36XXs _3Qjwl\"><svg preserveAspectRatio=\"xMidYMid meet\" data-bbox=\"55.991 29 87.979 142\" viewBox=\"55.991 29 87.979 142\" height=\"40\" width=\"40\" xmlns=\"http://www.w3.org/2000/svg\" data-type=\"color\" role=\"img\"><defs><style>#comp-jhfy5l75 svg [data-color=\"1\"] {fill: #878224;}</style></defs>\r\n                <g>\r\n                    <path d=\"M131.6 29c-14.9.1-19.9 8.4-21.1 17-3.1-1.9-6.8-3-11.1-2.9-3.9 0-7.4 1-10.3 2.8-1.9-10.7-9.7-16.5-22.5-16.4-1.6 0-2.9 1.3-2.9 3 0 1.6 1.3 2.9 3 2.9 11.2-.1 16.7 4.8 17 15.1-3.9 4.9-6.2 12.1-6.2 21.3 6.8-5.5 14-9.5 21-10.8l.2-.1h.4c.2 0 .5 0 .7.1-.2 0 .1-.1.3-.1l.7.1c7 1.1 14.1 4.9 20.9 10.3-.2-8.7-2.2-15.5-5.8-20.3 0-11 4.8-16 15.7-16 1.6 0 2.9-1.3 2.9-3 .1-1.7-1.2-3-2.9-3z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M105.7 117.8c-.7-1.9-1.4-3.9-2.1-5.9l-7.2.1c-.7 2-1.3 4-2 5.9l11.3-.1z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M98.1 106h3.7c-.7-2.5-1.3-5-1.9-7.6-.6 2.6-1.2 5.1-1.8 7.6z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M108.1 123.7l-16.3.1c-1 2.1-1.9 4-3 5.9l22.2-.1c-.9-1.9-1.9-3.8-2.9-5.9z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M75.9 153.4l48.7-.3c1-1.9 1.9-3.8 2.7-5.9l-54.2.3c.9 2.1 1.8 4 2.8 5.9z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M116.9 137.7c-.6-.7-1.2-1.5-1.8-2.2l-30 .1c-.6.7-1.2 1.6-1.8 2.3-1.3 1.4-2.6 2.6-3.9 3.7l41.5-.2c-1.4-1.1-2.7-2.2-4-3.7z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M100.4 171c7.8-.1 15-4.3 20.6-11.9l-41.3.2c5.7 7.4 12.9 11.7 20.7 11.7z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M78.9 134c-3.3 3.7-6.8 5.7-10.2 5.7-1.9 0-3.8-.5-5.8-1.6-5.7-3.1-7.9-9-6.5-17.5 3.2-19.6 23.8-44.7 40.3-50.1.9 19.3-6.6 50.8-17.8 63.5z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M137.3 137.7c-5.7 3.1-10.9 1.8-16.1-3.9-11.4-12.5-19.2-43.9-18.5-63.4 16.5 5.2 37.4 30.1 40.8 49.7 1.5 8.5-.6 14.4-6.2 17.6z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                </g>\r\n            </svg>\r\n            </div></div>\r\n            </div>\r\n            <div class=\"insect_icon_4\">\r\n              <div id=\"comp-jhhgzt6a1\" class=\"animate__animated animate__fadeInRight\" data-angle=\"23.56331041820738\" data-angle-style-location=\"style\" style=\"visibility: inherit;\"><div data-testid=\"svgRoot-comp-jhhgzt6a1\" class=\"_36XXs _3Qjwl\"><svg preserveAspectRatio=\"xMidYMid meet\" data-bbox=\"21 15.5 157.9 169\" viewBox=\"21 15.5 157.9 169\" height=\"40\" width=\"40\" xmlns=\"http://www.w3.org/2000/svg\" data-type=\"color\" role=\"img\"><defs><style>#comp-jhhgzt6a1 svg [data-color=\"1\"] {fill: #ACD1A5;}</style></defs>\r\n                <g>\r\n                    <path d=\"M153.1 85.9c-.4-4.1-1.1-7.9-2.2-11.3l2.8-3.1c12-13.4 17.9-20.2 17.9-41.6v-3.6c0-2-1.6-3.6-3.6-3.6s-3.6 1.6-3.6 3.6v3.6c0 18.7-4.4 23.7-16.1 36.9l-.6.7c-1.1-1.9-2.3-3.8-3.7-5.4-4-4.6-9.2-8.1-15.7-10.4-.6-4.4-2.3-8.7-5-12.5 7.7-3.3 19.6-9.7 19.6-17.7v-2.4c0-2-1.6-3.6-3.6-3.6s-3.6 1.6-3.6 3.6v2.4c0 3.2-9 8.6-17.6 12.1-4.9-4.1-11.1-6.9-17.8-6.9-6.9 0-13.2 2.8-18 7.1-9-3.6-18.2-9.2-18.2-12.3v-2.4c0-2-1.6-3.6-3.6-3.6s-3.6 1.6-3.6 3.6v2.4c0 8 12.3 14.6 20.2 17.9-2.6 3.7-4.2 7.9-4.8 12.3-6.5 2.3-11.7 5.8-15.7 10.4-1.7 2-3.1 4.3-4.4 6.7l-1.4-1.6c-13-14.7-15.7-17.7-15.7-37.3v-3.6c0-2-1.6-3.6-3.6-3.6s-3.6 1.6-3.6 3.6v3.6c0 22.4 4.4 27.3 17.3 42l2.4 2.7c.4.5 1 .8 1.6 1-.9 3.1-1.5 6.4-1.8 10C29.3 91.3 21 104.3 21 128.1v6.1c0 2 1.6 3.6 3.6 3.6s3.6-1.6 3.6-3.6v-6.1c0-19.5 5.7-29.8 19.1-34.9.1 4.4.5 9.1 1.2 14.1l.3 1.8c-.4.4-.7.8-.8 1.3l-1.3 3.2c-10 25.4-12.7 32.2-3.6 60.7.5 1.5 1.9 2.5 3.4 2.5.4 0 .7-.1 1.1-.2 1.9-.6 2.9-2.7 2.3-4.5-7.8-24-6.7-30.3 1.3-50.5 8.6 36.2 28.3 62.9 48 62.9h2.2c19.6 0 39.3-26.4 47.9-62.3 7.7 19.7 8.8 26.1 1.1 49.9-.6 1.9.4 3.9 2.3 4.5.4.1.7.2 1.1.2 1.5 0 2.9-1 3.4-2.5 9.3-28.5 6.6-35.3-3.6-60.7l-1.3-3.3c-.1-.3-.3-.6-.5-.8.1-.7.3-1.5.4-2.2.7-4.9 1.1-9.5 1.2-13.8 12.9 5.2 18.3 15.4 18.3 34.5v6.1c0 2 1.6 3.6 3.6 3.6s3.6-1.6 3.6-3.6V128c-.1-23.3-8.2-36.2-25.8-42.1z\" fill=\"#6b1a31\" data-color=\"1\"></path>\r\n                </g>\r\n            </svg>\r\n            </div></div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      </div>', 1, 1, '2021-04-17 15:55:36', '2021-05-10 00:40:34'),
(8, '200', NULL, 'Fungicides', '??????????????????????????????', 'fungicides', '<div class=\"container\">\r\n        <div class=\"row\">\r\n          <div class=\"col-sm-12 col-md-12 col-lg-12\">\r\n            <h4>insecticide</h4>\r\n            \r\n          </div>\r\n        </div>\r\n        <div class=\"row\">\r\n          <div class=\"col-sm-12 col-md-3 col-lg-3\">\r\n            <div class=\"insect_icon_1\">\r\n              <div id=\"comp-jhhgzt6a\" class=\"animate__animated animate__fadeInLeft\" data-angle=\"27.723259909859337\" data-angle-style-location=\"style\" style=\"visibility: inherit;\"><div data-testid=\"svgRoot-comp-jhhgzt6a\" class=\"_36XXs _3Qjwl\"><svg preserveAspectRatio=\"xMidYMid meet\" data-bbox=\"20.501 10 158.998 179.997\" viewBox=\"20.501 10 158.998 179.997\" height=\"100%\" width=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" data-type=\"color\" role=\"img\">\r\n                <g>\r\n                    <path d=\"M176.889 184.874c-6.942-12.56-17.515-15.315-17.515-15.315 1.783-23.902-8.28-33.386-8.28-33.386 8.662-32.36-9.044-55.749-9.235-56.07.064.064.191.128.255.192 7.834 5.831 10.764 13.521 10.764 13.521l.255-2.307c6.942-2.051 16.177 6.857 16.177 6.857l.382-1.666c1.911 3.973 4.331 3.717 4.331 3.717 2.866-.705 2.038-3.268 2.038-3.268-3.694-7.497-18.216-9.42-18.216-9.42-12.356-16.404-22.992-17.75-22.992-17.75s-2.165-7.369.955-9.163c3.121-1.794 2.866-6.728 2.866-6.728l-.51-14.546c.127-6.536-2.42-7.369-2.42-7.369 8.025-6.408 6.369-12.431 6.369-13.969s-1.21-5.447 3.121-5.319c4.331.128 1.21-.833 1.21-.833-4.331.703-4.203-2.052-7.324-2.052h-.574l-.829 1.026c3.824-.257 3.123 1.796 3.123 1.796.956 3.014-1.785 5.066-1.785 5.066-3.952 2.18-5.991 13.146-5.991 13.146l-1.466.257c-.829 6.413 1.785 17.378 2.613 22.059.829 4.681-2.422 2.886-2.422 2.886l-8.859-11.607c-2.295-3.527-2.996-1.09-2.996-1.09s0 2.18-2.167 2.18 1.466-6.028 1.466-6.028c.829-3.014-1.912-1.796-1.912-1.796l-6.501 2.886c.064-.128 1.912-5.066 10.325-6.99 8.541-1.924 9.114-9.427 9.114-9.427 0-1.796.127-2.437-1.211-2.886-1.338-.449-1.466.834-1.466.834-.191 9.619-9.178 10.068-9.178 10.068-6.119.257-10.07 6.284-10.07 6.284-2.231-3.014-7.521-2.822-8.413-2.757-.892-.064-6.182-.257-8.413 2.757 0 0-3.952-6.028-10.07-6.284 0 0-8.987-.385-9.114-10.132 0 0-.127-1.218-1.466-.834-1.338.385-1.211 1.09-1.211 2.886 0 0 .574 7.503 9.114 9.427 8.413 1.86 10.262 6.797 10.325 6.99l-6.501-2.886s-2.741-1.218-1.912 1.796c0 0 3.697 6.028 1.466 6.028-2.167 0-2.167-2.18-2.167-2.18s-.701-2.437-2.996 1.09l-8.859 11.607s-3.251 1.796-2.422-2.886c.829-4.681 3.378-15.583 2.613-22.059l-1.466-.257s-2.04-10.966-5.991-13.146c0 0-2.741-2.052-1.785-5.066 0 0-.701-2.052 3.123-1.796l-.829-.321h-.577c-3.109 0-2.982 2.745-7.295 2.042 0 0-3.109.957 1.205.83 4.314-.128 3.109 3.83 3.109 5.298s-1.649 7.468 6.344 13.914c0 0-2.601.83-2.411 7.34l-.571 14.425s-.254 4.915 2.855 6.702.952 9.127.952 9.127-10.531 1.34-22.901 17.68c0 0-14.464 1.915-18.144 9.382 0 0-.825 2.617 2.03 3.255 0 0 2.411.255 4.314-3.702l.381 1.659s9.199-8.872 16.114-6.829l.254 2.298s2.982-7.787 10.975-13.595c-.254.319-17.826 23.616-9.199 55.848 0 0-10.023 9.382-8.247 33.253 0 0-10.531 2.745-17.446 15.254 0 0-1.459-.574-2.601 2.042.127-.064 5.139-2.489 5.963 3.127 0 0 .952-.83 1.078-4.085s2.157-5.553 4.314-6l.571 1.34s5.265-1.213 11.229-9.382c0 0 1.903-1.213 3.806.255 0 0-4.441-18.127 2.982-29.041 0 0 13.449 45.189 49.165 45.189h.469c35.794 0 49.36-45.368 49.36-45.368 7.452 10.958 2.993 29.22 2.993 29.22 1.911-1.474 3.821-.32 3.821-.32 5.987 8.202 11.273 9.42 11.273 9.42l.573-1.346c2.165.384 4.204 2.755 4.331 6.023.127 3.268 1.083 4.101 1.083 4.101.828-5.639 5.796-3.204 5.987-3.14-1.145-2.56-2.61-1.983-2.61-1.983zm-121.838-70.67c-6.246.257-3.251-11.607-3.251-11.607s3.251-12.376 6.82-11.543c0 0 6.374-.962 5.418 7.246 0 .001-2.741 15.584-8.987 15.904zm13.894 54.315c-13.321-5.579-10.325-17.955-10.325-17.955.191-1.475 1.657-2.309 1.657-2.309 11.855-2.437 14.405 14.108 14.405 14.108.764 8.978-5.737 6.156-5.737 6.156zm6.693-31.935c-6.437 0-11.6-5.707-11.6-12.761s5.226-12.761 11.6-12.761c6.437 0 11.6 5.707 11.6 12.761.064 7.054-5.163 12.761-11.6 12.761zm24.283-35.654c-12.939-.064-12.62-9.875-12.62-9.875-1.211-13.338 4.525-18.404 4.525-18.404 4.334 1.988 7.457 8.336 8.158 9.811.701-1.475 3.824-7.823 8.158-9.811 0 0 5.736 5.066 4.525 18.404-.062-.064.193 9.811-12.746 9.875zm12.684 22.893c0-7.054 5.226-12.761 11.6-12.761 6.437 0 11.6 5.707 11.6 12.761s-5.226 12.761-11.6 12.761-11.6-5.707-11.6-12.761zm18.356 44.696s-6.501 2.886-5.736-6.156c0 0 2.613-16.544 14.405-14.108 0 0 1.402.834 1.657 2.309 0 0 2.995 12.312-10.326 17.955zm13.831-54.315c-6.246-.257-8.987-15.903-8.987-15.903-.956-8.208 5.418-7.246 5.418-7.246 3.506-.834 6.82 11.543 6.82 11.543s2.995 11.863-3.251 11.606z\" fill=\"#C40E0E\" data-color=\"1\"></path>\r\n                </g>\r\n                </svg>\r\n                </div>\r\n                </div>\r\n            </div>\r\n            <div class=\"insect_icon_2\">\r\n              <div id=\"comp-jhhh59di\" class=\"animate__animated animate__fadeInLeft\" data-angle=\"26.893398450072823\" data-angle-style-location=\"style\" style=\"visibility: inherit;\"><div data-testid=\"svgRoot-comp-jhhh59di\" class=\"_36XXs _3Qjwl\"><svg preserveAspectRatio=\"xMidYMid meet\" data-bbox=\"53.5 18.201 92.8 163.721\" viewBox=\"53.5 18.201 92.8 163.721\" height=\"100%\" width=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" data-type=\"color\" role=\"img\"><defs><style>#comp-jhhh59di svg [data-color=\"1\"] {fill: #67BD31;}</style></defs>\r\n                <g>\r\n                    <path d=\"M137.8 139.4l-12.9-8.8c-3.8-2.8-1-8.1-1-8.1 2.8-7 .3-6.8.3-6.8l-5.9-1.1c-1.2-.4-2.8-.7-2.4-2.5.3-1.8 5.9-.7 5.9-.7 4.5.7 3.4-2.5 3.4-2.5 2.2-1.7 1.9-4.1 1.9-4.1l.3-10.9c-.6-5.6 1.7-7.3 1.7-7.3-2.7-.7-1.7-2.5-1.7-2.5 2.8-5.6 9.6-8 9.6-8l9.3-5.1-.6-1.4-3.1 2.5L145 69l-.9-.7c-2.3 5.2-7.5 7-7.5 7-1 .5-1.3.2-1.2-.3.1-1.3 2.1-4.2 2.1-4.2 2.1-4.6-1.5-5.7-1.5-5.7.9 2.2-.9 2.4-.9 2.4 2.2.3 2.5 1.3.7 3.6-1.1 1.4-1.1 2.9-1.2 3.9 0 .7-.2 1.1-.6 1.2-1.2.3-1.9-.4-1.9-.4-2.8-4.2-13.7-4.1-13.7-4.1-4.4-.7 1.2-4.7 1.2-4.7 12.5-9.3 9.7-24.6 9.7-24.6-3.4-27.1-11.2-24.1-11.2-24.1 2.8.7 4.4 7 2.4 6.4s-2.8.6-2.8.6 6.1.4 6 19.3c-.1 18.9-7.1 13.1-7.1 13.1l-4.1-4.1c-1.7-1.8-1.1.7-1.1.7l1.3 4.1c1.7 8.1-7.5 10.2-7.5 10.2.3-1 0-2.5 0-2.5-.2-2.6-3.1-4.4-3.7-3.4-.6 1 .3 1 .3 1 3.3.4 2.4 4.3 2.4 4.3.4 5.5-4.4 5.6-4.4 5.6h.2s-4.9-.1-4.4-5.6c0 0-.9-3.4 2.4-3.9 0 0 .9-.2.3-1.2-.6-1-3.5.6-3.7 3.3 0 0-.3 1.5 0 2.5 0 0-9.2-2.1-7.5-10.2l1.3-4.1s.7-2.6-1.1-.7l-4.1 4.1s-7 5.7-7.1-13.1c-.1-18.9 6-19.3 6-19.3s-.8-1.2-2.8-.6c-1.9.7-.3-5.6 2.4-6.4 0 0-7.8-3-11.2 24.1 0 0-2.8 15.4 9.7 24.6 0 0 5.6 4 1.2 4.7 0 0-10.9-.1-13.7 4.1 0 0-.7.7-1.9.4-.5-.1-.6-.6-.6-1.2-.1-1-.1-2.5-1.2-3.9-1.8-2.4-1.4-3.4.7-3.6 0 0-1.8-.2-.9-2.4 0 0-3.6 1.2-1.5 5.7 0 0 2 3 2.1 4.2 0 .6-.3.8-1.2.3 0 0-5.2-1.8-7.5-7l-.9.6 2.4 3.1-3.1-2.5-.6 1.4 9.3 5.1s6.7 2.4 9.6 8c0 0 1 1.9-1.7 2.5 0 0 2.3 1.8 1.7 7.3l.3 10.9s-.3 2.5 1.9 4.1c0 0-1.2 3.2 3.4 2.5 0 0 5.6-1.2 5.9.7.3 1.8-1.2 2.2-2.4 2.5l-5.9 1.1s-2.4-.1.3 6.8c0 0 2.8 5.3-1 8.1L62 139.4s-6 .2-6 3.5c0 0 2.5-2.8 4.6-1.3l-1.5 2.4L78 129.7s1.8-1.4 2.1-3.7c.2-1.2 0-2.6-1-4.2 0 0-2.6-2.8.3-2.9 0 0 1.9-.8 1.5 4.6l-.3 2.5-.6 5.1s-8 .1-5.6 7.1l5.7 11.9s1.7 3.2 1.1 4.9H83s1.2.3-3.1 7.8l-8.7 13.5s-1.4 1.7-4.5 2.1c0 0-.9.1-.3.9.6.8 4.5-1.5 4.5-1.5l-1 4.1s.6.3 1.2-1.3c0 0 .7-3.2 3-6.2 2.4-3 10.3-14.1 10.6-21.4 0 0 3.3 10.9 15 11.9 11.7-.9 15-11.9 15-11.9.3 7.2 8.2 18.3 10.6 21.4 2.4 3 3 6.2 3 6.2.7 1.5 1.2 1.3 1.2 1.3l-1-4.1s4 2.3 4.5 1.4c.6-.8-.3-1-.3-1-3.1-.4-4.5-2.4-4.5-2.4l-8.7-13.1c-4.3-7.6-3.1-7.8-3.1-7.8h1.8c-.7-1.8 1.1-4.9 1.1-4.9l5.7-11.5c2.4-7-5.6-7.4-5.6-7.4l-.7-5.5-.3-2.4c-.3-5.4 1.5-4.6 1.5-4.6 2.9.2.3 2.9.3 2.9-1 1.4-1.2 2.8-1.1 3.9.3 2.5 2.2 3.9 2.2 3.9l18.8 14.4-1.5-2.4c2.1-1.5 4.6 1.3 4.6 1.3.7-3-5.4-3.2-5.4-3.2zm-19.7-47.3l1.4-3.3c1.5-2.7-1.6-3.5-1.6-3.5v-2.8c3.1-3.4 1.5-9.1 1.5-9.1 8.1-1.7 12 3.4 12 3.4-5.9 3.5-7.5 9.5-7.5 9.5l-1.5-1.8-1.6 4.1c2.4 1.8 1.5 8.9 1.5 8.9v9.6l-3.7-2.2c-4-1.4 1.4-8.1 1.4-8.1l-1.9-4.7zm-39 4.8s4.6 6.7.6 8.1l-5.6 2.2v-9.6s.8-7.2 3.2-8.9l-.3-4.1-1.4 1.8s-1.7-6-7.6-9.5c0 0 2.8-5 10.8-3.4 0 0-3.1 5.6 0 9.1v2.8s-1.4.8 0 3.5l2.6 3.3-2.3 4.7zM78 138.2s-1.3-1.8.7-1.8c0 0 2.3-.7 2.9 3.8l.7 5.6-4.3-7.6zm41.2 2c.7-4.5 2.9-3.8 2.9-3.8 1.9-.1.7 1.8.7 1.8l-4.2 7.7.6-5.7z\" fill=\"#443931\" data-color=\"1\"></path>\r\n                </g>\r\n                </svg>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n          <div class=\"col-sm-12 col-md-6 col-lg-6 product_head_text\">\r\n            <ul>\r\n              <li>??????????????????????????? ????????? ????????????????????????????????? ???.??? ??? ??????</li>\r\n              <li>??????????????????????????? ???.???% ??? ??????</li>\r\n              <li>??????????????????????????? ????????????????????? ???% ?????? ??????</li>\r\n              <li>?????????????????? ??????% + ???????????????????????????????????? ???% ?????? ??????</li>\r\n              <li>??????????????????????????? ????????????????????? ??????% + ??????????????????????????????????????? ??????%</li>\r\n              <li>??????????????????????????????????????? ???% + ???????????????????????????????????? ??????%</li>\r\n              <li>???????????????????????????????????? ??????% ??? ??????</li>\r\n              <li>??????????????????????????????????????? ??????% ????????????????????? ??????</li>\r\n              <li>?????????????????????????????????????????? ??????% ?????? ??????</li>\r\n              <li>??????????????????????????????????????? ??????% ??? ??????</li>\r\n              <li>???????????????????????????????????? ??????% ??? ??????</li>\r\n            </ul>\r\n          </div>\r\n          <div class=\"col-sm-12 col-md-3 col-lg-3\">\r\n            <div class=\"insect_icon_3\">\r\n              <div id=\"comp-jhfy5l75\" class=\"animate__animated animate__fadeInRight\" data-angle=\"305.68524374908384\" data-angle-style-location=\"style\" style=\"visibility: inherit;\"><div data-testid=\"svgRoot-comp-jhfy5l75\" class=\"_36XXs _3Qjwl\"><svg preserveAspectRatio=\"xMidYMid meet\" data-bbox=\"55.991 29 87.979 142\" viewBox=\"55.991 29 87.979 142\" height=\"40\" width=\"40\" xmlns=\"http://www.w3.org/2000/svg\" data-type=\"color\" role=\"img\"><defs><style>#comp-jhfy5l75 svg [data-color=\"1\"] {fill: #878224;}</style></defs>\r\n                <g>\r\n                    <path d=\"M131.6 29c-14.9.1-19.9 8.4-21.1 17-3.1-1.9-6.8-3-11.1-2.9-3.9 0-7.4 1-10.3 2.8-1.9-10.7-9.7-16.5-22.5-16.4-1.6 0-2.9 1.3-2.9 3 0 1.6 1.3 2.9 3 2.9 11.2-.1 16.7 4.8 17 15.1-3.9 4.9-6.2 12.1-6.2 21.3 6.8-5.5 14-9.5 21-10.8l.2-.1h.4c.2 0 .5 0 .7.1-.2 0 .1-.1.3-.1l.7.1c7 1.1 14.1 4.9 20.9 10.3-.2-8.7-2.2-15.5-5.8-20.3 0-11 4.8-16 15.7-16 1.6 0 2.9-1.3 2.9-3 .1-1.7-1.2-3-2.9-3z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M105.7 117.8c-.7-1.9-1.4-3.9-2.1-5.9l-7.2.1c-.7 2-1.3 4-2 5.9l11.3-.1z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M98.1 106h3.7c-.7-2.5-1.3-5-1.9-7.6-.6 2.6-1.2 5.1-1.8 7.6z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M108.1 123.7l-16.3.1c-1 2.1-1.9 4-3 5.9l22.2-.1c-.9-1.9-1.9-3.8-2.9-5.9z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M75.9 153.4l48.7-.3c1-1.9 1.9-3.8 2.7-5.9l-54.2.3c.9 2.1 1.8 4 2.8 5.9z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M116.9 137.7c-.6-.7-1.2-1.5-1.8-2.2l-30 .1c-.6.7-1.2 1.6-1.8 2.3-1.3 1.4-2.6 2.6-3.9 3.7l41.5-.2c-1.4-1.1-2.7-2.2-4-3.7z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M100.4 171c7.8-.1 15-4.3 20.6-11.9l-41.3.2c5.7 7.4 12.9 11.7 20.7 11.7z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M78.9 134c-3.3 3.7-6.8 5.7-10.2 5.7-1.9 0-3.8-.5-5.8-1.6-5.7-3.1-7.9-9-6.5-17.5 3.2-19.6 23.8-44.7 40.3-50.1.9 19.3-6.6 50.8-17.8 63.5z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                    <path d=\"M137.3 137.7c-5.7 3.1-10.9 1.8-16.1-3.9-11.4-12.5-19.2-43.9-18.5-63.4 16.5 5.2 37.4 30.1 40.8 49.7 1.5 8.5-.6 14.4-6.2 17.6z\" fill=\"#151549\" data-color=\"1\"></path>\r\n                </g>\r\n            </svg>\r\n            </div></div>\r\n            </div>\r\n            <div class=\"insect_icon_4\">\r\n              <div id=\"comp-jhhgzt6a1\" class=\"animate__animated animate__fadeInRight\" data-angle=\"23.56331041820738\" data-angle-style-location=\"style\" style=\"visibility: inherit;\"><div data-testid=\"svgRoot-comp-jhhgzt6a1\" class=\"_36XXs _3Qjwl\"><svg preserveAspectRatio=\"xMidYMid meet\" data-bbox=\"21 15.5 157.9 169\" viewBox=\"21 15.5 157.9 169\" height=\"40\" width=\"40\" xmlns=\"http://www.w3.org/2000/svg\" data-type=\"color\" role=\"img\"><defs><style>#comp-jhhgzt6a1 svg [data-color=\"1\"] {fill: #ACD1A5;}</style></defs>\r\n                <g>\r\n                    <path d=\"M153.1 85.9c-.4-4.1-1.1-7.9-2.2-11.3l2.8-3.1c12-13.4 17.9-20.2 17.9-41.6v-3.6c0-2-1.6-3.6-3.6-3.6s-3.6 1.6-3.6 3.6v3.6c0 18.7-4.4 23.7-16.1 36.9l-.6.7c-1.1-1.9-2.3-3.8-3.7-5.4-4-4.6-9.2-8.1-15.7-10.4-.6-4.4-2.3-8.7-5-12.5 7.7-3.3 19.6-9.7 19.6-17.7v-2.4c0-2-1.6-3.6-3.6-3.6s-3.6 1.6-3.6 3.6v2.4c0 3.2-9 8.6-17.6 12.1-4.9-4.1-11.1-6.9-17.8-6.9-6.9 0-13.2 2.8-18 7.1-9-3.6-18.2-9.2-18.2-12.3v-2.4c0-2-1.6-3.6-3.6-3.6s-3.6 1.6-3.6 3.6v2.4c0 8 12.3 14.6 20.2 17.9-2.6 3.7-4.2 7.9-4.8 12.3-6.5 2.3-11.7 5.8-15.7 10.4-1.7 2-3.1 4.3-4.4 6.7l-1.4-1.6c-13-14.7-15.7-17.7-15.7-37.3v-3.6c0-2-1.6-3.6-3.6-3.6s-3.6 1.6-3.6 3.6v3.6c0 22.4 4.4 27.3 17.3 42l2.4 2.7c.4.5 1 .8 1.6 1-.9 3.1-1.5 6.4-1.8 10C29.3 91.3 21 104.3 21 128.1v6.1c0 2 1.6 3.6 3.6 3.6s3.6-1.6 3.6-3.6v-6.1c0-19.5 5.7-29.8 19.1-34.9.1 4.4.5 9.1 1.2 14.1l.3 1.8c-.4.4-.7.8-.8 1.3l-1.3 3.2c-10 25.4-12.7 32.2-3.6 60.7.5 1.5 1.9 2.5 3.4 2.5.4 0 .7-.1 1.1-.2 1.9-.6 2.9-2.7 2.3-4.5-7.8-24-6.7-30.3 1.3-50.5 8.6 36.2 28.3 62.9 48 62.9h2.2c19.6 0 39.3-26.4 47.9-62.3 7.7 19.7 8.8 26.1 1.1 49.9-.6 1.9.4 3.9 2.3 4.5.4.1.7.2 1.1.2 1.5 0 2.9-1 3.4-2.5 9.3-28.5 6.6-35.3-3.6-60.7l-1.3-3.3c-.1-.3-.3-.6-.5-.8.1-.7.3-1.5.4-2.2.7-4.9 1.1-9.5 1.2-13.8 12.9 5.2 18.3 15.4 18.3 34.5v6.1c0 2 1.6 3.6 3.6 3.6s3.6-1.6 3.6-3.6V128c-.1-23.3-8.2-36.2-25.8-42.1z\" fill=\"#6b1a31\" data-color=\"1\"></path>\r\n                </g>\r\n            </svg>\r\n            </div></div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      </div>', 1, 1, '2021-04-17 15:56:27', '2021-05-19 09:10:45'),
(12, '300', NULL, 'wwFf', 'asdfag', 'wwff', '<p>faagh</p>', 1, 1, '2022-10-11 04:49:16', '2022-10-11 04:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `contact_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_name`, `contact_email`, `contact_phone`, `contact_address`, `contact_subject`, `contact_message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jone Due', 'jone@gmail.com', '01789654821', NULL, '0', 'This is test message', 1, '2021-04-16 06:36:18', '2021-04-27 01:20:07'),
(2, 'Lionel Cameron', 'nizatuhula@email.com', '123456', 'Eum quod velit tota', 'Praesentium sit ea q', 'Earum commodi ipsa', 1, NULL, '2021-04-27 01:20:09'),
(3, 'Hope Michael', 'cyqitobuj@email.com', '+1 (535) 713-3303', 'Expedita praesentium', 'Obcaecati quos cum c', 'Eos eveniet molest', 1, NULL, '2021-04-27 01:20:12'),
(4, 'Amethyst Ochoa', 'qorepavu@mailinator.com', '+1 (602) 852-8908', 'Quibusdam eu exercit', 'Quia eos eligendi m', 'Quae ex consequatur', 0, NULL, NULL),
(5, 'test', 'test@gmail.com', '01812345678', 'Dhaka', 'Test contact submit', 'Welcome to test mail service ????', 0, NULL, NULL),
(6, 'ryhe', 'dsfhg@gmail.com', 'rty', 'try', 'ey', 'rty', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cropscats`
--

CREATE TABLE `cropscats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auto_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `design` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editable` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cropscats`
--

INSERT INTO `cropscats` (`id`, `auto_code`, `parent_id`, `category_name`, `category_name_bn`, `slug`, `design`, `image`, `editable`, `status`, `created_at`, `updated_at`) VALUES
(16, '1351185', NULL, 'Graps', '????????????????????????', 'graps', NULL, '63638284b3c508.27918528-2022-11-03.jpg', 1, 1, '2022-11-03 02:57:43', '2022-11-03 02:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `depots`
--

CREATE TABLE `depots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depots`
--

INSERT INTO `depots` (`id`, `image`, `location`, `link`, `status`, `created_at`, `updated_at`) VALUES
(3, '636a13949b6f56.80233107-2022-11-08.jpg', 'Boyradighi, Ranirhat, Bogra ok', 'Link', 1, '2022-11-08 00:19:14', '2022-11-08 02:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `disorderproducts`
--

CREATE TABLE `disorderproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disorder_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disorderproducts`
--

INSERT INTO `disorderproducts` (`id`, `disorder_id`, `product_id`, `created_at`, `updated_at`) VALUES
(148, '109356', '18', '2022-11-07 23:32:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `disorders`
--

CREATE TABLE `disorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disorder_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crops_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disorder_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disorder_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symptoms` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `symptoms_bn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `affect` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `affect_bn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `soil_drip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soil_drip_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefit` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefit_bn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disorders`
--

INSERT INTO `disorders` (`id`, `disorder_id`, `crops_id`, `disorder_name`, `disorder_name_bn`, `image`, `symptoms`, `symptoms_bn`, `affect`, `affect_bn`, `soil_drip`, `soil_drip_bn`, `benefit`, `benefit_bn`, `created_at`, `updated_at`) VALUES
(27, '109356', '16', 'Quin Sandoval', 'Jana Noble', '636201725d8959.72633074-2022-11-02.jpg', 'Cupiditate dicta qui', 'Ipsum corporis dolo', 'Minim magnam et face', 'Dolorem delectus ni', 'Possimus aute sit e', 'Aute inventore et si', 'Do quod qui dolor au', 'Qui illum dolore vo', '2022-11-01 23:34:46', '2022-11-07 23:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) NOT NULL,
  `division_id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`) VALUES
(1, 1, 'Comilla', '????????????????????????'),
(2, 1, 'Feni', '????????????'),
(3, 1, 'Brahmanbaria', '????????????????????????????????????????????????'),
(4, 1, 'Rangamati', '??????????????????????????????'),
(5, 1, 'Noakhali', '???????????????????????????'),
(6, 1, 'Chandpur', '?????????????????????'),
(7, 1, 'Lakshmipur', '??????????????????????????????'),
(8, 1, 'Chattogram', '???????????????????????????'),
(9, 1, 'Coxsbazar', '???????????????????????????'),
(10, 1, 'Khagrachhari', '????????????????????????'),
(11, 1, 'Bandarban', '???????????????????????????'),
(12, 2, 'Sirajganj', '???????????????????????????'),
(13, 2, 'Pabna', '???????????????'),
(14, 2, 'Bogura', '???????????????'),
(15, 2, 'Rajshahi', '?????????????????????'),
(16, 2, 'Natore', '???????????????'),
(17, 2, 'Joypurhat', '????????????????????????'),
(18, 2, 'Chapainawabganj', '??????????????????????????????????????????'),
(19, 2, 'Naogaon', '???????????????'),
(20, 3, 'Jashore', '????????????'),
(21, 3, 'Satkhira', '???????????????????????????'),
(22, 3, 'Meherpur', '????????????????????????'),
(23, 3, 'Narail', '??????????????????'),
(24, 3, 'Chuadanga', '??????????????????????????????'),
(25, 3, 'Kushtia', '????????????????????????'),
(26, 3, 'Magura', '??????????????????'),
(27, 3, 'Khulna', '???????????????'),
(28, 3, 'Bagerhat', '????????????????????????'),
(29, 3, 'Jhenaidah', '?????????????????????'),
(30, 4, 'Jhalakathi', '?????????????????????'),
(31, 4, 'Patuakhali', '???????????????????????????'),
(32, 4, 'Pirojpur', '????????????????????????'),
(33, 4, 'Barisal', '??????????????????'),
(34, 4, 'Bhola', '????????????'),
(35, 4, 'Barguna', '??????????????????'),
(36, 5, 'Sylhet', '???????????????'),
(37, 5, 'Moulvibazar', '??????????????????????????????'),
(38, 5, 'Habiganj', '?????????????????????'),
(39, 5, 'Sunamganj', '???????????????????????????'),
(40, 6, 'Narsingdi', '?????????????????????'),
(41, 6, 'Gazipur', '?????????????????????'),
(42, 6, 'Shariatpur', '???????????????????????????'),
(43, 6, 'Narayanganj', '??????????????????????????????'),
(44, 6, 'Tangail', '????????????????????????'),
(45, 6, 'Kishoreganj', '???????????????????????????'),
(46, 6, 'Manikganj', '???????????????????????????'),
(47, 6, 'Dhaka', '????????????'),
(48, 6, 'Munshiganj', '??????????????????????????????'),
(49, 6, 'Rajbari', '?????????????????????'),
(50, 6, 'Madaripur', '???????????????????????????'),
(51, 6, 'Gopalganj', '???????????????????????????'),
(52, 6, 'Faridpur', '?????????????????????'),
(53, 7, 'Panchagarh', '?????????????????????'),
(54, 7, 'Dinajpur', '????????????????????????'),
(55, 7, 'Lalmonirhat', '??????????????????????????????'),
(56, 7, 'Nilphamari', '???????????????????????????'),
(57, 7, 'Gaibandha', '???????????????????????????'),
(58, 7, 'Thakurgaon', '???????????????????????????'),
(59, 7, 'Rangpur', '???????????????'),
(60, 7, 'Kurigram', '???????????????????????????'),
(61, 8, 'Sherpur', '??????????????????'),
(62, 8, 'Mymensingh', '????????????????????????'),
(63, 8, 'Jamalpur', '????????????????????????'),
(64, 8, 'Netrokona', '???????????????????????????');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `bn_name`) VALUES
(1, 'Chattagram', '???????????????????????????'),
(2, 'Rajshahi', '?????????????????????'),
(3, 'Khulna', '???????????????'),
(4, 'Barisal', '??????????????????'),
(5, 'Sylhet', '???????????????'),
(6, 'Dhaka', '????????????'),
(7, 'Rangpur', '???????????????'),
(8, 'Mymensingh', '????????????????????????');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'employee.png',
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `join_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `employee_phone`, `employee_email`, `employee_address`, `image`, `designation`, `position`, `join_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Marcia Short', '+1 (104) 428-2875', 'nypo@email.com', 'Qui quia dolore Nam', 'marcia-short-2021-04-18607bdadd514fe.jpg', 'Labore amet omnis r', 1, '1983-01-22', 1, '2021-04-18 01:08:13', '2021-04-18 01:08:13'),
(2, 'Dawn Houston', '+1 (194) 484-3447', 'zykydur@email.com', 'Sint et reprehenderi', 'dawn-houston-2021-04-18607bdb794312d.jpg', 'Accusamus et magna f', 2, '1998-09-10', 1, '2021-04-18 01:10:49', '2021-04-18 01:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(75, '18', '636b442d4df732.90708939-2022-11-09.jpg', NULL, NULL),
(77, '18', '636b4431e431a6.59883104-2022-11-09.jpg', NULL, NULL),
(79, '18', '636b44346b2025.66478736-2022-11-09.jpg', NULL, NULL),
(80, '18', '636b4501dc9406.53903602-2022-11-09.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_date` date NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `fname`, `lname`, `email`, `address`, `phone`, `position`, `application_date`, `cv`, `created_at`, `updated_at`) VALUES
(1, 'Uriah', 'Holder', 'senub@email.com', 'Rem quaerat vel mini', '+1 (501) 116-7731', 'Velit dolore nemo u', '2021-04-20', 'UriahHolder-2021-04-20.docx', NULL, NULL),
(2, 'Brent', 'Pickett', 'pyzagiboge@email.com', 'Debitis excepteur pe', '+1 (465) 726-8724', 'Velit dolore nemo u', '2021-04-26', 'BrentPickett-2021-04-26.docx', NULL, NULL),
(3, 'Natalie', 'Davis', 'dylo@email.com', 'Et eaque quaerat vol', '+1 (587) 908-8223', 'AREA SALES MANAGER', '2021-04-26', 'NatalieDavis-2021-04-26.docx', NULL, NULL),
(4, 'Nazmul', 'Hasan', 'safin@gmail.com', 'Kapaleswar, Kapasia', '017289379239', 'AREA SALES MANAGER', '2022-11-08', 'NazmulHasan-2022-11-08.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_04_11_094947_create_roles_table', 1),
(4, '2021_10_12_000000_create_users_table', 1),
(5, '2021_04_11_093348_create_categories_table', 2),
(6, '2021_04_11_093651_create_sliders_table', 3),
(7, '2021_04_14_023824_create_partners_table', 4),
(8, '2021_04_11_093938_create_employees_table', 5),
(9, '2021_04_11_094007_create_careers_table', 6),
(10, '2021_04_11_094038_create_contacts_table', 7),
(12, '2021_04_11_093600_create_products_table', 8),
(13, '2021_04_17_211156_create_product_variants_table', 8),
(14, '2021_04_11_094144_create_settings_table', 9),
(15, '2021_04_20_064443_create_job_applications_table', 10),
(16, '2021_04_11_093599_create_pack_sizes_table', 11),
(20, '2021_04_11_094128_create_orders_table', 12),
(21, '2021_05_05_061231_create_order_details_table', 12),
(23, '2022_10_11_053344_create_cropscats_table', 13),
(24, '2022_10_13_040657_create_disorderproducts_table', 14),
(27, '2022_10_12_100431_create_disorders_table', 15),
(29, '2022_10_21_130453_create_ratings_table', 16),
(30, '2022_10_22_113448_create_specifications_table', 17),
(31, '2022_10_30_065545_create_images_table', 18),
(33, '2022_11_08_053923_create_depots_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `upzila_id` int(10) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `total_amount` double(8,2) NOT NULL,
  `order_status` enum('Pending','Approved','Delivered','Cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `customer_id`, `division_id`, `district_id`, `upzila_id`, `address`, `order_date`, `total_amount`, `order_status`, `created_at`, `updated_at`) VALUES
(1, '1621412730', 55, 5, 37, 286, 'Nihil ut natus do ex', '2021-05-19', 1200.00, 'Delivered', '2021-05-19 04:00:00', '2021-05-19 12:36:30'),
(2, '1621412881', 56, 3, 21, 180, 'Aut quae obcaecati a', '2021-05-19', 1950.00, 'Delivered', '2021-05-19 04:00:00', '2021-05-19 12:39:18'),
(3, '1621413262', 56, 2, 14, 129, 'Aut quae obcaecati a', '2021-05-19', 110.00, 'Delivered', '2021-05-19 04:00:00', '2021-05-19 12:42:10'),
(4, '1621413979', 56, 2, 13, 114, 'Aut quae obcaecati a', '2021-05-19', 1100.00, 'Pending', '2021-05-19 04:00:00', NULL),
(5, '1621414047', 57, 8, 62, 471, 'In et unde deserunt', '2021-05-19', 110.00, 'Pending', '2021-05-19 04:00:00', NULL),
(6, '1621414996', 59, 1, 1, 2, 'Haj', '2021-05-19', 100.00, 'Pending', '2021-05-19 04:00:00', NULL),
(7, '1621935066', 60, 6, 47, 365, 'mirpur-2 dhaka bangladesh', '2021-05-25', 100.00, 'Pending', '2021-05-25 04:00:00', NULL),
(8, '1621935550', 61, 6, 47, 365, 'mirpur-2 dhaka bangladesh', '2021-05-25', 2400.00, 'Pending', '2021-05-25 04:00:00', NULL),
(9, '1621937699', 62, 6, 47, 365, 'mirpur-2 dhaka bangladesh', '2021-05-25', 1610.00, 'Pending', '2021-05-25 04:00:00', NULL),
(10, '1622100338', 63, 6, 47, 367, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 100.00, 'Delivered', '2021-05-27 04:00:00', '2022-02-01 13:03:26'),
(11, '1622100347', 64, 6, 47, 365, 'mirpur-2 dhaka bangladesh', '2021-05-27', 1510.00, 'Pending', '2021-05-27 04:00:00', NULL),
(12, '1622100466', 63, 6, 47, 367, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(13, '1622100602', 63, 5, 38, 294, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 1300.00, 'Pending', '2021-05-27 04:00:00', NULL),
(14, '1622100611', 65, 6, 47, 365, 'mirpur-2 dhaka bangladesh', '2021-05-27', 210.00, 'Pending', '2021-05-27 04:00:00', NULL),
(15, '1622100910', 66, 6, 47, 365, 'fudstfdatrd', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(16, '1622100933', 67, 5, 38, 294, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(17, '1622101008', 68, 1, 8, 76, 'ydyda55t', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(19, '1622101127', 70, 7, 57, 431, 'ydskus5wsy', '2021-05-27', 1000.00, 'Pending', '2021-05-27 04:00:00', NULL),
(20, '1622101461', 71, 2, 14, 130, 'tdffewur7', '2021-05-27', 200.00, 'Pending', '2021-05-27 04:00:00', NULL),
(21, '1622101732', 72, 5, 37, 286, 'ruiykydyi.7/', '2021-05-27', 1100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(22, '1622101804', 73, 5, 39, 308, '4t3gr732t5r3w9trawt4', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(23, '1622101839', 74, 1, 2, 21, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(24, '1622101875', 75, 8, 62, 472, 'tty4uqaw', '2021-05-27', 110.00, 'Pending', '2021-05-27 04:00:00', NULL),
(25, '1622101949', 76, 2, 17, 152, 't32t235r23t', '2021-05-27', 300.00, 'Pending', '2021-05-27 04:00:00', NULL),
(26, '1622102010', 77, 7, 54, 415, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 1200.00, 'Pending', '2021-05-27 04:00:00', NULL),
(27, '1622102152', 78, 4, 31, 237, 'r3trqrraw7', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(28, '1622102203', 78, 5, 38, 295, 'r3trqrraw7', '2021-05-27', 1110.00, 'Pending', '2021-05-27 04:00:00', NULL),
(29, '1622102218', 79, 2, 12, 104, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 1200.00, 'Pending', '2021-05-27 04:00:00', NULL),
(30, '1622102256', 78, 4, 33, 257, 'r3trqrraw7', '2021-05-27', 210.00, 'Pending', '2021-05-27 04:00:00', NULL),
(31, '1622102291', 78, 3, 26, 203, 'r3trqrraw7', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(32, '1622102318', 78, 7, 56, 425, 'r3trqrraw7', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(33, '1622102326', 80, 6, 47, 367, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 2100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(34, '1622102390', 81, 5, 37, 285, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 210.00, 'Pending', '2021-05-27 04:00:00', NULL),
(35, '1622102454', 82, 3, 28, 219, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 110.00, 'Pending', '2021-05-27 04:00:00', NULL),
(36, '1622102501', 83, 7, 56, 423, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 700.00, 'Pending', '2021-05-27 04:00:00', NULL),
(37, '1622102558', 84, 4, 30, 230, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 200.00, 'Pending', '2021-05-27 04:00:00', NULL),
(38, '1622102690', 85, 7, 53, 399, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 1100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(39, '1622102745', 86, 3, 20, 171, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 900.00, 'Pending', '2021-05-27 04:00:00', NULL),
(40, '1622102806', 87, 8, 61, 458, 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', '2021-05-27', 2750.00, 'Pending', '2021-05-27 04:00:00', NULL),
(41, '1622103021', 88, 3, 23, 191, 'Road jani na,basha jani na,Dhaka Keraniganj', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(42, '1622103113', 89, 3, 25, 200, 'Humayon chattar', '2021-05-27', 8000.00, 'Pending', '2021-05-27 04:00:00', NULL),
(43, '1622103183', 90, 4, 34, 263, 'Monpura dip', '2021-05-27', 110.00, 'Pending', '2021-05-27 04:00:00', NULL),
(44, '1622103329', 91, 3, 25, 201, 'Sent Martin dip', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(45, '1622103421', 92, 2, 16, 149, 'Naldanga', '2021-05-27', 310.00, 'Pending', '2021-05-27 04:00:00', NULL),
(46, '1622103528', 93, 5, 37, 290, 'Devilhouse', '2021-05-27', 15000.00, 'Pending', '2021-05-27 04:00:00', NULL),
(47, '1622103640', 94, 4, 34, 264, 'Address nai', '2021-05-27', 18000.00, 'Pending', '2021-05-27 04:00:00', NULL),
(48, '1622103706', 95, 6, 47, 367, 'Adminadmin', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(49, '1622103777', 96, 6, 47, 369, 'Admin1234', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(50, '1622103836', 97, 5, 38, 296, 'Koi jani', '2021-05-27', 20000.00, 'Pending', '2021-05-27 04:00:00', NULL),
(51, '1622103964', 98, 3, 29, 227, 'Lamonade', '2021-05-27', 90000.00, 'Pending', '2021-05-27 04:00:00', NULL),
(52, '1622104070', 99, 4, 34, 265, 'Barishal', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(53, '1622104136', 100, 6, 47, 365, 'Ok bye!', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(54, '1622105707', 101, 5, 38, 296, 'Vgtdddg', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(55, '1622105858', 102, 3, 25, 199, 'Uyh', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(56, '1622105916', 103, 5, 37, 287, 'Uhgf', '2021-05-27', 100.00, 'Pending', '2021-05-27 04:00:00', NULL),
(57, '1622105986', 104, 6, 46, 362, 'Ygff', '2021-05-27', 1000.00, 'Pending', '2021-05-27 04:00:00', NULL),
(58, '1622107376', 105, 2, 17, 152, 'Ugfr', '2021-05-27', 410.00, 'Pending', '2021-05-27 04:00:00', NULL),
(59, '1622624870', 106, 6, 47, 367, 'etretre', '2021-06-02', 100.00, 'Delivered', '2021-06-02 04:00:00', '2022-02-01 13:01:14'),
(60, '1632559790', 107, 6, 47, 365, 'Savar', '2021-09-25', 100.00, 'Approved', '2021-09-25 04:00:00', '2021-09-25 12:54:47'),
(61, '1632560169', 1, 2, 13, 114, 'Mirpur-1', '2021-09-25', 100.00, 'Delivered', '2021-09-25 04:00:00', '2022-02-01 13:02:14'),
(62, '1666605031', 1, 8, 63, 478, 'Aut non explicabo Q', '2022-10-24', 300.00, 'Pending', '2022-10-23 18:00:00', NULL),
(63, '1666932185', 108, 5, 38, 296, 'Consequatur Eu est', '2022-10-28', 4000.00, 'Pending', '2022-10-27 18:00:00', NULL),
(64, '1667198462', 1, 2, 13, 118, 'Repellendus Et tota', '2022-10-31', 700.00, 'Pending', '2022-10-30 18:00:00', NULL),
(65, '1667298212', 1, 1, 7, 62, 'Mirpur-1', '2022-11-01', 600.00, 'Pending', '2022-10-31 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `pack_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_name`, `product_qty`, `product_price`, `pack_size`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-19 04:00:00', NULL),
(2, 1, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-19 04:00:00', NULL),
(3, 1, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-19 04:00:00', NULL),
(4, 2, 'Aroma -3GR', 14, 100, '25 gm', '2021-05-19 04:00:00', NULL),
(5, 2, 'Amcozole-5EC', 5, 110, '100 ml', '2021-05-19 04:00:00', NULL),
(6, 3, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-19 04:00:00', NULL),
(7, 4, 'Tornedo-75WG', 1, 100, '100 gm', '2021-05-19 04:00:00', NULL),
(8, 4, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-19 04:00:00', NULL),
(9, 5, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-19 04:00:00', NULL),
(10, 6, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-19 04:00:00', NULL),
(11, 7, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-25 04:00:00', NULL),
(12, 8, 'Vulcan -50DF', 1, 100, '100 gm', '2021-05-25 04:00:00', NULL),
(13, 8, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-25 04:00:00', NULL),
(14, 8, 'Aroma -3GR', 1, 100, '25 gm', '2021-05-25 04:00:00', NULL),
(15, 8, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-25 04:00:00', NULL),
(16, 8, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-25 04:00:00', NULL),
(17, 8, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-25 04:00:00', NULL),
(18, 9, 'Vulcan -50DF', 1, 100, '100 gm', '2021-05-25 04:00:00', NULL),
(19, 9, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-25 04:00:00', NULL),
(20, 9, 'Aroma -3GR', 1, 100, '25 gm', '2021-05-25 04:00:00', NULL),
(21, 9, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-25 04:00:00', NULL),
(22, 9, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-25 04:00:00', NULL),
(23, 9, 'Tornedo-75WG', 1, 100, '100 gm', '2021-05-25 04:00:00', NULL),
(24, 9, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-25 04:00:00', NULL),
(25, 10, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(26, 11, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(27, 11, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(28, 11, 'Aroma -3GR', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(29, 11, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-27 04:00:00', NULL),
(30, 11, 'Vulcan -50DF', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(31, 11, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-27 04:00:00', NULL),
(32, 12, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(33, 13, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(34, 13, 'Aroma -3GR', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(35, 13, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-27 04:00:00', NULL),
(36, 13, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(37, 14, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-27 04:00:00', NULL),
(38, 14, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(39, 15, 'Vulcan -50DF', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(40, 16, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(41, 17, 'Vulcan -50DF', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(43, 19, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-27 04:00:00', NULL),
(44, 20, 'Vulcan -50DF', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(45, 20, 'Aroma -3GR', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(46, 21, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-27 04:00:00', NULL),
(47, 21, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(48, 22, 'Tornedo-75WG', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(49, 23, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(50, 24, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-27 04:00:00', NULL),
(51, 25, 'Vulcan -50DF', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(52, 25, 'Aroma -3GR', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(53, 25, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(54, 26, 'Vulcan -50DF', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(55, 26, 'Aroma -3GR', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(56, 26, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-27 04:00:00', NULL),
(57, 27, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(58, 28, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-27 04:00:00', NULL),
(59, 28, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-27 04:00:00', NULL),
(60, 29, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-27 04:00:00', NULL),
(61, 29, 'Aroma -3GR', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(62, 29, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(63, 30, 'Tornedo-75WG', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(64, 30, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-27 04:00:00', NULL),
(65, 31, 'Vulcan -50DF', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(66, 32, 'Aroma -3GR', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(67, 33, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-27 04:00:00', NULL),
(68, 33, 'Aroma -3GR', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(69, 33, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-27 04:00:00', NULL),
(70, 34, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-27 04:00:00', NULL),
(71, 34, 'Aroma -3GR', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(72, 35, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-27 04:00:00', NULL),
(73, 36, 'Aroma -3GR', 7, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(74, 37, 'Tornedo-75WG', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(75, 37, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(76, 38, 'Vulcan -50DF', 11, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(77, 39, 'Vulcan -50DF', 9, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(78, 40, 'Amcozole-5EC', 25, 110, '100 ml', '2021-05-27 04:00:00', NULL),
(79, 41, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(80, 42, 'Vulcan -50DF', 80, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(81, 43, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-27 04:00:00', NULL),
(82, 44, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(83, 45, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-27 04:00:00', NULL),
(84, 45, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(85, 45, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(86, 46, 'Mixt-18WP', 150, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(87, 47, 'Mixt-18WP', 180, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(88, 48, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(89, 49, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(90, 50, 'Mixt-18WP', 200, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(91, 51, 'Freeze-5SG', 900, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(92, 52, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(93, 53, 'Tornedo-75WG', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(94, 54, 'Mixt-18WP', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(95, 55, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(96, 56, 'Aroma -3GR', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(97, 57, 'Expose-85WP', 1, 1000, '25 gm', '2021-05-27 04:00:00', NULL),
(98, 58, 'Vulcan -50DF', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(99, 58, 'Freeze-5SG', 1, 100, '25 gm', '2021-05-27 04:00:00', NULL),
(100, 58, 'Amcozole-5EC', 1, 110, '100 ml', '2021-05-27 04:00:00', NULL),
(101, 58, 'Tornedo-75WG', 1, 100, '100 gm', '2021-05-27 04:00:00', NULL),
(102, 59, 'Mixt-18WP', 1, 100, '100 gm', '2021-06-02 04:00:00', NULL),
(103, 60, 'Freeze-5SG', 1, 100, '25 gm', '2021-09-25 04:00:00', NULL),
(104, 61, 'Mixt-18WP', 1, 100, '100 gm', '2021-09-25 04:00:00', NULL),
(105, 62, 'Freeze-5SG', 1, 100, '25 gm', '2022-10-23 18:00:00', NULL),
(106, 62, 'Mixt-18WP', 1, 100, '100 gm', '2022-10-23 18:00:00', NULL),
(107, 62, 'Mixt-18WP', 1, 100, '100 gm', '2022-10-23 18:00:00', NULL),
(108, 63, 'Expose-85WP', 4, 1000, '25 gm', '2022-10-27 18:00:00', NULL),
(109, 64, 'Freeze-5SG', 7, 100, '25 gm', '2022-10-30 18:00:00', NULL),
(110, 65, 'Tornedo-75WG', 1, 100, '100 gm', '2022-10-31 18:00:00', NULL),
(111, 65, 'Vulcan -50DF', 1, 100, '100 gm', '2022-10-31 18:00:00', NULL),
(112, 65, 'Vulcan -50DF', 4, 100, '100 gm', '2022-10-31 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner_name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bank Asia', 'bank-asia-2021-04-18607bd7407af2f.webp', '1', '2021-04-14 23:45:10', '2021-04-18 00:52:48'),
(2, 'dfdf', 'dfdf-2021-04-18607bd75982362.webp', '1', '2021-04-14 23:45:23', '2021-04-18 00:53:13'),
(3, 'We', 'we-2021-04-156077d301c29ac.jpg', '1', '2021-04-14 23:45:38', '2021-04-14 23:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details_bn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `composition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `slug`, `product_name_bn`, `product_details`, `product_details_bn`, `composition`, `meta`, `image`, `status`, `created_at`, `updated_at`) VALUES
(18, 8, 'Exposs', 'exposs', 'Exposs', '<p>&nbsp;fugit illum iusto magni minus perferendis porro quisquam quo ratione repellendus reprehenderit saepe sapiente ullam ut? Aperiam dolore dolorum, eveniet expedita laboriosam totam! Iusto, laborum recusandae.<br></p>', '<p>&nbsp;fugit illum iusto magni minus perferendis porro quisquam quo ratione repellendus reprehenderit saepe sapiente ullam ut? Aperiam dolore dolorum, eveniet expedita laboriosam totam! Iusto, laborum recusandae.<br></p>', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus architecto doloribus', ', ex molestiae officia quis veniam. Alias aliquid, consequuntur delectus dolores ea eius fuga', 'exposs-6369e8d5c9a45-2022-11-08.jpg', 1, '2022-11-07 23:27:51', '2022-11-07 23:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `size_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(31, 18, 13, '100', 300, '2022-11-07 23:27:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratings` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewTitle` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `product_id`, `ratings`, `review`, `reviewTitle`, `nickname`, `email`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '14', '4', 'The .disabled class uses pointer-events: none to try to disable the link functionality of <a>s, but that CSS property is not yet standardized. In addition, even in browsers that do support pointer-events: none, keyboard navigation remains unaffected, meaning that sighted keyboard users and', 'dbgshhgfghf', 'fdhfhf', 'safin@gmail.com', NULL, '2022-10-21 07:17:17', '2022-10-21 07:17:17'),
(2, '14', '5', 'The .disabled class uses pointer-events: none to try to disable the link functionality of <a>s, but that CSS property is not yet standardized. In addition, even in browsers that do support pointer-events: none, keyboard navigation remains unaffected, meaning that sighted keyboard users and', 'dbgshhgfghf', 'fdhfhf', 'safin@gmail.com', NULL, '2022-10-21 07:17:56', '2022-10-21 07:17:56'),
(3, '14', '5', 'The .disabled class uses pointer-events: none to try to disable the link functionality of <a>s, but that CSS property is not yet standardized. In addition, even in browsers that do support pointer-events: none, keyboard navigation remains unaffected, meaning that sighted keyboard users and', 'dbgshhgfghf', 'hdsjhdjas', 'admin@admin.com', NULL, '2022-10-21 07:20:26', '2022-10-21 07:20:26'),
(4, '14', '2', 'Do more with buttons. Control button states or create groups of buttons for more components like toolbars.', 'Do more with buttons', 'Nahid', 'nahid@gmail.com', NULL, '2022-10-21 08:22:19', '2022-10-21 08:22:19'),
(5, '14', '4', 'Do more with buttons. Control button states or create groups of buttons for more components like toolbars.', 'Do more with buttons', 'Nahid', 'nahid@gmail.com', NULL, '2022-10-21 08:25:11', '2022-10-21 08:25:11'),
(6, '14', '5', 'Do more with buttons. Control button states or create groups of buttons for more components like toolbars.', 'Do more with buttons', 'Nahid', 'nahid@gmail.com', NULL, '2022-10-21 08:25:37', '2022-10-21 08:25:37'),
(7, '14', '3', 'The checked state for these buttons is only updated via click event on the button. If you use another method to update the input', 'Do more with buttons', 'Nahid', 'admin@admin.com', NULL, '2022-10-21 10:14:07', '2022-10-21 10:14:07'),
(8, '14', '3', 'The checked state for these buttons is only updated via click event on the button. If you use another method to update the input', 'Do more with buttons', 'Nahid', 'nahid@gmail.com', NULL, '2022-10-21 10:14:31', '2022-10-21 10:14:31'),
(9, '12', '5', 'Sed praesentium nostvbbfbzfbbvbcvbcbcbcvbcvbcvbvcbcbv', 'Dolorem irure modi ebv', 'Jenna Guer', 'qabimi@mailinator.com', NULL, '2022-10-31 00:42:50', '2022-10-31 00:42:50'),
(10, '18', '4', 'Go Make Something Awesome\r\nFont Awesome is the internet\'s icon library and toolkit used by millions of designers, developers, and content creators.\r\n\r\nMade with  and  in Bentonville, Boston, Chicago, Grand Rapids, Joplin, Kansas City, Seattle, Tampa, and Vergennes.', 'Do more with buttons', 'Nahid', 'safin@gmail.com', NULL, '2022-11-08 03:04:43', '2022-11-08 03:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Mr Admin', 'admin', '2021-04-12 18:00:00', NULL),
(2, 'Mr User', 'user', '2021-04-12 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'logo.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_email`, `company_phone`, `company_mobile`, `company_fax`, `company_address`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'update@gmail.com', '985412', '01879546821', '152584', 'Mirpur-1', 'logo.png', '2021-04-19 16:57:46', '2021-04-19 11:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size_name`, `status`, `created_at`, `updated_at`) VALUES
(11, '25 gm', 1, '2021-05-19 09:12:23', '2021-05-19 09:12:23'),
(12, '50 gm', 1, '2021-05-19 09:12:31', '2021-05-19 09:12:31'),
(13, '100 gm', 1, '2021-05-19 09:12:40', '2021-05-19 09:12:40'),
(14, '500 gm', 1, '2021-05-19 09:12:58', '2021-05-19 09:12:58'),
(15, '1 kg', 1, '2021-05-19 09:13:26', '2021-05-19 09:13:26'),
(16, '50 ml', 1, '2021-05-19 09:14:08', '2021-05-19 09:14:08'),
(17, '100 ml', 1, '2021-05-19 09:14:16', '2021-05-19 09:14:16'),
(18, '25 ml', 1, '2021-05-19 09:14:28', '2021-05-19 09:14:28'),
(19, '400 ml', 1, '2021-05-19 09:14:36', '2021-05-19 09:14:36'),
(20, '1 Ltr', 1, '2021-05-19 09:14:59', '2021-05-19 09:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 = main , 2 = quality page , 3 = support page',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `position`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Slider', '2', 'slider-2021-04-18607bdf63d3fd4.jpg', 1, '2021-04-18 01:27:32', '2021-04-18 01:27:32'),
(2, 'QSlider-2', '2', 'qslider-2-2021-04-18607bdf7a20934.jpg', 1, '2021-04-18 01:27:54', '2021-04-18 01:27:54'),
(3, 'Support Slider', '3', 'support-slider-2021-04-18607bdfcc1046d.jpg', 1, '2021-04-18 01:29:16', '2021-04-18 01:29:16'),
(4, 'Support Slider-2', '3', 'support-slider-2-2021-04-18607bdfda933b1.jpg', 1, '2021-04-18 01:29:30', '2021-04-18 01:29:30'),
(5, 'Support Slider-3', '3', 'support-slider-3-2021-04-18607bdfebd9d2d.jpg', 1, '2021-04-18 01:29:48', '2021-04-18 01:29:48'),
(7, 'Seed-1', '5', 'seed-1-2021-04-286088f9eae0e71.webp', 1, '2021-04-28 00:00:11', '2021-04-28 00:00:11'),
(8, 'Seed-2', '5', 'seed-2-2021-04-286088f9ff3e9f9.webp', 1, '2021-04-28 00:00:31', '2021-04-28 00:00:31'),
(9, 'Seed-3', '5', 'seed-3-2021-04-286088fa0d069bd.webp', 1, '2021-04-28 00:00:45', '2021-04-28 00:00:45'),
(10, 'Packaging-1', '4', 'packaging-1-2021-04-286088fa3c28723.webp', 1, '2021-04-28 00:01:32', '2021-04-28 00:01:32'),
(11, 'Packaging-2', '4', 'packaging-2-2021-04-286088fa4881ffe.webp', 1, '2021-04-28 00:01:44', '2021-04-28 00:01:44'),
(12, 'Packaging-3', '4', 'packaging-3-2021-04-286088fa7b03514.webp', 1, '2021-04-28 00:02:35', '2021-04-28 00:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specifications`
--

INSERT INTO `specifications` (`id`, `product_id`, `specification`, `created_at`, `updated_at`) VALUES
(1, '8', '<table class=\"table table-bordered\"><tbody><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Processor Brand</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Intel</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Processor Type</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Intel Celeron</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Hard Drive Capacity</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">64 GB</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Processor Core Type</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Quad Core</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Manufacturer</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">HP</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Condition</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">New</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Processor Speed</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">1.1 GHz</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Manufacturer Part Number</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">6G501UA#ABA</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Wireless Technology</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Wi-Fi, Bluetooth combo(26), 802.11a/b/g/n/ac&nbsp;(1x1)(19a), MU-MIMO</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">RAM Memory</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">4 GB</span><br></td></tr></tbody></table><br><table class=\"table\" style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; caption-side: bottom; width: 722.906px; color: var(--bs-table-color); --bs-table-color:var(--bs-body-color); --bs-table-bg:transparent; --bs-table-border-color:var(--bs-border-color); --bs-table-accent-bg:transparent; --bs-table-striped-color:var(--bs-body-color); --bs-table-striped-bg:rgba(0, 0, 0, 0.05); --bs-table-active-color:var(--bs-body-color); --bs-table-active-bg:rgba(0, 0, 0, 0.1); --bs-table-hover-color:var(--bs-body-color); --bs-table-hover-bg:rgba(0, 0, 0, 0.075); vertical-align: top; border-color: var(--bs-table-border-color); font-family: Poppins, sans-serif; font-size: 16px;\"></table>', '2022-10-22 23:21:03', '2022-10-22 23:21:03'),
(2, '14', '<table class=\"table table-bordered\"><tbody><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Processor Brand</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Intel</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Processor Type</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Intel Celeron</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Hard Drive Capacity</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">128 GB</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Processor Core Type</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Quad Core</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Manufacturer</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">HP</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Condition</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">New ok</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Processor Speed</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">1.1 GHz</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Manufacturer Part Number</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">6G501UA#ABA</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Wireless Technology</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Wi-Fi, Bluetooth combo(26), 802.11a/b/g/n/ac&nbsp;(1x1)(19a), MU-MIMO</span><br></td></tr><tr><td><h3 class=\"flex items-center mv0 lh-copy f5 pb1 dark-gray\" style=\"display: flex; align-items: center; line-height: 1.5; color: rgb(46, 47, 50); padding-bottom: 4px; margin-bottom: 0px; margin-top: 0px; font-size: 16px; font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">RAM Memory</h3></td><td><span style=\"color: rgb(70, 71, 74); font-family: Bogle, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">4 GB</span><br></td></tr></tbody></table><br><table class=\"table\" style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; caption-side: bottom; width: 722.906px; color: var(--bs-table-color); --bs-table-color:var(--bs-body-color); --bs-table-bg:transparent; --bs-table-border-color:var(--bs-border-color); --bs-table-accent-bg:transparent; --bs-table-striped-color:var(--bs-body-color); --bs-table-striped-bg:rgba(0, 0, 0, 0.05); --bs-table-active-color:var(--bs-body-color); --bs-table-active-bg:rgba(0, 0, 0, 0.1); --bs-table-hover-color:var(--bs-body-color); --bs-table-hover-bg:rgba(0, 0, 0, 0.075); vertical-align: top; border-color: var(--bs-table-border-color); font-family: Poppins, sans-serif; font-size: 16px;\"></table>', '2022-10-29 23:11:53', '2022-10-30 00:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(3) NOT NULL,
  `district_id` int(2) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `name`, `bn_name`) VALUES
(1, 1, 'Debidwar', '???????????????????????????'),
(2, 1, 'Barura', '??????????????????'),
(3, 1, 'Brahmanpara', '???????????????????????????????????????'),
(4, 1, 'Chandina', '????????????????????????'),
(5, 1, 'Chauddagram', '??????????????????????????????'),
(6, 1, 'Daudkandi', '??????????????????????????????'),
(7, 1, 'Homna', '???????????????'),
(8, 1, 'Laksam', '??????????????????'),
(9, 1, 'Muradnagar', '????????????????????????'),
(10, 1, 'Nangalkot', '???????????????????????????'),
(11, 1, 'Comilla Sadar', '???????????????????????? ?????????'),
(12, 1, 'Meghna', '???????????????'),
(13, 1, 'Monohargonj', '???????????????????????????'),
(14, 1, 'Sadarsouth', '????????? ??????????????????'),
(15, 1, 'Titas', '???????????????'),
(16, 1, 'Burichang', '?????????????????????'),
(17, 1, 'Lalmai', '??????????????????'),
(18, 2, 'Chhagalnaiya', '???????????????????????????'),
(19, 2, 'Feni Sadar', '???????????? ?????????'),
(20, 2, 'Sonagazi', '????????????????????????'),
(21, 2, 'Fulgazi', '?????????????????????'),
(22, 2, 'Parshuram', '?????????????????????'),
(23, 2, 'Daganbhuiyan', '????????????????????????'),
(24, 3, 'Brahmanbaria Sadar', '?????????????????????????????????????????? ?????????'),
(25, 3, 'Kasba', '????????????'),
(26, 3, 'Nasirnagar', '????????????????????????'),
(27, 3, 'Sarail', '???????????????'),
(28, 3, 'Ashuganj', '?????????????????????'),
(29, 3, 'Akhaura', '??????????????????'),
(30, 3, 'Nabinagar', '??????????????????'),
(31, 3, 'Bancharampur', '????????????????????????????????????'),
(32, 3, 'Bijoynagar', '?????????????????????'),
(33, 4, 'Rangamati Sadar', '?????????????????????????????? ?????????'),
(34, 4, 'Kaptai', '?????????????????????'),
(35, 4, 'Kawkhali', '?????????????????????'),
(36, 4, 'Baghaichari', '????????????????????????'),
(37, 4, 'Barkal', '????????????'),
(38, 4, 'Langadu', '???????????????'),
(39, 4, 'Rajasthali', '????????????????????????'),
(40, 4, 'Belaichari', '????????????????????????'),
(41, 4, 'Juraichari', '?????????????????????'),
(42, 4, 'Naniarchar', '???????????????????????????'),
(43, 5, 'Noakhali Sadar', '??????????????????????????? ?????????'),
(44, 5, 'Companiganj', '????????????????????????????????????'),
(45, 5, 'Begumganj', '????????????????????????'),
(46, 5, 'Hatia', '?????????????????????'),
(47, 5, 'Subarnachar', '????????????????????????'),
(48, 5, 'Kabirhat', '?????????????????????'),
(49, 5, 'Senbug', '??????????????????'),
(50, 5, 'Chatkhil', '??????????????????'),
(51, 5, 'Sonaimori', '??????????????????????????????'),
(52, 6, 'Haimchar', '??????????????????'),
(53, 6, 'Kachua', '??????????????????'),
(54, 6, 'Shahrasti', '???????????????????????????	'),
(55, 6, 'Chandpur Sadar', '????????????????????? ?????????'),
(56, 6, 'Matlab South', '???????????? ??????????????????'),
(57, 6, 'Hajiganj', '????????????????????????'),
(58, 6, 'Matlab North', '???????????? ???????????????'),
(59, 6, 'Faridgonj', '????????????????????????'),
(60, 7, 'Lakshmipur Sadar', '?????????????????????????????? ?????????'),
(61, 7, 'Kamalnagar', '??????????????????'),
(62, 7, 'Raipur', '??????????????????'),
(63, 7, 'Ramgati', '??????????????????'),
(64, 7, 'Ramganj', '?????????????????????'),
(65, 8, 'Rangunia', '??????????????????????????????'),
(66, 8, 'Sitakunda', '???????????????????????????'),
(67, 8, 'Mirsharai', '?????????????????????'),
(68, 8, 'Patiya', '???????????????'),
(69, 8, 'Sandwip', '????????????????????????'),
(70, 8, 'Banshkhali', '????????????????????????'),
(71, 8, 'Boalkhali', '???????????????????????????'),
(72, 8, 'Anwara', '????????????????????????'),
(73, 8, 'Chandanaish', '????????????????????????'),
(74, 8, 'Satkania', '???????????????????????????'),
(75, 8, 'Lohagara', '????????????????????????'),
(76, 8, 'Hathazari', '???????????????????????????'),
(77, 8, 'Fatikchhari', '?????????????????????'),
(78, 8, 'Raozan', '??????????????????'),
(79, 8, 'Karnafuli', '????????????????????????'),
(80, 9, 'Coxsbazar Sadar', '??????????????????????????? ?????????'),
(81, 9, 'Chakaria', '??????????????????'),
(82, 9, 'Kutubdia', '???????????????????????????'),
(83, 9, 'Ukhiya', '???????????????'),
(84, 9, 'Moheshkhali', '????????????????????????'),
(85, 9, 'Pekua', '??????????????????'),
(86, 9, 'Ramu', '????????????'),
(87, 9, 'Teknaf', '??????????????????'),
(88, 10, 'Khagrachhari Sadar', '?????????????????????????????? ?????????'),
(89, 10, 'Dighinala', '????????????????????????'),
(90, 10, 'Panchari', '?????????????????????'),
(91, 10, 'Laxmichhari', '???????????????????????????'),
(92, 10, 'Mohalchari', '????????????????????????'),
(93, 10, 'Manikchari', '???????????????????????????'),
(94, 10, 'Ramgarh', '??????????????????'),
(95, 10, 'Matiranga', '??????????????????????????????'),
(96, 10, 'Guimara', '?????????????????????'),
(97, 11, 'Bandarban Sadar', '??????????????????????????? ?????????'),
(98, 11, 'Alikadam', '??????????????????'),
(99, 11, 'Naikhongchhari', '????????????????????????????????????'),
(100, 11, 'Rowangchhari', '????????????????????????'),
(101, 11, 'Lama', '????????????'),
(102, 11, 'Ruma', '????????????'),
(103, 11, 'Thanchi', '???????????????'),
(104, 12, 'Belkuchi', '?????????????????????'),
(105, 12, 'Chauhali', '??????????????????'),
(106, 12, 'Kamarkhand', '???????????????????????????'),
(107, 12, 'Kazipur', '?????????????????????'),
(108, 12, 'Raigonj', '?????????????????????'),
(109, 12, 'Shahjadpur', '???????????????????????????'),
(110, 12, 'Sirajganj Sadar', '??????????????????????????? ?????????'),
(111, 12, 'Tarash', '???????????????'),
(112, 12, 'Ullapara', '???????????????????????????'),
(113, 13, 'Sujanagar', '?????????????????????'),
(114, 13, 'Ishurdi', '?????????????????????'),
(115, 13, 'Bhangura', '????????????????????????'),
(116, 13, 'Pabna Sadar', '??????????????? ?????????'),
(117, 13, 'Bera', '????????????'),
(118, 13, 'Atghoria', '?????????????????????'),
(119, 13, 'Chatmohar', '?????????????????????'),
(120, 13, 'Santhia', '?????????????????????'),
(121, 13, 'Faridpur', '?????????????????????'),
(122, 14, 'Kahaloo', '??????????????????'),
(123, 14, 'Bogra Sadar', '??????????????? ?????????'),
(124, 14, 'Shariakandi', '????????????????????????????????????'),
(125, 14, 'Shajahanpur', '??????????????????????????????'),
(126, 14, 'Dupchanchia', '??????????????????????????????'),
(127, 14, 'Adamdighi', '?????????????????????'),
(128, 14, 'Nondigram', '??????????????????????????????'),
(129, 14, 'Sonatala', '?????????????????????'),
(130, 14, 'Dhunot', '????????????'),
(131, 14, 'Gabtali', '??????????????????'),
(132, 14, 'Sherpur', '??????????????????'),
(133, 14, 'Shibganj', '?????????????????????'),
(134, 15, 'Paba', '?????????'),
(135, 15, 'Durgapur', '???????????????????????????'),
(136, 15, 'Mohonpur', '?????????????????????'),
(137, 15, 'Charghat', '??????????????????'),
(138, 15, 'Puthia', '?????????????????????'),
(139, 15, 'Bagha', '????????????'),
(140, 15, 'Godagari', '???????????????????????????'),
(141, 15, 'Tanore', '???????????????'),
(142, 15, 'Bagmara', '?????????????????????'),
(143, 16, 'Natore Sadar', '??????????????? ?????????'),
(144, 16, 'Singra', '??????????????????'),
(145, 16, 'Baraigram', '??????????????????????????????'),
(146, 16, 'Bagatipara', '?????????????????????????????????'),
(147, 16, 'Lalpur', '??????????????????'),
(148, 16, 'Gurudaspur', '??????????????????????????????'),
(149, 16, 'Naldanga', '????????????????????????'),
(150, 17, 'Akkelpur', '???????????????????????????'),
(151, 17, 'Kalai', '???????????????'),
(152, 17, 'Khetlal', '????????????????????????'),
(153, 17, 'Panchbibi', '????????????????????????'),
(154, 17, 'Joypurhat Sadar', '???????????????????????? ?????????'),
(155, 18, 'Chapainawabganj Sadar', '?????????????????????????????????????????? ?????????'),
(156, 18, 'Gomostapur', '??????????????????????????????'),
(157, 18, 'Nachol', '???????????????'),
(158, 18, 'Bholahat', '?????????????????????'),
(159, 18, 'Shibganj', '?????????????????????'),
(160, 19, 'Mohadevpur', '???????????????????????????'),
(161, 19, 'Badalgachi', '?????????????????????'),
(162, 19, 'Patnitala', '????????????????????????'),
(163, 19, 'Dhamoirhat', '????????????????????????'),
(164, 19, 'Niamatpur', '???????????????????????????'),
(165, 19, 'Manda', '??????????????????'),
(166, 19, 'Atrai', '??????????????????'),
(167, 19, 'Raninagar', '?????????????????????'),
(168, 19, 'Naogaon Sadar', '??????????????? ?????????'),
(169, 19, 'Porsha', '???????????????'),
(170, 19, 'Sapahar', '?????????????????????'),
(171, 20, 'Manirampur', '???????????????????????????'),
(172, 20, 'Abhaynagar', '??????????????????'),
(173, 20, 'Bagherpara', '???????????????????????????'),
(174, 20, 'Chougachha', '??????????????????'),
(175, 20, 'Jhikargacha', '????????????????????????'),
(176, 20, 'Keshabpur', '?????????????????????'),
(177, 20, 'Jessore Sadar', '???????????? ?????????'),
(178, 20, 'Sharsha', '??????????????????'),
(179, 21, 'Assasuni', '?????????????????????'),
(180, 21, 'Debhata', '?????????????????????'),
(181, 21, 'Kalaroa', '?????????????????????'),
(182, 21, 'Satkhira Sadar', '??????????????????????????? ?????????'),
(183, 21, 'Shyamnagar', '????????????????????????'),
(184, 21, 'Tala', '????????????'),
(185, 21, 'Kaliganj', '????????????????????????'),
(186, 22, 'Mujibnagar', '????????????????????????'),
(187, 22, 'Meherpur Sadar', '???????????????????????? ?????????'),
(188, 22, 'Gangni', '???????????????'),
(189, 23, 'Narail Sadar', '??????????????? ?????????'),
(190, 23, 'Lohagara', '?????????????????????'),
(191, 23, 'Kalia', '??????????????????'),
(192, 24, 'Chuadanga Sadar', '????????????????????????????????? ?????????'),
(193, 24, 'Alamdanga', '???????????????????????????'),
(194, 24, 'Damurhuda', '??????????????????????????????'),
(195, 24, 'Jibannagar', '?????????????????????'),
(196, 25, 'Kushtia Sadar', '???????????????????????? ?????????'),
(197, 25, 'Kumarkhali', '???????????????????????????'),
(198, 25, 'Khoksa', '???????????????'),
(199, 25, 'Mirpur', '??????????????????'),
(200, 25, 'Daulatpur', '?????????????????????'),
(201, 25, 'Bheramara', '???????????????????????????'),
(202, 26, 'Shalikha', '??????????????????'),
(203, 26, 'Sreepur', '?????????????????????'),
(204, 26, 'Magura Sadar', '?????????????????? ?????????'),
(205, 26, 'Mohammadpur', '???????????????????????????'),
(206, 27, 'Paikgasa', '????????????????????????'),
(207, 27, 'Fultola', '??????????????????'),
(208, 27, 'Digholia', '?????????????????????'),
(209, 27, 'Rupsha', '???????????????'),
(210, 27, 'Terokhada', '?????????????????????'),
(211, 27, 'Dumuria', '????????????????????????'),
(212, 27, 'Botiaghata', '??????????????????????????????'),
(213, 27, 'Dakop', '???????????????'),
(214, 27, 'Koyra', '????????????'),
(215, 28, 'Fakirhat', '?????????????????????'),
(216, 28, 'Bagerhat Sadar', '???????????????????????? ?????????'),
(217, 28, 'Mollahat', '???????????????????????????'),
(218, 28, 'Sarankhola', '?????????????????????'),
(219, 28, 'Rampal', '??????????????????'),
(220, 28, 'Morrelganj', '???????????????????????????'),
(221, 28, 'Kachua', '???????????????'),
(222, 28, 'Mongla', '???????????????'),
(223, 28, 'Chitalmari', '????????????????????????'),
(224, 29, 'Jhenaidah Sadar', '????????????????????? ?????????'),
(225, 29, 'Shailkupa', '?????????????????????'),
(226, 29, 'Harinakundu', '?????????????????????????????????'),
(227, 29, 'Kaliganj', '????????????????????????'),
(228, 29, 'Kotchandpur', '??????????????????????????????'),
(229, 29, 'Moheshpur', '?????????????????????'),
(230, 30, 'Jhalakathi Sadar', '????????????????????? ?????????'),
(231, 30, 'Kathalia', '????????????????????????'),
(232, 30, 'Nalchity', '??????????????????'),
(233, 30, 'Rajapur', '?????????????????????'),
(234, 31, 'Bauphal', '???????????????'),
(235, 31, 'Patuakhali Sadar', '??????????????????????????? ?????????'),
(236, 31, 'Dumki', '???????????????'),
(237, 31, 'Dashmina', '??????????????????'),
(238, 31, 'Kalapara', '????????????????????????'),
(239, 31, 'Mirzaganj', '??????????????????????????????'),
(240, 31, 'Galachipa', '?????????????????????'),
(241, 31, 'Rangabali', '??????????????????????????????'),
(242, 32, 'Pirojpur Sadar', '???????????????????????? ?????????'),
(243, 32, 'Nazirpur', '????????????????????????'),
(244, 32, 'Kawkhali', '?????????????????????'),
(245, 32, 'Zianagar', '?????????????????????'),
(246, 32, 'Bhandaria', '??????????????????????????????'),
(247, 32, 'Mathbaria', '????????????????????????'),
(248, 32, 'Nesarabad', '???????????????????????????'),
(249, 33, 'Barisal Sadar', '?????????????????? ?????????'),
(250, 33, 'Bakerganj', '???????????????????????????'),
(251, 33, 'Babuganj', '????????????????????????'),
(252, 33, 'Wazirpur', '?????????????????????'),
(253, 33, 'Banaripara', '??????????????????????????????'),
(254, 33, 'Gournadi', '??????????????????'),
(255, 33, 'Agailjhara', '????????????????????????'),
(256, 33, 'Mehendiganj', '????????????????????????????????????'),
(257, 33, 'Muladi', '??????????????????'),
(258, 33, 'Hizla', '???????????????'),
(259, 34, 'Bhola Sadar', '???????????? ?????????'),
(260, 34, 'Borhan Sddin', '?????????????????? ??????????????????'),
(261, 34, 'Charfesson', '????????????????????????'),
(262, 34, 'Doulatkhan', '?????????????????????'),
(263, 34, 'Monpura', '??????????????????'),
(264, 34, 'Tazumuddin', '???????????????????????????'),
(265, 34, 'Lalmohan', '?????????????????????'),
(266, 35, 'Amtali', '???????????????'),
(267, 35, 'Barguna Sadar', '?????????????????? ?????????'),
(268, 35, 'Betagi', '??????????????????'),
(269, 35, 'Bamna', '???????????????'),
(270, 35, 'Pathorghata', '????????????????????????'),
(271, 35, 'Taltali', '??????????????????'),
(272, 36, 'Balaganj', '????????????????????????'),
(273, 36, 'Beanibazar', '?????????????????????????????????'),
(274, 36, 'Bishwanath', '????????????????????????'),
(275, 36, 'Companiganj', '????????????????????????????????????'),
(276, 36, 'Fenchuganj', '??????????????????????????????'),
(277, 36, 'Golapganj', '???????????????????????????'),
(278, 36, 'Gowainghat', '???????????????????????????'),
(279, 36, 'Jaintiapur', '???????????????????????????'),
(280, 36, 'Kanaighat', '????????????????????????'),
(281, 36, 'Sylhet Sadar', '??????????????? ?????????'),
(282, 36, 'Zakiganj', '?????????????????????'),
(283, 36, 'Dakshinsurma', '?????????????????? ???????????????'),
(284, 36, 'Osmaninagar', '?????????????????? ?????????'),
(285, 37, 'Barlekha', '??????????????????'),
(286, 37, 'Kamolganj', '?????????????????????'),
(287, 37, 'Kulaura', '?????????????????????'),
(288, 37, 'Moulvibazar Sadar', '?????????????????????????????? ?????????'),
(289, 37, 'Rajnagar', '??????????????????'),
(290, 37, 'Sreemangal', '???????????????????????????'),
(291, 37, 'Juri', '????????????'),
(292, 38, 'Nabiganj', '?????????????????????'),
(293, 38, 'Bahubal', '??????????????????'),
(294, 38, 'Ajmiriganj', '??????????????????????????????'),
(295, 38, 'Baniachong', '????????????????????????'),
(296, 38, 'Lakhai', '???????????????'),
(297, 38, 'Chunarughat', '???????????????????????????'),
(298, 38, 'Habiganj Sadar', '????????????????????? ?????????'),
(299, 38, 'Madhabpur', '?????????????????????'),
(300, 39, 'Sunamganj Sadar', '??????????????????????????? ?????????'),
(301, 39, 'South Sunamganj', '?????????????????? ???????????????????????????'),
(302, 39, 'Bishwambarpur', '????????????????????????????????????'),
(303, 39, 'Chhatak', '????????????'),
(304, 39, 'Jagannathpur', '??????????????????????????????'),
(305, 39, 'Dowarabazar', '????????????????????????????????????'),
(306, 39, 'Tahirpur', '????????????????????????'),
(307, 39, 'Dharmapasha', '????????????????????????'),
(308, 39, 'Jamalganj', '???????????????????????????'),
(309, 39, 'Shalla', '??????????????????'),
(310, 39, 'Derai', '???????????????'),
(311, 40, 'Belabo', '??????????????????'),
(312, 40, 'Monohardi', '?????????????????????'),
(313, 40, 'Narsingdi Sadar', '????????????????????? ?????????'),
(314, 40, 'Palash', '????????????'),
(315, 40, 'Raipura', '????????????????????????'),
(316, 40, 'Shibpur', '??????????????????'),
(317, 41, 'Kaliganj', '????????????????????????'),
(318, 41, 'Kaliakair', '???????????????????????????'),
(319, 41, 'Kapasia', '????????????????????????'),
(320, 41, 'Gazipur Sadar', '????????????????????? ?????????'),
(321, 41, 'Sreepur', '?????????????????????'),
(322, 42, 'Shariatpur Sadar', '???????????????????????? ?????????'),
(323, 42, 'Naria', '???????????????'),
(324, 42, 'Zajira', '??????????????????'),
(325, 42, 'Gosairhat', '???????????????????????????'),
(326, 42, 'Bhedarganj', '????????????????????????'),
(327, 42, 'Damudya', '????????????????????????'),
(328, 43, 'Araihazar', '??????????????????????????????'),
(329, 43, 'Bandar', '???????????????'),
(330, 43, 'Narayanganj Sadar', '?????????????????????????????? ?????????'),
(331, 43, 'Rupganj', '?????????????????????'),
(332, 43, 'Sonargaon', '????????????????????????'),
(333, 44, 'Basail', '??????????????????'),
(334, 44, 'Bhuapur', '????????????????????????'),
(335, 44, 'Delduar', '???????????????????????????'),
(336, 44, 'Ghatail', '??????????????????'),
(337, 44, 'Gopalpur', '????????????????????????'),
(338, 44, 'Madhupur', '??????????????????'),
(339, 44, 'Mirzapur', '???????????????????????????'),
(340, 44, 'Nagarpur', '?????????????????????'),
(341, 44, 'Sakhipur', '??????????????????'),
(342, 44, 'Tangail Sadar', '???????????????????????? ?????????'),
(343, 44, 'Kalihati', '????????????????????????'),
(344, 44, 'Dhanbari', '??????????????????'),
(345, 45, 'Itna', '????????????'),
(346, 45, 'Katiadi', '?????????????????????'),
(347, 45, 'Bhairab', '????????????'),
(348, 45, 'Tarail', '??????????????????'),
(349, 45, 'Hossainpur', '????????????????????????'),
(350, 45, 'Pakundia', '??????????????????????????????'),
(351, 45, 'Kuliarchar', '???????????????????????????'),
(352, 45, 'Kishoreganj Sadar', '??????????????????????????? ?????????'),
(353, 45, 'Karimgonj', '????????????????????????'),
(354, 45, 'Bajitpur', '????????????????????????'),
(355, 45, 'Austagram', '???????????????????????????'),
(356, 45, 'Mithamoin', '?????????????????????'),
(357, 45, 'Nikli', '???????????????'),
(358, 46, 'Harirampur', '???????????????????????????'),
(359, 46, 'Saturia', '????????????????????????'),
(360, 46, 'Manikganj Sadar', '??????????????????????????? ?????????'),
(361, 46, 'Gior', '????????????'),
(362, 46, 'Shibaloy', '??????????????????'),
(363, 46, 'Doulatpur', '?????????????????????'),
(364, 46, 'Singiar', '?????????????????????'),
(365, 47, 'Savar', '???????????????'),
(366, 47, 'Dhamrai', '??????????????????'),
(367, 47, 'Keraniganj', '??????????????????????????????'),
(368, 47, 'Nawabganj', '????????????????????????'),
(369, 47, 'Dohar', '???????????????'),
(370, 48, 'Munshiganj Sadar', '?????????????????????????????? ?????????'),
(371, 48, 'Sreenagar', '?????????????????????'),
(372, 48, 'Sirajdikhan', '??????????????????????????????'),
(373, 48, 'Louhajanj', '???????????????'),
(374, 48, 'Gajaria', '?????????????????????'),
(375, 48, 'Tongibari', '????????????????????????'),
(376, 49, 'Rajbari Sadar', '???????????????????????? ?????????'),
(377, 49, 'Goalanda', '???????????????????????????'),
(378, 49, 'Pangsa', '???????????????'),
(379, 49, 'Baliakandi', '???????????????????????????????????????'),
(380, 49, 'Kalukhali', '????????????????????????'),
(381, 50, 'Madaripur Sadar', '??????????????????????????? ?????????'),
(382, 50, 'Shibchar', '???????????????'),
(383, 50, 'Kalkini', '?????????????????????'),
(384, 50, 'Rajoir', '???????????????'),
(385, 51, 'Gopalganj Sadar', '??????????????????????????? ?????????'),
(386, 51, 'Kashiani', '???????????????????????????'),
(387, 51, 'Tungipara', '??????????????????????????????'),
(388, 51, 'Kotalipara', '?????????????????????????????????'),
(389, 51, 'Muksudpur', '???????????????????????????'),
(390, 52, 'Faridpur Sadar', '????????????????????? ?????????'),
(391, 52, 'Alfadanga', '??????????????????????????????'),
(392, 52, 'Boalmari', '???????????????????????????'),
(393, 52, 'Sadarpur', '??????????????????'),
(394, 52, 'Nagarkanda', '???????????????????????????'),
(395, 52, 'Bhanga', '??????????????????'),
(396, 52, 'Charbhadrasan', '???????????????????????????'),
(397, 52, 'Madhukhali', '?????????????????????'),
(398, 52, 'Saltha', '???????????????'),
(399, 53, 'Panchagarh Sadar', '????????????????????? ?????????'),
(400, 53, 'Debiganj', '????????????????????????'),
(401, 53, 'Boda', '????????????'),
(402, 53, 'Atwari', '????????????????????????'),
(403, 53, 'Tetulia', '???????????????????????????'),
(404, 54, 'Nawabganj', '????????????????????????'),
(405, 54, 'Birganj', '?????????????????????'),
(406, 54, 'Ghoraghat', '?????????????????????'),
(407, 54, 'Birampur', '????????????????????????'),
(408, 54, 'Parbatipur', '??????????????????????????????'),
(409, 54, 'Bochaganj', '????????????????????????'),
(410, 54, 'Kaharol', '?????????????????????'),
(411, 54, 'Fulbari', '?????????????????????'),
(412, 54, 'Dinajpur Sadar', '???????????????????????? ?????????'),
(413, 54, 'Hakimpur', '????????????????????????'),
(414, 54, 'Khansama', '?????????????????????'),
(415, 54, 'Birol', '????????????'),
(416, 54, 'Chirirbandar', '??????????????????????????????'),
(417, 55, 'Lalmonirhat Sadar', '?????????????????????????????? ?????????'),
(418, 55, 'Kaliganj', '????????????????????????'),
(419, 55, 'Hatibandha', '??????????????????????????????'),
(420, 55, 'Patgram', '????????????????????????'),
(421, 55, 'Aditmari', '????????????????????????'),
(422, 56, 'Syedpur', '????????????????????????'),
(423, 56, 'Domar', '???????????????'),
(424, 56, 'Dimla', '???????????????'),
(425, 56, 'Jaldhaka', '??????????????????'),
(426, 56, 'Kishorganj', '???????????????????????????'),
(427, 56, 'Nilphamari Sadar', '??????????????????????????? ?????????'),
(428, 57, 'Sadullapur', '?????????????????????????????????'),
(429, 57, 'Gaibandha Sadar', '??????????????????????????? ?????????'),
(430, 57, 'Palashbari', '????????????????????????'),
(431, 57, 'Saghata', '??????????????????'),
(432, 57, 'Gobindaganj', '?????????????????????????????????'),
(433, 57, 'Sundarganj', '??????????????????????????????'),
(434, 57, 'Phulchari', '??????????????????'),
(435, 58, 'Thakurgaon Sadar', '??????????????????????????? ?????????'),
(436, 58, 'Pirganj', '?????????????????????'),
(437, 58, 'Ranisankail', '???????????????????????????'),
(438, 58, 'Haripur', '??????????????????'),
(439, 58, 'Baliadangi', '???????????????????????????????????????'),
(440, 59, 'Rangpur Sadar', '??????????????? ?????????'),
(441, 59, 'Gangachara', '????????????????????????'),
(442, 59, 'Taragonj', '????????????????????????'),
(443, 59, 'Badargonj', '?????????????????????'),
(444, 59, 'Mithapukur', '???????????????????????????'),
(445, 59, 'Pirgonj', '?????????????????????'),
(446, 59, 'Kaunia', '????????????????????????'),
(447, 59, 'Pirgacha', '?????????????????????'),
(448, 60, 'Kurigram Sadar', '?????????????????????????????? ?????????'),
(449, 60, 'Nageshwari', '???????????????????????????'),
(450, 60, 'Bhurungamari', '????????????????????????????????????'),
(451, 60, 'Phulbari', '?????????????????????'),
(452, 60, 'Rajarhat', '????????????????????????'),
(453, 60, 'Ulipur', '??????????????????'),
(454, 60, 'Chilmari', '?????????????????????'),
(455, 60, 'Rowmari', '??????????????????'),
(456, 60, 'Charrajibpur', '?????? ????????????????????????'),
(457, 61, 'Sherpur Sadar', '?????????????????? ?????????'),
(458, 61, 'Nalitabari', '?????????????????????????????????'),
(459, 61, 'Sreebordi', '????????????????????????'),
(460, 61, 'Nokla', '????????????'),
(461, 61, 'Jhenaigati', '???????????????????????????'),
(462, 62, 'Fulbaria', '???????????????????????????'),
(463, 62, 'Trishal', '?????????????????????'),
(464, 62, 'Bhaluka', '??????????????????'),
(465, 62, 'Muktagacha', '??????????????????????????????'),
(466, 62, 'Mymensingh Sadar', '???????????????????????? ?????????'),
(467, 62, 'Dhobaura', '????????????????????????'),
(468, 62, 'Phulpur', '??????????????????'),
(469, 62, 'Haluaghat', '???????????????????????????'),
(470, 62, 'Gouripur', '?????????????????????'),
(471, 62, 'Gafargaon', '?????????????????????'),
(472, 62, 'Iswarganj', '???????????????????????????'),
(473, 62, 'Nandail', '????????????????????????'),
(474, 62, 'Tarakanda', '??????????????????????????????'),
(475, 63, 'Jamalpur Sadar', '???????????????????????? ?????????'),
(476, 63, 'Melandah', '????????????????????????'),
(477, 63, 'Islampur', '????????????????????????'),
(478, 63, 'Dewangonj', '?????????????????????????????????'),
(479, 63, 'Sarishabari', '??????????????????????????????'),
(480, 63, 'Madarganj', '???????????????????????????'),
(481, 63, 'Bokshiganj', '????????????????????????'),
(482, 64, 'Barhatta', '???????????????????????????'),
(483, 64, 'Durgapur', '???????????????????????????'),
(484, 64, 'Kendua', '????????????????????????'),
(485, 64, 'Atpara', '??????????????????'),
(486, 64, 'Madan', '?????????'),
(487, 64, 'Khaliajuri', '??????????????????????????????'),
(488, 64, 'Kalmakanda', '??????????????????????????????'),
(489, 64, 'Mohongonj', '????????????????????????'),
(490, 64, 'Purbadhala', '????????????????????????'),
(491, 64, 'Netrokona Sadar', '??????????????????????????? ?????????');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 2,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `phone_number`, `address`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mr Admin', 'admin@admin.com', NULL, '$2y$10$tiPuFeIUmvZhOpmWkiUFJu3DXpzTfgCZmHTtI4LsnXQUsJyEV9sga', '01739568214', 'Mirpur-1', 'avatar.png', NULL, '2021-04-12 18:00:00', '2022-02-01 12:50:10'),
(2, 2, 'Mr user', 'user@gmail.com', NULL, '$2y$10$a53EPqQJlsrPKWjnU9dQbeltjVKiKQpyDxN5SXOR.u3wH3L4DVCiS', '01739568214', 'Mirpur-1', 'avatar.png', NULL, '2021-04-12 18:00:00', NULL),
(20, 2, 'Update User', 'user@email.com', NULL, '$2y$10$1TdOi1DeuQOwZGzdZc7lWeLNwzG52lMlMBAqX0wJ2Ha2JcLcvr0nK', '+1 (268) 691-1088', 'Mirpur ffd', 'avatar.png', NULL, '2021-04-26 01:45:26', '2021-04-26 02:42:28'),
(21, 2, 'Rae Hobbs', 'wivexozil@email.com', NULL, '$2y$10$1TdOi1DeuQOwZGzdZc7lWeLNwzG52lMlMBAqX0wJ2Ha2JcLcvr0nK', '+1 (532) 255-6376', 'Ut dolore mollit et', 'avatar.png', NULL, '2021-04-27 22:48:45', '2021-04-27 22:48:45'),
(25, 2, 'Richard Sullivan', 'naqegok@email.com', NULL, '$2y$10$Zf4Tun.h4Lle5/smcXExUOnm8s46LrncW98S9MwLssVjavdD8fAE.', '+1 (494) 327-2247', 'Consequuntur molesti', 'avatar.png', NULL, NULL, NULL),
(26, 2, 'Jayme Figueroa', 'arnob@email.com', NULL, 'pass1234', '+1 (367) 113-6976', 'Fulpore', 'avatar.png', NULL, NULL, NULL),
(27, 2, 'Dante Mcknight', 'zedidety@email.com', NULL, '$2y$10$1Di82X6yL9mDTGafB7fpdO.3PvmHQYY5LqHMHatKm5N/K5g.aT2oG', '+1 (113) 676-1171', 'Quasi laborum culpa', 'avatar.png', NULL, '2021-05-09 06:03:44', '2021-05-09 06:03:44'),
(28, 2, 'Nita Mooney', 'vyqag@email.com', NULL, '$2y$10$KNnv7xpDaoG3JR70TyFa0.FGCP/ge2Km9OyirsJrpdL91D/25bRs2', '+1 (774) 565-9484', 'Mymensingh', 'avatar.png', NULL, NULL, NULL),
(29, 2, 'Cameron Hill', 'torofeni@email.com', NULL, '$2y$10$MAScZYORmXDM7GQQE5p7buS7vynyS32UblaP/C8Hd3SIkjftq8aQK', '+1 (144) 103-7375', 'Excepturi qui possim', 'avatar.png', NULL, NULL, NULL),
(30, 2, 'Gannon Hernandez', 'waqa@email.com', NULL, '$2y$10$I0nHbuGIbPnvNR/kmCnlbegOIMuTpIYVv1ebKtZb.qYoBVKbV9LYa', '+1 (739) 382-3621', 'Magna distinctio Sa', 'avatar.png', NULL, NULL, NULL),
(31, 2, 'Brock Beasley', 'renaleqax@email.com', NULL, '$2y$10$GEusZSXz..aj3C/nFRfK4umCX9neXw9jPZS1dJWKZEnaJv0rza.8.', '+1 (196) 539-2827', 'Et cupiditate sit q', 'avatar.png', NULL, '2021-05-10 05:29:14', NULL),
(32, 2, 'Leandra Mcbride', 'muwakeraso@email.com', NULL, '$2y$10$w.CgXSsjlhSJIcB0ItmNq.omsnXmVFdo2Gi.u7OuyEXIoRx3gwxs6', '+1 (137) 683-4849', 'In maiores nisi labo', 'avatar.png', NULL, '2021-05-10 05:29:09', NULL),
(33, 2, 'Fleur Soto', 'meme@email.com', NULL, '$2y$10$UW7u9SjPkuSmmpjxWBWq6OzKTpD9/OQOH0bemGBJvTqt.ZutOx9de', '+1 (965) 451-9159', 'Maiores quibusdam co', 'avatar.png', NULL, '2021-05-10 05:46:22', NULL),
(35, 2, 'Frances Coleman', 'pytof@email.com', NULL, '$2y$10$HB.vtuzr7JqSiYLD6z7ei.TDalNquVySZJdvBhvgUG6KX4oI1bx8K', '+1 (464) 582-6992', 'Amet iure ut eligen', 'avatar.png', NULL, '2021-05-10 05:47:47', NULL),
(36, 2, 'Zelenia Mcleod', 'qoliq@email.com', NULL, '$2y$10$LK60DDC9F8sm/UZxiXr6kO8Z0mhgnI3ni.momV0SBtZ1BGZu9WPBO', '+1 (186) 556-5546', 'Voluptatibus quas re', 'avatar.png', NULL, '2021-05-10 05:48:30', NULL),
(37, 2, 'Nayda Ross', 'maxazefak@email.com', NULL, '$2y$10$Bh28hXIyNfpQ0syWpqinheypKPdGdzjMlLJU5LXVdhp9zQlB4r/xW', '+1 (556) 446-4387', 'Tempor eos et dicta', 'avatar.png', NULL, '2021-05-10 05:51:38', NULL),
(38, 2, 'Emerson Mcconnell', 'vopywelyke@email.com', NULL, '$2y$10$xAtwTb.c8Yp3b1n5v2S9KOaJD.BlbCRuPRXPHGA7ErPmrlfgQSFgu', '+1 (917) 923-8107', 'In aut voluptatem Q', 'avatar.png', NULL, '2021-05-10 05:52:42', NULL),
(39, 2, 'Colleen Price', 'qixoky@email.com', NULL, '$2y$10$6vJu.51.Jkpk95f/0aIfuObIzFzEPhjoEokIuey4mZ2roPBtQGwmK', '+1 (259) 932-5921', 'Cupidatat minima est', 'avatar.png', NULL, '2021-05-10 05:55:04', NULL),
(41, 2, 'Cara Stafford', 'nomoh@email.com', NULL, '$2y$10$NvPjYVGaKExOa.ov3Vp5O.aIa5z8MW1mFDaCjqneDgzYN8vvb.y1W', '+1 (993) 265-5031', 'Atque atque sint vol', 'avatar.png', NULL, '2021-05-10 06:00:12', NULL),
(43, 2, 'Micah Poole', 'dygoc@email.com', NULL, '$2y$10$lUPz0ku8vT.etl6eRumWeuJRyUmV917tGmm2nvyezOp3vNVoXtEDe', '+1 (953) 533-5197', 'Qui et veniam sunt', 'avatar.png', NULL, '2021-05-10 06:00:52', NULL),
(44, 2, 'Porter Kelley', 'lywafu@email.com', NULL, '$2y$10$SNsV72K3CvlHw5CwilaqH.itUiPD2XBt5d9u1Xro9EkkI25zI5YZK', '+1 (172) 803-6168', 'Dignissimos dolores', 'avatar.png', NULL, '2021-05-10 06:09:09', NULL),
(45, 2, 'Xenos Nieves', 'zasuridilo@email.com', NULL, '$2y$10$PyZUgfs6Rq29IV4CgJhnwOX1Y0fDEBH2EaSmOSQo8ekIS6pm83JAm', '+1 (431) 795-1357', 'Irure deserunt adipi', 'avatar.png', NULL, '2021-05-10 06:13:38', NULL),
(46, 2, 'Kristen Cox', 'ganybi@email.com', NULL, '$2y$10$fjh6uvnmYy0u0h.7qW3PSOAzZ3CK96R3Faja5JO5jlFvbn/3hLrNi', '+1 (396) 689-6518', 'Et eos aperiam atqu', 'avatar.png', NULL, '2021-05-10 06:14:58', NULL),
(47, 2, 'Jaquelyn Hoover', 'cydaky@email.com', NULL, '$2y$10$5hQ9y8e8dJAvXtToqxydXelADo3L8TEi/SMqb9M/QaG5chsUI2F/a', '+1 (126) 292-3226', 'Consectetur consequ', 'avatar.png', NULL, '2021-05-10 06:15:47', NULL),
(48, 2, 'Ursula Butler', 'maviciv@email.com', NULL, '$2y$10$bO2KR2UAXxWW3HKi1Mf3pe/OXjRM52fB.p/.wZgQK061BniiNBTum', '+1 (595) 906-8527', 'Dolores iure amet e', 'avatar.png', NULL, '2021-05-10 10:58:29', NULL),
(49, 2, 'Ruth Greer', 'kofobywe@email.com', NULL, '$2y$10$WF16K4AUjFJ59Lo.064s1uW9D6FtC9AbpXFm6HMZZnMnpfdArfV3C', '+1 (376) 824-5455', 'Quam magni exercitat', 'avatar.png', NULL, '2021-05-10 10:58:52', NULL),
(50, 2, 'Noelani Mclean', 'susovamozi@email.com', NULL, '$2y$10$EEf89CtrTBx6XcOyxhHTq.vaWOhPxhp.daHTCcMsQdRfdxoYivy.W', '+1 (889) 425-5686', 'Doloremque aute sunt', 'avatar.png', NULL, '2021-05-10 15:00:14', '2021-05-10 15:00:14'),
(51, 2, 'Hashim Cooley', 'xywili@email.com', NULL, '$2y$10$yvat3DK5n9peUxsSJjMjC.MJjQ0LmVEmNpulZpydKVoshxUJuoAQO', '+1 (388) 274-6978', 'Magnam consequuntur', 'avatar.png', NULL, '2021-05-17 06:36:21', NULL),
(52, 2, 'Briar Allison', 'kaxyw@email.com', NULL, '$2y$10$WtxpiCtrmyR89FjmeRFko.3tiZncTBelIPQ9A1yHgW4/GqGQnwY0q', '+1 (751) 181-7178', 'Laborum Aut esse du', 'avatar.png', NULL, '2021-05-17 10:36:45', '2021-05-17 10:36:45'),
(53, 2, 'Colorado Mason', 'mavisyw@mailinator.com', NULL, '$2y$10$u9m0qvRSjWboeC89UUzTSOfgl2Pp1z5iWAxdg0nwnyLL14WquTrvS', '+1 (277) 887-4989', 'Quae sint ad Nam ea', 'avatar.png', NULL, '2021-05-19 08:15:00', NULL),
(55, 2, 'Kibo Finley', 'qegiwitehi@mailinator.com', NULL, '$2y$10$qAN5nREf9kitxMV2Tq7FV.n5tupn22ZM.DBOvOE/97UWSK7hbJg1y', '+88015835172', 'Nihil ut natus do ex', 'avatar.png', NULL, '2021-05-19 08:25:30', NULL),
(56, 2, 'Jameson Holmes', 'test@test.com', NULL, '$2y$10$6ENH.2r.RZqlJQV6LoXcIOhgSazqfabl5rqm8JD9MNY3D4ubAkYbq', '+88018016547', 'Aut quae obcaecati a', 'avatar.png', NULL, '2021-05-19 08:28:01', '2021-05-19 12:40:57'),
(57, 2, 'Connor Sims', 'puliqef@email.com', NULL, '$2y$10$zqp2C0ECPangoP.a50jYYulqycnximuLLv4L7v692Ai07IfCCHVE.', '+88013933755', 'In et unde deserunt', 'avatar.png', NULL, '2021-05-19 08:47:27', NULL),
(58, 2, 'Olivia Lang', 'niqetuho@email.com', NULL, '$2y$10$JrH8kh3Arj0spueC8H/PmeHIbgqOc.jsz.LVmkdVY82j4OHbBj9XC', '+88013843545', 'Autem ad veniam acc', 'avatar.png', NULL, '2021-05-19 08:52:51', NULL),
(59, 2, 'Tesr', 'test@gmail.com', NULL, '$2y$10$dNzuPG1oeQ6hSUmDXWhr8umkJKx0A4wsBqoooERBs7rx/KJwAnwUy', '01712345678', 'Haj', 'avatar.png', NULL, '2021-05-19 09:03:16', NULL),
(60, 2, 'rifat', 'text@gmail.com', NULL, '$2y$10$kp2bXL6LO5ZervXVolr3O.P3lpzsSa72pZ1o9rNoDhEN1aQeuApSy', '01828082234', 'mirpur-2 dhaka bangladesh', 'avatar.png', NULL, '2021-05-25 09:31:06', NULL),
(61, 2, 'rifat', 'tehfefdfh@gmai.com', NULL, '$2y$10$jtBbtCcHAtVf9t85DCSgfOxqVwYNrVadR7GpadoPWWdpFmQcAtBz.', '01828082234', 'mirpur-2 dhaka bangladesh', 'avatar.png', NULL, '2021-05-25 09:39:10', NULL),
(62, 2, 'rifat', 'rahim@gmail.com', NULL, '$2y$10$0frOUkhfGAUgiZr4/OmsLOABVt8aqoHDL2uCnCJ0pah7VttLHrA6i', '01828082234', 'mirpur-2 dhaka bangladesh', 'avatar.png', NULL, '2021-05-25 10:14:59', NULL),
(63, 2, 'Shoriful Islam', 'shofu.deu@gmail.com', NULL, '$2y$10$63OJ6QsOteHRf87oUQ8DOOYvMR3n1S0BcawO62TmZiq26u66ddPzO', '01768404686', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 07:25:38', '2021-05-27 11:54:16'),
(64, 2, 'rifat', 'karimr@gmail.com', NULL, '$2y$10$TaULjJvdP.j2ciVCiKf.ZOz3FTjDIi3OJ4ADfgNJp6bZU/Xak6IZm', '01825854543', 'mirpur-2 dhaka bangladesh', 'avatar.png', NULL, '2021-05-27 07:25:47', NULL),
(65, 2, 'rifat', 'rahimk@gmail.com', NULL, '$2y$10$DJkAK9P8pBkshSol/xC4Yu6QntIAoabWiwBkIQPGOoQ4q2MJAVueO', '01825854543', 'mirpur-2 dhaka bangladesh', 'avatar.png', NULL, '2021-05-27 07:30:11', NULL),
(66, 2, 'rifat', 'ghmb@gmail.com', NULL, '$2y$10$Yg/qI0h70FxCZdEQ1DenwueHZlhaZqjYdVGtnczvmut2OENMiTgTy', '01825854543', 'fudstfdatrd', 'avatar.png', NULL, '2021-05-27 07:35:10', NULL),
(67, 2, 'ariful islam', 'aaa@gmail.com', NULL, '$2y$10$JMVjYtRQ/gcu5QKOGIvecOT/wyiAw.bmG8acWfzPgTuRytu969fhm', '01768835264', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 07:35:33', NULL),
(68, 2, 'rifat', 'ihfye@gmail.com', NULL, '$2y$10$GXLlt6/FRKOOyhe2RmFYpeBODf4mkYTriKc.k7NQnTk0ZsiGgEX5W', '01825854543', 'ydyda55t', 'avatar.png', NULL, '2021-05-27 07:36:48', NULL),
(69, 2, 'rifat', 'iogids@gmail.com', NULL, '$2y$10$b/HyiN46i7aZEdf9pgbHh.aUOMjHacdi2AFR69tgnmo07vSagy6JC', '01825854543', 'hcsdjhd', 'avatar.png', NULL, '2021-05-27 07:37:45', NULL),
(70, 2, 'rifat', 'stykdws@gmail.com', NULL, '$2y$10$d7r4dIEcGSkYm0RSD4neeejSzbz.qXWRBbpMwIYI9jgXs5bq.gj4q', '01825854543', 'ydskus5wsy', 'avatar.png', NULL, '2021-05-27 07:38:47', NULL),
(71, 2, 'rifat', 'gufdfu@gmai.com', NULL, '$2y$10$9uO4skwvcL4s8BzI5C9opukjnBxHJZWpgq03gEFg0aw82Mx3vHuiq', '01825854543', 'tdffewur7', 'avatar.png', NULL, '2021-05-27 07:44:21', NULL),
(72, 2, 'rifat', 'irfuygkjy@gmail.com', NULL, '$2y$10$idHB7HpT0Zq1ImdUxhlePustMeKMC3GR/yUH/vfZafA9.qaHwVOdO', '01825854543', 'ruiykydyi.7/', 'avatar.png', NULL, '2021-05-27 07:48:52', NULL),
(73, 2, 'rifat', '67u8tu8@gmai.com', NULL, '$2y$10$bl4m6Q8gs.SOON2H.Hjxu.bpLofFR1RRkB5jDWAQd6oc3Std.pkRC', '01825854543', '4t3gr732t5r3w9trawt4', 'avatar.png', NULL, '2021-05-27 07:50:04', NULL),
(74, 2, 'rakib', 'rakib@gmail.com', NULL, '$2y$10$rWNouO0pKK0hgzJ7RU809u81ZLFeu5L3YLQqgpjgCurAc8/4g1Yn6', '01768404909', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 07:50:39', NULL),
(75, 2, 'rifat', '5yeye8y@gmail.com', NULL, '$2y$10$I.8Q0YAYIDGc2DX3wS4doObv4lFDHICNFrgvORQLEfbsHaZbSpaiq', '01825854543', 'tty4uqaw', 'avatar.png', NULL, '2021-05-27 07:51:15', NULL),
(76, 2, 'rifat', 'fxgdsgh8g78@gmai.com', NULL, '$2y$10$sQeh7qK/Oiq4uzXf9fNxxukwb5EOuY4I22k5Lpi2q5gUI6u.LLnOy', '01825854543', 't32t235r23t', 'avatar.png', NULL, '2021-05-27 07:52:29', NULL),
(77, 2, 'dipu', 'dipu@gmail.com', NULL, '$2y$10$GmeuEjEfMtRYYhFK.TGFFet5UKOjhrSwbaZ3/WlPyXQEUNkJDPbNG', '01768460879', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 07:53:30', NULL),
(78, 2, 'rifat', 'karimd@gmail.com', NULL, '$2y$10$YcORbafOdkuLDl6aYSnVku3gM8GaURoMuYn8RoFKnUPufYJaOU43y', '01834546786', 'r3trqrraw7', 'avatar.png', NULL, '2021-05-27 11:53:35', '2021-05-27 11:53:35'),
(79, 2, 'Shoriful Islam12', 'shofu223@gmail.com', NULL, '$2y$10$HttJ.OPXbIgXd1PV3/Bhe.X1HHSPNuXKuFmH.AqjqDGkQ1vgtFhZy', '01768404909', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 07:56:58', NULL),
(80, 2, 'Shoriful Islam231', 'shofu231@gmail.com', NULL, '$2y$10$yGL.5NQUbiiTg9MvceGLd..or9JrEXNBpjQQ9okzW8ZhOgPqOgzo2', '01768404686', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 07:58:46', NULL),
(81, 2, 'Shoriful Islam421', 'shofu421@gmail.com', NULL, '$2y$10$KOA7NC/IaUt5r/OwV1EII.XpNFtcVmKX2PvyxXaXzTTGpoz7SU9fy', '01768404421', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 07:59:50', NULL),
(82, 2, 'Shoriful Islam521', 'shofu521@gmail.com', NULL, '$2y$10$OHC.rYqrsvdrudqL4ShNiecxvYHEc/GB/wk/dtie9dccP7v8kE1qm', '01768404521', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 08:00:54', NULL),
(83, 2, 'Shoriful Islam621', 'shofu621@gmail.com', NULL, '$2y$10$/8QTCn2yolSPhY95IhK1n.ELoVp.8C0t6K67a3EE85Rfqj8hDcIDG', '01768404621', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 08:01:41', NULL),
(84, 2, 'Shoriful Islam221', 'shofu221@gmail.com', NULL, '$2y$10$2.OjCqnURUJavHjKZZrCuurM0oZ8OETGW0w6vTloSWGfKBZ9DUU1S', '01768404221', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 08:02:38', NULL),
(85, 2, 'Shoriful Islam331', 'shofu331@gmail.com', NULL, '$2y$10$doN2G2OQmn4cgrbQepGB8uhrv0jAOuSuT5BIkPvwNnZ6C.WzmP8aS', '01768404331', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 08:04:50', NULL),
(86, 2, 'Shoriful Islam112', 'shofu112@gmail.com', NULL, '$2y$10$FMNrOel8PLhG6aqVR6TcY.7jt38OvRlW9bq1KT9ruPpnL0JOMEy7C', '01768404112', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 08:05:45', NULL),
(87, 2, 'Shoriful Islam321', 'shofu321@gmail.com', NULL, '$2y$10$eD3PyDNqb9UkCnrCV50Oa.KWJqsi4yHeuY2YWk1KClV09bmRIn5km', '01768404321', 'house 29,Road 32,Pallabi,Dhaka,Bangladesh, 1216, Dhaka', 'avatar.png', NULL, '2021-05-27 08:06:46', NULL),
(88, 2, 'Shofu121', 'shofu121@gmail.com', NULL, '$2y$10$lafFfcqFzrWH6a0UGrawIeOtNTKcjWlBLjHI4o6upNTNKXOeSQhhW', '01768404121', 'Road jani na,basha jani na,Dhaka Keraniganj', 'avatar.png', NULL, '2021-05-27 08:10:20', NULL),
(89, 2, 'Shofu202', 'shofu202@gmail.com', NULL, '$2y$10$qt2IpvQZlL5oZ3SmdnTX3eHLRemmXQax00ZxBkVQS/gZ8kAhQJp.S', '01768404202', 'Humayon chattar', 'avatar.png', NULL, '2021-05-27 08:11:53', NULL),
(90, 2, 'Shofu201', 'shofu201@gmail.com', NULL, '$2y$10$dZcz7MvX4BHJquGpUIcPZ.m2.oyYEsGKYAQJdRD5QIrZOhFeTxlZO', '01768404201', 'Monpura dip', 'avatar.png', NULL, '2021-05-27 08:13:03', NULL),
(91, 2, 'Shofu123', 'shofu123@gmail.com', NULL, '$2y$10$5CXapm7O5.zoz9c5QQ699uk7phJGG6fbW4BSMia81NDBl1Z4xwd6u', '01768404123', 'Sent Martin dip', 'avatar.png', NULL, '2021-05-27 08:15:29', NULL),
(92, 2, 'Shofu115', 'shofu115@gmail.com', NULL, '$2y$10$8ay4Uckt708yCSZjSl.5OO.bHLOh6uXwfDJH3SDQCNFvkZNajvzDu', '01768404115', 'Naldanga', 'avatar.png', NULL, '2021-05-27 08:17:01', NULL),
(93, 2, 'Shofu404', 'shofu404@gmail.com', NULL, '$2y$10$ZaKf7Jx/O9jL3P1Y.HeGDePj63aTuq.b86EQ3dyhe7xDgei4WS8Mi', '01768404404', 'Devilhouse', 'avatar.png', NULL, '2021-05-27 08:18:48', NULL),
(94, 2, 'Shofu108', 'shofu108u@gmail.com', NULL, '$2y$10$nriFs/aoSCMLusR8MDoXD.2nekl8XaF0lny.5BNT2H.iZIAk8ctJ.', '01768404108', 'Address nai', 'avatar.png', NULL, '2021-05-27 08:20:40', NULL),
(95, 2, 'Shofu109', 'shofu109@gmail.com', NULL, '$2y$10$2Xh9qrwtKunec9AlZNhaXOBTo36.J4u1VY0cIqjZtEkIqVj.fKAiG', '01768404109', 'Adminadmin', 'avatar.png', NULL, '2021-05-27 08:21:46', NULL),
(96, 2, 'Shofu110', 'shofu110@gmail.com', NULL, '$2y$10$yTaIFG9pW1cx9azPTB1Iees5WfuZ7y7WLZwnMgoJHnNeUUYhmL3Ii', '01768404110', 'Admin1234', 'avatar.png', NULL, '2021-05-27 08:22:57', NULL),
(97, 2, 'Shofu111', 'shofu111@gmail.com', NULL, '$2y$10$zuFT.jDTrdZGxh8dsEyRFuobiHpg7doUHtCzaQn0xvjrbw50tywci', '01768404111', 'Koi jani', 'avatar.png', NULL, '2021-05-27 08:23:56', NULL),
(98, 2, 'Shofu113', 'shofu113@gmail.com', NULL, '$2y$10$65/hv2txx9yv3kLfhMGAeuq.m1bEikEAa4IgRLqV/bGhdt8v9NuMa', '01768404113', 'Lamonade', 'avatar.png', NULL, '2021-05-27 08:26:04', NULL),
(99, 2, 'Shofu114', 'shofu114@gmail.com', NULL, '$2y$10$uTIPdgmH41IeCRil/MnbLee4ySfFfOFOty60mdH.kb6U/KvaXhm.i', '01768404114', 'Barishal', 'avatar.png', NULL, '2021-05-27 08:27:50', NULL),
(100, 2, 'Shofu215', 'shofu215@gmail.com', NULL, '$2y$10$O0rhPMbW5OtMKVEWLZVdcu8Qv.bmJphWfD88t0McJUPc3exKiZmti', '01768404215', 'Ok bye!', 'avatar.png', NULL, '2021-05-27 08:28:56', NULL),
(101, 2, 'Rifat', 'jfdd@gmail.com', NULL, '$2y$10$nkyG0Ehy/Wy4y5eQfJpoCu39OIh2l0Rpd98ciGH6rKxqUkm1dOJCa', '01832545554', 'Vgtdddg', 'avatar.png', NULL, '2021-05-27 08:55:07', NULL),
(102, 2, 'Rifat', 'hfviy@gmail.com', NULL, '$2y$10$CoH8j96cNI9axLSu.VWWGOaGGFgUAuMTT8fQ8JPQ8nf6BinW7TMjq', '01832545554', 'Uyh', 'avatar.png', NULL, '2021-05-27 08:57:38', NULL),
(103, 2, 'Rifat', 'ugfhh@gmail.com', NULL, '$2y$10$sQgi7EL/R.DF0WQaZ77sh.REi4A.NDpIb6lFiyiMCMhbABhmTZwjW', '01832545554', 'Uhgf', 'avatar.png', NULL, '2021-05-27 08:58:36', NULL),
(104, 2, 'Rifat', 'gdffr@gmail.com', NULL, '$2y$10$sYSgz9j1dmy14X2Jlkn2Ue/PW1awae4bI69WBGLDPrZ/1C3O7g.aG', '01832545554', 'Ygff', 'avatar.png', NULL, '2021-05-27 08:59:46', NULL),
(105, 2, 'Rifat', 'jfxdg@gmail.com', NULL, '$2y$10$i3s2s/.407hAmjkrEZdDnewjfJA5RP3xsTCUHWL9SFj/z4XcVK0Ze', '01832545554', 'Ugfr', 'avatar.png', NULL, '2021-05-27 09:22:56', NULL),
(106, 2, 'Test', 'etertrt@gsgg.com', NULL, '$2y$10$uVJ3dfLsH0N6xChR9RpFMuPO4ZIfH9nVQNziP4vQrvAavv4L5OeLu', '15415454', 'etretre', 'avatar.png', NULL, '2021-06-02 09:07:50', NULL),
(107, 2, 'SHAKAWAT', 'shakil@gmail.com', NULL, '$2y$10$u/okapGPg7ug.gySac6GCuufYdvwjc5Q02Q8dcRdwGIsmQUn/ohMu', '01708169403', 'Savar', 'avatar.png', NULL, '2021-09-25 08:49:50', NULL),
(108, 2, 'Louis Spears', 'dovysu@mailinator.com', NULL, '$2y$10$7uwA7b3A.9lX/VXsuubRHOAS2Mb0JZd1CYNHqpOcqG51ja02cWLXe', '+1 (789) 267-9077', 'Consequatur Eu est', 'avatar.png', NULL, '2022-10-28 04:43:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cropscats`
--
ALTER TABLE `cropscats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cropscats_slug_unique` (`slug`);

--
-- Indexes for table `depots`
--
ALTER TABLE `depots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disorderproducts`
--
ALTER TABLE `disorderproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disorders`
--
ALTER TABLE `disorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_id` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variants_product_id_foreign` (`product_id`),
  ADD KEY `product_variants_packsize_id_foreign` (`size_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cropscats`
--
ALTER TABLE `cropscats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `depots`
--
ALTER TABLE `depots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `disorderproducts`
--
ALTER TABLE `disorderproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `disorders`
--
ALTER TABLE `disorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_2` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD CONSTRAINT `upazilas_ibfk_2` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
