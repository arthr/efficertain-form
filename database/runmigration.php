<?php
# Migrations
require_once 'database/migrations/create_lender_table_20180611.php';
require_once 'database/migrations/create_investmentprofile_table_20180611.php';
require_once 'database/migrations/create_assetsliabilitesbreakdown_table_20180611.php';

# Create Lender Table
$lender = new CreateLenderTable();
$lender->drop();
$lender->up();

# Create InvestmentProfile Table
$investmentProfile = new CreateInvestmentProfileTable();
$investmentProfile->up();
$investmentProfile->down();

# Create AssetsLiabilitesBreakdown Table
$assetsLiabilitesBreakdown = new CreateAssetsLiabilitesBreakdownTable();
$assetsLiabilitesBreakdown->up();
$assetsLiabilitesBreakdown->down();
