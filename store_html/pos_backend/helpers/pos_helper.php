<?php
declare(strict_types=1);
/**
 * pos_helper.php
 *
 * 统一助手函数引导文件 (Bootstrapper)
 * 职责：按正确顺序加载所有 helpers/services
 *
 * Version: 1.0.2 (B1.4 P5 - Self-Test Suite)
 * Date: 2025-11-14
 *
 * [B1.4 P5]
 * - 新增 require_once 'pos_repo_ext_pass.php'
 * - 新增 require_once 'pos_pass_helper.php'
 * - 这是为了确保 P3 核销事务函数 (create_redeem_records) 在测试套件中可用。
 *
 * [B1.2 PASS]
 * - 确保 B1 阶段新增的次卡相关助手被加载。
 * - 确保 B1 阶段的 PromotionEngine 被加载。
 */

// 1. 核心 (必须最先加载)
require_once realpath(__DIR__ . '/pos_json_helper.php');
require_once realpath(__DIR__ . '/pos_datetime_helper.php');

// 2. 数据库仓库 (Repo)
require_once realpath(__DIR__ . '/pos_repo.php');

// 3. 业务服务 (Services)
require_once realpath(__DIR__ . '/../services/PromotionEngine.php');

// 4. [B1.4 P5] 次卡扩展 (P0/P3)
// (必须在 pos_repo.php 和 pos_datetime_helper.php 之后加载)
require_once realpath(__DIR__ . '/pos_repo_ext_pass.php');
require_once realpath(__DIR__ . '/pos_pass_helper.php');