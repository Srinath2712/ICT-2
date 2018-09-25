-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2018 at 04:50 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Maggie`
--

-- --------------------------------------------------------

--
-- Table structure for table `Announcement`
--

CREATE TABLE `Announcement` (
  `id` int(255) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Announcement`
--

INSERT INTO `Announcement` (`id`, `content`) VALUES
(1, 'New uses of hypnosis in the treatment of postraumatic stress disorder.\r\n\r\nThe following is an abstract taken from \r\n\r\nJ Clin Psychiatry. 1990 Oct;51 Suppl:39-43; discussion 44-6.\r\n\r\nHypnosis is associated with the treatment of posttraumatic stress disorder (PTSD) for two reasons: (1) the similarity between hypnotic phenomena and the symptoms of PTSD, and (2) the utility of hypnosis as a tool in treatment. Physical trauma produces a sudden discontinuity in cognitive and emotional experience that often persists after the trauma is over. This results in symptoms such as psychogenic amnesia, intrusive reliving of the event as if it were recurring, numbing of responsiveness, and hypersensitivity to stimuli. Two studies have shown that Vietnam veterans with PTSD have higher than normal hypnotizability scores on standardized tests. Likewise, a history of physical abuse in childhood has been shown to be strongly associated with dissociative symptoms later in life. Furthermore, dissociative symptoms during and soon after traumatic experience predict later PTSD. Formal hypnotic procedures are especially helpful because this population is highly hypnotizable. Hypnosis provides controlled access to memories that may otherwise be kept out of consciousness. New uses of hypnosis in the psychotherapy of PTSD victims involve coupling access to the dissociated traumatic memories with positive restructuring of those memories. Hypnosis can be used to help patients face and bear a traumatic experience by embedding it in a new context, acknowledging helplessness during the event, and yet linking that experience with remoralizing memories such as efforts at self-protection, shared affection with friends who were killed, or the ability to control the environment at other times. In this way, hypnosis can be used to provide controlled access to memories that are then placed into a broader perspective.'),
(2, 'Benefits of Hypnotherapy in recovery from \'life events\'\r\n\r\nRadio National recently aired a program on the benefits of Hypnotherapy and the support it is able to provide in aiding the recovery from life events such as the effects of bush fires or floods.  Listen to the story of Ann Fogarty and how hypnotherapy has helped with her recovery from the Ash Wednesday bushfires by clicking on the link below:\r\n\r\nhttp://www.abc.net.au/radionational/programs/lifematters/forged-with-flames/4504486\r\nIt is 30 years this month since the Ash Wednesday bushfires. On 16 February 1983, 180 fires destroyed hundreds of properties in Victoria and South Australia and 75 people lost their lives.\r\n\r\nAnd long after the scars leave the landscape after a bushfire, physical and emotional scars continue to reshape the lives of people injured in the fires. Forged with Flames is Ann Fogarty\'s memoir of that day.\r\n\r\nOn Ash Wednesday, Ann was hit by a ball of fire and 85 per cent of her body was burnt. For several months she hovered between life and death.\r\n\r\n'),
(3, 'In June 2997 Paul Kraus was diagnosed with Mesothelioma.  If you or a family member have been diagnosed with this illness, this website by Paul Kraus may be worth looking at.  He was diagnosed with Mesothelioma in  June 1997 and given only a few months to live. He and his family were stunned by the shocking diagnosis, but they were not ready to give up. They researched different therapies for this cancer and learned about chemotherapy, surgery, radiation and various complementary and alternative treatments. From this knowledge, Mr. Kraus worked with his doctors to create his own regimen to heal his mesothelioma and fifteen years later he is alive and enjoys a good quality of life.\r\n\r\nFree Copies!\r\nFor a limited time, free copies of \"Surviving Mesothelioma\" are available to newly diagnosed mesothelioma patients. To obtain a free copy go to www.SurvivingMesothelioma.com.'),
(4, '\"At the neurobiological level, the aim of all psychotherapy is to alter connections in the brain so that real or imagined stimuli no longer evoke the stress response\"\r\nFrom neuroscience:  Ex;poring the Brain by Mark F Bear, Barry W Connors, Michael A. Paradiso.');

