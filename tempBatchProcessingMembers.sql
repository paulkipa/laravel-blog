/*
 Navicat Premium Data Transfer

 Source Server         : sacco
 Source Server Type    : SQL Server
 Source Server Version : 12005000
 Source Host           : (LOCAL):1433
 Source Catalog        : SACCO_SHELL_NEW
 Source Schema         : dbo

 Target Server Type    : SQL Server
 Target Server Version : 12005000
 File Encoding         : 65001

 Date: 03/11/2020 12:32:06
*/


-- ----------------------------
-- Table structure for tempBatchProcessingMembers
-- ----------------------------
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[tempBatchProcessingMembers]') AND type IN ('U'))
	DROP TABLE [dbo].[tempBatchProcessingMembers]
GO

CREATE TABLE [dbo].[tempBatchProcessingMembers] (
  [RefNo] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [MemberNo] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [Amount] numeric(18)  NULL,
  [ChequeNo] varchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL
)
GO

ALTER TABLE [dbo].[tempBatchProcessingMembers] SET (LOCK_ESCALATION = TABLE)
GO


-- ----------------------------
-- Table structure for TempBatchProfile
-- ----------------------------
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[TempBatchProfile]') AND type IN ('U'))
	DROP TABLE [dbo].[TempBatchProfile]
GO

CREATE TABLE [dbo].[TempBatchProfile] (
  [MemberNo] nvarchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [RefNo] nvarchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL
)
GO

ALTER TABLE [dbo].[TempBatchProfile] SET (LOCK_ESCALATION = TABLE)
GO


-- ----------------------------
-- Table structure for TempBatchStatement
-- ----------------------------
IF EXISTS (SELECT * FROM sys.all_objects WHERE object_id = OBJECT_ID(N'[dbo].[TempBatchStatement]') AND type IN ('U'))
	DROP TABLE [dbo].[TempBatchStatement]
GO

CREATE TABLE [dbo].[TempBatchStatement] (
  [RefNo] nvarchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [MemberNo] nvarchar(50) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL
)
GO

ALTER TABLE [dbo].[TempBatchStatement] SET (LOCK_ESCALATION = TABLE)
GO

