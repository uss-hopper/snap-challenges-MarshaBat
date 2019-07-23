/**
  *
  1. Write a create table statement for this table.  The table is named Task.
+-----------------+--------------+------+-----+---------+-------+
| Field           | Type         | Null | Key | Default | Extra |
+-----------------+--------------+------+-----+---------+-------+
| taskId          | binary(20)   | NO   | PRI | NULL    |       |
| taskTitle       | varchar(255) | NO   |     | NULL    |       |
| taskStartDate   | datetime     | YES  |     | NULL    |       |
| taskDueDate     | datetime     | YES  |     | NULL    |       |
| taskStatus      | varchar(64)  | NO   |     | NULL    |       |
| taskPriority    | varchar(64)  | NO   |     | NULL    |       |
| taskDescription | varchar(256) | YES  |     | NULL    |       |
+-----------------+--------------+------+-----+---------+-------+
(Hint: you can use the desc command to check your work)
 */

-- The statement below sets the collation of the database to utf8
ALTER DATABASE mbattee CHARACTER SET utf8_unicode_ci;

-- These statements drop the following tables if they exists.
DROP TABLE IF EXISTS task;

-- These tables will create the table "task".
CREATE TABLE IF NOT EXISTS task (
-- The following creates an attribute for the primary key.
   taskID BINARY(20) NOT NULL,
	taskTitle VARCHAR(255) NOT NULL,
	taskStartDate DATETIME,
	taskDueDate	DATETIME,
	taskStatus VARCHAR(64) NOT NULL,
	taskPriority VARCHAR(64) NOT NULL,
	taskDescription VARCHAR(256),
	PRIMARY KEY(taskId)
);


/**
 *2. For the DDL described in the Data Design Project overview, create
 *an SQL SELECT statement that gets me the following information for the Tweet with the
 *(hexified) id 0536faef082b454e9d444cdbe7887d7a. tweetContent
 *profileAtHandle of all users who have liked the Tweet
*/

-- Answer commented out below.
SELECT tweet.tweetContent, profile.profileAtHandle FROM tweet
		INNER JOIN `like` ON tweet.tweetId = like.likeTweetId
		INNER JOIN profile ON like.likeProfileId = profile.profileId
		WHERE tweet.tweetId = '0536faef082b454e9d444cdbe7887d7a';