-- --------------------------------------------------------

--
-- Table structure for table `Anxiety`
--

CREATE TABLE `Anxiety` (
  `id` int(11) NOT NULL DEFAULT '0',
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Anxiety`
--

INSERT INTO `Anxiety` (`id`, `message`) VALUES
(1, ' '),
(2, ' Anxiety is an uncontrollable and often irrational worrying about situations, events or everyday events that can be out of proportion to the situation.  You may find yourself anticipating disaster or catastrophising around situations that a part of you knows is really ok.  Perhaps you are finding it difficult to stop worrying about finances, exams or tests, job interviews, being on time, health issues or family problems to the point where it is beginning to interfere with your life.'),
(3, ' Anxiety is an emotional reaction to our thoughts and feelings.  Situations do not automatically create anxiety, rather it is our reaction to them or how we think about them.  This emotional reaction, in turn, creates a body response producing a variety of physical symptoms including fatigue, insomia, irritability, sweating, a sense of panic or agitation, difficulties breathing, muscle aches or difficulty swallowing.'),
(4, ' Most people have been anxious at some time in their life and experienced these symptoms and other symptoms. Anxiety can be a useful tool in recognising a stress in our lives.  However, problems arise when the anxiety continues or comes back in a stronger form each time it is experienced.  Continued or chronic anxiety may lead to such conditions as irritable bowel syndrome, tension headaches or migraine, compulsive or obsessive behaviours, social anxiety and many more. It can be hard, at times, to pin point where this anxiety is coming from or, once located, hard to know how to stop it.  His is where hypnotherapy, a combination of counselling and hypnotherapy, can help. '),
(5, 'Hypnotherapy has been shown to be effective in the treatment of anxiety by inducing a calming and relaxing state of mind and body, enabling the body to counteract the effects of increased levels of adrenalin in the system. Hypnotherapy goes further than just pleasant relaxation. By exploring the root causes of the anxiety and dealing with any emergent concerns, anxiety and the resultant stress can be reduced.'),
(6, ' Hypnotherapy has been shown to be effective in the treatment of anxiety by inducing a calming and relaxing state of mind and body, enabling the body to counteract the effects of increased levels of adrenalin in the system. Hypnotherapy goes further than just pleasant relaxation.  By exploring the root causes of the anxiety and dealing with any emergent concerns, anxiety and the resultant stress can be reduced.'),
(7, ''),
(8, ' In my sessions you will be given exercises to manage both stress and anxiety, enabling you to recreate the sense of peace and calm when you need to and in the moment and therefore change those established stress patterns to patterns of calm and ease.'),
(9, ' There has been much research conducted around the benefits of reducing stress.  Please follow this link for to read this booklet for useful tips on how to reduce stress in your life'),
(10, '');

-- --------------------------------------------------------

--
-- Table structure for table `Contact Form`
--

CREATE TABLE `Contact Form` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `emp_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Fears`
--

CREATE TABLE `Fears` (
  `id` int(255) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Fears`
--

INSERT INTO `Fears` (`id`, `content`) VALUES
(1, ' Approximately 10% of the population have a fear or phobia they are living with.  A phobia is an irrational and excessive fear of an object or situation. In most cases, the phobia involves a sense of endangerment or a fear of harm. \r\n\r\nThe good news is these are treatable conditions and respond well with hypnotherapy.  The top 10 most common phobias include:'),
(2, 'Flying\r\nSpiders snakes, \r\nHeights, \r\nCrowded or confined spaces, \r\nOpen spaces, dogs, \r\nThunder and lighting,\r\nInjections, \r\nSocial situations \r\nGerms or dirt'),
(3, 'but they can be varied\r\n\r\nCommon symptoms associated with a phobia include:\r\nDizziness\r\nBreathlessness\r\nNausea\r\nA sense of unreality\r\nFear of dying'),
(4, 'In some cases, these symptoms can escalate into a full-scale anxiety attack. As a consequence of these symptoms, some individuals begin to isolate themselves, leading to severe difficulties in daily life. \r\n\r\nHypnotherapy works with you to reduce the anxiety around your specific fear or phobia, look for the root cause of the problem and then, through hypnosis, treat the condition.'),
(5, 'For more information about your specific fear or phobia, please call me for a confidential discussion.\r\n\r\nResults are variable, depending on the levels of motivation and no guarantees are offered.  Read my google reviews for others\' experiences hypnotherapy.');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(255) NOT NULL,
  `hyp_d` varchar(255) DEFAULT NULL,
  `hyp_f` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `hyp_d`, `hyp_f`) VALUES
