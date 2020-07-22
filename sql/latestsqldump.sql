
INSERT INTO `cms` (`id`, `criteria`, `name`, `settings`, `description`, `default_setting`, `availability`, `created_at`, `updated_at`) VALUES (NULL, 'completed_withdrawal_email', 'Completed Withdrawal Email', '<p>[RECEIVER]&nbsp;</p>\r\n\r\n<p>You have received a pending transfer of $[AMOUNT]&nbsp;from&nbsp;[SENDER].</p>\r\n\r\n<p>Kindly login to your dashboard, got to History, then&nbsp;transfer history to accept or decline the pending transfer</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Taurus Capital</p>\r\n', '[AMOUNT], [RECEIVER], [FEE], [TIMESTAMP]use any of this place holder to personalize this content.', '', '1', NULL, '2020-05-31 13:08:33');



ALTER TABLE `cms` ADD `availability` INT NULL DEFAULT '1' AFTER `default_setting`;





ALTER TABLE `wallet_for_payout` CHANGE `earning_category` `earning_category` ENUM('bonus','deposit','withdrawal','adjustment','investment','commission','hot_wallet','account_plan') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;
ALTER TABLE `subscription_payment_orders` ADD `payment_schedule` LONGTEXT NULL AFTER `payment_state`;









ALTER TABLE `wallet_for_hot_wallet` ADD `sold` DATETIME NULL AFTER `split_at`;

ALTER TABLE `wallet_for_hot_wallet` ADD `split_at` DATETIME NULL AFTER `paid_at`;

ALTER TABLE `wallet` CHANGE `amount` `amount` DECIMAL(20,2) UNSIGNED NOT NULL;
ALTER TABLE `wallet_for_commissions` CHANGE `amount` `amount` DECIMAL(20,2) UNSIGNED NOT NULL;
ALTER TABLE `wallet_for_hot_wallet` CHANGE `amount` `amount` DECIMAL(20,2) UNSIGNED NOT NULL;



-- ALTER TABLE `wallet_for_held_coin` CHANGE `amount` `amount` DECIMAL(20,2) UNSIGNED NOT NULL;
-- ALTER TABLE `wallet_for_payout` CHANGE `amount` `amount` DECIMAL(20,2) UNSIGNED NOT NULL;