(1, '1-1.5hr', '$150'),
(2, '50min', '$100'),
(3, '60min', '$90'),
(4, '90min', '$120');

-- --------------------------------------------------------

--
-- Table structure for table `Medi`
--

CREATE TABLE `Medi` (
  `id` int(255) NOT NULL DEFAULT '0',
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Medi`
--

INSERT INTO `Medi` (`id`, `message`) VALUES
(1, ' Approximately 10% of the population have a fear or phobia they are living with.  A phobia is an irrational and excessive fear of an object or situation. In most cases, the phobia involves a sense of endangerment or a fear of harm. \r\n\r\nThe good news is these are treatable conditions and respond well with hypnotherapy.  The top 10 most common phobias include:'),
(2, ' All of these situations are meditative experiences because there are no\r\nthoughts about the past or the future; the mind is thinking only of the\r\npresent moment.\r\n• So as you refl ect on the experience(s) in your life where you lost track\r\nof time, you will realize that you also lost track of whatever was in\r\nyour life that was causing you stress, whether it was a toxic relationship,\r\na chronic illness, or the sadness that comes with grief or loss. ');

-- --------------------------------------------------------

--
-- Table structure for table `Relation`
--

CREATE TABLE `Relation` (
  `id` int(255) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Relation`
--

INSERT INTO `Relation` (`id`, `content`) VALUES
(1, ' Life is challenging because... that\'s life.  It\'s what it does to enable us to grow and develop.  Sometimes, however, the challenges may appear too big or just overwhelming.  It\'s at these times it\'s good to look at what\'s happening (or not happening) and find a way to unstick the self from the situation it has gotten itself into. '),
(2, 'If you have something worrying you but not able to identify what the problem is or unable to move on from it, talking about it can bring the worry into focus and enable you to name it.  Using language to name and identify brings the unseen into the seen.  Sometimes just the seeing allows it to dissolve as you let go. '),
(3, '  Hypnotherapy works on those very deep levels of the mind - the areas that are beyond rational thought.  When it comes to changing behaviours or ways of feeling about an issue, it generally feels like it is part of you.  You will not hear my voice \'talking\' to you when confronted by your area of concern.  It is just feels like something you\'ve always done.  \r\nWhen realising the ease with the change many clients wonder why they didn\'t do something about their issue a long time ago.  Readiness is a key element in hypnotherapy.  For hypnotherapy to be effective you need to be ready to let go of the habit or complaint and embrace life without that extra weight, as a non-smoker or without pain.  My job is to ensure you do this with ease.  Yours is to turn up keen to bring about those changes you\'d like to see in your life.'),
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `Smoking`
--

CREATE TABLE `Smoking` (
  `id` int(255) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Smoking`
--

INSERT INTO `Smoking` (`id`, `content`) VALUES
(1, ' If you\'re looking at this page you have probably been thinking for a while about quitting smoking with hypnosis.  You may have tried a few different approaches - patches, gum, will power but are still smoking.  So what happened?  Why didn\'t these other tactics work?'),
(2, 'Unless the underlying motivations, ideas and thoughts which lay in the subconscious are addressed and brought in to line with that rational mind, you may well be fighting against yourself. My approach in quitting smoking with hypnotherapy creates a whole-hearted stance within the mind to beat that habit with minimal cravings and withdrawals.'),
(3, 'If you want to be a non-smoker then Hypnotherapy may be for you. All that you need to bring to the session is your motivation and desire to be a non-smoker.'),
(4, 'Are you beginning to feel that you are drinking too much and would like to do something about it ...? but not sure what? Are you concerned you are becoming dependant on alcohol to relax you or lift that mood?'),
(5, 'Whatever type of drinker you are, if you feel it is excessive then hypnotherapy and counselling may help to reduce that alcohol consumption or allow you to take back control.'),
(6, 'Through my years of experience, I have developed a highly effective and effective program which enables you to take back control in your life. Using hypnosis, it may be possible to shift thought patterns and habits to let go of that drinking and enable you to either eliminate or moderate your alcohol consumption. A new habit, may be established enabling you to have a healthier relationship with alcohol or to let it go completely. Any physical symptoms around letting go of the alcohol may be managed with substitute or distraction techniques.'),
(7, 'Are you one of those people who tends to \'drown their sorrows\' or push down past experiences with alcohol? I take time with you to find out why you have felt the need drink and resolve those feelings and thoughts which have fuelled the alcohol consumption. This approach may create confidence in knowing that the reasons behind the drinking are no longer there.'),
(8, 'Gambling, like other addictions, can destroy families and lives. People can lose their homes, their loved ones and everything they value and feel helpless to do anything about it. Hypnotherapy can support you to let go of this habit by looking at the causes or reasons this is happening. All you need to bring is your motivation to let this go.'),
(9, 'There are very few positives associated with gambling and tends to create multiple problems. Where will you be in a few years if you continue on this path?');

-- --------------------------------------------------------

--
-- Table structure for table `Supervision`
--

CREATE TABLE `Supervision` (
  `id` int(255) NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Supervision`
--

INSERT INTO `Supervision` (`id`, `content`) VALUES
(1, 'As a fully qualified and certified supervisor with both the Australian Counselling Association and  Australian Association of Clinical Hypnotherapy and Psychotherapy, I am able to offer supervision sessions to both counselling and hypnotherapy practitioners.  '),
(2, 'Your supervision will be accredited with both of these organisations and sessions are available individually or in a group setting.  This can be done either face to face, via skype or over the phone. '),
(3, 'You will find me listed on both the ACA and AACHP websites.  Please contact me should you wish to meet or have a discussion about the possibilities of supervision and to determine if I am the supervisor for you.  '),
(4, 'Life is challenging because... that\'s life.  It\'s what it does to enable us to grow and develop.  Sometimes, however, the challenges may appear too big or just overwhelming.  It\'s at these times it\'s good to look at what\'s happening (or not happening) and find a way to unstick the self from the situation it has gotten itself into.  \r\n\r\nIn working with me, you will be guided through the minefield of the mind to untangle the knots those thoughts can tie you in. '),
(5, 'If you have something worrying you but not able to identify what the problem is or unable to move on from it, talking about it can bring the worry into focus and enable you to name it.  Using language to name and identify brings the unseen into the seen.  Sometimes just the seeing allows it to dissolve as you let go.  \r\n\r\nJust know, you\'re not alone in this.  You just think you are.  If you have a \'problem\' there are many others with very similar problems.  The only difference between them and you is that you\'ve decided you\'ve had enough and want to do something about it.  \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `trauma`
--

CREATE TABLE `trauma` (
  `id` int(255) NOT NULL DEFAULT '0',
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trauma`
--

INSERT INTO `trauma` (`id`, `content`) VALUES
(1, ' Hypnosis is associated with the treatment of posttraumatic stress disorder (PTSD) for two reasons: (1) the similarity between hypnotic phenomena and the symptoms of PTSD, and (2) the utility of hypnosis as a tool in treatment. Physical trauma produces a sudden discontinuity in cognitive and emotional experience that often persists after the trauma is over. This results in symptoms such as psychogenic amnesia, intrusive reliving of the event as if it were recurring, numbing of responsiveness, and hypersensitivity to stimuli. Two studies have shown that Vietnam veterans with PTSD have higher than normal hypnotizability scores on standardized tests. Likewise, a history of physical abuse in childhood has been shown to be strongly associated with dissociative symptoms later in life. Furthermore, dissociative symptoms during and soon after traumatic experience predict later PTSD. Formal hypnotic procedures are especially helpful because this population is highly hypnotizable. Hypnosis provides controlled access to memories that may otherwise be kept out of consciousness. New uses of hypnosis in the psychotherapy of PTSD victims involve coupling access to the dissociated traumatic memories with positive restructuring of those memories. Hypnosis can be used to help patients face and bear a traumatic experience by embedding it in a new context, acknowledging helplessness during the event, and yet linking that experience with remoralizing memories such as efforts at self-protection, shared affection with friends who were killed, or the ability to control the environment at other times. In this way, hypnosis can be used to provide controlled access to memories that are then placed into a broader perspective'),
(2, ' Trauma from the past can get in the way of living your life in the present.  It can drag you back into ways of behaving that you know are detrimental to your relationships, your work or what you allow yourself to accomplish.  At times you may be aware of this but often it\'s such an established pattern it feels like an old pair of slippers - comfortable and familiar and what you know.  \r\n\r\nHypnosis is able to take most people to a point where you can process and let go of these events from the past.  It does it quickly and simply without the need to revisit or explore in detail the actual events.  You just \'let it go\'.  Instead of viewing your world through those old hurts, hypnosis allows you to leave it in the past where it belongs and engage more fully in the present.  \r\n\r\nIf you believe you are being affected by trauma or past events, please contact me for a confidential discussion to determine if hypnotherapy is an appropriate form of treatment for you.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `user_password`) VALUES
('srinath', 'password1');

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `id` int(255) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`id`, `message`) VALUES
(1, 'With our busy and often sedentary lifestyles, it can be hard to keep those extra kilos away.  Pushed for time we may find we snack on fattening foods and then are too full to eat a healthy dinner (or maybe the dinner is eaten as well!).  Hypnotherapy for weight loss can support your willingness to eat healthy foods whilst reducing your tastes for those things we love to eat and know we shouldn\'t.'),
(2, 'And what about the self esteem or depression once those clothes no longer fit?  Makes you want to eat more?  You have the opportunity to stop this process in its tracks if you are willing.  These feelings may be create a spiral with your eating patterns and behaviours.   The more weight you gain the unhappier you feel and the more you eat.'),
(3, 'Do you eat when you are unhappy or bored?  This is called emotional eating and has become a habit or pattern.  Hypnotherapy for weight loss is able to work with you to manage those emotions enabling those habits to be dealt with to channel that response into a more proactive avenue.  I am able to to provide the tools to support your weight loss if bring your commitment and motivation'),
(4, 'Perhaps the eating is related to trauma or a bad experience you have had.  I have found, through my work with clients, once the cause or experience is managed, the weight tends to fall away.  It is almost as if the weight is being used as a protective layer or barrier between your self and other people.  Remove the need for the protection and the reason for the weight no longer exists.  As an experienced and qualified Counsellor I am able to support the letting of past trauma enabling you to have the life you know if waiting for you.'),
(5, 'Whilst there are never any guarantees, it is very likely you will experience a difference to your relationship with food after the first session.  It may take several sessions to ensure positive behaviours are maintained for weight reduction, especially if work is required to deal with deep seated emotional issues.\r\n\r\n\r\nWhilst I am able to offer no guarantees, please read  my google reviews for others\' experiences of hypnotherapy. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Announcement`
--
ALTER TABLE `Announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Anxiety`
--
ALTER TABLE `Anxiety`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Contact Form`
--
ALTER TABLE `Contact Form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Fears`
--
ALTER TABLE `Fears`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Medi`
--
ALTER TABLE `Medi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Relation`
--
ALTER TABLE `Relation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Smoking`
--
ALTER TABLE `Smoking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Supervision`
--
ALTER TABLE `Supervision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trauma`
--
ALTER TABLE `trauma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Announcement`
--
ALTER TABLE `Announcement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Fears`
--
ALTER TABLE `Fears`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Relation`
--
ALTER TABLE `Relation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Smoking`
--
ALTER TABLE `Smoking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Supervision`
--
ALTER TABLE `Supervision`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
