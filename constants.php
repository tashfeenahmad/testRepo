<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//---------------------------------
define("TUTORIAL_USERNAME", 'E1'); //default valuue
define("SPECIAL_CHARACTERS", 'E2'); //default valuue
//---------------------------------
//define('CDN_URL', 'http://storagecdnstaging.blob.core.windows.net/cdnstagingsnsc');

/*
  |--------------------------------------------------------------------------
  | File and Directory Modes
  |--------------------------------------------------------------------------
  |
  | These prefs are used when checking and setting modes when working
  | with the file system.  The defaults are fine on servers with proper
  | security, but you may wish (or even need) to change the values in
  | certain environments (Apache running a separate process for each
  | user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
  | always be used to set the mode correctly.
  |
 */
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

define('TEST_VAR_1', '1');
define('TEST_VAR_2', '1');

/*
  |--------------------------------------------------------------------------
  | File Stream Modes
  |--------------------------------------------------------------------------
  |
  | These modes are used when working with fopen()/popen()
  |
 */
define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

//---------------Defined for unity assets bundals
define('PREFAB_NAME', 'prefab_name');
define('UNITY_BUNDLE_NAME', 'bundle_name');
define('IMAGE_EXTENTION', '.png');

/*
  |--------------------------------------------------------------------------
  | Game Server Constants
  |--------------------------------------------------------------------------
  |
  | These modes are used when working with fopen()/popen()
  |
 */
define('GSI_SERVER_ERROR', 's1');
define('GSI_SERVER_ERROR_CODE', 's2');
define('GSI_SERVER_ERROR_DETAIL', 's3');
define('GSI_SERVER_RETRY', 's4');
define('GSI_SERVER_ERROR_KEY_AGAINST_CODE', 's5');
define('GSI_CLIENT_ACTION', 's6');

define('GSI_PROCESS_UPDATES', 'i1');
define('GSI_PROCESS_TEST_UPDATES', 'i2');
define('GSI_COMMANDS_LIST', 'i3');
define('GSI_USER_DATA', 'i4');
define('GSI_LIVE_CATALOG_VERSION', 'i5');
define('GSI_TEST_CATALOG_VERSION', 'i6');
define('GSI_DOWNLOAD_URL', 'i7');
define('GSI_ERROR_LOGGING_URL', 'i3426');
define('GSI_TRAN_RESULT', 'i8');
define('GSI_ERROR_DETAILS', 'i9');
define('GSI_USER_EXISTS', 'i10');
define('GSI_DEFAULT_USER', 'i11');
define('GSI_FIGHTS_LOST', 'i12');
define('GSI_SKILL_ATTACK', 'i13');
define('GSI_SKILL_STAMINA', 'i14');
define('GSI_MOB_SIZE', 'i15');
define('GSI_STAMINA', 'i16');
define('GSI_DIAMONDS', 'i17');
define('GSI_SKILL_HEALTH', 'i18');
define('GSI_SKILL_FARMING', 'i19');
define('GSI_HEALTH', 'i20');
define('GSI_SKILL_POINTS', 'i21');
define('GSI_COINS', 'i22');
define('GSI_SKILL_DEFENSE', 'i23');
define('GSI_HIT_KILLS', 'i24');
define('GSI_HIT_DEATHS', 'i25');
define('GSI_REPUTATION', 'i26');
define('GSI_FIGHTS_WON', 'i27');
define('GSI_LEVEL', 'i28');
define('GSI_UID', 'i29');
define('GSI_USERNAME', 'i31');
define('GSI_EXP_CURRENT_LEVEL', 'i32');
define('GSI_EXP_NEXT_LEVEL', 'i33');
define('GSI_EXPERIENCE', 'i34');
define('GSI_DEVICE_TYPE', 'i35');
define('GSI_MUST_UPGRADE', 'i36');
define('GSI_OPTIONAL_UPGRADE', 'i37');
define('GSI_IS_TEST_DEVICE', 'i38');
define('GSI_REG_IP', 'i39');
define('GSI_DEVICE_EXISTS', 'i40');
define('GSI_RECOVER_NAME', 'i41');
define('GSI_REG_TIME', 'i42');
define('GSI_LC_USERNAME', 'i43');
define('GSI_SYNCH_TIME', 'i44');
define('GSI_IPHONE_CURRENT_VERSION', 'i45');
define('GSI_IPHONE_MANDATORY_VERSION', 'i46');
define('GSI_ANDROID_CURRENT_VERSION', 'i47');
define('GSI_ANDROID_MANDATORY_VERSION', 'i48');
define('GSI_IPHONE_UPGRADE_URL', 'i49');
define('GSI_ANDROID_UPGRADE_URL', 'i50');

define('GSI_CURRENT_VERSION', 'i51');
define('GSI_MANDATORY_VERSION', 'i52');
define('GSI_UPGRADE_URL', 'i53');

define('GSI_MAP_LEVEL', 'i54');
define('GSI_TRAN_ID', 'i55');
define('GSI_ITEM_DATA', 'i56');
define('GSI_ITEM_ID', 'i57');
define('GSI_INSTANCE_ID', 'i58');
define('GSI_TIME_STAMP', 'i59');
define('GSI_DISPLAY_INFO', 'i60');
define('GSI_STORED', 'i61');
define('GSI_INVENTORY_DATA', 'i62');
define('GSI_DISP_X', 'i63');
define('GSI_DISP_Y', 'i64');
define('GSI_DISP_FLIPPED', 'i65');
define('GSI_USER_MARKET_DATA', 'i66');
define('GSI_ITEM_COUNT', 'i67');
define('GSI_SERVER_TIME', 'i68');
define('GSI_SERVER_STAMP', 'i69');
define('GSI_TEST_NOTICE', 'i70');
define('GSI_ONLINE_RAID_LIST', 'i71');
define('GSI_ACTIVE_RAID_LIST', 'i72');
define('GSI_PASSIVE_RAID_LIST', 'i73');
define('GSI_RAID_LIST', 'i74');

define('GSI_RAID_LIST_SIZE', 'i75');
define('GSI_SKILL_ENERGY', 'i76');
define('GSI_RAID_INDEX_MIN_VALUE', 'i77');
define('GSI_RAID_INDEX_MAX_VALUE', 'i78');
define('GSI_ONLINE_USERS_RAID_INDEX', 'i79');
define('GSI_RECENTLY_ONLINE_USERS_RAID_INDEX', 'i80');
define('GSI_OFFLINE_USERS_RAID_INDEX', 'i81');

define('GSI_ONLINE_USERS_RAID_LIST_WEIGHT', 'i82');
define('GSI_RECENTLY_ONLINE_USERS_RAID_LIST_WEIGHT', 'i83');
define('GSI_OFFLINE_USERS_RAID_LIST_WEIGHT', 'i84');
define('GSI_RAID_LIST_CACHE_ACCESS_COUNT', 'i85');
define('GSI_RAID_LIST_CACHE_ACCESS_LIFE_TIME', 'i86');
define('GSI_RAID_VIEW_ONLINE_USER_RETRIEVAL_LIMIT', 'i87');
define('GSI_RAID_VIEW_RECENTLY_ONLINE_USER_RETRIEVAL_LIMIT', 'i88');
define('GSI_RAID_VIEW_OFFLINE_USER_RETRIEVAL_LIMIT', 'i89');
define('GSI_K_VALUE', 'i90');
define('GSI_SIGMA', 'i91');
define('GSI_MINIMUM_HONOUR_POINT', 'i92');

define('GSI_RAID_INDEX', 'i93');
define('GSI_LAST_ACTIVITY', 'i94');
define('GSI_RAID_EXP_VARIANCE', 'i95');
define('GSI_RAID_COINS_VARIANCE', 'i96');
define('GSI_VARIANCE', 'i97');
define('GSI_IS_TEST_GROUP', 'i98');
define('GSI_ENERGY', 'i99');
define('GSI_HEALTH_CAP', 'i100');
define('GSI_STAMINA_CAP', 'i101');
define('GSI_ENERGY_CAP', 'i102');

// PVP SETTINGS
define('GSI_PVP_DIRTY', 'i103');
define('GSI_ONLINE_THRESHOLD', 'i104');
define('GSI_ACTIVE_THRESHOLD', 'i105');
define('GSI_PASSIVE_THRESHOLD', 'i106');
define('GSI_ONLINE_RAID_LIST_SIZE', 'i107');
define('GSI_ACTIVE_RAID_LIST_SIZE', 'i108');
define('GSI_LEVEL_VARIANCE', 'i109');
define('GSI_MOB_SIZE_VARIANCE', 'i110');
define('GSI_WOUNDED_THRESHOLD', 'i111');
define('GSI_RAID_INDEX_LIMIT', 'i112');
define('GSI_LOSER_HEALTH_FLOOR', 'i113');
define('GSI_LOSER_HEALTH_CEILING', 'i114');
define('GSI_WINNER_HEALTH_FLOOR', 'i115');
define('GSI_WINNER_HEALTH_CEILING', 'i116');
define('GSI_RAZING_CROPS_CHANCE', 'i117');
define('GSI_LOOTING_ESTATE_CHANCE', 'i118');
define('GSI_ITEM_LOOT_CHANCE', 'i119');
define('GSI_MAX_REPUTATION_BONUS', 'i120');
define('GSI_HIT_LIST_FEES', 'i121');

define('GSI_MINIMUM_BOUNTY', 'i122');

define('GSI_BUY_SELL_RATIO', 'i123');
define('GSI_BANK_DEPOSIT_CHARGE', 'i124');
define('GSI_STAMINA_REGEN', 'i125');
//define('GSI_HEALTH_REGEN', 'i126');
define('GSI_ENERGY_REGEN', 'i127');
define('GSI_SKILL_PER_LEVEL', 'i128');
define('GSI_ATTACK_SKILL_UNIT', 'i129');
define('GSI_ATTACK_UNIT_BONUS', 'i130');
define('GSI_DEFENSE_SKILL_UNIT', 'i131');
define('GSI_DEFENSE_UNIT_BONUS', 'i132');
define('GSI_STAMINA_SKILL_UNIT', 'i133');
define('GSI_STAMINA_UNIT_BONUS', 'i134');
//define('GSI_HEALTH_SKILL_UNIT', 'i135');
//define('GSI_HEALTH_UNIT_BONUS', 'i136');
define('GSI_PVP_ATTACK_SCORE', 'i137');
define('GSI_PVP_DEFENSE_SCORE', 'i138');
define('GSI_ATTDEF_DAMPENING', 'i139');
define('GSI_NO_STAMINA', 'i140');
define('GSI_ATTACKER_WOUNDED', 'i141');
define('GSI_DEFENDER_WOUNDED', 'i142');
define('GSI_PVP_ATTACK_EQ', 'i143');
define('GSI_PVP_DEFENSE_EQ', 'i144');
define('GSI_DEFXP_DAMPENING', 'i145');
define('GSI_ATTACKER_WINS', 'i146');

define('GSI_NEWS', 'i147');
define('GSI_CROPS_RAZED', 'i148');
define('GSI_ESTATE_VANDALIZED', 'i149');
define('GSI_DAMAGED', 'i150');
define('GSI_NEWS_TYPE', 'i151');
define('GSI_LEVEL_CASH_MULT', 'i152');
define('GSI_LEVEL_UP', 'i153');
define('GSI_LEVEL_UP_DIAMONDS', 'i154');
define('GSI_LEVEL_UP_SKILL', 'i155');
define('GSI_KO_THRESHOLD', 'i156');
define('GSI_ON_HIT_LIST', 'i157');
define('GSI_BOUNTY', 'i158');
define('GSI_HIT_LIST_SIZE', 'i159');
define('GSI_HIT_LIST', 'i160');
define('GSI_NOT_ENOUGH_MONEY', 'i161');
define('GSI_BOUNTY_EXISTS', 'i162');
define('GSI_NEWS_ID', 'i163');

define('GSI_ATTACK_DAMAGE', 'i164');
define('GSI_DEFENSE_DAMAGE', 'i165');
define('GSI_PVP_REP_MULT', 'i166');
define('GSI_PVP_VILLAIN_DEF', 'i167');
define('GSI_PVP_VILLAIN_ATT', 'i168');
define('GSI_PVP_BUILDING_DEF', 'i169');
define('GSI_PVP_ATTACKER_DAT', 'i170');
define('GSI_PVP_DEFENDER_DAT', 'i171');
define('GSI_BANK_COINS', 'i172');

define('GSI_ENERGY_SKILL_UNIT', 'i173');
define('GSI_ENERGY_UNIT_BONUS', 'i174');
//define('GSI_HEALTH_TICK', 'i175');
define('GSI_ENERGY_TICK', 'i176');
define('GSI_STAMINA_TICK', 'i177');
define('GSI_TICK_DATA', 'i178');

define('GSI_HIT_LIST_KO', 'i179');
define('GSI_REP_CAP', 'i180');
define('GSI_NEWS_AVAILABLE', 'i181');
define('GSI_POLL_INTERVAL', 'i182');
define('GSI_FARM_PLOT_LIMIT', 'i183');
define('GSI_FARM_PLOT_NEXT_LEVEL', 'i184');
define('GSI_BOOST_CODE', 'i185');
define('GSI_SKILL_RESET_COST', 'i186');
define('GSI_SAVE_PIN', 'i187');
define('GSI_EMAIL', 'i188');
define('GSI_VALID_EMAIL', 'i189');
define('GSI_ATTACK_SCORE_DIRTY', 'i190');
define('GSI_DEFENSE_SCORE_DIRTY', 'i191');
define('GSI_BUFFER_EXPERIENCE', 'i192');
define('GSI_BUFFER_HEALTH', 'i193');
define('GSI_BUFFER_COINS', 'i194');
define('GSI_DELTA_EXPERIENCE', 'i195');
define('GSI_DELTA_HEALTH', 'i196');
define('GSI_DELTA_COINS', 'i197');
define('GSI_THUG_LIMIT', 'i198');
define('GSI_THUG_PRICE', 'i199');
define('GSI_JOB_DATA', 'i200');
define('GSI_ZONE_DATA', 'i201');
define('GSI_JOB_ID', 'i202');
define('GSI_ATTEMPTS', 'i203');
define('GSI_JOB_EXP_VARIANCE', 'i204');
define('GSI_JOB_COINS_VARIANCE', 'i205');
define('GSI_ZONE_ID', 'i206');
define('GSI_REWARD_ITEM', 'i207');
define('GSI_REWARD_COINS', 'i208');
define('GSI_REWARD_EXP', 'i209');
define('GSI_MASTERY_LEVEL', 'i210');
define('GSI_JOB_COUNT', 'i211');
define('GSI_JOB_NEW_MASTERY', 'i212');
define('GSI_ZONE_NEW_MASTERY', 'i213');
define('GSI_LOOT_SUCCESS', 'i214');
define('GSI_REWARD_SKILL', 'i215');
define('GSI_BULK_DATA', 'i216');
define('GSI_DIAMOND_RATIO', 'i217');

define('GSI_DAILY_BONUS_1', 'i218');
define('GSI_DAILY_BONUS_2', 'i219');
define('GSI_DAILY_BONUS_3', 'i220');
define('GSI_DAILY_BONUS_4', 'i221');
define('GSI_DAILY_BONUS_5', 'i222');
define('GSI_DAILY_BONUS_VARIANCE', 'i223');
define('GSI_DAILY_BONUS_MULT_1', 'i224');
define('GSI_DAILY_BONUS_MULT_2', 'i225');
define('GSI_DAILY_BONUS_MULT_3', 'i226');
define('GSI_DAILY_BONUS_MULT_4', 'i227');
define('GSI_DAILY_BONUS_MULT_5', 'i228');
define('GSI_DAILY_BONUS_STAMP', 'i229');
define('GSI_DAILY_BONUS_DATA', 'i230');
define('GSI_SETTINGS_DATA', 'i231');

//define('GSI_HEALTH_COINS', 'i232');
//define('GSI_HEALTH_COINS_MULT', 'i233');
define('GSI_DEFAULT_INV_TABLE', 'i234');
define('GSI_MARKET_LOCKED_LEVELS', 'i235');

define('GSI_ECON_RAID_COINS', 'i236');
define('GSI_ECON_RAID_EXP', 'i237');
define('GSI_ECON_JOB_COINS', 'i238');
define('GSI_ECON_JOB_EXP', 'i239');
define('GSI_ECON_MARKET_COINS', 'i240');
define('GSI_ECON_FARM_COINS', 'i241');
define('GSI_ECON_FARM_EXP', 'i242');

define('GSI_PVP_ABSOLUTE_WIN', 'i243');
define('GSI_PVP_BASE_DAMPENING', 'i244');
define('GSI_PVP_ABSOLUTE_MARGIN', 'i255');

define('GSI_MIN_RAID_REP', 'i256');
define('GSI_ALLOW_WOUNDED', 'i257');

define('GSI_NEXT_HEALTH_SECONDS', 'i258');
define('GSI_NEXT_STAMINA_SECONDS', 'i259');
define('GSI_NEXT_ENERGY_SECONDS', 'i260');

define('GSI_PVP_DEFENDER_COINS_MULT', 'i261');

define('GSI_USER_CATALOG_VERSION', 'i262');
define('GSI_SEARCH_DEPTH_TOTAL', 'i263');
define('GSI_SEARCH_REQUESTS', 'i264');
define('GSI_SEARCH_DATA', 'i265');

define('GSI_INVALID_ACCOUNT', 'i266');
define('GSI_TUTORIAL_PLAYER_UID', 'i267');
define('GSI_MIN_PLAYER_REP', 'i268');
define('GSI_MAX_CASH_PROPERTY_DAYS', 'i269');
define('GSI_CLIENT_TIMEOUT', 'i270');

define('GSI_IPHONE_REVIEW_URL', 'i271');
define('GSI_ANDROID_REVIEW_URL', 'i272');
define('GSI_REVIEW_URL', 'i273');

define('GSI_BOUNTY_SETTER_ID', 'i274');
define('GSI_BOUNTY_DEFENDER_NAME', 'i275');
define('GSI_REWARD_SKILL_BUCKET', 'i276');

define('GSI_PUSH_DAYS', 'i277');
define('GSI_PUSH_LAUNCH_COUNT', 'i278');

define('GSI_OFFER_DIAMONDS', 'i279');

define('GSI_REGION_ID', 'i280');
define('GSI_PAPAYA_ID', 'i281');
define('GSI_OFFER_CODE', 'i282');
define('GSI_FAD_PERIOD', 'i283');
define('GSI_FAD_REWARD', 'i284');
define('GSI_MCLICK_COINS_PERIOD', 'i285');
define('GSI_MCLICK_COINS_REWARD', 'i286');
define('GSI_MCLICK_DIAMONDS_PERIOD', 'i287');
define('GSI_MCLICK_DIAMONDS_REWARD', 'i288');
define('GSI_FAD_STAMP', 'i289');
define('GSI_MCLICK_COINS_STAMP', 'i290');
define('GSI_MCLICK_DIAMONDS_STAMP', 'i291');
define('GSI_AD_OFFER_DIAMONDS', 'i292');
define('GSI_AD_OFFER_COINS', 'i293');
define('GSI_MCLICK_COINS_CODE', 'i294');
define('GSI_MCLICK_DIAMONDS_CODE', 'i295');
define('GSI_FAD_CODE', 'i296');

define('GSI_PAPAYA_NAME', 'i297');
define('GSI_WOUNDED_TIME', 'i298');
define('GSI_WOUNDED_MIN_TIME', 'i299');

define('GSI_NEXT_THUG_LEVEL', 'i300');
define('GSI_CLAIM_SELF_BOUNTY', 'i301');
define('GSI_HITLIST_TIME', 'i302');
define('GSI_HITLIST_MIN_TIME', 'i303');
define('GSI_HITLIST_TOO_EARLY', 'i304');

define('GSI_FAD_ON', 'i305');
define('GSI_FAD_CLIENT_INTERVAL', 'i306');
define('GSI_MCLICK_RANDOMIZATION', 'i307');
define('GSI_FAD_CANCEL_FEE', 'i308');
define('GSI_MCLICK_DIAMOND_CHANCE', 'i309');
define('GSI_MCLICK_CLIENT_INVERVAL', 'i310');
define('GSI_MCLICK_CODE', 'i311');
define('GSI_MCLICK_STAMP', 'i312');
define('GSI_MCLICK_ON', 'i313');

define('GSI_MINIMUM_BOUNTY_2', 'i314');
define('GSI_WEATHER_CENTER', 'i315');
define('GSI_LC_PAPAYA_NAME', 'i316');

define('GSI_FAD_FLURRY_PCT', 'i317');
define('GSI_FLURRY_DIAMONDS_REWARD', 'i318');
define('GSI_FLURRY_COINS_REWARD', 'i319');
define('GSI_FLURRY_DIAMOND_CHANCE', 'i320');
define('GSI_FLURRY_CLIENT_INVERVAL', 'i321');
define('GSI_LEADER_BOARD_DATA', 'i322');
define('GSI_FRIENDS_LIST', 'i323');

define('GSI_PAPAYA_INVITE_DATA', 'i324');
define('GSI_PAPAYA_INVITE_DIAMONDS', 'i325');
define('GSI_INVITE_PAPAYA_ID', 'i326'); //will never used 
define('GSI_INVITE_COUNT', 'i327');
define('GSI_INVITE_COMPLETE', 'i328');
define('GSI_LEADERBOARD_REFERESH_TIME', 'i329');

define('GSI_QUEST_LOG', 'i330');
define('GSI_QUEST_DATA', 'i331');
define('GSI_IS_COMPLETE', 'i332');
define('GSI_REWARD_DIAMONDS', 'i333');

define('GSI_FACEBOOK_ID', 'i334');
define('GSI_FACEBOOK_REGISTER_DIAMONDS', 'i335');
define('GSI_FACEBOOK_INVITE_DIAMONDS', 'i336');
define('GSI_FACEBOOK_INVITE_DATA', 'i337');
define('GSI_FACEBOOK_FRIEND_ID', 'i338');
define('GSI_FACEBOOK_CONNECT_COMPLETE', 'i339');
define('GSI_FACEBOOK_CONNECT_DATA', 'i340');
define('GSI_SOCIAL_NEWS', 'i341');
define('GSI_SOCIAL_NEWS_AVAILABLE', 'i342');
define('GSI_REQUEST_ID', 'i343');
define('GSI_FACEBOOK_INVITE_STATUS', 'i344');

define('GSI_PVP_HERO_DEF', 'i345');
define('GSI_PVP_HERO_ATT', 'i346');
define('GSI_HERO_LEVEL', 'i347');
define('GSI_HERO_INFO', 'i348');
define('GSI_ARMY_CAPACITY', 'i349');
define('GSI_BUILDING_ENERGY_CAP', 'i350');

define('GSI_BACKUP_LEVEL', 'i351');
define('GSI_BACKUP_URL', 'i352');
define('GSI_MAX_ANIM_CHARACTER_I', 'i353');
define('GSI_MAX_ANIM_CHARACTER_A', 'i354');

define('GSI_DAILY_BONUS_TYPE', 'i355');

define('GSI_HELP_URL', 'i356');
define('GSI_NEWS_URL', 'i357');
define('GSI_FACEBOOK_PERM', 'i358');
define('GSI_IPAD_REVIEW_URL', 'i359');

define('GSI_SYSTEM_NEWS_COUNTER', 'i360');
define('GSI_SYSTEM_NEWS_CONTENTS', 'i361');
define('GSI_MAX_DEFENSE_COUNT', 'i362');
define('GSI_BAN', 'i363');


define('GSI_CHAT_TIME_STAMP', 'i364');
define('GSI_CHAT_SPAM_LIMIT', 'i365');
define('GSI_CHAT_BUFFER_SIZE', 'i366');
define('GSI_CHAT_MAX_LENGTH', 'i367');
define('GSI_CHAT_SPAM_DETECTED', 'i368');
define('GSI_CHAT_DISPLAY_TIME', 'i369');
define('GSI_CHAT_CHANNEL', 'i370');
define('GSI_CHAT_MESSAGE', 'i371');
define('GSI_CHAT_BLOCK', 'i372');
define('GSI_CHAT_POLL_INTERVAL', 'i373');

define('GSI_OPS_ENERGY_TO_XP_RATIO', 'i375');
define('GSI_ASN_ENERGY_COST', 'i376');
define('GSI_ASN_MIN_MOB_SIZE', 'i377');
define('GSI_ASN_LEVEL_TO_MOB_RATIO', 'i378');
define('GSI_ASN_LEVEL_DIFF_MAX', 'i379');
define('GSI_ASN_LEVEL_FACTOR_MIN', 'i380');
define('GSI_ASN_LEVEL_FACTOR_MAX', 'i381');
define('GSI_HST_ENERGY_COST', 'i382');
define('GSI_HST_INCOME_STEAL_RATIO', 'i383');
define('GSI_HST_BLD_SIZE_MIN', 'i384');
define('GSI_HST_BLD_SIZE_MAX', 'i385');
define('GSI_HST_SIZE_FACTOR_MIN', 'i386');
define('GSI_HST_SIZE_FACTOR_MAX', 'i387');
define('GSI_HST_LEVEL_DIFF_MAX', 'i388');
define('GSI_HST_LEVEL_FACTOR_MIN', 'i389');
define('GSI_HST_LEVEL_FACTOR_MAX', 'i390');
define('GSI_SAB_ENERGY_COST', 'i391');
define('GSI_SAB_REPAIR_COST_RATIO', 'i392');
define('GSI_SAB_SIZE_FACTOR_MIN', 'i393');
define('GSI_SAB_SIZE_FACTOR_MAX', 'i394');
define('GSI_SAB_DEFENSE_MAX', 'i395');
define('GSI_SAB_DEFENSE_FACTOR_MIN', 'i396');

define('GSI_PROFANITY_FLAG', 'i397');

define('GSI_SAB_DEFENSE_FACTOR_MAX', 'i398');
define('GSI_SAB_LEVEL_DIFF_MAX', 'i399');
define('GSI_SAB_LEVEL_FACTOR_MIN', 'i400');
define('GSI_SAB_LEVEL_FACTOR_MAX', 'i401');

define('GSI_PUBLIC_INV_KEY', 'i402');
define('GSI_OPS_SUCCESS', 'i403');
define('GSI_ASN_MOB_SIZE_PROTECTION', 'i404');
define('GSI_HST_INCOME_RECOVERY_RATIO', 'i405');
define('GSI_SAB_BUILDING_SIZE_MAX', 'i406');
define('GSI_DUPLICATE_OP', 'i407');
define('GSI_OP_FLAG', 'i408');
define('GSI_OPS_LIST', 'i409');
define('GSI_OP_VALUE', 'i411');
define('GSI_DELTA_MOB_SIZE', 'i414');
define('GSI_ASN_DISCOUNT', 'i415');
define('GSI_ASN_COUNT', 'i416');
define('GSI_ANDROID_HELP_URL', 'i417');
define('GSI_ANDROID_NEWS_URL', 'i418');
define('GSI_USER_APP_VERSION', 'i419');
define('GSI_OPS_ENABLED', 'i420');
define('GSI_OPS_MIN_IPHONE_VERSION', 'i421');
define('GSI_OPS_MIN_ANDROID_VERSION', 'i422');
define('GSI_OPS_IPHONE_ENABLE', 'i423');
define('GSI_OPS_ANDROID_ENABLE', 'i424');

define('GSI_CHAT_HISTORY_COUNT', 'i425'); // not used
define('GSI_CHAT_HISTORY_SAVE_INTERVAL', 'i426'); // used for cms only
define('GSI_CHAT_ORGINAL_MESSAGE', 'i427');

define('GSI_PAPAYA_INVITE_COUNT', 'i428');
define('GSI_PAPAYA_OFFER_ENABLE', 'i429');

//PRIVATE MESSAGES
define('GSI_PM_TIME_STAMP', 'i430');
define('GSI_PM_MESSAGE', 'i431');
define('GSI_PM_MESSAGE_MAX_LENGTH', 'i432'); //cms
define('GSI_PM_SUBJECT', 'i433');
define('GSI_PM_SUBJECT_MAX_LENGTH', 'i434'); //cms 
define('GSI_PM_TYPE', 'i435');
define('GSI_PM_SPAM_LIMIT', 'i436'); //cms
define('GSI_PM_SPAM_DETECTED', 'i437');
define('GSI_PM_MAX_LENGTH', 'i438'); //cms
define('GSI_PM_DISPLAY_TIME', 'i439'); //cms
define('GSI_PM_HISTORY_SAVE_INTERVAL', 'i440'); //cms
define('GSI_PM_DATA', 'i441');
define('GSI_CHAT_BAN_VOTING_TIME', 'i442');
define('GSI_CHAT_BAN_VOTE_LIMIT', 'i443');
define('GSI_CHAT_BAN_INTERVAL', 'i444');
define('GSI_CHAT_SYSTEM_USER_NAME', 'i445');

define('GSI_CHAT_SYSTEM_MESSAGE', 'i446');
define('GSI_CHAT_MESSAGE_TYPE', 'i447');
define('GSI_CHAT_ANNOUNCE_INTERVAL', 'i448');
define('GSI_CHAT_BANNED_TIME', 'i449');
define('GSI_CHAT_IGNORE_TIME', 'i450');

define('GSI_GUILD_ID', 'i451');
define('GSI_GUILD_NAME', 'i452');
define('GSI_GUILD_NAME_LC', 'i453');
define('GSI_GUILD_DESC', 'i454');
define('GSI_GUILD_WAR_POINTS', 'i455');
define('GSI_GUILD_MEMBER_COUNT', 'i456');
define('GSI_GUILD_LEADER_ID', 'i457');
define('GSI_GUILD_LEADER_NAME', 'i458');
define('GSI_GUILD_VP_ID', 'i459');
define('GSI_GUILD_VP_NAME', 'i460');
define('GSI_GUILD_WAR_WINS', 'i461');
define('GSI_GUILD_CREATE_TIME', 'i463');
define('GSI_GUILD_CREATE_COST', 'i464');
define('GSI_GUILD_MIN_CREATE_LEVEL', 'i465');
define('GSI_GUILD_INVALID_NAME', 'i466');
define('GSI_GUILD_INVALID_DESC', 'i477');
define('GSI_GUILD_NAME_MAX_LENGTH', 'i478');
define('GSI_GUILD_DESC_MAX_LENGTH', 'i479');
define('GSI_GUILD_MAX_MEMBERS', 'i480');
define('GSI_GUILD_NAME_PROFANE', 'i481');
define('GSI_GUILD_DESC_PROFANE', 'i482');
define('GSI_GUILD_NAME_TAKEN', 'i483');
define('GSI_GUILD_RANK', 'i484');
define('GSI_GUILD_JOIN_TIME', 'i485');
define('GSI_GUILD_INFO', 'i486');
define('GSI_GUILD_MEMBERS_INFO', 'i487');
define('GSI_GUILD_NAME_MIN_LENGTH', 'i488');
define('GSI_GUILD_DESC_MIN_LENGTH', 'i489');
define('GSI_GUILD_LIST', 'i490');
define('GSI_GUILD_PAGE_SIZE', 'i491');
define('GSI_GUILD_LAST_PAGE', 'i492');
define('GSI_GUILD_RANK_TITLE', 'i493');
define('GSI_GUILD_RANK_MIN_WPS', 'i494');
define('GSI_SUPPLY_QUALITY', 'i496');
define('GSI_GUILD_FOUND', 'i497');
define('GSI_GUILD_MEMBER_FOUND', 'i498');
define('GSI_GUILD_VALID_MEMBER', 'i499');
define('GSI_GUILD_MEMBER_INFO', 'i500');
define('GSI_GUILD_VP_PERMISSIONS', 'i501'); // cms
define('GSI_GUILD_RENAME_COST', 'i502'); // cms
define('GSI_GUILD_PERMISSION_FAIL', 'i503');
define('GSI_GUILD_REQUEST_SPAM_LIMIT', 'i504');
define('GSI_GUILD_REQUESTER_ID', 'i505');
define('GSI_GUILD_ALREADY_MEMBER', 'i506');
define('GSI_GUILD_REQUESTS', 'i507');
define('GSI_GUILD_REQUEST_TOO_EARLY', 'i508');
define('GSI_PM_RECEIVER_ID', 'i509');
define('GSI_GUILD_REQUEST_PROCESSED', 'i510');
define('GSI_GUILD_REQUEST_MISMATCH', 'i511');
define('GSI_CACHE_BUSY', 'i512');
define('GSI_CHAT_MIN_LEVEL', 'i513');
define('GSI_GUILD_MEMBER_IDS', 'i514');
define('GSI_GUILD_MIN_JOIN_LEVEL', 'i515');
define('GSI_GUILD_LEVEL_TOO_LOW', 'i516');
define('GSI_GUILD_IS_FULL', 'i517');
define('GSI_TARGET_UID', 'i518');
define('GSI_REPORTING_USERNAME', 'i519');
define('GSI_GUILD_REQUEST_ID', 'i520');
define('GSI_GUILD_RANK_SETTINGS', 'i521');
define('GSI_GUILD_APPLICATION', 'i522');
define('GSI_GUILD_REQUEST_CANCELED', 'i523');
define('GSI_GUILD_DUPLICATE_APPLICATION', 'i524');
define('GSI_GUILD_NOT_IN_GUILD', 'i525');
define('GSI_GUILD_OWNER_KICK_ATTEMPT', 'i526');
define('GSI_GUILD_SELF_KICK_ATTEMPT', 'i527');
define('GSI_GUILD_ALREADY_VP', 'i528');
define('GSI_GUILD_NOT_VP', 'i529');
define('GSI_GUILD_DISBANDED', 'i530');
define('GSI_GUILD_MAX_VPS', 'i531');
define('GSI_GUILD_VP_COUNT', 'i532');
define('GSI_GUILD_VPS_FULL', 'i533');
define('GSI_GUILD_CHAT_BLOCK', 'i534');

define('GSI_SUPPLY_SETTINGS', 'i535');
define('GSI_SUPPLY_SETTINGS_MULT_1', 'i536');
define('GSI_SUPPLY_SETTINGS_MULT_2', 'i537');

define('GSI_SUPPLY_SEND_MAX', 'i538');
define('GSI_GIFT_SEND_MAX', 'i539');
define('GSI_SUPPLY_EXPIRY_TIME', 'i540');
define('GSI_GIFT_EXPIRY_TIME', 'i541');
define('GSI_SUPPLY_LIST', 'i542');
define('GSI_SUPPLY_TYPE', 'i543');
define('GSI_SUPPLY_LIMIT_EXCEEDED', 'i544');
define('GSI_SUPPLY_DUPLICATE', 'i545');
define('GSI_GIFT_LIMIT_EXCEEDED', 'i546');
define('GSI_RECEIVER_NAME', 'i547');
define('GSI_SENDER_NAME', 'i548');
define('GSI_SUPPLY_SEND_COUNT', 'i549');
define('GSI_GIFT_SEND_COUNT', 'i550');
define('GSI_DAY_COUNTER', 'i551');
define('GSI_SUPPLY_DISPLAY_MAX', 'i552');
define('GSI_GIFT_DISPLAY_MAX', 'i553');
define('GSI_SUPPLY_OPEN_MAX', 'i554');
define('GSI_GIFT_OPEN_MAX', 'i555');
define('GSI_SUPPLY_OPEN_COUNT', 'i556');
define('GSI_GIFT_OPEN_COUNT', 'i557');
define('GSI_GIFT_DUPLICATE', 'i558');
define('GSI_OPEN_LIMIT_EXCEEDED', 'i559');
define('GSI_OPEN_EXPIRED', 'i560');
define('GSI_ITEM_LIST', 'i561');
define('GSI_RETURN_ID', 'i562');
define('GSI_SUPPLY_OPENED', 'i563');
define('GSI_WAR_CHALLENGE_EXPIRY', 'i564');
define('GSI_WAR_PREPARE_PERIOD', 'i565');
define('GSI_WAR_BATTLE_PERIOD', 'i566');
define('GSI_WAR_HISTORY_PERIOD', 'i567');
define('GSI_WAR_CHEST_PCT', 'i568');
define('GSI_WAR_WINNER_COINS_PCT', 'i569');
define('GSI_WAR_LOSER_COINS_PCT', 'i570');
define('GSI_WAR_SPLIT_EVEN_PCT', 'i571');
define('GSI_WAR_SPLIT_LEVEL_PCT', 'i572');
define('GSI_WAR_SPLIT_WP_PCT', 'i573');
define('GSI_WAR_COINS_FOR_BONUS_DIAMOND', 'i574');
define('GSI_WAR_POINTS_LEVEL_MULT', 'i575');
define('GSI_WAR_MIN_MEMBERS', 'i576');
define('GSI_ENEMY_GUILD_FOUND', 'i577');
define('GSI_ENEMY_ALREADY_AT_WAR', 'i578');
define('GSI_NOT_ENOUGH_MEMBERS', 'i579');
define('GSI_ALREADY_AT_WAR', 'i580');
define('GSI_WAR_ID', 'i589');
define('GSI_WAR_TARGET_NAME', 'i590');
define('GSI_WAR_TARGET_GUILD_ID', 'i591');
define('GSI_WAR_DUPLICATE_CHALLENGE', 'i592');
define('GSI_WAR_IDS', 'i593');
define('GSI_WAR_STATUS', 'i594');
define('GSI_WAR_PREP_START_TIME', 'i595');
define('GSI_WAR_DATA', 'i596');
define('GSI_GUILD_VP_IDS', 'i597');
define('GSI_ENEMY_NOT_ENOUGH_MEMBERS', 'i598');
define('GSI_WAR_CHALLENGE_EXPIRED', 'i599');
define('GSI_WAR_PLAYERS', 'i600');
define('GSI_WAR_LIST', 'i601');
define('GSI_WAR_GLOBAL_PAGE_SIZE', 'i602');
define('GSI_WAR_CHEST_COINS', 'i603');
define('GSI_WAR_CHEST_DIAMONDS', 'i604');
define('GSI_WAR_ALREADY_ACCEPTED', 'i605');
define('GSI_WAR_STARTER_BATTLES_WON', 'i606');
define('GSI_WAR_TARGET_BATTLES_WON', 'i607');
define('GSI_WAR_STARTER_WAR_POINTS', 'i608');
define('GSI_WAR_TARGET_WAR_POINTS', 'i609');
define('GSI_WAR_BATTLES_WON', 'i610');
define('GSI_WAR_BATTLES_LOST', 'i611');
define('GSI_WAR_STARTER_BATTLES_LOST', 'i612');
define('GSI_WAR_TARGET_BATTLES_LOST', 'i613');
define('GSI_WAR_WINNER_GUILD', 'i614');
define('GSI_WAR_TARGET_GUILD_NAME', 'i615');
define('GSI_WPEQ_DEFENDER_LEVEL_MULTIPLIER', 'i616');
define('GSI_WPEQ_EXPONENT_FACTOR', 'i617');
define('GSI_WPEQ_MAX_WAR_POINTS', 'i618');
define('GSI_WPEQ_WIN_MULT_MIN', 'i619');
define('GSI_WPEQ_WIN_MULT_MAX', 'i620');
define('GSI_WPEQ_LOSS_MULT_MIN', 'i621');
define('GSI_WPEQ_LOSS_MULT_MAX', 'i622');
define('GSI_WPEQ_POTENTIAL', 'i623');
define('GSI_WAR_TARGET_LEADER_NAME', 'i624');

//--------------------//
define('GSI_WAR_COMPLETED', 'i625');
define('GSI_SHARD_ID', 'i626');
define('GSI_SHARDING_IN_PROGRESS', 'i627');
define('GSI_CROP_ITEM_ID', 'i628');
define('GSI_ILLEGAL_OPERATION', 'i629');
define('GSI_MAX_REPORT_COUNTER', 'i630');
define('GSI_WAR_AUTOWIN_WARPOINTS_RATIO', 'i631');
define('GSI_WAR_AUTOWIN_TIME_LIMIT', 'i632');
//kabam
define('GSI_KBM_NAID', 'i633');
define('GSI_KBM_ACCESS_TOKEN', 'i634');
define('GSI_KBM_RETURN_CODE', 'i635');
define('GSI_KBM_ERROR_MSG', 'i636');
define('GSI_KBM_OPEN_UDID', 'i637');
define('GSI_KBM_RESPONSE', 'i638');

//guild refactoring ...
define('GSI_BUFFER_CHEST_COINS', 'i639');
define('GSI_WAR_PLAYER_DATA', 'i640');
define('GSI_FROM_DB', 'i641');

//ticker
define('GSI_TICKER_DATA', 'i642');
define('GSI_TICKER_STATUS', 'i643');

// war settings 
define('GSI_WAR_PREP_LOCK_FLAG', 'i644');

//force challange 
define('GSI_FORCE_WAR_COOLDOWN_DURATION', 'i645');
define('GSI_FORCE_WAR_COST', 'i646');
define('GSI_FORCE_WAR_PROTECTION_DURATION', 'i647');

define('GSI_FW_LAST_SENT_TIMESTAMP', 'i648'); // LAST SENT FORCE WAR TIMESTAMP
define('GSI_FW_LAST_RECEIVED_TIMESTAMP', 'i649'); // LAST RECIEVED FORCE WAR TIMESTAMP

define('GSI_FW_MIN_WARPOINT_RATIO', 'i650');
define('GSI_WAR_START_TIME', 'i651');
define('GSI_WAR_END_TIME', 'i652');

//kabam .....
//define('GSI_WAR_END_TIME',       					'i653');

define('GSI_ANDROID_KABAM_MANDATORY_VERSION', 'android_kabam_mandatory_version');
define('GSI_ANDROID_KABAM_CURRENT_VERSION', 'android_kabam_current_version');

define('GSI_ANDROID_KABAM_UPGRADE_URL', 'i656');
define('GSI_ANDROID_KABAM_REVIEW_URL', 'i657');
define('GSI_PUBLISHER', 'i658');
define('GSI_GUILD_INBOX_HISTORY_LIMIT', 'i659');


define('GSI_6WAVE_POPUP_TIME', 'i660');

define('GSI_VERIFY_URL', 'i661');
define('GSI_REQUEST_EXPIRE', 'i662');

define('GSI_CHAT_ADMIN_BAN_INTERVAL', 'i663');
define('GSI_PVP_ATTACK_TIME', 'i664');
define('GSI_PVP_DEFENSE_TIME', 'i665');
define('GSI_LC_USERNAME_OLD', 'i666');

define('GSI_CROP_TIMESTAMP', 'i667');

define('GSI_QUESTION', 'i668');
define('GSI_QUESTION_ID', 'i669');
define('GSI_ANSWER_ID', 'i670');
define('GSI_KBM_USERNAME', 'i671');
define('GSI_KBM_MOBILE_ID', 'i672');

define('GSI_ADMIN_TYPE', 'i673');
define('GSI_CHAT_REPORT_ON_OFF', 'i674');


define('GSI_ANDROID_INAPP_TEST_MANDATORY_VERSION', 'android_inapp_test_mandatory_version');
define('GSI_ANDROID_INAPP_TEST_CURRENT_VERSION', 'android_inapp_test_current_version');

define('GSI_ANDROID_INAPP_TEST_UPGRADE_URL', 'i675');
define('GSI_ANDROID_INAPP_TEST_REVIEW_URL', 'i676');

define('GSI_WAR_TYPE', 'i677');
define('GSI_WAR_STEMINA_LIMIT', 'i678');
define('GSI_WAR_STEMINA_CHECK', 'i679');

define('GSI_OPEN_UDID', 'i680');
define('GSI_MAC_ID', 'i681');


define('GSI_EVENT_ID', 'i682');
define('GSI_EVENT_TYPE', 'i683');
define('GSI_WAR_TYPE_DD', 'i684'); //dd


define('GSI_EVENT_NAME', 'i685');
define('GSI_EVENT_DESCRIPTION', 'i686');
define('GSI_EVENT_START_TIMESTAMP', 'i687');
define('GSI_EVENT_END_TIMESTAMP', 'i688');

define('GSI_DAILY_BONUS_24', 'i689');
define('GSI_DAILY_BONUS_48', 'i690');
define('GSI_WAR_SKILL_RESET_LIMIT', 'i691');

define('GSI_INVALID_EMAIL_ADDRESS', 'i692');
define('GSI_INTERNAL_SERVER_ERROR', 'i693');

define('GSI_STATUS', 'i694');
define('GSI_QUEST_EMAIL', 'i695');

define('GSI_PVP_MAX_COINS', 'i696');
define('GSI_INVALID_IDS', 'i697');
define('GSI_ALREADY_PLANTED', 'i698');
define('GSI_PLANTED', 'i699');
define('GSI_CROP_ITEM_IDS', 'i700');
define('GSI_EMPTY', 'i701');
define('GSI_IMATURE', 'i702');
define('GSI_WILTED', 'i703');
define('GSI_PROCESSED', 'i704');

define('GSI_WIN_COUNT', 'i705');


define('GSI_WAR_DD_PREPARE_PERIOD', 'i706');
define('GSI_WAR_DD_BATTLE_PERIOD', 'i707');

define('GSI_DISTRIBUTED_FLAG', 'i708');
define('GSI_ATTACK_COUNT', 'i709');
define('GSI_DEFAULT_USERNAME', 'i710');
define('GSI_QUEST_GIFT_DATA', 'i711');
define('GSI_QUEST_GIFT_DAY', 'i712');

define('GSI_ATTACK_CAP', 'i713');
define('GSI_LOSING_CHANCE_ABOVE_MARGIN_RANGE', 'i714');
define('GSI_MAX_LEVEL', 'i715');
define('GSI_WINNING_CHANCE_BELOW_MARGIN_RANGE', 'i716');
define('GSI_ZONE_MASTERY_MAX_LEVEL', 'i717');
define('GSI_CHAT_SYSTEM_USER_LEVEL', 'i718');
define('GSI_USER_LEVEL_XP_FIX', 'i719');
define('GSI_SDB_PREDICATE_LIMIT', 'i720');
define('GSI_CRATE_PROBABILITY', 'i721');
define('GSI_CRATE_ID', 'i722');
define('GSI_CRATE_DATA', 'i723');
define('GSI_CRATE_SETTING', 'i724');
define('GSI_CRATE_CATEGORY', 'i725');
define('GSI_ARMY_OVERFLOW', 'i726');
define('GSI_ITEM_TYPE', 'i727');
define('GSI_CRATE_MAX_LEVEL_CAP', 'i728');
define('GSI_CRATE_SETTING_REFERESH_INTERVAL', 'i729');
define('GSI_FW_MAX_WARPOINT_RATIO', 'i730');

//New Attributes
define('GSI_PM_LAST_READ_TIME', "i731");
define("GSI_JOB_COMPLETION_BONUS_MULTIPLIER", 'i732');
define("GSI_ASN_LIMIT", 'i733');

//--------------Guild War Chest Diamond Settings

define("GSI_WAR_CHEST_DIAMONDS_SETTINGS", 'i734');
define("GSI_WAR_CHEST_COINS_POOL_1", 'i735');
define("GSI_WAR_CHEST_COINS_POOL_2", 'i736');
define("GSI_WAR_CHEST_COINS_POOL_3", 'i737');
define("GSI_WAR_CHEST_COINS_POOL_4", 'i738');
define("GSI_WAR_CHEST_COINS_POOL_5", 'i739');

define("GSI_WAR_CHEST_COINS_POOL_COINS", 'i740');
define("GSI_WAR_CHEST_COINS_POOL_BONUS_FACTOR", 'i741');

define("GSI_DEFAULT_SPLASH", 'i742');
define("GSI_SPLASH", 'i743');

define('GSI_BACKUP_NUM_OF_DAYS', 'i744');
define('GSI_BACKUP_AFTER_NUM_OF_DAYS', 'i745');

//define('GSI_XP_WIN_ATTACK_MULTIPLIER', 'i746');
//define('GSI_XP_WIN_BATTLE_MULTIPLIER', 'i747');
//define('GSI_XP_WIN_ATTACK_FLEE_MULTIPLIER', 'i748');
//
//define('GSI_WP_WIN_ATTACK_MULTIPLIER', 'i749');
//define('GSI_WP_WIN_BATTLE_MULTIPLIER', 'i750');
//define('GSI_WP_WIN_ATTACK_FLEE_MULTIPLIER', 'i751');
//
//define('GSI_COINS_WIN_ATTACK_FLEE_MULTIPLIER', 'i752');

define('GSI_USER_BATTLE', 'i753');
//define('GSI_COINS_WIN_ATTACK_MULTIPLIER', 'i754');
//define('GSI_COINS_WIN_BATTLE_RAID_TABLE_MULTIPLIER', 'i755');

define('GSI_APPLE_PRODUCT_CONFIGURATION', 'i756');
define('GSI_BATTLE_DURATION', 'i757');

define('GSI_SUPPLY_SETTINGS_ITEM_PROBABILITY', 'i758');

define('GSI_CONFIRM_ITEM', 'i759');
define('GSI_BONUS_ITEM', 'i760');

define("GSI_USER_EMAIL_INFO", 'i761');

define("GSI_REGISTRY_EMAIL_FAILURE", 'i762');

define('GSI_LEFT_HAND_PROC_PCT', 'i763');
define('GSI_LEFT_GUARDIAN_PROC_PCT', 'i764');


//---------------------- Defined for System Settings

define('GSI_FORCED_CATALOG_VERSION', 'i765');
define('GSI_FORCED_CATALOG_UPDATE', 'i766');
define('GSI_CATALOG_ITEMS', 'i767');

//---------------------- Defined for Raid List Level Variance Settings

define('GSI_POOL_STARTING_LEVEL', 'i768');
define('GSI_POOL_ENDING_LEVEL', 'i769');
define('GSI_POOL_LEVEL_VARIANCE_PCT', 'i770');
define('GSI_RAID_BUCKET', 'i771');
define('GSI_SPLASH_IMAGE', 'i772');

//-----------------------USER App Language
define('GSI_USER_APP_LANGUAGE', 'i773');

define('GSI_EXPIRE_BATTLE_DURATION', 'i774');
define('GSI_LOSS_COUNT', 'i775');

//----------------------User Rename Cost

define('GSI_USER_RENAME_COST', 'i776');

//-------------------Leaderboard

define('GSI_LEADERBOARD_LEVEL_THRESHOLD', 'i777');

//---------device token
define('GSI_DEVICE_TOKEN', 'i778');

//-------------------Guild Rank Multilingual Title 

define('GSI_GUILD_RANK_TITLE_MULTI_LINGUAL', 'i779');

//-------------------Message Unique ID
define('GSI_MESSAGE_ID', 'i780');

//-------------------Server Load Balancer IP
define('GSI_SERVER_LB_IP', 'i781');

define('GSI_REWARD_TUTORIAL_FLAG', 'i782');
define('GSI_REWARD_TUTORIAL', 'i783');

//-------------------Tutorial Battle Expiry
//Not Being Used in GS so far, But Being sent to client
define('GSI_TUTORIAL_BATTLE_EXPIRY', 'i784');
define('GSI_BETA_FLAG', 'i785'); //@todo modify according to client

define('GSI_USERNAME_MIN_LENGTH', 'i786');
define('GSI_USERNAME_MAX_LENGTH', 'i787');
define('GSI_PRIVATE_CHAT_BLOCK', 'i788');
define('GSI_EXPIRY_TIME', 'i789');

define('GSI_RAID_SIZE_MULTIPLIER', 'i790');
define('GSI_RAID_HIGHER_BRACKET_PCT', 'i791');


define('GSI_GIFT_SUPPLY_ID', 'i800');

define("GSI_ALLIANCE_LEADERBOARD_SIZE", "i801");
define("GSI_HONOR_POINTS_LEADERBOARD_SIZE", "i802");
define("GSI_APP_BACKGROUND_RUNTIME", "i803");
define("GSI_MAX_NEWS_COUNT", "i804");

define("GSI_CURRENT_BONUS_DAY", "i805");
define("GSI_DAILY_BONUS_AMOUNT", "i806");
//-------------------------------------------------------
define('GSI_INTERVAL', 'i1000');
define('GSI_USER_HERO_DATA', 'i1001');

//define('GSI_HERO_UPDATE_DELTAS', 'i1002');
//define('GSI_DELTA_BASE_STATS_PCT', 'i1003');
//define('GSI_TARGET_CURRENT_BONUS_PCT', 'i1004');
//define('GSI_SOURCE_CURRENT_BONUS_PCT', 'i1005');
//define('GSI_DELTA_XP', 'i1006');
//define('GSI_DELTA_LEVEL', 'i1007');
//define('GSI_DELTA_MASTERY', 'i1008');
//define('GSI_DELTA_EVOLUTION', 'i1009');
//define('GSI_DELTA_ATTACK', 'i1010');
//define('GSI_DELTA_DEFENSE', 'i1011');

define('GSI_HEROES', 'i1012');

//------------------------------ Defined for Altar of Heroes--------------------

define('GSI_USER_HERO_INVENTORY', 'i2000');
define('GSI_USER_LEFT_HAND', 'i2001');
define('GSI_USER_RIGHT_HAND', 'i2002');
define('GSI_USER_LEFT_GUARDIAN', 'i2003');
define('GSI_USER_RIGHT_GUARDIAN', 'i2004');
define('GSI_USER_BATTLE_LEADER', 'i2005');
define('GSI_CHAMPION_ASSIGNMENT_RESULT', 'i2006');
define('GSI_USER_CHAMPIONS', 'i2007');
define('GSI_USER_HEROES', 'i2008');

define('GSI_EVOLUTION_RESULT', 'i2009');
define('GSI_ENHANCE_RESULT', 'i2010');

define('GSI_ENHANCE_SETTINGS', 'i2011');
define('GSI_EVOLUTION_SETTINGS', 'i2012');
define('GSI_ALTAROFHERO_SETTINGS', 'i2013');

define('GSI_SUMMON_SETTINGS', 'i2014');

define('GSI_ENHANCEMENT_TABLE', 'i2015');

define('GSI_NEW_HEROES', 'i2016');


//------------------------------- Synched From CMS------------------------------

define("GSI_DEFAULTXP", "i3001");
define("GSI_CURRENTXPSALVAGEPCT", "i3002");
define("GSI_RARITYXPCOMMONPCT", "i3003");
define("GSI_RARITYXPUNCOMMONPCT", "i3004");
define("GSI_RARITYXPRAREPCT", "i3005");
define("GSI_RARITYXPEPICPCT", "i3006");
define("GSI_RARITYXPLEGENDARYPCT", "i3007");
define("GSI_EVOLUTIONXPBASEPCT", "i3008");
define("GSI_EVOLUTIONXPPLUSPCT", "i3009");
define("GSI_EVOLUTIONXPPLUSPLUSPCT", "i3010");
define("GSI_EVOLUTIONXPMASTERPCT", "i3011");
define("GSI_PUREENHANCEMENTBONUSCHANCEPCT", "i3012");
define("GSI_PUREENHANCEMENTBONUSXPPCT", "i3013");
define("GSI_ORDERMATCHBONUSXPPCT", "i3014");
define("GSI_COMMONMASTERYSALVAGEPCT", "i3015");
define("GSI_UNCOMMONMASTERYSALVAGEPCT", "i3016");
define("GSI_RAREMASTERYSALVAGEPCT", "i3017");
define("GSI_EPICMASTERYSALVAGEPCT", "i3018");
define("GSI_LEGENDARYMASTERYSALVAGEPCT", "i3019");
define("GSI_BASECOST", "i3020");
define("GSI_COSTPERLEVELTIMESFEEDERS", "i3021");
define("GSI_FEEDERSALVAGEAVAILABLEPCT", "i3022");

define("GSI_MAXLEVELCOMMON", "i3023");
define("GSI_MAXLEVELUNCOMMON", "i3024");
define("GSI_MAXLEVELRARE", "i3025");
define("GSI_MAXLEVELEPIC", "i3026");
define("GSI_MAXLEVELLEGENDARY", "i3027");

//enhancement table 
//define("GSI_LEVEL"                ,"Level");
define("GSI_STATSINCPCT", "i3028");
define("GSI_COMMONXP", "i3029");
define("GSI_UNCOMMONXP", "i3030");
define("GSI_RAREXP", "i3031");
define("GSI_EPICXP", "i3032");
define("GSI_LEGENDARYXP", "i3033");

//Evolution
define("GSI_PLUSATTDEFINCFROMDEFAULTPCT", "i3034");
define("GSI_PLUSPLUSATTDEFINCFROMSDEFAULTPCT", "i3035");
define("GSI_MASTERATTDEFINCFROMDEFAULTPCT", "i3036");
define("GSI_NONMAXENHANCEDATTDEFINCPCT", "i3037");
define("GSI_MAXENHANCEDATTDEFINCPCT", "i3038");
define("GSI_COMMONEVOCOST", "i3039");
define("GSI_UNCOMMONEVOCOST", "i3040");
define("GSI_RAREEVOCOST", "i3041");
define("GSI_EPICEVOCOST", "i3042");
define("GSI_LEGENDARYEVOCOST", "i3043");
define("GSI_COSTPERCARDLEVEL", "i3044");
define("GSI_COMMONMASTERYCAPBASE", "i3045");
define("GSI_COMMONMASTERYCAPPLUS", "i3046");
define("GSI_COMMONMASTERYCAPPLUSPLUS", "i3047");
define("GSI_COMMONMASTERYCAPMASTER", "i3048");
define("GSI_UNCOMMONMASTERYCAPBASE", "i3049");
define("GSI_UNCOMMONMASTERYCAPPLUS", "i3050");
define("GSI_UNCOMMONMASTERYCAPPLUSPLUS", "i3051");
define("GSI_UNCOMMONMASTERYCAPMASTER", "i3052");
define("GSI_RAREMASTERYCAPBASE", "i3053");
define("GSI_RAREMASTERYCAPPLUS", "i3054");
define("GSI_RAREMASTERYCAPPLUSPLUS", "i3055");
define("GSI_RAREMASTERYCAPMASTER", "i3056");
define("GSI_EPICMASTERYCAPBASE", "i3057");
define("GSI_EPICMASTERYCAPPLUS", "i3058");
define("GSI_EPICMASTERYCAPPLUSPLUS", "i3059");
define("GSI_EPICMASTERYCAPMASTER", "i3060");
define("GSI_LEGENDARYMASTERYCAPBASE", "i3061");
define("GSI_LEGENDARYMASTERYCAPPLUS", "i3062");
define("GSI_LEGENDARYMASTERYCAPPLUSPLUS", "i3063");
define("GSI_LEGENDARYMASTERYCAPMASTER", "i3064");

//altar of heroes
define("GSI_LEFTHANDUNLOCKLEVEL", "i3065");
define("GSI_RIGHTHANDUNLOCKLEVEL", "i3066");
define("GSI_LEFTGUARDIANUNLOCKLEVEL", "i3067");
define("GSI_RIGHTGUARDIANUNLOCKLEVEL", "i3068");

// hero pvp settings 
define("GSI_STARTINGHEALTH", "i3069");
define("GSI_HEALTHINCPER_MOB", "i3070");
define("GSI_LOSERHERODEFAULTHEALTHLOSS", "i3071");
define("GSI_LOSERHEROEXTRAHEALTHLOSSMULT", "i3072");
define("GSI_LEADERPROCRATEPCT", "i3073");
define("GSI_HANDPROCRATEPCT", "i3074");
define("GSI_GUARDIANPROCRATEPCT", "i3075");

define("GSI_SUMMON_UNCOMMON_PROBABILITY", "i3078");
define("GSI_SUMMON_EPIC_PROBABILITY", "i3079");
define("GSI_SUMMON_RARE_PROBABILITY", "i3080");
define("GSI_SUMMON_LEGENDARY_PROBABILITY", "i3081");

// ------------------------- Battle -------------------------- //
define("GSI_ATTACK_SCORE", "i3082");
define("GSI_DEFENSE_SCORE", "i3083");
define("GSI_PROC", "i3084");
define("GSI_PROC_HERO", "i3085");
define("GSI_HEALTH_SHIELD", "i3086");
define("GSI_PROC_LEADER", "i3087");
define("GSI_PROC_HANDS", "i3088");
define("GSI_PROC_GUARDIANS", "i3089");
define("GSI_PROC_ARMY", "i3090");
define("GSI_ARMY_TYPE", "i3091");     // @TODO: //define("ARMY", "i3091"); //Buff type Army
define("GSI_HEALTH_TYPE", "i3092");   // @TODO: //define("HEALTH", "i3092"); //Buff type Health
define("GSI_HERO_TYPE", "i3093");     // @TODO: //define("HERO", "i3093"); //Buff type Hero
define("GSI_MODIFIER", "i3094");      // @TODO: //define("MODIFIER", "i3094");  //MODIFIER Resultant Value 
define("GSI_NUMBER_INSTANCE", "i3095");  // @TODO: //define("NUMBER_INSTANCE", "i3095"); // No.of Instance for a buff
//define("GSV_AD_BUFF", "BUFF");     // Not in Use  // @TODO: define("ADDITION_BUFF", "i3096"); 
//define("GSV_DE_BUFF", "DE_BUFF");  // Not in Use  // @TODO: define("DEDUCTION_BUFF", "i3097");
define("GSI_ADDITION_BUFF", "i3096");    // @TODO: define("ADDITION_BUFF", "i3096");
define("GSI_DEDUCTION_BUFF", "i3097");   // @TODO: define("DEDUCTION_BUFF", "i3097");
define("GSI_ATTACKER", "i3098");  // Resolve Skill for Attaker
define("GSI_DEFENDER", "i3099");  // Resolve Skill for Defender
define("GSI_SKILL_ID", "i3100");  // @TODO: define("SKILL_ID", "i3100");
//define("INSTANCE_ID", "i3101");  // Not in Use
define("GSI_CURRENT_PLAYER_HEALTH", "i3102");
define("GSI_ENEMY_PLAYER_HEALTH", "i3103");
define("GSI_CURRENT_PLAYER_DAMAGE", "i3104");
define("GSI_ENEMY_PLAYER_DAMAGE", "i3105");
//define("BATTLE_RESULT", "i3106"); // Not in use // Battle result Constant 
//define("XP", "i3107");          // Not in use
//define("COINS", "i3108");         // Not in use
//define("VAULT", "i3109");         // Not in use
define("GSI_PROC_RESULT", "i3110"); // Which to proc for battle(army/hero)
//define("BUFF", "i3111");          // Not in use
define("GSI_ATTACKER_BUFF", "i3112"); // @TODO: define("ATTACKER_BUFF", "i3112");
define("GSI_DEFENDER_BUFF", "i3113"); // @TODO: define("DEFENDER_BUFF", "i3113");
define("GSI_BUFF_COUNT", "i3114");
define("GSI_BUFF_TYPE", "i3115");
define("GSI_BUFF_ID", "i3116");   // @TODO: define("BUFF_ID", "i3116");
define("GSI_CURRENT_PLAYER_SKILL", "i3117");    //@TODO: define("CURRENT_PLAYER_SKILL", "i3117");
define("GSI_ENEMY_PLAYER_SKILL", "i3118");      //@TODO: define("ENEMY_PLAYER_SKILL", "i3118");
//define("MODIFIERS", "i3119");   // not in use
//define("BONUS", "i3120");       // not in use
define("GSI_PLAYER_HERO_INSTANCE", "i3121");
define("GSI_ENEMY_HERO_INSTANCE", "i3122");
define("GSI_ATTACKER_CHAMPIONS", "i3124");
define("GSI_DEFENDER_CHAMPIONS", "i3125");
define("GSI_BATTLE_END_RESULT", "i3126");
//define("BATTLE", "i3127");    // not in use
define("GSI_BATTLE_STEP", "i3128");
define("GSI_BATTLE_LAST_STEP", "i3129");
//define("GSI_ATTACKER_SLOTS", "i3130");    // not in use
//define("GSI_DEFENDER_SLOTS", "i3131");    // not in use
define("GSI_SUMMON_COST", "i3132");
define("GSI_BATTLE_DATA", "i3133");
define("GSI_ATTACKER_ID", "i3134");
define("GSI_DEFENDER_ID", "i3135");
define("GSI_BATTLE_ID", "i3136");
define("GSI_JOB_ATTEMPT_COUNT", "i3137");
define("GSI_COMPLETED_JOB_COUNT", "i3138");
define("GSI_USER_JOBS", "i3139");
define("GSI_REWARD_HERO", "i3140");
define("GSI_HUB_JOBS", "i3141");
define("GSI_WIN_BOUNS_FACTOR", "i3142");
define("GSI_VAULT_DEDUCTION_CHANCE_PCT", "i3143");
define("GSI_VAULT_DEDUCTION_VALUE_PCT", "i3144");
//define("GSI_CURRENT_PLAYER_SKILL_COUNT", "i3145");  // not in use
//define("GSI_ENEMY_PLAYER_SKILL_COUNT", "i3146");    // not in use

define('GSI_VAULT_STATUS', 'i3147');
define("GSI_ZONE_JOBS", "i3148");
define("GSI_ZONE_HUBS", "i3149");
define("GSI_HUB_COMPLETE", "i3150");
define("GSI_COMPLETED_HUBS", "i3151");
define("GSI_ATTEMPTED_JOBS", "i3152");
define('GSI_BUFFER_BANK_COINS', 'i3153');
define('GSI_DELTA_BANK_COINS', 'i3154');
define('GSI_BATTLE_ATTACKER_WINS', 'i3155');
define('GSI_BATTLE_START_TIME', 'i3156');
define('GSI_BATTLE_END_TIME', 'i3157');
define('GSI_BASE_HP_PER_LOSS', 'i3158');
define('GSI_RAND_HEALTH_DELTA', 'i3159');
define("GSI_RECEIVED_HEROES", "i3160");

define("GSI_TRANSACTION_TYPE", "i3161");
define("GSI_TRANSACTION_EVENT_TYPE", "i3162");
define("GSI_TRANSACTION_TIME_RECORD", "i3163");
define("GSI_TRANSACTION_ID", "i3164");
define("GSI_NEW_LEVEL", "i3165");
define("GSI_FRIENDS_NAME", "i3166");
define("GSI_PURCHASED_ITEM_ID", "i3167");
define("GSI_PURCHASED_ITEM_COUNT", "i3168");
define("GSI_QUEST_ID", "i3169");
define("GSI_TRANSACTION_DATA", "i3170");
define("GSI_USER_PREMIUM_TRANSACTION_LOG", "i3171");

define("GSI_SINGLE_STEP_XP", "i3172");
define("GSI_SINGLE_STEP_COINS", "i3173");
define("GSI_SINGLE_STEP_WP", "i3174");
define('GSI_SKILL_APPLY', 'i3175');
define('GSI_HEALTH_TEMP_BUFF', 'i3176');
define("GSI_ORIGNAL_INSTANCE", "i3177");
define("GSI_MIGRATION_DATA", "i3178");
define("GSI_SOLD_ITEM_ID", "i3179");
define("GSI_SOLD_ITEM_COUNT", "i3180");

define("GSI_DATA", "i3181");
define("GSI_REWARDS", "i3182");
define("GSI_SINGLE_ATTACK_WIN_XP", "i3183");
define("GSI_BATTLE_WIN_XP", "i3184");
define("GSI_SINGLE_ATTACK_WIN_COINS", "i3185");
define("GSI_BATTLE_WIN_COINS", "i3186");
define("GSI_SINGLE_ATTACK_WIN_WP", "i3187");
define("GSI_BATTLE_WIN_WP", "i3188");

define("GSI_STATS", "i3189");
define("GSI_XP_DURING_BATTLE", "i3190");
define("GSI_XP_BONUS", "i3191");
define("GSI_COINS_DURING_BATTLE", "i3192");
define("GSI_COINS_BONUS", "i3193");
define("GSI_WP_DURING_BATTLE", "i3194");
define("GSI_WP_BONUS", "i3195");
define("GSI_BOUNTY_BONUS", "i3196");
define("GSI_BOUNTY_ALREADY_CLAIMED", "i3197");
define("GSI_SHIELD", "i3198");
define("GSI_PRE_ENHANCEMENT_HERO", "i3199");
define("GSI_PRE_EVOLUTION_HERO", "i3200");
define("GSI_PRE_EVOLUTION_FEEDER", "i3201");

//------ SECURITY TOKEN

define("GSI_SECURITY_TOKEN", "i3202");
define("GSI_SECURITY_ENABLED", "i3203");    //define("GSV_SECURITY_ENABLED", false);
//define("GSI_SECURITY_KEY", "i3204");        //define("GSV_SECURITY_KEY", "sns_temp_key_1890");

define("GSI_WAR_ATTACK", "i3205");
define("GSI_NOT_VALID_WAR_ATTACK", "i3206");
define("GSI_NOT_ENOUGH_HEALTH", "i3207");
define("GSI_NOT_ENOUGH_MOB_SIZE", "i3208");
define("GSI_NOT_ENOUGH_CHAMPION", "i3209");
define("GSI_DUPLICATE_CALL", "i3210");
define('GSI_REQUEST_DATA', 'i3211');

define("GSI_ATTACKER_HEALTH_DAMAGE", "i3212");
define("GSI_DEFENDER_HEALTH_DAMAGE", "i3213");
define("GSI_TUTORIAL_BATTLE", "i3214");
define("GSI_CLONE_USER_PASSWORD", "i3215");
define("GSI_SERVER_OFFLINE", "i3216");
define("GSI_IMPORT_SETTINGS_USER_PASSWORD", "i3217");
define("GSI_BATTLE_EXPIRED", "i3218");
define("GSI_USER_PIN_VALID", "i3219");
define("GSI_CLONE_USER_API_URL", "i3220");
define("GSI_URL_MISMATCH", "i3221");
define("GSI_LINK_VALID", "i3222");
define("GSI_GAMEKEY_VALID", "i3223");
define("GSI_EMAIL_HISTORY_FAILURE", "i3224");
define("GSI_FROM_CS_API_CALL_PASSWORD", "i3225");

define('GSI_ENABLED_LANGUAGES', 'i3226');
define('GSI_WEATHER_TOP_LEFT', 'i3227');
define('GSI_WEATHER_BOTTOM_LEFT', 'i3228');
define('GSI_WEATHER_TOP_RIGHT', 'i3229');
define('GSI_WEATHER_BOTTOM_RIGHT', 'i3230');
define("GSI_BACKUP_SETTING_DOC_URL", "i3231");
define("GSI_BACKUP_SETTING_DOC_PWD", "i3232");
define("GSI_IMPORT_SETTINGS_SERVER_URL", "i3233");
define("GSI_FROM_CS_API_CALL_URL", "i3234");
define("GSI_DENIZENS_COUNT_EXPANSION_0", "i3235");
define("GSI_DENIZENS_COUNT_EXPANSION_1", "i3236");
define("GSI_DENIZENS_COUNT_EXPANSION_2", "i3237");
define("GSI_DENIZENS_COUNT_EXPANSION_3", "i3238");

define("GSI_TRAN_MESSAGE", "i3239");
define("GSI_ALLOW_ONLY_FOR_WAR_OPPONENT", "i3240");
define("GSI_WAR_IN_PREP", "i3241");
define("GSI_ALREADY_AT_WAR_ONLY_FOR_WAR_OPPONENT", "i3242");
define("GSI_ONLY_FOR_WAR_OPPONENT_DURING_WAR", "i3243");
define("GSI_BATTLE_EXPIRE", "i3244");
define("GSI_HONOUR_PT", "i3245"); //define("GSI_TROPHIES", "i3245");
define('GSI_BUILDING_STAMINA_CAP', 'i3246');

define('GSI_VIP_MAX_TIER', 'i3247');
define('GSI_VIP_TIER_NUMBER', 'i3248');
define('GSI_VIP_DOLLAR_THRESHOLD', 'i3249');
define('GSI_VIP_ENERGY_TIMER_SPEEDUP', 'i3250');
define('GSI_VIP_STAMINA_TIMER_SPEEDUP', 'i3251');
define('GSI_VIP_OPS_COST_DISCOUNT', 'i3252');
define('GSI_VIP_BONUS_GIFTS_RECEIVABLE_QUANTITY', 'i3253');
define('GSI_VIP_BONUS_SUPPLIES_RECEIVABLE_QUANTITY', 'i3254');
define('GSI_VIP_DAILY_BONUS_MULTIPLIER', 'i3255');
define('GSI_VIP_ONE_TIME_GIFT_ITEM_TYPE', 'i3256');
define('GSI_VIP_ONE_TIME_GIFT_ITEM_ID', 'i3257');
define('GSI_VIP_ONE_TIME_GIFT_ITEM_QUANTITY', 'i3258');
define('GSI_VIP_BADGE_COLOR', 'i3259');

//---- GSIs For Offers/Sales ----
define('GSI_OFFERS', 'i3260');
//define('GSI_OFFER_ENABLE', 'i3261');
//define('GSI_OFFER_PRIORITY', 'i3262');
//define('GSI_OFFER_TYPE', 'i3263');
//define('GSI_OFFER_EXPIRE_TIME', 'i3264');
//define('GSI_OFFER_TITLE', 'i3265');
//define('GSI_OFFER_DESCRIPTION', 'i3266');
//define('GSI_OFFER_APPLE_PRODUCT_ID', 'i3267');
//define('GSI_OFFER_ITEMS', 'i3268');
//define('GSI_OFFER_ITEM_ID', 'i3269');
//define('GSI_OFFER_ITEM_QTY', 'i3270');

define('GSI_USER_OFFERS', 'i3271');
define('GSI_OFFER_EXPIRE', 'i3272');

define('GSI_FLEE_HONOUR_MULTIPLIER', 'i3273');
define('GSI_BATTLE_LOSE_RAID_TABLE_COINS_PCT', 'i3274');
define('GSI_BATTLE_LOOT_MULT_MIN', 'i3275');
define('GSI_BATTLE_LOOT_MULT_MAX', 'i3276');
define('GSI_BATTLE_LEVEL_DIFF_MIN', 'i3277');
define('GSI_BATTLE_LEVEL_DIFF_MAX', 'i3278');

define('GSI_MAX_LIMIT_OPEN_COINS', 'i3279');
define('GSI_MAX_BOUNTY_CAP', 'i3280');

define('GSI_ATTACKER_HONOUR_DATA', 'i3281'); //define('GSI_ATTACKER_ELO', 'i3281');
define('GSI_DEFENDER_HONOUR_DATA', 'i3282'); //define('GSI_DEFENDER_ELO', 'i3282');
define('GSI_HONOUR_PT_WIN', 'i3283'); //define('GSI_WIN' , 'i3283');
define('GSI_HONOUR_PT_LOSE', 'i3284'); //define('GSI_LOSE', 'i3284');
define('GSI_HONOUR_PT_FLEE', 'i3285'); //define('GSI_FLEE', 'i3285');

define('GSI_REG_NAME_TIME', 'i3286');
define("GSI_HONOUR_PT_DURING_BATTLE", "i3287"); // define("GSI_ELO_DURING_BATTLE", "i3287");

define('GSI_VIP_SHOW_BADGE_ON_CHAT', 'i3288');
define('GSI_VIP_SHOW_BADGE_ON_SPY', 'i3289');

/*
 * user's private data document can contain a marker denoting the user's vip status.
 * if this key is absent, the user is conclusively NOT a VIP. if the key is present,
 * then a value of ZERO denotes "NOT a VIP" while a non-zero value denotes a user
 * belonging to a VIP Tier equal to the value.
 */
define('GSI_USER_VIP_TIER', 'i3290');

/*
 * user's private data document can contain a field counting how much the user has
 * spent (in terms of USD). the field may be absent for a user who has not yet spent
 * a single dime. if the field is present, assume that the value accurately depicts
 * the user's cummulative spending. note that a non-zero value in this field does NOT
 * necessarily mean that the user is a VIP...this is because the user may not yet have
 * spent enough to satisfy the spending bracket of the first VIP tier.
 *
 * finally, it is vital that subsequent spendings are accumulated in this figure. similarly,
 * it is vital that refunds are deducted from this figure.
 */
define('GSI_USER_CUMMULATIVE_USD_SPENDING', 'i3291');
define('GSI_VIP_TIERS_CLIENT_SPECIFIC_DETAILS', 'i3292');
define('GSI_VIP_TIER_NUMBER_ATTAINED', 'i3293');

define('GSI_OPPONENT', 'i3294');
define('GSI_GUILD_STATUS', 'i3295');
define('GSI_GUILD_JOIN_FLAG', 'i3296');
define('GSI_GUILD_CLOSE_STATUS', 'i3297');
define("GSI_GUILD_HONOUR_PT", "i3298");

define('GSI_CROP_AVAILABLE_COUNT', 'i3299');
define('GSI_CROP_LAST_FARMED_TIME', 'i3300');

define("GSI_DO_GUILD_SORT", "i3301");
//define("GSI_GUILD_LEADERBOARD_MAX_LIMIT", "i3302");
define("GSI_LAST_UPDATED_TIME", "i3303");
define("GSI_GUILD_LAST_UPDATED_TIME_LIMIT", "i3304"); // Used in CMS Guild Settings
define("GSI_FLEE_STAMINA_COST", "i3305");
define("GSI_USER_CROPS_STOCK", "i3306");
define("GSI_GUILD_LAST_UPDATED_TIME", "i3307"); // Used in GameServer
define("GSI_DID", 'i3308');
define("GSI_USER_SESSION_DATA", 'i3309');
define("GSI_USER_VALID_DID", 'i3310');
define("GSI_GENDER", "i3311");
define("GSI_SESSION_ID", 'i3312');
define("GSI_USER_VALID_SESSION", 'i3313');
define('GSI_EMAIL_EXISTS', 'i3314');
define('GSI_ATTACHED_UID', 'i3315');
define('GSI_PAST_ATTACHED_UID', 'i3316');
define("GSI_REMOVED_FEEDER_CARDS", "i3317");
define("GSI_ALREADY_REGISTERED", "i3318");
define("GSI_REGISTERED_WITH_SAME_EMAIL", "i3319");
define("GSI_CONTROLLER_NAME", "i3320");
define("GSI_REQUEST_URI", "i3321");
define("GSI_POST_PAYLOAD", "i3322");
define("GSI_CURRENCY_SYMBOL", "i3323");
define('GSI_VIP_GIFT_LIST', 'i3324');
define('GSI_GIFT_LIST', 'i3325');
define('GSI_GUILD_RANK_ROLE', 'i3326');
define('GSI_USER_COUNT', 'i3327');
define('GSI_CHEST_REWARD_GOLD', 'i3328');
define('GSI_CHAT_BAN_VOTE_QUOTA', 'i3329');
define("GSI_GIFT_LIMIT_EXCEEDED_PER_PERSON", "i3400");
define("GSI_INVALID_USERNAME", "i3401");
define("GSI_ID", "i3402");
define("GSI_NAME", "i3403");
define("GSI_NAME_MULTI_LINGUAL", "i3404");
define("GSI_NAME_MULTI_LINGUAL_TEXT", "i3405");
define("GSI_GUI_IMAGE_1", "i3406");
define("GSI_GUI_IMAGE_2", "i3407");
define("GSI_SHORT_DESCRIPTION", "i3408");
define("GSI_SHORT_DESCRIPTION_MULTI_LINGUAL", "i3409");
define("GSI_SHORT_DESCRIPTION_MULTI_LINGUAL_TEXT", "i3410");
define("GSI_PRODUCT_TYPE", "i3411");

define("GSI_PRODUCT_ID", "i3412");
define("GSI_PRICE", "i3413");
define("GSI_VERIFICATION_REQUIRED", "i3414");
define("GSI_DISCOUNT", "i3415");
define("GSI_ENABLE", "i3416");
define("GSI_IN_APP_SALE_VARIANTS", "i3417"); //define("GSI_SUB_PRODUCT_TYPES", "i3417");
define("GSI_IN_APP_PRODUCTS", "i3418");
define("GSI_OFFER_PRODUCTS", "i3419");
define("GSI_ORDER", "i3420");
define("GSI_EVOLUTION_TARGET_ATTDEF_PCT", "i3421");
define("GSI_EVOLUTION_FEEDER_ATTDEF_PCT", "i3422");
define("GSI_REMOVED_INSTANCE", "i3423");
define("GSI_STACKED_INSTANCE", "i3424");

define("GSI_DELTA_HONOUR_PT", "i3425");
//i3426 Used
define("GSI_MIN_BRACKET_SIZE", "i3427");
define("GSI_MAX_BRACKET_SIZE", "i3428");
define("GSI_LAST_ATTACKED_TIME", "i3429");

//----------------------------------------------------------------------------//

define('LIVE_CATALOG_VERSION', 'live_catalog_version');
define('FORCED_CATALOG_VERSION', 'forced_catalog_version');
define('TEST_CATALOG_VERSION', 'test_catalog_version');

//---- GSVs For Offers/Sales ----
//define('GSV_NEW_USER_LIMITED_TIME_OFFER', '1');
//
//------- GSVs --------
define("GSV_SERVER_OFFLINE", false);
define("GSV_SECURITY_KEY", "_@_^^_189_77_kyns");

//------------- Premium Transaction Tracking GSVs -------------
define("GSV_TRANSACTION_TYPE_OUTFLOW", "outflow");
define("GSV_TRANSACTION_TYPE_INFLOW", "inflow");
define("GSV_TRANSACTION_EVENT_TYPE_LEVELUP", "levelup");
define("GSV_TRANSACTION_EVENT_TYPE_INAPP", "inapp");
define("GSV_TRANSACTION_EVENT_TYPE_WARCHEST", "warchest");
define("GSV_TRANSACTION_EVENT_TYPE_DAILYBONUS", "dailybonus");
define("GSV_TRANSACTION_EVENT_TYPE_GIFT", "gift");
define("GSV_TRANSACTION_EVENT_TYPE_PURCHASE", "purchase");
define("GSV_TRANSACTION_EVENT_TYPE_BULK_PURCHASE", "bulk_purchase");
define("GSV_TRANSACTION_EVENT_TYPE_PURCHASE_CRATE", "purchase_crate");
define("GSV_TRANSACTION_EVENT_TYPE_COMPENSATION", "compensation");
define("GSV_TRANSACTION_EVENT_TYPE_FORCE_WAR", "forcewar");
define("GSV_TRANSACTION_EVENT_TYPE_GUILD_CREATE", "createguild");
define("GSV_TRANSACTION_EVENT_TYPE_GUILD_RENAME", "renameguild");
define("GSV_TRANSACTION_EVENT_TYPE_LAUNDRY", "laundry");
define("GSV_TRANSACTION_EVENT_TYPE_QUEST", "quest");
define("GSV_TRANSACTION_EVENT_TYPE_SKILL_RESET", "skillreset");
define("GSV_TRANSACTION_EVENT_TYPE_SELL", "sell");
define("GSV_TRANSACTION_EVENT_TYPE_SUMMON", "summon");
define("GSV_TRANSACTION_EVENT_TYPE_FAD_OFFER", "fad_offer");
define("GSV_TRANSACTION_EVENT_TYPE_MCLICK", "mclick_offer");
define("GSV_TRANSACTION_EVENT_TYPE_TAP_JOY", "tapjoy");
define("GSV_TRANSACTION_EVENT_TYPE_TUTORIAL_REWARD", "tutorial_reward");

//----Battle Constants GSVs----------------------------

define('GSV_USER_LEFT_GUARDIAN', '0');
define('GSV_USER_LEFT_HAND', '1');
define('GSV_USER_BATTLE_LEADER', '2');
define('GSV_USER_RIGHT_HAND', '3');
define('GSV_USER_RIGHT_GUARDIAN', '4');

define('GSV_USER_BATTLE_ARMY', '6');
define('GSV_STEP', '_');

define("BATTLE_COMPLETE", '1');
define("BATTLE_INCOMPLETE", '2');
define('GSV_BATTLE_EXPIRE_STEP', '0');

//------------------------------------------------------------------------------

define("SEARCH_NORMAL", '0');
define("SEARCH_ITEM_BELOW", '1');
define("SEARCH_ITEM_ABOVE", '2');
define("SEARCH_DEFAULT_ITEM", '3');

define('GSV_CRATE_QUALITY_COMMON', '1');
define('GSV_CRATE_QUALITY_UNCOMMON', '2');
define('GSV_CRATE_QUALITY_RARE', '3');
define('GSV_CRATE_QUALITY_EPIC', '4');

define('GSV_NORMAL_WAR', '0');
define('GSV_DOUBLE_DIAMOND_WAR', '1');


// Temporarily converted to string just for testing a feature
define('GSV_QUEST_EMAIL_NONE', '0');
define('GSV_QUEST_EMAIL_REG', '1');
define('GSV_QUEST_EMAIL_VERIFIED', '2');
define('GSV_QUEST_EMAIL_COMPLETED', '3');

define('GSV_EVENT_FARMING', '1');
define('GSV_EVENT_HEISTING', '2');
define('GSV_EVENT_BOUNTY_HUNTER', '3');
define('GSV_EVENT_OPS_S', '4');

define('GSV_CURRENT_EVENT', GSV_EVENT_OPS_S);

define('GSV_WAR_TYPE_UNLIMITED', '0');
define('GSV_WAR_TYPE_LIMITED', '1');

define('GSV_ADMIN_CHAT', '1');
define('GSV_ADMIN_GAME', '2');
define('GSV_ADMIN_SUPER', '3');


//publisher 
define('GSV_PUBLISHER_MINDSTORM', '0');
define('GSV_PUBLISHER_KABAM', '1');
define('GSV_PUBLISHER_INAPP_TEST', '2');


//kabam max retries 
define('KBM_RETRIES', 10);

define('GSV_CHAT_MESSAGE_TYPE_MSG', '0');
define('GSV_CHAT_MESSAGE_TYPE_SYSTEM', '2');
define('GSV_CHAT_MESSAGE_TYPE_ANNOUNCE', '3');

define('GSV_CHAT_CHANNEL_GLOBAL', '1');
define('GSV_CHAT_CHANNEL_GUILD', '2');
define('GSV_CHAT_CHANNEL_PRIVATE', '3');
define('GSV_CHAT_CHANNEL_COMMAND', '4');

define('GSV_PM_EMAIL', '1');
define('GSV_PM_PAPAYA_INVITE', '2');
define('GSV_PM_PAPAYA_INVITE_REWARD', '3');
define('GSV_PM_FACEBOOK_CONNECT', '4');
define('GSV_PM_FACEBOOK_INVITE', '5');
define('GSV_PM_FACEBOOK_INVITE_REWARD', '6');
define('GSV_PM_GUILD_JOIN_REQUEST', '7');
define('GSV_PM_GUILD_JOIN_REQUEST_DENIED', '8');
define('GSV_PM_GUILD_JOIN_REQUEST_ACCEPTED', '9');
define('GSV_PM_GUILD_MEMBER_KICKED', '10');
define('GSV_PM_GUILD_MEMBER_PROMOTED', '11');
define('GSV_PM_GUILD_MEMBER_DEMOTED', '12');
define('GSV_PM_GUILD_OWNER_APPOINTED', '13');
define('GSV_PM_GUILD_ANNOUNCEMENT', '14');
define('GSV_PM_GUILD_DISBANDED', '15');
define('GSV_PM_GUILD_WAR_CHALLENGE', '16');
define('GSV_PM_ADMIN', '17');
define('GSV_PM_GUILD_WAR_CHALLENGE_ACCEPTED', '18');
define('GSV_PM_WAR_CHEST_LOOT', '19');

define('GSV_DEVICE_IPHONE', '5000');
define('GSV_DEVICE_ANDROID', '5001');
define('GSV_RESULT_TRUE', '5002');
define('GSV_RESULT_FALSE', '5003');
define('GSV_RESULT_ERROR', '5004');
define('GSV_RESULT_OK', '5005');
define('GSV_SDB_ERR', '5006');
define('GSV_DATA_ERR', '5007');
define('GSV_NEWS_PVP', '5008');
define('GSV_NEWS_HIT_LIST', '5009');
define('GSV_NONE', '5010');
define('GSV_NEWS_BOUNTY_CLAIMED', '5011');
define('GSV_SOCIAL_NEWS_FB_INVITE', '5012');
define('GSV_FACEBOOK_INVITE_OPEN', '5013');
define('GSV_FACEBOOK_INVITE_ACCEPTED', '5014');
define('GSV_FACEBOOK_INVITE_PLAYING', '5015');
define('GSV_FACEBOOK_INVITE_NONE', '5016');
define('GSV_SOCIAL_NEWS_PAPAYA_INVITE', '5017');
define('GSV_NEWS_ASSASSINATION', '5018');
define('GSV_NEWS_HEIST', '5019');
define('GSV_NEWS_SABOTAGE', '5020');
define('GSV_ILLEGAL_OPERATION', '5021');
define('GSV_BACKUP_EXISTS', '5022');
define('GSV_RESULT_SMART_ERROR', '5023');

//Chinese Stores ID
//define('GSV_APPLE_STORE', 1);
//define('GSV_XY_INAPP_MARKET', 2);
//define('GSV_KY_INAPP_MARKET', 3);
//define('GSV_THIRD_INAPP_MARKET', 4);
// Value for  GSI_ILLEGAL_OPERATION 
define('GSV_NOT_IN_WAR', '1');

define('GSV_BOOST_INSTA_GROWTH', '1');
define('GSV_BOOST_RE_GROW', '2');
define('GSV_BOOST_ENERGY', '3');
define('GSV_BOOST_STAMINA', '4');
define('GSV_BOOST_HEALTH', '5');

define('GSV_OFFER_FAD', '1');
define('GSV_OFFER_MCLICK', '2');

define('GSV_OP_NONE', '0');
define('GSV_OP_HEIST', '1');
define('GSV_OP_SABOTAGE', '2');
define('GSV_OP_ASSASSINATE', '3');

define('GSV_WAR_STATUS_NONE', '1');
define('GSV_WAR_STATUS_PREP', '2');
define('GSV_WAR_STATUS_STARTED', '3');
define('GSV_WAR_STATUS_COMPLETED', '4');

define('GSV_GUILD_RANK_OWNER', '1');
define('GSV_GUILD_RANK_VP', '2');
define('GSV_GUILD_RANK_DYNAMIC', '3');

define('GSV_SUPPLY_QUALITY_MEDIUM', '1');
define('GSV_SUPPLY_QUALITY_GOOD', '2');
define('GSV_SUPPLY_QUALITY_HIGH', '3');
define('GSV_SUPPLY_QUALITY_GIFT', '4');

define('GSV_ANALYTICAL_REG', '1');
define('GSV_ANALYTICAL_EC', '2');
define('GSV_ANALYTICAL_INAPP', '3');

//war ticker modes and status
define("GSV_WAR_TICKER_MODE_PREP", "prep");
define("GSV_WAR_TICKER_MODE_START", "start");
define("GSV_WAR_TICKER_MODE_COMPLETE", "complete");
define("GSV_WAR_TICKER_MODE_EXPIRE", "expire");
define("GSV_WAR_TICKER_MODE_CHALLANGE_EXPIRE", "challenge_expire");

define("GSV_WAR_TICKER_STATUS_CHALLANGE_EXPIRE", 0);
define("GSV_WAR_TICKER_STATUS_PREP", 2);
define("GSV_WAR_TICKER_STATUS_START", 3);
define("GSV_WAR_TICKER_STATUS_COMPLETE", 4);
define("GSV_WAR_TICKER_STATUS_EXPIRE", 5);

define('GSV_SUPPLY_TYPE_REGULAR', '1');
define('GSV_SUPPLY_TYPE_GIFT', '2');
define('GSV_SUPPLY_TYPE_TUTORIAL', '3');
define('GSV_SUPPLY_TYPE_GIFT_FOR_VIP', '4');

define('GSV_GUILD_PERMISSION_KICK', 'kick');
define('GSV_GUILD_PERMISSION_SET_NAME', 'set_name');
define('GSV_GUILD_PERMISSION_SET_DESC', 'set_desc');
define('GSV_GUILD_PERMISSION_MESSAGE_ALL', 'message_all');
define('GSV_GUILD_PERMISSION_ACCEPT_REQUEST', 'accept');
define('GSV_GUILD_PERMISSION_REJECT_REQUEST', 'reject');

define('GSV_GUILD_ANNOUNCER_NAME', 'Alliance');

define('GSV_RESPONSE_FAILED', "1");
define('GSV_RESPONSE_OK', "2");
define('GSV_SERVICE_UNAVAILABLE', "3");

define('GSV_EXPIRE_BATTLE', "1");
define('GSV_BATTLE_DOC_EXPIRY', "3600");
define('GSV_VIP_MAX_TIER', "15");
define('GSV_SAVE_PENDING', "save_pending");

define('GSV_ITEM_NOT_VISIBLE', 0);
define('GSV_ITEM_IS_VISIBLE', 1);

define('GSV_GENDER_MALE', 1);
define('GSV_GENDER_FEMALE', 2);

define('GSV_TYPE_PRODUCT', 1);
define('GSV_TYPE_OFFER', 2);

define('GSV_IN_APP_PRODUCT_POUCH', 'Pouch');
define('GSV_IN_APP_PRODUCT_BAG', 'Bag');
define('GSV_IN_APP_PRODUCT_BOX', 'Box');
define('GSV_IN_APP_PRODUCT_CHEST', 'Chest');
define('GSV_IN_APP_PRODUCT_VAULT', 'Vault');
define('GSV_IN_APP_PRODUCT_VIAL', 'Vial');

define('GSV_IN_APP_NO_SALE', '0');
define('GSV_IN_APP_10_PERCENT_SALE', '10');
define('GSV_IN_APP_20_PERCENT_SALE', '20');
define('GSV_IN_APP_30_PERCENT_SALE', '30');
define('GSV_IN_APP_40_PERCENT_SALE', '40');
define('GSV_IN_APP_50_PERCENT_SALE', '50');
define('GSV_IN_APP_60_PERCENT_SALE', '60');
define('GSV_IN_APP_70_PERCENT_SALE', '70');

define('GSV_OPERATION_SUCCESS', 'success');
define('GSV_OFFER_ADDITIONNAL_EXPIRE_TIME', 600);

define('MAX_OFFER_ITEMS_LIMIT', 5);
define('LEADER_BOARD_LIMIT', '250');

define('MIN_HONOUR_POINTS', 400);

//following are reactions coded in the client...the "smart error" generated from the server must specify ONE of these reactions:
define("GSV_ACTION_CONTINUE",	"continue");
define("GSV_ACTION_QUIT",		"quit");
define("GSV_ACTION_RECONNECT",	"reconnect");

define('PARAM_UID', 'uid');
define('PARAM_GUILD_NAME', 'guild_name');
define('PARAM_GUILD_DESC', 'guild_desc');
define('PARAM_GUILD_STATUS', 'guild_status');
define('PARAM_GUILD_ID', 'guild_id');
define('PARAM_MESSAGE', 'message');
define('PARAM_REQUESTER_NAME', 'requester_name');
define('PARAM_MEMBER_NAME', 'member_name');
define('PARAM_PROMOTE', 'promote');
define('PARAM_SUBJECT', 'subject');
define('PARAM_PLAYER_NAME', 'player_name');


define('FLD_ITEM_ID', 'f0');
define('FLD_MARKET', 'f1');
define('FLD_CATEGORY', 'f2');
define('FLD_ITEM_TYPE', 'f3');
define('FLD_LOOT_PROBABILITY', 'f4');
define('FLD_ITEM_NAME', 'f5');
define('FLD_COINS', 'f6');
define('FLD_DIAMONDS', 'f7');
define('FLD_INCOME', 'f8');
define('FLD_MATURITY_TIME', 'f9');
define('FLD_WILT_TIME', 'f10');
define('FLD_UNLOCK_LEVEL', 'f11');
define('FLD_DEFENSE', 'f12');
define('FLD_ATTACK', 'f13');
define('FLD_REPUTATION', 'f14');
define('FLD_EXPERIENCE', 'f15');
define('FLD_MAP_SIZE', 'f16');
define('FLD_REGION_ID', 'f17');
define('FLD_ABILITY_CODE', 'f18');
define('FLD_CRATE_CODE', 'f19');
define('FLD_BOOST_CODE', 'f20');
define('FLD_BOOST_COUNT', 'f21');
define('FLD_SHORT_DESC', 'f22');
define('FLD_LONG_DESC', 'f23');
define('FLD_PIVOT_MAP', 'f24');
define('FLD_SPRITE_OFFSET_X', 'f25');
define('FLD_SPRITE_OFFSET_Y', 'f26');
define('FLD_WORLD_IMAGE', 'f27');
define('FLD_WORLD_IMAGE_2', 'f28');
define('FLD_WORLD_IMAGE_3', 'f29');
define('FLD_SPRITE_SHEET', 'f30');
define('FLD_ANIMATION_FILE', 'f31');
define('FLD_ANIMATION_FILE_META', 'f32');
define('FLD_GUI_IMAGE', 'f33');
define('FLD_GUI_IMAGE_DISABLED', 'f34');
define('FLD_GUI_IMAGE_DISABLED_HD', 'f35');
define('FLD_WORLD_IMAGE_HD', 'f36');
define('FLD_GUI_IMAGE_HD', 'f37');
define('FLD_GUI_IMAGE_2_HD', 'f38');
define('FLD_SPRITE_SHEET_HD', 'f39');
define('FLD_ANIMATION_FILE_HD', 'f40');
define('FLD_WORLD_IMAGE_2_HD', 'f41');
define('FLD_WORLD_IMAGE_3_HD', 'f42');
define('FLD_IS_BLACK', 'f43');
define('FLD_APPLE_PRODUCT_ID', 'f44');
define('FLD_6WAVES_APPLE_PRODUCT_ID', 'f45');
define('FLD_PAPAYA_PRODUCT_ID', 'f46');
define('FLD_IS_VISIBLE', 'f47');
define('FLD_IS_PROP', 'f48');
define('FLD_IS_WATER_ENABLED', 'f49');
define('FLD_IS_OVERLAP_ALLOWED', 'f50');
define('FLD_DEV_STRING', 'f51');
define('FLD_CITY_ID', 'f52');
define('FLD_ZONE_ID', 'f53');
define('FLD_ATTEMPT_COUNT_1', 'f54');
define('FLD_ATTEMPT_COUNT_2', 'f55');
define('FLD_ATTEMPT_COUNT_3', 'f56');
define('FLD_LOOT_ITEM_ID', 'f57');
define('FLD_REQ_ITEM_1', 'f58');
define('FLD_REQ_ITEM_2', 'f59');
define('FLD_REQ_ITEM_3', 'f60');
define('FLD_REQ_ITEM_1_COUNT', 'f61');
define('FLD_REQ_ITEM_2_COUNT', 'f62');
define('FLD_REQ_ITEM_3_COUNT', 'f63');
define('FLD_MASTERY_SKILL_1', 'f64');
define('FLD_MASTERY_SKILL_2', 'f65');
define('FLD_MASTERY_SKILL_3', 'f66');
define('FLD_REQ_MOB_SIZE', 'f67');
define('FLD_REQ_ENERGY', 'f68');
define('FLD_SORT_ORDER', 'f69');
define('FLD_MAX_COUNT', 'f70');
define('FLD_PREREQ_QUEST', 'f71');
define('FLD_TARGET_ITEM', 'f72');
define('FLD_COMPLETION_COUNT', 'f73');
define('FLD_REWARD_DIAMONDS', 'f74');
define('FLD_REWARD_COINS', 'f75');
define('FLD_REWARD_ITEM', 'f76');
define('FLD_TARGET_VALUE', 'f77');
define('FLD_TARGET_LEVEL', 'f78');
define('FLD_ITEM_SET', 'f79');
define('FLD_CATEGORY_CODE', 'f80');
define('FLD_ATTACK_SET', 'f81');
define('FLD_DEFENSE_SET', 'f82');
define('FLD_ISO_LAYER', 'f83');
define('FLD_ARMY_CAPACITY', 'f84');
define('FLD_ENERGY', 'f85');
define('FLD_6WAVES_APPLE_PRODUCT_ID_HD', 'f86');
define('FLD_QUANTITY', 'f87');
define('FLD_ATTEMPT_COUNT_SET', 'f88');
define('FLD_MASTERY_SKILL_SET', 'f89');
define('FLD_SPAWNABLE', 'f90');
define('FLD_PROBABLITY_1', 'f91');
define('FLD_PROBABLITY_2', 'f92');
define('FLD_PROBABLITY_3', 'f93');
define('FLD_PROBABLITY_4', 'f94');
define('FLD_REWARD_ITEM_1', 'f95');
define('FLD_REWARD_ITEM_2', 'f96');
define('FLD_REWARD_ITEM_3', 'f97');
define('FLD_REWARD_ITEM_4', 'f98');
define('FLD_HERO_1', 'f99');
define('FLD_HERO_2', 'f100');
define('FLD_HERO_3', 'f101');
define('FLD_HERO_4', 'f102');
define('FLD_HERO_5', 'f103');
define('FLD_HERO_6', 'f104');
define('FLD_SIDEKICK_1', 'f105');
define('FLD_SIDEKICK_2', 'f106');
define('FLD_SIDEKICK_3', 'f107');
define('FLD_SIDEKICK_4', 'f108');
define('FLD_SIDEKICK_5', 'f109');
define('FLD_FULLPORTRAIT1', 'f110');
define('FLD_FULLPORTRAIT2', 'f111');
define('FLD_FULLPORTRAIT3', 'f112');
define('FLD_FULLPORTRAIT4', 'f113');
define('FLD_GENDER', 'f114');
define('FLD_REFERENCE_ID', 'f115');
define('FLD_CHESTGOLDMULTIPLIER', 'f116');
define('FLD_CHEST_ID', 'f117');
define('FLD_HERODROPPCT', 'f118');
define('FLD_ZONEUNLOCKLEVEL', 'f119');
define('FLD_HUB_1', 'f120');
define('FLD_HUB_2', 'f121');
define('FLD_HUB_3', 'f122');
define('FLD_STATSINCPCT', 'f123');
define('FLD_COMMONXP', 'f124');
define('FLD_UNCOMMONXP', 'f125');
define('FLD_RAREXP', 'f126');
define('FLD_EPICXP', 'f127');
define('FLD_LEGENDARYXP', 'f128');
define('FLD_ID', 'f129');
define('FLD_NAME', 'f130');
define('FLD_LEVEL', 'f131');
define('FLD_ORDER', 'f132');
define('FLD_GRADE', 'f133');
define('FLD_XP', 'f134');
define('FLD_EVOLUTION', 'f135');
define('FLD_MASTERY', 'f136');
define('FLD_SKILL', 'f137');
define('FLD_DESCRIPTION', 'f138');
define('FLD_SMALLPORTRAIT', 'f139');
define('FLD_FULLPORTRAIT', 'f140');
define('FLD_ISMINION', 'f141');
define('FLD_ENABLED', 'f142');
define('FLD_THEMED', 'f143');
define('FLD_SKILLEFFECT', 'f144');
define('FLD_MINEFFECT', 'f145');
define('FLD_MAXEFFECT', 'f146');
define('FLD_EXTSKILLEFFECT', 'f147');
define('FLD_EXTEFFECTMIN', 'f148');
define('FLD_EXTEFFECTMAX', 'f149');
define('FLD_MINCHANCEPCT', 'f150');
define('FLD_MAXCHANCEPCT', 'f151');
define('FLD_MAXMASTERY', 'f152');
define('FLD_MIN_ATTACK_1', 'f153');
define('FLD_MAX_ATTACK_1', 'f154');
define('FLD_MIN_ATTACK_2', 'f155');
define('FLD_MAX_ATTACK_2', 'f156');
define('FLD_SKILL_TYPE', 'f157');
define('FLD_HUB_ID', 'f158');
define('FLD_FULLPORTRAIT1_OFFSET', 'f159');
define('FLD_FULLPORTRAIT2_OFFSET', 'f160');
define('FLD_FULLPORTRAIT3_OFFSET', 'f161');
define('FLD_FULLPORTRAIT4_OFFSET', 'f162');
define('FLD_IS_SUMMONABLE', 'f163');
define('FLD_PARENT_HUB', 'f164');
define('FLD_JOB_CHEST', 'f165');
define('FLD_UPDATE_TIMESTAMP', 'f166');
define('FLD_APPLE_PRODUCT_TYPES', 'f167');
define('FLD_CRATE_TYPE', 'f168');
define('FLD_CRATE_UNCOMMON_ITEM_1', 'f169');
define('FLD_CRATE_UNCOMMON_ITEM_2', 'f170');
define('FLD_CRATE_UNCOMMON_ITEM_3', 'f171');
define('FLD_CRATE_UNCOMMON_ITEM_4', 'f172');
define('FLD_CRATE_UNCOMMON_ITEM_5', 'f173');
define('FLD_CRATE_UNCOMMON_ITEM_6', 'f174');
define('FLD_CRATE_RARE_ITEM_1', 'f175');
define('FLD_CRATE_RARE_ITEM_2', 'f176');
define('FLD_CRATE_RARE_ITEM_3', 'f177');
define('FLD_CRATE_RARE_ITEM_4', 'f178');
define('FLD_CRATE_RARE_ITEM_5', 'f179');
define('FLD_CRATE_RARE_ITEM_6', 'f180');
define('FLD_CRATE_EPIC_ITEM_1', 'f181');
define('FLD_CRATE_EPIC_ITEM_2', 'f182');
define('FLD_CRATE_EPIC_ITEM_3', 'f183');
define('FLD_CRATE_EPIC_ITEM_4', 'f184');
define('FLD_CRATE_EPIC_ITEM_5', 'f185');
define('FLD_CRATE_EPIC_ITEM_6', 'f186');
define('FLD_CRATE_LEGENDARY_ITEM_1', 'f187');
define('FLD_CRATE_LEGENDARY_ITEM_2', 'f188');
define('FLD_CRATE_LEGENDARY_ITEM_3', 'f189');
define('FLD_CRATE_LEGENDARY_ITEM_4', 'f190');
define('FLD_CRATE_LEGENDARY_ITEM_5', 'f191');
define('FLD_CRATE_LEGENDARY_ITEM_6', 'f192');
define('FLD_ITEM_NAME_MULTI_LINGUAL', 'f193');
define('FLD_SHORT_DESC_MULTI_LINGUAL', 'f194');
define('FLD_LONG_DESC_MULTI_LINGUAL', 'f195');
define('FLD_DESCRIPTION_MULTI_LINGUAL', 'f196');
define('FLD_TICKER_STATUS', 'f197');
define('FLD_COMMAND_TYPE', 'f198');
define('FLD_WORLD_IMAGE_LOW', 'f199');
define('FLD_ATTACK_CURRENT', 'f200');
define('FLD_DEFENSE_CURRENT', 'f201');
define('FLD_MASTERY_CAP', 'f202');
define('FLD_MIN_ATTRIBUTE_1', 'f203');
define('FLD_MAX_ATTRIBUTE_1', 'f204');
define('FLD_MIN_ATTRIBUTE_2', 'f205');
define('FLD_MAX_ATTRIBUTE_2', 'f206');
define('FLD_MAXLEVELCOMMON', 'f207');
define('FLD_MAXLEVELUNCOMMON', 'f208');
define('FLD_MAXLEVELRARE', 'f209');
define('FLD_MAXLEVELEPIC', 'f210');
define('FLD_MAXLEVELLEGENDARY', 'f211');
define('FLD_DefaultXP', 'f212');
define('FLD_CurrentXPSalvagePct', 'f213');
define('FLD_RarityXPCommonPct', 'f214');
define('FLD_RarityXPUncommonPct', 'f215');
define('FLD_RarityXPRarePct', 'f216');
define('FLD_RarityXPEpicPct', 'f217');
define('FLD_RarityXPLegendaryPct', 'f218');
define('FLD_EVOLUTIONXPBASEPCT', 'f219');
define('FLD_EVOLUTIONXPPLUSPCT', 'f220');
define('FLD_EVOLUTIONXPPLUSPLUSPCT', 'f221');
define('FLD_EVOLUTIONXPMASTERPCT', 'f222');
define('FLD_PUREENHANCEMENTBONUSCHANCEPCT', 'f223');
define('FLD_PUREENHANCEMENTBONUSXPPCT', 'f224');
define('FLD_ORDERMATCHBONUSXPPCT', 'f225');
define('FLD_COMMONMASTERYSALVAGEPCT', 'f226');
define('FLD_UNCOMMONMASTERYSALVAGEPCT', 'f227');
define('FLD_RAREMASTERYSALVAGEPCT', 'f228');
define('FLD_EPICMASTERYSALVAGEPCT', 'f229');
define('FLD_LEGENDARYMASTERYSALVAGEPCT', 'f230');
define('FLD_BASECOST', 'f231');
define('FLD_COSTPERLEVELTIMESFEEDERS', 'f232');
define('FLD_FEEDERSALVAGEAVAILABLEPCT', 'f233');
define('FLD_PlusAttDefIncFromDefaultPct', 'f234');
define('FLD_PlusPlusAttDefIncFromsDefaultPct', 'f235');
define('FLD_MasterAttDefIncFromDefaultPct', 'f236');
define('FLD_NonMaxEnhancedAttDefIncPct', 'f237');
define('FLD_MaxEnhancedAttDefIncPct', 'f238');
define('FLD_CommonEvoCost', 'f239');
define('FLD_UncommonEvoCost', 'f240');
define('FLD_RareEvoCost', 'f241');
define('FLD_EpicEvoCost', 'f242');
define('FLD_LegendaryEvoCost', 'f243');
define('FLD_CostPerCardLevel', 'f244');
define('FLD_CommonMasteryCapBase', 'f245');
define('FLD_CommonMasteryCapPlus', 'f246');
define('FLD_CommonMasteryCapPlusPlus', 'f247');
define('FLD_CommonMasteryCapMaster', 'f248');
define('FLD_UncommonMasteryCapBase', 'f249');
define('FLD_UncommonMasteryCapPlus', 'f250');
define('FLD_UncommonMasteryCapPlusPlus', 'f251');
define('FLD_UncommonMasteryCapMaster', 'f252');
define('FLD_RareMasteryCapBase', 'f253');
define('FLD_RareMasteryCapPlus', 'f254');
define('FLD_RareMasteryCapPlusPlus', 'f255');
define('FLD_RareMasteryCapMaster', 'f256');
define('FLD_EpicMasteryCapBase', 'f257');
define('FLD_EpicMasteryCapPlus', 'f258');
define('FLD_EpicMasteryCapPlusPlus', 'f259');
define('FLD_EpicMasteryCapMaster', 'f260');
define('FLD_LegendaryMasteryCapBase', 'f261');
define('FLD_LegendaryMasteryCapPlus', 'f262');
define('FLD_LegendaryMasteryCapPlusPlus', 'f263');
define('FLD_LegendaryMasteryCapMaster', 'f264');

//FLDs in each VIP Tier are as follows:
define('FLD_VIP_TIER_NUMBER', 'f265');
define('FLD_VIP_DOLLAR_THRESHOLD', 'f266');
define('FLD_VIP_ENERGY_TIMER_SPEEDUP', 'f267');
define('FLD_VIP_STAMINA_TIMER_SPEEDUP', 'f268');
define('FLD_VIP_OPS_COST_DISCOUNT', 'f269');
define('FLD_VIP_BONUS_GIFTS_RECEIVABLE_QUANTITY', 'f270');
define('FLD_VIP_BONUS_SUPPLIES_RECEIVABLE_QUANTITY', 'f271');
define('FLD_VIP_DAILY_BONUS_MULTIPLIER', 'f272');

//following define the gifts to be given as the user progresses thru the tiers...
define('FLD_VIP_ONE_TIME_GIFT_ITEM_TYPE', 'f273');
define('FLD_VIP_ONE_TIME_GIFT_ITEM_ID', 'f274');
define('FLD_VIP_ONE_TIME_GIFT_ITEM_QUANTITY', 'f275');

//following are stored in the vip_tiers document but are meant for consumption on the client
define('FLD_VIP_BADGE_COLOR', 'f276');
define('FLD_VIP_SHOW_BADGE_ON_CHAT', 'f277');
define('FLD_VIP_SHOW_BADGE_ON_SPY', 'f278');
define('FLD_IS_VIP_ITEM', 'f279');
define('FLD_STAMINA', 'f280');

define('FLD_PRODUCT_ID', 'f281');
define('FLD_ITEM_1', 'f282');
define('FLD_ITEM_1_COUNT', 'f283');
define('FLD_ITEM_2', 'f284');
define('FLD_ITEM_2_COUNT', 'f285');
define('FLD_ITEM_3', 'f286');
define('FLD_ITEM_3_COUNT', 'f287');
define('FLD_ITEM_4', 'f288');
define('FLD_ITEM_4_COUNT', 'f289');
define('FLD_ITEM_5', 'f290');
define('FLD_ITEM_5_COUNT', 'f291');
define('FLD_OFFER_LIFE_TIME', 'f292');
define('FLD_BONUS_TEXT', 'f293');


define('FLD_REGEN_INTERVAL', 'f294');
define('FLD_MIN', 'f295');
define('FLD_MAX', 'f296');
define('FLD_SELECTED_TYPE', 'f297');
define('FLD_SELECTED_FEILD', 'f298');
define('FLD_CHAMPION_TYPE', 'f299');

/* -------- Guild Status constants --------- */
define('GUILD_STATUS_OPEN', '1');
define('GUILD_STATUS_BY_REQUEST', '2');
define('GUILD_STATUS_CLOSE', '3');

/* -------- hero constants --------- */
define('ORDERS', '1');
define('GRADES', '2');
define('EVOLUTIONS', '3');
define('GENDERS', '4');
define('SKILLEFFECTS', '5');
define('EXTSKILLEFFECTS', '6');
define('SKILL_TYPES', '7');
define('HUBS', '8');
define('CRATE_TYPES', '9');
define('LANGUAGES', 10);
define('MULTI_LINGUAL_ATTS', 11);

/* --------  Order ------ */
define('FIRE', '1');
define('ICE', '2');
define('ARCANE', '3');
define('STRENGTH', '4');

//Grades
define('COMMON', '1');
define('UNCOMMON', '2');
define('RARE', '3');
define('EPIC', '4');
define('LEGENDARY', '5');

//Evolutions
define('BASE', '1');
define('PLUS', '2');
define('PLUSPLUS', '3');
define('MASTER', '4');

////Gender
//define('MALE', '1');
//define('FEMALE', '2');
//Crate Type
define('CRATE_SPECIAL', '1');
define('CRATE_HERO', '2');

//SkillEffects
define('HERO_ATTACK_MULT', '1');
define('ARMYATTACKMULT', '2');
define('HPDAMAGE', '3');
define('ATTACKSTEAL', '4');
define('ENHANCEXPMASTERY', '5');
define('ARMYDEFENSEMULT', '6');
define('DEFLECTEDDAMAGE', '7');
define('HERODEFMULT', '8');
define('ENEMYHEROSTATMULT', '9');
define('ENEMYARMYSTATMULT', '10');
define('HPSTOLEN', '11');
define('HEROESELIMINATED', '12');
define('HEROATTACKDEFMULT', '13');
define('ARMYATTACKDEFMULT', '14');
define('HPRESTORE', '15');
define('ALLHEROESSTATSINCREASE', '16');

//ExtSkillEffects
define('NUMATTACKS', '1');
define('NUMINSTANCES', '2');

//skills
// 0 and -1 will not use for canstant values
define('KFIRESTRIKE', '1');
define('KFLAMINGWEAPONS', '2');
define('KBURNINGTOUCH', '3');
define('KFIRELUST', '4');
define('KHELLFIRE', '5');
define('KTESTOFFIRE', '6');
define('KFROSTARMOR', '7');
define('KFROSTSHIELD', '8');
define('KFROSTFRENZY', '9');
define('KICESTORM', '10');
define('KFROSTBITE', '11');
define('KTESTOFFROST', '12');
define('KFEAR', '13');
define('KSHADOWWORD', '14');
define('KCRIPPLE', '15');
define('KLIFESTEAL', '16');
define('KFATALWIND', '17');
define('KTESTOFMAGIC', '18');
define('KHEROICSTRIKE', '19');
define('KBATTLESHOUT', '20');
define('KHEALINGWAVE', '21');
define('KHEROESCALL', '22');
define('KBLADEFURY', '23');
define('KTESTOFSTRENGTH', '24');
define('KPURITY', '25');



//---------------------------------------For SKILLS implementation---------------------

define('SKILL_TARGET', 'skill_target');
define('SKILL_TARGET_ATTRIBUTE', 'skill_target_attribute');
define('SKILL_OP', 'skill_op');
define('SKILL_IS_PCT', 'skill_is_pct');
define('SKILL_IS_HERO', 'skill_is_hero');
define('SKILL_TYPE', FLD_SKILL_TYPE);

define('SKILL_HERO_ATTACK_BONUS', 'skill_hero_attack_bonus');
define('SKILL_HERO_DEFENSE_BONUS', 'skill_hero_defense_bonus');
define('SKILL_ATTACK_BONUS', 'skill_attack_bonus');
define('SKILL_DEFENSE_BONUS', 'skill_defense_bonus');
define('SKILL_HEALTH_BONUS', 'skill_health_bonus');

define('SKILL_HERO_ATTACK_DAMAGE', 'skill_hero_attack_damage');
define('SKILL_HERO_DEFENSE_DAMAGES', 'skill_hero_defense_damage');
define('SKILL_ATTACK_DAMAGE', 'skill_attack_bonus');
define('SKILL_DEFENSE_DAMAGE', 'skill_defense_damage');
define('SKILL_HEALTH_DAMAGE', 'skill_health_damage');

define('SKILL_EFFECT', '_effect');

define('SKILL_BAG', '_bag');
define('SKILL_MODIFIER', '_modifier');
define('SKILL_COUNT', '_count');

define('SKILL_MUL', 'skill_mul');
define('SKILL_ADD', 'skill_add');
define('SKILL_SUB', 'skill_sub');
define('SKILL_SET', 'skill_set');
//-------------------------------------------------------------------------------------


define('COM_COMMAND_TYPE', 1);
define('COM_ITEM_ID', 2);
define('COM_MARKET', 100);
define('COM_CATEGORY', 101);
define('COM_ITEM_TYPE', 102);
define('COM_ITEM_NAME', 103);
define('COM_UNLOCK_LEVEL', 104);
define('COM_WORLD_IMAGE', 105);
define('COM_GUI_IMAGE', 107);
define('COM_SPRITE_SHEET', 108);
define('COM_ANIMATION_FILE', 109);
define('COM_SHORT_DESC', 110);
define('COM_LONG_DESC', 111);
define('COM_COINS', 112);
define('COM_DIAMONDS', 113);
define('COM_ATTACK', 114);
define('COM_DEFENSE', 115);
define('COM_REPUTATION', 116);
define('COM_ABILITY_CODE', 117);
define('COM_APPLE_PRODUCT_ID', 118);
define('COM_PAPAYA_PRODUCT_ID', 119);
define('COM_MAP_SIZE', 120);
define('COM_BOOST_COUNT', 121);
define('COM_BOOST_CODE', 122);
define('COM_PIVOT_MAP', 123);
define('COM_SPRITE_OFFSET_X', 124);
define('COM_SPRITE_OFFSET_Y', 125);
define('COM_LOOT_PROBABILITY', 126);
define('COM_MATURITY_TIME', 127);
define('COM_INCOME', 128);
define('COM_EXPERIENCE', 129);
define('COM_WORLD_IMAGE_2', 130);
define('COM_WORLD_IMAGE_3', 131);
define('COM_IS_PROP', 132);
define('COM_IS_VISIBLE', 133);
define('COM_WORLD_IMAGE_HD', 134);
define('COM_GUI_IMAGE_HD', 135);
define('COM_SPRITE_SHEET_HD', 136);
define('COM_ANIMATION_FILE_HD', 137);
define('COM_WORLD_IMAGE_2_HD', 138);
define('COM_WORLD_IMAGE_3_HD', 139);
define('COM_IS_BLACK', 140);
define('COM_WILT_TIME', 141);
define('COM_CRATE_CODE', 142);
define('COM_GUI_IMAGE_DISABLED_HD', 143);
define('COM_GUI_IMAGE_DISABLED', 144);
define('COM_IS_WATER_ENABLED', 145);
define('COM_ZONE_ID', 146);
define('COM_ATTEMPT_COUNT_1', 147);
define('COM_LOOT_ITEM_ID', 148);
define('COM_REQ_ITEM_1', 149);
define('COM_REQ_ITEM_2', 150);
define('COM_REQ_ITEM_3', 151);
define('COM_REQ_MOB_SIZE', 152);
define('COM_REQ_ENERGY', 153);
define('COM_CITY_ID', 154);
define('COM_REQ_ITEM_1_COUNT', 155);
define('COM_REQ_ITEM_2_COUNT', 156);
define('COM_REQ_ITEM_3_COUNT', 157);
define('COM_ATTEMPT_COUNT_2', 158);
define('COM_ATTEMPT_COUNT_3', 159);
define('COM_MASTERY_SKILL_1', 160);
define('COM_MASTERY_SKILL_2', 161);
define('COM_MASTERY_SKILL_3', 162);
define('COM_IS_OVERLAP_ALLOWED', 163);
define('COM_DEV_STRING', 164);
define('COM_SORT_ORDER', 165);
define('COM_MAX_COUNT', 166);
define('COM_REGION_ID', 177);
define('COM_PREREQ_QUEST', 178);
define('COM_TARGET_ITEM', 179);
define('COM_COMPLETION_COUNT', 180);
define('COM_REWARD_DIAMONDS', 181);
define('COM_REWARD_COINS', 182);
define('COM_REWARD_ITEM', 183);
define('COM_TARGET_VALUE', 184);
define('COM_TARGET_LEVEL', 185);
define('COM_ITEM_SET', 186);
define('COM_ANIMATION_FILE_META', 187);
define('COM_CATEGORY_CODE', 188);
define('COM_6WAVES_APPLE_PRODUCT_ID', 189);
define('COM_ATTACK_SET', 190);
define('COM_DEFENSE_SET', 191);
define('COM_ISO_LAYER', 192);
define('COM_ARMY_CAPACITY', 193);
define('COM_ENERGY', 194);
define('COM_6WAVES_APPLE_PRODUCT_ID_HD', 195);
define('COM_QUANTITY', 196);
define('COM_MASTERY_SKILL_SET', 197);
define('COM_ATTEMPT_COUNT_SET', 198);
define('COM_SPAWNABLE', 199);
define('COM_PROBABLITY_1', 200);
define('COM_PROBABLITY_2', 201);
define('COM_PROBABLITY_3', 202);
define('COM_PROBABLITY_4', 203);

define('COM_REWARD_ITEM_1', 204);
define('COM_REWARD_ITEM_2', 205);
define('COM_REWARD_ITEM_3', 206);
define('COM_REWARD_ITEM_4', 207);
//@todo need to check if we can start where we were i mean 203 
//for time being we started our index for battle from 1000 
define('COM_ID', 1000);
define('COM_NAME', 1002);

// define('COM_ATTACK',             		203); //already defined
// define('COM_DEFENSE',              		203); //already defined

define('COM_ORDER', 1005);
define('COM_GRADE', 1006);
define('COM_LEVEL', 1007);
define('COM_XP', 1008);
define('COM_EVOLUTION', 1009);
define('COM_MASTERY', 1010);
define('COM_SKILL', 1011);
define('COM_DESCRIPTION', 1012);

define('COM_SMALLPORTRAIT', 1013);
define('COM_FULLPORTRAIT1', 1014);
define('COM_FULLPORTRAIT2', 1015);
define('COM_FULLPORTRAIT3', 1016);
define('COM_FULLPORTRAIT4', 1017);

define('COM_ISMINION', 1018);
define('COM_ENABLED', 1019);
define('COM_THEMED', 1020);
define('COM_GENDER', 1021);
define('COM_CHESTGOLDMULTIPLIER', 1022);
define('COM_CHEST_ID', 1023);
define('COM_HERODROPPCT', 1024);
define("COM_ZONEUNLOCKLEVEL", 1025);
define("COM_HUB_1", 1026);
define("COM_HUB_2", 1027);
define("COM_HUB_3", 1028);
define('COM_HERO_1', 1029);
define('COM_HERO_2', 1030);
define('COM_HERO_3', 1031);
define('COM_HERO_4', 1032);
define('COM_HERO_5', 1033);
define('COM_HERO_6', 1034);
define('COM_SIDEKICK_1', 1035);
define('COM_SIDEKICK_2', 1036);
define('COM_SIDEKICK_3', 1037);
define('COM_SIDEKICK_4', 1038);
define('COM_SIDEKICK_5', 1039);
define('COM_SKILLEFFECT', 1040);
define('COM_MINEFFECT', 1041);
define('COM_MAXEFFECT', 1042);
define('COM_EXTSKILLEFFECT', 1043);
define('COM_EXTEFFECTMIN', 1044);
define('COM_EXTEFFECTMAX', 1045);
define('COM_MINCHANCEPCT', 1046);
define('COM_MAXCHANCEPCT', 1047);
define('COM_MAXMASTERY', 1048);
define('COM_REFERENCE_ID', 1049);
define('COM_MAX_ATTACK_2', 1050);
define('COM_MIN_ATTACK_2', 1051);
define('COM_MAX_ATTACK_1', 1052);
define('COM_MIN_ATTACK_1', 1053);
define('COM_STATSINCPCT', 1054);
define('COM_COMMONXP', 1055);
define('COM_UNCOMMONXP', 1056);
define('COM_RAREXP', 1057);
define('COM_EPICXP', 1058);
define('COM_LEGENDARYXP', 1059);
define('COM_HUB_ID', 1060);
define('COM_PARENT_HUB', 1061);
define('COM_JOB_CHEST', 1062);

//define('COM_SMALLPORTRAIT', 1061); //available index

define('COM_FULLPORTRAIT1_OFFSET', 1063);
define('COM_FULLPORTRAIT2_OFFSET', 1064);
define('COM_FULLPORTRAIT3_OFFSET', 1065);
define('COM_FULLPORTRAIT4_OFFSET', 1066);
define('COM_IS_SUMMONABLE', 1067);
define('COM_UPDATE_TIMESTAMP', 1068);
define('COM_APPLE_PRODUCT_TYPES', 1069);
define('COM_CRATE_TYPE', 1070);

define('COM_CRATE_UNCOMMON_ITEM_1', 1071);
define('COM_CRATE_UNCOMMON_ITEM_2', 1072);
define('COM_CRATE_UNCOMMON_ITEM_3', 1073);
define('COM_CRATE_UNCOMMON_ITEM_4', 1074);
define('COM_CRATE_UNCOMMON_ITEM_5', 1075);
define('COM_CRATE_UNCOMMON_ITEM_6', 1076);

define('COM_CRATE_RARE_ITEM_1', 1077);
define('COM_CRATE_RARE_ITEM_2', 1078);
define('COM_CRATE_RARE_ITEM_3', 1079);
define('COM_CRATE_RARE_ITEM_4', 1080);
define('COM_CRATE_RARE_ITEM_5', 1081);
define('COM_CRATE_RARE_ITEM_6', 1082);

define('COM_CRATE_EPIC_ITEM_1', 1083);
define('COM_CRATE_EPIC_ITEM_2', 1084);
define('COM_CRATE_EPIC_ITEM_3', 1085);
define('COM_CRATE_EPIC_ITEM_4', 1086);
define('COM_CRATE_EPIC_ITEM_5', 1087);
define('COM_CRATE_EPIC_ITEM_6', 1088);

define('COM_CRATE_LEGENDARY_ITEM_1', 1089);
define('COM_CRATE_LEGENDARY_ITEM_2', 1090);
define('COM_CRATE_LEGENDARY_ITEM_3', 1091);
define('COM_CRATE_LEGENDARY_ITEM_4', 1092);
define('COM_CRATE_LEGENDARY_ITEM_5', 1093);
define('COM_CRATE_LEGENDARY_ITEM_6', 1094);
define('COM_SKILL_TYPE', 1095);


define('COM_ITEM_NAME_MULTI_LINGUAL', 1096);
define('COM_SHORT_DESC_MULTI_LINGUAL', 1097);
define('COM_LONG_DESC_MULTI_LINGUAL', 1098);
define('COM_DESCRIPTION_MULTI_LINGUAL', 1099);
define('COM_GUI_IMAGE_2_HD', 1100);
define('COM_STAMINA', 1101);

define('COM_PRODUCT_ID', 1116);
define('COM_ITEM_1', 1117);
define('COM_ITEM_1_COUNT', 1118);
define('COM_ITEM_2', 1119);
define('COM_ITEM_2_COUNT', 1120);
define('COM_ITEM_3', 1121);
define('COM_ITEM_3_COUNT', 1122);
define('COM_ITEM_4', 1123);
define('COM_ITEM_4_COUNT', 1124);
define('COM_ITEM_5', 1125);
define('COM_ITEM_5_COUNT', 1126);
define('COM_OFFER_LIFE_TIME', 1127);


define('CMD_ADD_ITEM', 1);
define('CMD_EDIT_ITEM', 2);
define('CMD_DESTROY_ITEM', 3);


/* Category Definitions */
define('MKT_COMMON', 1);
define('MKT_FARM', 3);
define('MKT_MOB', 4);
define('MKT_SYSTEM', 5);
define('MKT_JOBS', 6);
define('MKT_QUESTS', 7);
define('MKT_POWER_ITEMS', 8);
define('MKT_OFFERS', 9);


define('CAT_BASE', 1);
define('CAT_EQUIPMENT', 2);
define('CAT_VEHICLES', 3);
define('CAT_UPGRADES', 4);
define('CAT_CURRENCY', 5);
define('CAT_NONE', 6);
define('CAT_QUESTS_FARMING', 7);
define('CAT_QUESTS_RAIDING', 8);
define('CAT_QUESTS_JOBS', 9);
define('CAT_QUESTS_MARKET', 10);
define('CAT_QUESTS_UI', 11);
define('CAT_QUESTS_EMAIL', 12);
define('CAT_POWER_CROPS', 13);

define('CAT_QUESTS_GIFTS', 14);
define('CAT_QUESTS_OPS', 15);
define('CAT_SECIALS', 16);
define('CAT_OFFERS', 17);

define('CAT_QUEST_ALTER', 18);
define('CAT_QUEST_WECHAT', 19);


// Catalog Item Types
define('TYPE_DECOR', 1);
define('TYPE_DEFENSE', 2);
define('TYPE_GROUNDS', 3);
define('TYPE_PLANT_LIFE', 4);
define('TYPE_REAL_ESTATE', 5);
define('TYPE_WEAPONS', 6);
define('TYPE_ARMOR', 7);
define('TYPE_LAND', 8);
define('TYPE_SEA', 9);
define('TYPE_AIR', 10);
define('TYPE_EXPAND', 11);
define('TYPE_BOOSTS', 12);
define('TYPE_DIAMONDS', 13);
define('TYPE_LAUNDERING', 14);
define('TYPE_CROPS', 15);
define('TYPE_VILLAINS', 16);
define('TYPE_SPLASH', 17);
//define('TYPE_THUGS', 18);
define('TYPE_FARM_PLOTS', 19);
define('TYPE_VEHICLE', 20);
define('TYPE_THUG_UNIT', 21);
define('TYPE_CITY', 22);
define('TYPE_JOB', 23);
define('TYPE_ZONE', 24);
define('TYPE_COMIC', 25);
define('TYPE_REGION', 26);
define('TYPE_QUEST_HARVEST', 27);
define('TYPE_QUEST_BOOST_CROP', 28);
define('TYPE_QUEST_RAID', 30);
define('TYPE_QUEST_HITLIST', 31);
define('TYPE_QUEST_SPY', 32);
define('TYPE_QUEST_JOB', 33);
define('TYPE_QUEST_UI_GENERIC', 34);
define('TYPE_QUEST_BUY_MKT', 35);
define('TYPE_QUEST_DEPOSIT', 37);
define('TYPE_QUEST_BOUNTY', 38);
define('TYPE_HERO', 39);
define('TYPE_WEAPONS_PREMIUM', 40);
define('TYPE_COINS', 41);
define('TYPE_QUEST_EMAIL', 42);
define('TYPE_POWER_FARM_PLOTS', 43);
define('TYPE_CROPS_DIAMONDS', 44);
define('TYPE_CROPS_ENERGY', 45);
define('TYPE_CROPS_STAMINA', 46);
define('TYPE_QUEST_GIFTS', 47);
define('TYPE_QUEST_WARPOINTS', 48);
define('TYPE_QUEST_RAIDS_WAR', 49);
define('TYPE_QUEST_GUILD_MSG', 50);
define('TYPE_QUEST_ASSASINATE', 51);
define('TYPE_QUEST_SABOTAGE', 52);
define('TYPE_QUEST_SABOTAGE_WAR', 53);
define('TYPE_QUEST_STEAL', 54);
define('TYPE_QUEST_STEAL_WAR', 55);
define('TYPE_QUEST_WIHDRAW', 56);
define('TYPE_QUEST_GIFTS_SENDBACK', 57);
define('TYPE_CRATE', 58);
define('TYPE_ARMOR_PREMIUM', 59);
define('TYPE_VEHICLE_PREMIUM', 60);
//define('TYPE_DEFENSE_PREMIUM', 61); -- Conflict with CMS constants
define('TYPE_CHESTS', 61);
define('TYPE_BOSS', 62);
define('TYPE_SKILL', 63);
define('TYPE_ENHANCEMENT', 64);
define('TYPE_HUB', 65);
define('TYPE_VIP_TIER', 66); //not being used because vip tiers' definitions are logically NOT part of the catalog
define('TYPE_OFFER_1', 67);


define('TYPE_QUEST_CHAMPION_ASSIGNMENT', 70);
define('TYPE_QUEST_ENHANCEMENT', 71);
define('TYPE_QUEST_PURE_ENHANCEMENT', 72);
define('TYPE_QUEST_EVOLUTION', 73);
define('TYPE_QUEST_BATLE_MASTER_CARD', 74);
define('TYPE_QUEST_ENHANCEMENT_PER_FEEDER', 75);
define('TYPE_QUEST_WE_CHAT', 76);

define('TYPE_QUEST_BUY_MKT_BY_TYPE', 77);
define('TYPE_QUEST_BUY_MKT_BY_RANGE', 78);
define('TYPE_QUEST_SUMMON', 79);


define('HLP_UTILS', 'UTILS_HELPER');

// ERRORS Controllers
define('PRE_CONTROLLER', 'custom_system_hooks');
define('CTR_CP', 'CP');
define('CTR_DP', 'DP');
define('CTR_DPH', 'DPH');
define('CTR_DPB', 'DPB');
define('CTR_DS', 'DS');
define('CTR_EC', 'EC');
define('CTR_EI', 'EI');
define('CTR_GU', 'GU');
define('CTR_RD', 'RD');
define('CTR_RN', 'RN');
define('CTR_SI', 'SI');
define('CTR_UI', 'UI');
define('CTR_UM', 'UM');
define('CTR_GR', 'GR');
define('CTR_GI', 'GI');
define('CTR_AT', 'AT');
define('CTR_GH', 'GH');
define('CTR_SB', 'SB');
define('CTR_RS', 'RS');
define('CTR_CNC', 'CNC');
define('CTR_CNP', 'CNP');
define('CTR_BD', 'BD');
define('CTR_BW', 'BW');
define('CTR_SK', 'SK');
define('CTR_PL', 'PL');
define('CTR_LU', 'LU');
define('CTR_SR', 'SR');
define('CTR_GS', 'GS');
define('CTR_DAP', 'DAP');
define('CTR_LC', 'LC');
define('CTR_DJ', 'DJ');
define('CTR_GJ', 'GJ');
define('CTR_RC', 'RC');
define('CTR_DSC', 'DSC');
define('CTR_DPC', 'DPC');
define('CTR_DBPC', 'DBPC');
define('CTR_UC', 'UC');
define('CTR_DOF', 'DOF');
define('CTR_DAPA', 'DAPA');
define('CTR_CO', 'CO');
define('CTR_COC', 'COC');
define('CTR_DBSC', 'DBSC');
define('CTR_GP', 'GP');
define('CTR_LB', 'LB');
define('CTR_GPF', 'GPF');
define('CTR_PI', 'PI');
define('CTR_PPI', 'PPI');
define('CTR_SQ', 'SQ');
define('CTR_FBI', 'FBI');
define('CTR_FBR', 'FBR');
define('CTR_RDI', 'RDI');
define('CTR_FIS', 'FIS');
define('CTR_BR', 'BR');
define('CTR_CHAT', 'CHAT');
define('CTR_OPS_A', 'OPS_A');
define('CTR_OPS_H', 'OPS_H');
define('CTR_OPS_S', 'OPS_S');
define('CTR_OPS_CS', 'OPS_CS');
define('CTR_PM', 'PM');
define('CTR_GGI', 'GGI');
define('CTR_GGM', 'GGM');
define('CTR_GGR', 'GGR');
define('CTR_GGW', 'GGW');
define('CTR_GGS', 'GGS');
define('CTR_KBM', 'KBM');
define('CTR_FW', 'FW');
define('CTR_TICKER', 'TICKER');
define('CTR_SE', 'SE');
define('CTR_CE', 'CE');
define('CTR_RE', 'RE');
define('CTR_HK', 'HK');
define('CTR_WC', 'WC');
define('CTR_DPCT', 'DPCT');
define('CTR_AOH_AC', 'AOH_AC');
define('CTR_AOH_EV', 'AOH_EV');
define('CTR_AOH_ENHANCE', 'AOH_EN');
define('CTR_AOH_HB', 'AOH_HB');
define('CTR_AOH_SU', 'AOH_SU');
define('CTR_AOH_RC', 'AOH_RC');
define('CTR_MG_SETTING', 'MG_SETTINGS');
define('CTR_OPPONENT_HEROES', 'OPPONENT_HEROES');
define('CTR_FULL_CAT_SYNC', 'FCS');
define('CTR_BK', 'user_backup');
define('CTR_RST', 'user_restore');
define('CTR_UU', 'update_user');
define('CTR_CU', 'clone_user');
define('CTR_PN', 'PN');
define('CTR_BS', 'boosts');
define('CTR_CS_DP', 'CS_DP');
define('CTR_TR', 'TR');
define('CTR_R_EMAIL', 'Recover_email');
define('CTR_AT_TU', 'Tutorial_battle');
define('CTR_PS', 'Player_stats');

//------------------------------------
// Error Codes
//------------------------------------
define('ERROR_FEATURE_COMMING_SOON', 'comming_soon');
define('ERR_BOWSER_REQ', '(brq)');
define('ERR_SDB', 'E-1');
define('ERR_ARGS', 'E-2');
define('ERR_INVALID_USER', 'E-3');
define('ERR_FALSE_INVENTORY', 'E-4');
define('ERR_INVALID_ITEM', 'E-5');
define('ERR_INVALID_ITEM_TYPE', 'E-6');
define('ERR_USER_DATA_UPDATE', 'E-7');
define('ERR_INVENTORY_UPDATE', 'E-8');
define('ERR_INVALID_STAMP', 'E-9');
define('ERR_INVALID_STACK_COUNT', 'E-10');
define('ERR_INVALID_INV_INSERT', 'E-11');
define('ERR_INVALID_PURCHASE', 'E-12');
define('ERR_INVALID_INV_INSTANCE', 'E-13');
define('ERR_INVALID_INV_DEL', 'E-14');
define('ERR_NO_SYSTEM_INFO', 'E-15');
define('ERR_NO_EXP_INFO', 'E-16');
define('ERR_NO_UPDATES_FOUND', 'E-18');
define('ERR_READING_INV', 'E-19');
define('ERR_EDITING_ITEM', 'E-20');
define('ERR_READING_UID', 'E-21');
define('ERR_READING_DEVICE_INFO', 'E-22');
define('ERR_READING_DEFAULT_USER', 'E-23');
define('ERR_REGISTERING_USER', 'E-24');
define('ERR_NAME_AVAILABILITY', 'E-25');
define('ERR_ADDING_NAME', 'E-26');
define('ERR_ADDING_NAME_CACHE', 'E-27');
define('ERR_SETTING_STORED', 'E-28');
define('ERR_SETTING_UNSTORED', 'E-29');
define('ERR_INVALID_EXPANSION_ITEM', 'E-30');
define('ERR_INVALID_EXPANSION_PUR', 'E-31');
define('ERR_SEARCHING_RAID_LIST', 'E-32');
define('ERR_READING_RAID_SETTINGS', 'E-33');
define('ERR_BATTLE_INVENTORY', 'E-34');
define('ERR_UPDATING_ITEM_STATS', 'E-35');
define('ERR_READING_PVP_SETTINGS', 'E-36');
define('ERR_READING_REP_CAP', 'E-37');
define('ERR_SETTING_PVP_SCORE', 'E-38');
define('ERR_DAMAGING_PROPERTY', 'E-39');
define('ERR_READING_NEWS', 'E-40');
define('ERR_LEVEL_UP', 'E-41');
define('ERR_READING_GEN_SETTINGS', 'E-42');
define('ERR_CLEARING_HIT_LIST', 'E-43');
define('ERR_GETTING_HIT_LIST', 'E-44');
define('ERR_NOT_ENOUGH_MONEY', 'E-45');
define('ERR_MIN_BOUNTY', 'E-46');
define('ERR_SETTING_BOUNTY', 'E-48');
define('ERR_GETTING_BOUNTY', 'E-49');
define('ERR_DEPOSITING', 'E-50');
define('ERR_WITHDRAWING', 'E-51');
define('ERR_NOT_ENOUGH_POINTS', 'E-52');
define('ERR_SETTING_SKILL', 'E-53');
define('ERR_TICK', 'E-54');
define('ERR_INVALID_LEVEL_UP', 'E-55');
define('ERR_FARM_PLOT_SETTINGS', 'E-56');
define('ERR_SAVING_APP_RECEIPT', 'E-57');
define('ERR_APP_RECEIPT_EXISTS', 'E-58');
define('ERR_APP_VERIFY_FAIL', 'E-59');
define('ERR_THUG_SETTINGS', 'E-60');
define('ERR_INVALID_JOB', 'E-61');
define('ERR_INVALID_ZONE', 'E-62');
define('ERR_INCOMPLETE_ITEMS', 'E-63');
define('ERR_INSUFFICIENT_MOB_COUNT', 'E-64');
define('ERR_INSUFFICIENT_ENERGY', 'E-65');
define('ERR_READING_JOBS', 'E-66');
define('ERR_INSUFFICIENT_LEVEL', 'E-67'); //this code is ALSO used to indicate that a vip-specific item is tier-locked for the purchaser
define('ERR_INVALID_LOOT', 'E-68');
define('ERR_UNSETTING_LOOT', 'E-69');
define('ERR_SETTING_LOOT', 'E-70');
define('ERR_SETTING_JOB', 'E-71');
define('ERR_READING_BONUS_DATA', 'E-72');
define('ERR_SETTING_BONUS_DATA', 'E-73');
define('ERR_READING_DEFAULT_INV', 'E-74');
define('ERR_SAVING_ITEM', 'E-75');
define('ERR_SEARCH_DEPTH_QUERY', 'E-76');
define('ERR_AUTHORIZATION', 'E-77');
define('ERR_PAPAYA_INVITE', 'E-78');
define('ERR_READING_QUESTS', 'E-79');
define('ERR_QUEST_ALREADY_COMPLETED', 'E-80');
define('ERR_FACEBOOK_INVITE', 'E-81');
define('ERR_FACEBOOK_REGISTER', 'E-82');
define('ERR_READING_OP_FLAG', 'E-83');
define('ERR_SETTING_OP_FLAG', 'E-84');
define('ERR_READING_OPS_LIST', 'E-85');
define('ERR_CLEARING_OP', 'E-86');
define('ERR_CLEARING_CHAT', 'E-87');
define('ERR_SAVING_CHAT_LOG', 'E-88');
define('ERR_ALREADY_IN_GUILD', 'E-89');
define('ERR_NAME_TOO_LONG', 'E-90');
define('ERR_DESC_TOO_LONG', 'E-91');
define('ERR_READING_SETTINGS', 'E-92');
define('ERR_CREATING_GUILD', 'E-93');
define('ERR_NAME_TOO_SHORT', 'E-95');
define('ERR_DESC_TOO_SHORT', 'E-96');
define('ERR_CACHE_LOCK_TIMEOUT', 'E-97');
define('ERR_READING_GUILD_LIST', 'E-98');
define('ERR_READING_GUILD_INFO', 'E-99');
define('ERR_READING_GUILD_MEMBERS', 'E-100');
define('ERR_UPDATING_GUILD', 'E-101');
define('ERR_READING_PMS', 'E-102');
define('ERR_REQUEST_SPAM', 'E-103');
define('ERR_READING_GUILD_REQUESTS', 'E-104');
define('ERR_SETTING_GUILD_REQUESTS', 'E-105');
define('ERR_DELETING_GUILD_REQUEST', 'E-106');
define('ERR_READING_GUILD_MEMBER_INFO', 'E-107');
define('ERR_READING_SUPPLY_INFO', 'E-108');
define('ERR_INVALID_SUPPLY_TYPE', 'E-109');
define('ERR_ADDING_SUPPLY', 'E-110');
define('ERR_DELETING_SUPPLIES', 'E-111');
define('ERR_READING_ITEM_LIST', 'E-112');
define('ERR_SETTING_WAR', 'E-113');
define('ERR_READING_WAR_IDS', 'E-114');
define('ERR_CLOSING_WAR', 'E-115');
define('ERR_OPENING_BATTLE', 'E-116');
define('ERR_READING_WAR_DATA', 'E-117');
define('ERR_DELETING_WAR', 'E-118');
define('ERR_SELF_CHALLENGE', 'E-119');
define('ERR_INVALID_WAR_ID', 'E-120');
define('ERR_USER_BANNED', 'E-121');
define('ERR_INVALID_REQUEST', 'E-122');
define('ERR_TICKER_DATA', 'E-123');
define('ERR_EMAIL', 'E-124');
define('ERR_DOMAIN', 'E-125');
define('ERR_INSUFFICIENT_EXP', 'E-126');
define('ERR_READING_HERO_INVENTORY', 'E-127');
define('ERR_SETTING_CHAMPION', 'E-128');
define('ERR_INVALID_EVO', 'E-129');
define('ERR_SAVING_HERO', 'E-130');
define('ERR_DELETING_HERO', 'E-131');
define('ERR_MAX_ENHANCEABLE', 'E-132');
define('ERR_READ_ENHANCMENT_SETTING', 'E-133');
define('ERR_READ_ENHANCMENT_TABLE', 'E-134');
define('ERR_INVALID_ENHANCEMENT', 'E-135');
define('ERR_INVALID_HERO', 'E-136');
define('ERR_INVALID_JSON', 'E-137');
define('ERR_INVALID_FEEDER_GRADE', 'E-138');
define('ERR_INVALID_FEEDER_LEVEL', 'E-139');
define('ERR_HERO_DATA_UPDATE', 'E-140');
define('ERR_INVALID_FEEDER_RARITY', 'E-141');
define('ERR_READING_HEROES', 'E-142');
define('ERR_READ_SKILL_SETTING', 'E-143');
define('ERR_SAVING_BATTLE', 'E-144');
define('ERR_READING_BATTLE', 'E-145');
define('ERR_UPDATING_USER', 'E-146');
define('ERR_READING_HUB', 'E-147');
define('ERR_INVALID_HUB', 'E-148');
define('ERR_DOING_JOB', 'E-149');
define('ERR_PROCESSING_CHEST', 'E-150');
define('ERR_COMPLETING_HUB', 'E-151');
//define('ERR_READING_HUB', '-152');
define('ERR_LOGGING_DIAMONDS', 'E-153');
define('ERR_INVALID_STEP_NUM', 'E-154');
define('ERR_INVALID_BATTLE', 'E-155');
define('ERR_INVALID_BOUNTY_BATTLE', 'E-156');
define('ERR_EMPTY_CRATE', 'E-157');
define('ERR_READING_CRATE_ITEMS', 'E-158');
define('ERR_CRATE_MAXED_OUT', 'E-159');
define('ERR_INVALID_BATTLE_STEP', 'E-160');
define('ERR_TOO_MANY_FEEDER_CARDS', 'E-161');
define('ERR_READING_USER_DATA', 'E-162');
define('ERR_READING_PVP_SCORE', 'E-163');
define('ERR_READING_RAID_TABLE', 'E-164');
define('ERR_DELETING_INFO', 'E-165');
define('ERR_INVALID_HASH', 'E-166');
define('ERR_READING_HASH_SETTING', 'E-167');
define('ERR_INVALID_STAMINA', 'E-168');

define('ERR_NOT_ENOUGH_HEALTH', 'E-169');
define('ERR_ATLEAST_ONE_MOB_SIZE', 'E-170');
define('ERR_ATLEAST_ONE_CHAMPION_HERO', 'E-171');

define('ERR_GUILD_ID_NOT_SET', 'E-172');                 // "Guild id's are not set (attacker or defender)"
define('ERR_INVALID_WAR', 'E-173');                      // "(Invalid War)"
define('ERR_CANNOT_ATTACK_IN_YOUR_OWN_GUILD', 'E-174');  // "You can not attack someone in your own guild"
define('ERR_ATTACKER_NOT_IN_EITHER_GUILD', 'E-175');     // "Attacker not in either guild"
define('ERR_DEFENDER_NOT_IN_EITHER_GUILD', 'E-176');     // "Defender not in either guild"
define('ERR_WAR_NOT_STARTED', 'E-177');                  // "War status is not 'started'"
define('ERR_DUPLICATE_CALL', 'E-178');
define('ERR_UPDATING_USER_RAID_DOC', 'E-179');
define('ERR_UPDATING_USER_LEADERBOARD_DOC', 'E-180');
define('ERR_UPDATING_GUILD_LEADERBOARD_DOC', 'E-181');
define('ERR_INVALID_LANGUAGE_SELECTED', 'E-182');

define('ERR_INVALID_PASSWORD', 'E-183');
define('ERR_THUG_WAR_PURCHASE', 'E-184');
define('ERR_THUG_LIMIT', 'E-185');
define('ERR_LIMIT_CHECK', 'E-186');

define('ERR_SERVER_OFFLINE', 'E-187');
define('ERR_ENERGY', 'E-188');
define('ERR_CANNOT_CLEAN_DURING_WAR', 'E-189');
define('ERR_YOU_CANNOT_RENAME', 'E-190');
define('ERR_GET_RANK_INFO', 'E-191');
define('ERR_FALSE_INVENTORY_HERO', 'E-192');
define('ERR_INVALID_TR', 'E-193');
define('ERR_READING_DATA', 'E-194');
define('ERR_INVALID_CROP_AVAILABLE_COUNT', 'E-195');

define('ERR_ZERO', '(0)');
define('ERR_ONE', '(1)');
define('ERR_TWO', '(2)');
define('ERR_THREE', '(3)');
define('ERR_FOUR', '(4)');
define('ERR_FIVE', '(5)');
define('ERR_SIX', '(6)');
define('ERR_SEVEN', '(7)');
define('ERR_EIGHT', '(8)');
define('ERR_NINE', '(9)');
define('ERR_TEN', '(10)');

define('ERR_CHAT', 'E-204');
define('ERR_SELF_ATTEMPT', 'E-205');
define('ERR_ITEM', 'E-206');
define('ERR_FLD_WILT_TIME', 'E-207');
define('ERR_FARM_PLOT_LIMIT', 'E-208');
define('ERR_IS_TICKER_ON_DUPLICATE', 'E-209');
define('ERR_CANNOT_RENAME', 'E-210');

define('ERR_INVALID_TOKEN', 'E-211');           //"Invalid token"
define('ERR_CONNECT_APNS', 'E-212');            //"Problem connecting to APNS server"
define('ERR_SEND_PUSH_MSG_APNS', 'E-213');      //"Problem sending message to APNS server"
define('ERR_SEND_PUSH_MSG_GOOGLE', 'E-214');    //"Problem sending push notification to google server"
define('ERR_INVALID_BOOST_ITEM', 'E-215');      //"Wrong Boost Item, Only Stamina and Energy are allowed"
define('ERR_INVALID_BOOST_QUANTITY', 'E-216');  //"Boost Quantity is not set for the item"

define('ERR_READING_SETTING_GUILD', 'E-217');
define('ERR_SETTING_ATTACKER_WAR_PLAYER', 'E-218');
define('ERR_SETTING_DEFENDER_WAR_PLAYER', 'E-219');
define('ERR_EMAIL_HISTORY', 'E-220');
define('ERR_DELETING_EMAIL_INFO', "E-221");
define('ERR_DOESNT_HAVE_CROP', "E-222");

define('ERR_READ_ITEM_TYPE_COUNT', "E-223");
define('ERR_READ_NON_STACKED_ITEM_COUNT', "E-224");
define('ERR_GIVE_ITEM', "E-225");
define('ERR_PRUNE_CHECK', "E-226");
define('ERR_UPDATING_PM_LAST_READ_TIME', "E-227");
define('ERR_WAR_STATUS', "E-228");
define('ERR_INVALID_HEADER', 'E-229');
define('ERR_USER_NOT_A_VIP', 'E-230'); //occurs if dp controller detects a non-vip user trying to purchase a vip-specific item! 
define('ERR_MAX_BOUNTY', 'E-231');
define('ERR_GUILD_STATUS_CLOSE', 'E-232');
define('ERR_SETTINGS', 'E-233');
define('ERR_INVALID_GENDER', 'E-234');
define('ERR_INVALID_APPLE_PRODUCT_ID', 'E-235');
define('ERR_NOT_ALLOWED', 'E-236');
define('ERR_INVALID_NAME_LENGTH', 'E-237');
define('ERR_INVALID_SESSIONID', 'E-238');
define('ERR_INVALID_DEVICEID', 'E-239');
define('ERR_INVALID_CROP', 'E-240');
define('ERR_UPDATING_RAID_POPULATION', 'E-241');

//==================
// In App Errors
define('TRANSACTION_FRAUD_MESSAGE', 'E-501');
define('INVALID_TRANSACTION_ID_MESSAGE', 'E-502');
define('APPLE_SERVER_ERROR_MESSAGE', 'E-503');
define('FAILED_TO_DECODE_MESSAGE', 'E-504');
define('FAILED_TO_VERIFY', 'E-505');
define('AMAZON_SERVER_ERROR_MESSAGE', 'E-506');

//==================
//define('ERR_STR_', "E-1000");
define('ERR_STR_USER_IS_BANNED', "E-1001");
define('ERR_STR_INVALID_REQUEST', "E-1002");
define('ERR_STR_GUILD_ID_NOT_SET', "E-1003");
define('ERR_STR_CANNOT_ATTACK_IN_YOUR_OWN_GUILD', "E-1004");
define('ERR_STR_ATTACKER_NOT_IN_EITHER_GUILD', "E-1005");
define('ERR_STR_DEFENDER_NOT_IN_EITHER_GUILD', "E-1006");
define('ERR_STR_WAR_NOT_STARTED', "E-1007");
define('ERR_STR_BANNED_SERIOUSLY', "E-1008");
define('ERR_STR_BANNED_FOR_SOME_INTERVAL', "E-1009");
define('ERR_STR_YOU_MUST_AT_LEVEL', "E-1010");
//define('ERR_STR_YOU_MUST_AT_LEVEL_PART_2', "E-1011");
define('ERR_STR_SOMTHING_WENT_WRONG', "E-1012");
define('ERR_STR_USER_HAS_BANNED', "E-1013");
define('ERR_STR_YOU_HAVE_REPORTED', "E-1014");
define('ERR_STR_YOU_HAVE_USED_YOUR_REPORTS_TODAY', "E-1015");
define('ERR_STR_REPORTS_LEFT_TODAY', "E-1016");
define('ERR_STR_REPORT_LEFT_TODAY', "E-1017");
define('ERR_STR_USER_HAS_BANNED_AND_REPORTED_BY', "E-1018");
define('ERR_STR_TOP_BOUNTY_HUNTER', "E-1019");
define('ERR_STR_TOP_PILLAGER', "E-1020");
define('ERR_STR_TOP_FARMER', "E-1021");
define('ERR_STR_TOP_SABOTEURS', "E-1022");
define('ERR_STR_PLEASE_VISIT_NEWS_SECTION', "E-1023");
define('ERR_STR_INVALID_DATA', "E-1024");
define('ERR_STR_INVALID_RECEIPT', "E-1025");
//define('ERR_STR_LOOT_FROM_LAST_WAR', "E-1026");
//define('ERR_STR_COINS_HAVE_PLACED_IN_YOUR_VAULT', "E-1027");
define('ERR_STR_LOOT_FROM_LAST_WAR_YOU_GAINED_GOLD', "E-1028");
define('ERR_STR_LOOT_FROM_LAST_WAR_YOU_GAINED_GOLD_GEMS', "E-1029");
define('ERR_STR_LOOT_FROM_LAST_WAR_YOU_GAINED_GEMS', "E-1030");
define('ERR_STR_LOOT_FROM_LAST_WAR_HAS_DISTRIBUTED', "E-1031");
define('ERR_STR_WAR_CHEST_LOOT', "E-1032");
define('ERR_STR_COOL_DOWN_IN_EFFECT', "E-1033");
define('ERR_STR_ALREADY_DECLARED_A_WAR', "E-1034");
define('ERR_STR_CHALLENGE_FAILED', "E-1035");
define('ERR_STR_ILLEGAL_OPERATION', "E-1036");
define('ERR_STR_ALLIANCE_ALREADY_AT_WAR', "E-1037");
define('ERR_STR_ALLIANCE_ALREADY_HAS_NOT_ENOUGH_MEMBERS', "E-1038");
define('ERR_STR_PROTECTION_IN_EFFECT', "E-1039");
define('ERR_STR_ALLIANCE_HAS_RECENTLY_BEEN_ATTACKED', "E-1040");
define('ERR_STR_ALLIANCE_IS_TOO_WEAK', "E-1041");
define('ERR_STR_ALLIANCE_IS_TOO_STRONG', "E-1042");
define('ERR_STR_NOT_ENOUGH_MONEY', "E-1043");
define('ERR_STR_YOUR_GUILD_DECLARED_A_WAR_ON', "E-1044");
define('ERR_STR_PREPARE_FOR_BATTLE', "E-1045");
define('ERR_STR_TOTAL_WPS_UPDATED_AFTER_A_MIN', "E-1046");
define('ERR_STR_SYSTEM', "E-1047");
define('ERR_STR_DECALARED_A_WAR_ON_YOU', "E-1048");
define('ERR_STR_PREPARE_FOR_WAR', "E-1049");
define('ERR_STR_YOU_HAVE_BEEN_REMOVED_FROM_ALLIANCE', "E-1050");
define('ERR_STR_REMOVE_FROM_ALLIANCE', "E-1051");
define('ERR_STR_HAS_KICKED_OUT_OF_THE_ALLIANCE', "E-1052");
define('ERR_STR_HAS_LEFT_ALLIANCE', "E-1053");
define('ERR_STR_YOU_HAVE_BEEN_APPOINTED_NEW_LEADER', "E-1054");
define('ERR_STR_ALLIANCE_LEADER_APPOINTMENT', "E-1055");
define('ERR_STR_IS_NEW_OWNER_OF_ALLIANCE', "E-1056");
define('ERR_STR_PROMOTION_IN_ALLIANCE', "E-1057");
define('ERR_STR_PROMOTION_IN_ALLIANCE_MESSAGE', "E-1058");
define('ERR_STR_DEMOTION_IN_ALLIANCE', "E-1059");
define('ERR_STR_DEMOTION_IN_ALLIANCE_MESSAGE', "E-1060");
define('ERR_STR_HAS_PROMOTED', "E-1061");
define('ERR_STR_HAS_DEMOTED', "E-1062");
define('ERR_STR_ALLIANCE_HAS_BEEN_DISBANDED', "E-1063");
define('ERR_STR_ALLIANCE_DISBANDED', "E-1064");
define('ERR_STR_REQUEST_TO_JOIN_ALLIANCE', "E-1065");
define('ERR_STR_JOIN_REQUEST_DENIED', "E-1066");
define('ERR_STR_YOU_HAVE_ACCEPTED_INTO', "E-1067");
define('ERR_STR_ALLIANCE', "E-1068");
define('ERR_STR_WELCOME_TO_ALLIANCE', "E-1069");
define('ERR_STR_HAS_JOINED_ALLIANCE', "E-1070");
define('ERR_STR_YOUR_ALLIANCE_HAS_ACCEPTED', "E-1071");
define('ERR_STR_CHALLENGE_PREPARE_FOR_WAR', "E-1072");
define('ERR_STR_HAS_ACCEPT_CHALLENGE_PREPARE_FOR_WAR', "E-1073");
define('ERR_STR_YOUE_ALLIANCE_HAS_CHALLENGED', "E-1074");
define('ERR_STR_TO_WAR', "E-1075");
define('ERR_STR_ALLIANCE_HAS_BEEN_CHALLENGED_TO_WAR_BY', "E-1076");
define('ERR_STR_WAR_CHALLENGE', "E-1077");
define('ERR_STR_ALLIANCE_HAS_TRIUMPHED', "E-1078");
define('ERR_STR_WE_HAVE_WON_WAR_AGAINST', "E-1079");
define('ERR_STR_TIME_TO_CELEBRATE', "E-1080");
define('ERR_STR_ALLIANCE_HAS_BEEN_DEFEATED', "E-1081");
define('ERR_STR_WE_LOST_WAR_AGAINST', "E-1082");
define('ERR_GIFT_LIMIT_PER_PERSON', 'E-1083');
define('ERR_SUPPLY_LIMIT_PER_PERSON', 'E-1084');
define('ERR_OFFER', 'E-1085');
define('ERR_EMAIL_AVAILABILITY', 'E-1086');
define('ERR_STR_JOIN_REQUEST_DENIED_MSG', "E-1087");

//==================
define("LANG_EMAIL_GREETING", 'L1');
define("LANG_EMAIL_PURPOSE", 'L2');
define("LANG_EMAIL_USERNAME", 'L3');
define("LANG_EMAIL_RECOVERY_PIN", 'L4');
define("LANG_EMAIL_THANKS", 'L5');
define("LANG_EMAIL_AVIL_ARTS", 'L6');
define("LANG_EMAIL_IGNORE_ACTION", 'L7');
define("LANG_EMAIL_IGNORE_RESPOND", 'L8');
define("LANG_EMAIL_DATA_HEADING", 'L9');
define("LANG_EMAIL_OOPS", 'L10');
define("LANG_EMAIL_PLEASE_FOLLOW", 'L11');
define("LANG_EMAIL_VERIFICATION_THANKS", 'L12');
define("LANG_EMAIL_USE_THIS_ADDRESS", 'L13');
define("LANG_EMAIL_FORGOT_MY_PIN", 'L14');
define("LANG_EMAIL_SNS_USERNAME", 'L15');
define("LANG_EMAIL_RECOVERY_PINCODE", 'L16');

define("LANG_EMAIL_HAVE_REQUESTED", 'L17');
define("LANG_EMAIL_PLEASE_CLICK", 'L18');
define("LANG_EMAIL_BROKEN_LINK", 'L19');
define("LANG_EMAIL_MAKE_THIS_REQUEST", 'L20');
define("LANG_EMAIL_DO_NOT_RESPOND", 'L21');
define("LANG_EMAIL_SHARD_HAVE_REQUESTED", 'L22');
define("LANG_EMAIL_RECOVER_SUBJECT", 'L23');
define("LANG_EMAIL_VERIFY_SUBJECT", 'L24');
define("LANG_EMAIL_SINCERELY", 'L25');

define("LANG_EMAIL_PAGE_TITLE_TEXT_SUCCESS", 'L26');
define("LANG_EMAIL_PAGE_BODY_TEXT_SUCCESS", 'L27');
define("LANG_EMAIL_PAGE_TITLE_TEXT_FAIL", 'L28');
define("LANG_EMAIL_PAGE_BODY_TEXT_FAIL", 'L29');

//==================

define('ENGLISH_EMAIL', 'lang_english_email');
define('CHINESE_EMAIL', 'lang_chinese_email');

//==================
// PVP SETTINGS
define('RAID_INDEX_LIMIT', 5000);
define('MAX_NEWS_ITEMS', 20);
define('MAX_SOCIAL_NEWS_ITEMS', 20);

define('SDB_PUT_RETRIES_LIMIT', 50);
define('DEFENSE_OPS_LIMIT', 25);

//==================
// CMS INDEXES
//define('CMD_EDIT_ITEM', 2);
//define('COM_COMMAND_TYPE', 1);
//define('COM_ITEM_ID', 2);
//define('COM_ITEM_TYPE', 102);
//define('COM_UNLOCK_LEVEL', 104);
//define('COM_COINS', 112);
//define('COM_DIAMONDS', 113);
//define('COM_ATTACK', 114);
//define('COM_DEFENSE', 115);
//define('COM_REPUTATION', 116);
//define('COM_ABILITY_CODE', 117);
//define('COM_MAP_SIZE', 120);
//define('COM_BOOST_COUNT', 121);
//define('COM_BOOST_CODE', 122);
//define('COM_LOOT_PROBABILITY', 126);
//define('COM_MATURITY_TIME', 127);
//define('COM_INCOME', 128);
//define('COM_EXPERIENCE', 129);
//define('COM_WILT_TIME', 141);
//define('COM_CRATE_CODE', 142);
//define('COM_ARMY_CAPACITY', 193);
//define('COM_ENERGY', 194);
//define('COM_QUANTITY', 195);
//define('COM_MASTERY_SKILL_SET', 197);
//define('COM_ATTEMPT_COUNT_SET', 198);
//define('COM_SPAWNABLE', 199);
//==================
// CACHE OBJECTS
define('CACHE_PREFIX', "sns_");
define('CACHE_SYSTEM_INFO', CACHE_PREFIX . "1");
define('CACHE_USER_DATA', CACHE_PREFIX . "2");
define('CACHE_TICK_SETTINGS', CACHE_PREFIX . "4");
define('CACHE_USER_NEWS', CACHE_PREFIX . "5");
define('CACHE_UID_BY_NAME', CACHE_PREFIX . "6");
define('CACHE_PVP_SETTINGS', CACHE_PREFIX . "7");
define('CACHE_GENERAL_SETTINGS', CACHE_PREFIX . "8");
define('CACHE_USER_PVP_DATA', CACHE_PREFIX . "9");
define('CACHE_RAIDS_TABLE', CACHE_PREFIX . "10");
define('CACHE_USER_BOUNTY', CACHE_PREFIX . "11");
define('CACHE_REP_TABLE', CACHE_PREFIX . "12");
define('CACHE_DEFAULT_USER', CACHE_PREFIX . "13");
define('CACHE_DEFAULT_INVENTORY', CACHE_PREFIX . "14");
define('CACHE_ITEM_STATS', CACHE_PREFIX . "15");
define('CACHE_USER_SAVE_PIN', CACHE_PREFIX . "16");
define('CACHE_EXP_INFO', CACHE_PREFIX . "17");
define('CACHE_FARM_PLOT_LIMIT', CACHE_PREFIX . "18");
define('CACHE_FARM_PLOT_INC_LEVEL', CACHE_PREFIX . "19");
define('CACHE_THUG_LIMIT', CACHE_PREFIX . "20");
define('CACHE_THUG_PRICE', CACHE_PREFIX . "21");
define('CACHE_BOUNTY_FEE', CACHE_PREFIX . "22");
define('CACHE_SELF_INVENTORY', CACHE_PREFIX . "23");
define('CACHE_UPDATES', CACHE_PREFIX . "24");
define('CACHE_AD_OFFER_SETTINGS', CACHE_PREFIX . "25");
define('CACHE_DAILY_BONUS_DATA', CACHE_PREFIX . "26");
define('CACHE_JOB_INFO', CACHE_PREFIX . "27");
define('CACHE_ZONE_INFO', CACHE_PREFIX . "28");
define('CACHE_ZONE_JOB_COUNT', CACHE_PREFIX . "29");
define('CACHE_USER_JOBS', CACHE_PREFIX . "30");
define('CACHE_ITEM_ID', CACHE_PREFIX . "31");
define('CACHE_SPY_DATA', CACHE_PREFIX . "32");
define('CACHE_MOB_ID', CACHE_PREFIX . "33");
define('CACHE_SPY_INVENTORY', CACHE_PREFIX . "34");
define('CACHE_USER_SORTED_JOBS', CACHE_PREFIX . "35");
define('CACHE_TUTORIAL_UID', CACHE_PREFIX . "36");
define('CACHE_PAPAYA_INFO', CACHE_PREFIX . "37");
define('CACHE_LEADER_BOARD_INFO', CACHE_PREFIX . "38");
define('CACHE_PID_TO_UID', CACHE_PREFIX . "39");
define('CACHE_USER_QUEST_KEY', CACHE_PREFIX . "40");
define('CACHE_USER_QUEST_LOG', CACHE_PREFIX . "41");
define('CACHE_QUEST_COMPLETED', CACHE_PREFIX . "42");
define('CACHE_FBID_TO_UID', CACHE_PREFIX . "43");
define('CACHE_UID_TO_FBID', CACHE_PREFIX . "44");
define('CACHE_USER_SOCIAL_NEWS', CACHE_PREFIX . "45");
define('CACHE_IGNORE_INVITES', CACHE_PREFIX . "46");
define('CACHE_INVITE_USER_INFO', CACHE_PREFIX . "47");
define('CACHE_HERO_DATA', CACHE_PREFIX . "48");
define('CACHE_IGNORE_PAPAYA_INVITES', CACHE_PREFIX . "49");
define('CACHE_OPS_LIST', CACHE_PREFIX . "50"); //(use KOH prefix)
define('CACHE_CHAT_CHANNEL', CACHE_PREFIX . "51");
define('CACHE_USER_HERO_DATA', CACHE_PREFIX . "52");
define('CACHE_PM', CACHE_PREFIX . "53");
define('CACHE_FBNAME_TO_UID', CACHE_PREFIX . "54");
define('CACHE_CHAT_BAN', CACHE_PREFIX . "55");
define('CACHE_CHAT_REPORT', CACHE_PREFIX . "56");
define('CACHE_CHAT_ANNOUNCE', CACHE_PREFIX . "57");
define('CACHE_CHAT_STAMP', CACHE_PREFIX . "58");
define('CACHE_CHAT_PROFILE', CACHE_PREFIX . "59");
define('CACHE_CHAT_BAN_VOTES', CACHE_PREFIX . "60");
define('CACHE_CHAT_BAN_LIST', CACHE_PREFIX . "62");
define('CACHE_CHAT_ANNOUNCE_STAMP', CACHE_PREFIX . "63");
define('CACHE_CHAT_SYSTEM_COUNTER', CACHE_PREFIX . "64");
define('CACHE_GUILD_INFO', CACHE_PREFIX . "65");
define('CACHE_GUILD_REQUESTS', CACHE_PREFIX . "66");
define('CACHE_GUILD_RANKS', CACHE_PREFIX . "67");
define('CACHE_GUILD_SETTINGS', CACHE_PREFIX . "68");
define('CACHE_GUILD_LIST', CACHE_PREFIX . "69");
define('CACHE_GUILD_LOCK_LIST', CACHE_PREFIX . "70");
define('CACHE_GUILD_LOCK_GUILD_INFO', CACHE_PREFIX . "71");
define('CACHE_GUILD_LOCK_REQUESTS', CACHE_PREFIX . "72");
define('CACHE_GUILD_REQUEST_STAMP', CACHE_PREFIX . "73");
define('CACHE_GUILD_MEMBER', CACHE_PREFIX . "74");
define('CACHE_GUILD_LOCK_MEMBER', CACHE_PREFIX . "75");
define('CACHE_GUILD_MEMBER_IDS', CACHE_PREFIX . "76");
define('CACHE_GUILD_LOCK_MEMBER_IDS', CACHE_PREFIX . "77");
define('CACHE_GUILD_PM', CACHE_PREFIX . "78");
define('CACHE_GUILD_SUPPLY_SETTINGS', CACHE_PREFIX . "79");
define('CACHE_GUILD_SENDER_SUPPLIES', CACHE_PREFIX . "80");
define('CACHE_GUILD_LOCK_SENDER_SUPPLIES', CACHE_PREFIX . "81");
define('CACHE_GUILD_RECEIVER_SUPPLIES', CACHE_PREFIX . "82");
define('CACHE_GUILD_LOCK_RECEIVER_SUPPLIES', CACHE_PREFIX . "83");
define('CACHE_DAILY_SUPPLY_AUDIT', CACHE_PREFIX . "84");
define('CACHE_CHAT_PRIVATE_MESSAGES', CACHE_PREFIX . "85");
define('CACHE_GUILD_WAR_IDS', CACHE_PREFIX . "86");
define('CACHE_GUILD_WAR_DATA', CACHE_PREFIX . "87");
define('CACHE_GUILD_LOCK_WAR_IDS', CACHE_PREFIX . "88");
define('CACHE_GUILD_LOCK_WAR_DATA', CACHE_PREFIX . "89");
define('CACHE_GUILD_WAR_PLAYERS', CACHE_PREFIX . "90");
define('CACHE_GUILD_LOCK_WAR_PLAYERS', CACHE_PREFIX . "91");
define('CACHE_GUILD_GLOBAL_WARS', CACHE_PREFIX . "92");
define('CACHE_GUILD_LOCK_GLOBAL_WARS', CACHE_PREFIX . "93");
define('CACHE_CHAT_SAVED_TIME', CACHE_PREFIX . "94");
define('CACHE_CHAT_DATA', CACHE_PREFIX . "95");
define('CACHE_GUILD_NAME', CACHE_PREFIX . "96");
define('CACHE_THUG_COUNT', CACHE_PREFIX . "97");
define('CACHE_BUFFERED_MOB_SIZE', CACHE_PREFIX . "98");
define('CACHE_MAX_REPORT_LIMIT', CACHE_PREFIX . "99");
define('CACHE_GUILD_WAR_AUTOWIN_TIMESTAMP', CACHE_PREFIX . "100");

//guild refactoring .....
define('CACHE_BUFFER_BATTLES_LOST', CACHE_PREFIX . "101");
define('CACHE_SELF_WAR_PLAYER', CACHE_PREFIX . "102");
define('CACHE_WAR_PLAYERS_ID_SET', CACHE_PREFIX . "103");
define('CACHE_TICKER_WAR_IDS', CACHE_PREFIX . "104");

define('CACHE_GUILD_GLOBAL_WARS_HISTORY', CACHE_PREFIX . "105");
define('CACHE_USER_EMAIL', CACHE_PREFIX . "106"); // register email
//defence attack
define('CACHE_PVP_ATTACK_EQ', CACHE_PREFIX . "107");
define('CACHE_PVP_DEFENSE_EQ', CACHE_PREFIX . "108");
define('CACHE_STMINA_REFILL', CACHE_PREFIX . "109");
define('CACHE_RECOVERY_ATTEMPT_EXPIRY', CACHE_PREFIX . "110");  //recover email

define('CACHE_FARMING_LB', CACHE_PREFIX . "111");
define('CACHE_OPS_LB', CACHE_PREFIX . "112");
define('CACHE_EVENT_BOUNTY_HUNTER', CACHE_PREFIX . "113");
define('CACHE_L_WAR_RESET_SKILL_LIMIT', CACHE_PREFIX . "114");

define('CACHE_MAC_BAN', CACHE_PREFIX . "115");
define('CACHE_REG_EMAIL_SENT_FLAG', CACHE_PREFIX . "116");
define('CACHE_EVENT_OPS_S', CACHE_PREFIX . "117");

define('CACHE_QUEST_GIFT_DAY_COUNTER', CACHE_PREFIX . "118");
define('CACHE_CRATES', CACHE_PREFIX . "119");
define('CACHE_CRATE_SETTINGS', CACHE_PREFIX . "120");

//==================
//cb docment names and constants
define("DB_HOST_1", " ");
define("DB_HOST_2", " ");
define("DB_HOST_3", " ");
define("DB_HOST_4", " ");
define("DB_HOST_5", " ");

define('USER_WAR_INFO', "war_info");
//==================
// User Docs
define('USERS', "user_");
define('USER_NAME_CACHE', 'name_cache_user_');
define('USER_EMAIL_CACHE', 'email_cache_user_');
define('USERS_PRIVATE', "user_private_");
define('USERS_PUBLIC', "user_public_");
define('USER_SESSION', "user_session_");
define('USER_INVENTORY', "inventory_" . USERS);
define('USER_HERO_INVENTORY', "inventory_heroes_" . USERS);
define('USER_OPS', "ops_" . USERS);
define('JOBS', "jobs_" . USERS);
define('USER_GUILD_INFO', "guild_info_" . USERS);
define('ITEM', "sns_item_");
define('ITEMS_DOC', "sns_items_doc_");
define('QUEST', "quest_" . USERS);
define('GUILD_MESSAGES', "messages_guild_");
define('USER_MESSAGES', "messages_" . USERS);
define('USER_RAID_DOC', "raid_doc_" . USERS);
define('USER_LEADERBOARD_DOC', "leaderboard_doc_" . USERS);
define('USER_CROPS_SEED_COUNT_DOC', 'crop_seed_count_doc_' . USERS);
define('USER_FB_INVITES', USERS . 'invites_fb_');
define('PAPAYA_INVITE', 'invite_papaya_');
define('NEWS_USER', 'news_' . USERS);
define('BETA_REWARD_USER', 'koh_beta_rewards_' . USERS);
define('EVENT', 'koh_event_ops_');
define('USER_EVENT', 'koh_event_data_' . USERS);
define('DAILY_BONUSES_USER', 'koh_daily_bonuses_' . USERS);
define('USER_CURRENT_NAME_CACHE', 'current_name_cache');
define('USER_CACHE_FLAGS', 'cache_flags_' . USERS);
define('SYSTEM_FLAGS', 'system_');
define('USER_BACKUP', "user_backup_");
define('USER_PREMIUM_TRANSACTIONS', "premium_transactions_" . USERS);
define("USER_BATTLE", "battle_" . USERS);
define("USER_DAILY_BONUS", "daily_bonuses_" . USERS);
define("USER_SUPPLIES", "koh_supplies_");

define("USER_GIFTS_DOC", "sns_gifts_" . USERS);
define("USER_SUPPLIES_DOC", "sns_supplies_" . USERS);
define('USER_EMAIL_HISTORY', "email_history_" . USERS);
define('THRESHOLD_LOG', "threshold_log_");

define('STORES_DOC', "stores");
define('STORE_INAPP_PRODUCT_DOC', "store_");
define('IN_APP_PRODUCT_CATEGORIES', "product_categories");

//==================
//define('USER_APPLE_RECEIPTS', 'apple_receipts_' . USERS);
//define('USER_ANDROID_RECEIPTS', 'android_receipts_' . USERS);
//define('APPLE_TRANSACTION', 'apple_tansaction_');
//define('ANDROID_TRANSACTION', 'android_tansaction_');
//define('TRANSACTION', 'tansaction_');
//define('FAILED_TRANSACTION', 'failed_' . TRANSACTION);
//define('USER_APPLE_RECEIPT_FAILED', 'failed_apple_receipt_' . USERS);
//define('USER_ANDROID_RECEIPT_FAILED', 'failed_android_receipt_' . USERS);
//define('DAPA_LOG', 'dapa_log_');
//define('TRANSACTION', 'tansaction_');
//define('FAILED_TRANSACTION', 'failed_' . TRANSACTION);

define('USER_RECEIPTS', 'receipts_' . USERS);
define('TRANSACTION', 'tansaction_');
define('USER_RECEIPT_FAILED', 'failed_receipt_' . USERS);

define('RECEIPT', 'receipt');
define('IS_SANDBOX', 'isSandbox');
define('TRANSACTION_ID', 'transaction_id');
define('PRODUCT_ID', 'productId');
define('PURCHASESTATE', 'purchaseState');
define('STORE_ID', 'storeId');
define('PRODUCT_GROUP', 'inAppProductGroup');
define('DETAILS', 'details');

define('SIGNATURE', 'signature');
define('ANDROID_INAPP_PUBLIC_KEY', 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAv/Nq6zKKsLDXinxT2q8MUVYHqXMqKWJdukQULI+ZHkbpWkCr8Db8dC14uDR10RWaweq8dxwQyFtC9ZIBD6YVEfmZOU61pP0mdANi/8nZFlZ5SNYi0j4sgVWI/fBWhWB0POH+0WI2MMd+jMg7Z59QvxWDHwAz6rCB4RLLxP90cAP/y5UrSL8v/Y2+Z33uA/kLAgRtHk4t7/P+MpGUbemhIKNycE0NzDD5t3EtcUFydDjPZWIFd2A6hiA6T50fleheRwUdayJVjBb/uyACkgNKpBgg2MyB2ENmdZ/bzfF3bQNcGnHPFfJOmO8h6OFg3Difs1tPpC+RKN8alllSta0ClQIDAQAB');

define('TOKEN_ID', 'token_id');
define('AMAZON_DEVELOPER_SECRET', '2:QFaQHXrtoT6IwNI0BmMdGZdGGAL-pheL_CQlVaKsvoBHF_wDK4RSWqio0haGlgvA:-OpwNr9PIvKRUwjDUyjFNA==');

define('STORE_IOS', 'AppleStore');
define('STORE_GOOGLE', 'GooglePlay');
define('STORE_AMAZON', 'AmazonStore');

/* ================== */
define('GUILD', 'koh_guild_');
define('GUILD_WARS', 'koh_wars_');
define('GUILD_WAR_PLAYER', 'koh_war_player_');
define('GUILD_NAME_CACHE', 'guild_name_cache_');
define('GUILD_LEADERBOARD_DOC', 'leaderboard_doc_guild_');
define('GUILD_MEMBER_LIST', 'koh_guild_member_list_');

//==================
// Settings and System
define('SETTINGS_PREFIX', "sns_");
define('GP_DEFAULT_USER', "sns_default_user");
define('DEFAULT_USER_INV1', "sns_default_inv1");
define('DEFAULT_USER_INV2', "sns_default_inv2");
define('GENERAL_SETTINGS', 'sns_general_settings');
define('EXPERIENCE', 'sns_exp');
define('REPUTATION', 'sns_reputation');
define('FARM_PLOTS', 'sns_farm_plots');
define("THUG_LIMITS", 'sns_thug_limits');
define("THUG_PRICE", 'sns_thug_price');
define("BOUNTY_FEE", 'sns_bounty_fees');
define('PVP_SETTINGS', 'sns_pvp_settings');
define('RAIDS_TABLE', 'sns_raids_table');
define('RAIDS_LIST_LEVEL_VARIANCE', 'sns_raids_list_level_variance');
define('GUILD_RANKS', 'sns_guild_ranks');
define('GUILD_SETTINGS', 'sns_guild_settings');
define('GUILD_SUPPLY_SETTINGS', 'sns_guild_supply_settings');
define('CRATE_SETTINGS', 'sns_crate_settings');
define('SYSTEM', 'sns_system_settings');
define('UPDATE_PACKAGES', 'sns_updates');
define('HERO_SKILL_SETTINGS', 'sns_skill_settings');
define('HERO_ENHANCEMENT_SETTINGS', 'sns_enhancement_settings');
define('HERO_ENHANCEMENT_TABLE', 'sns_enhancement_table');
define('HERO_EVOLUTION_SETTINGS', 'sns_evolution_settings');
define('HERO_EVOLUTION_TABLE', 'sns_evolution_table');
define('SUMMON_BAG_SETTINGS', 'sns_summon_bag_settings');
define('ALTAR_OF_HEROES_SETTINGS', 'sns_altar_of_heroes_settings');
define('CHEST_SETTINGS', 'sns_chest_settings');
define('SERVER_SETTINGS', 'sns_server_settings');
define('GAME_SETTINGS', 'settings_'); //used for backup game settings in CB. e.g (settings_sns_altar_of_heroes_settings_20140604)
define('ENABLED_LANGUAGES', 'sns_enabled_languages');
define('ERRORS', 'koh_errors');
define('ANALYTICS', 'koh_analytics');
define('TUTORIAL_BATTLE_DOC', "tutorial_battle");
define('WAR_PULLER_IPS', "war_puller_ips");
define('HIT_LIST', "hitlist_");
//define('OFFERS_SETTINGS', "sns_offers_settings");
define('ITEMS_LIST', "sns_list_items");
define('VIP_TIERS', 'vip_tiers');
define('PREMIUM_ITEMS_LIST', 'sns_list_premium_items');
define('HONOR_POINT_BRACKET', "sns_honor_point_brackets");
define('RAIDS_MATCH_MAKING_SETTING', 'sns_raids_match_making_setting');
define('RAID_BRACKET_POPULATION', "raid_bracket_population_");

//test public
define('TEST_PUBLISH_PREFIX', 'testpublish_');
define('TEST_PUBLISH_UPDATE_PACKAGES', TEST_PUBLISH_PREFIX . UPDATE_PACKAGES);
define('TEST_PUBLISH_CATALOG', TEST_PUBLISH_PREFIX . "catalog_");

define('BAN_LIST', 'ban_list_');
define('QUESTION', 'question_');
define('ANSWER', QUESTION . 'answer_');
define('MAP_SUBMISSION', 'map_submissions_');
define('SAMPLE_DOC_PREFIX', 'sample_');
define('DESIGN_DOC_PREFIX', '');
define('CHAT_DESIGN_DOC', DESIGN_DOC_PREFIX . 'chat');
define('CHAT', 'chat_');
define('GUILD_DOC', 'guild');
define('LEADERBOARD_DOC', 'leaderboard');
define('ONLINE_USER_DOC', 'online_user');
define('CHAT_LOG', CHAT . 'log_'); // will never be used
define('CHAT_REPORT_LOG', CHAT_LOG . 'report_');
define('CHAT_GLOBAL_CHANNEL', CHAT . 'global_');
define('CHAT_GUILD_CHANNEL', CHAT . 'guild_');
define('CHAT_PRIVATE_CHANNEL', CHAT . 'private_');

define('PENDING_EMAIL_VERIFY', "pending_email_verify_");
define('PENDING_EMAIL_DOC_EXPIRY', "86400");
define('REGISTERED_EMAIL', 'registered_email_');


//couchbase views and design docs
define('CB_DOC_ITEMS', "items");  // view document
define('CB_VIEW_ITEMS', "query_catalog"); // view name
define('CB_VIEW_CRATES', "get_crate_list"); // view name
define('CB_VIEW_HEROES', "get_heroes");
define('CB_VIEW_APPLE_PRODUCT_ID', "by_apple_product_id"); // view name
define('CB_DOC_USERS', "user");  // view document
define('CB_VIEW_BY_FBID', "by_fbid"); // view name
define('CB_DOC_PAPAYA', "papaya");  // view document
define('CB_VIEW_INVITES_BY_PID', "invites_by_pid"); // view name
define('CB_VIEW_INVITES_BY_UID', "invites_by_uid"); // view name
define('CB_VIEW_ALL_INVITES_BY_UID', "all_invites_by_uid"); // view name
define('CB_VIEW_HUB_JOBS', "get_hub_jobs");
define('CB_VIEW_ZONE_HUBS', "get_zone_hubs");
define('CB_DOC_PIN', "pin");  // view document
define('CB_DOC_RAID', "raid_list");  // view document
define('CB_DOC_SUPPLIES', "supplies");  // view document
define('CB_DOC_WAR_PLAYERS', "war_players");  // view document
define('CB_DOC_WARS', "wars");  // view document
define('CB_GUILD_WAR_IDS', "get_guild_war_ids");  // view document
define('CB_VIEW_GET_GLOBAL_WAR_IDS', "get_global_war_ids");  // view document
define('CB_VIEW_GET_WAR_ID_GUILD_BY_NAME', "get_war_id_by_guild_name");  // view document
define('CB_DOC_USERS_PRIVATE', "user_private");  // view document
define('CB_VIEW_CHAT_ADMINS', "chat_admins"); // view name
define('CB_VIEW_ONLINE_USERS', "get_online_user"); // view name
define('CB_VIEW_BY_PIN_AND_USERNAME', "by_pin_and_username"); // view name
define('CB_VIEW_BY_USERNAME', "by_name"); // view name

define('CB_DOC_USERS_GUILD_INFO', "user_guild_info");  // view document
define('CB_DOC_USERS_PUBLIC', "user_public");  // view document
define('CB_VIEW_GUILD_MEMBER_IDS', "get_guild_member_ids"); // view name
define('CB_VIEW_HIT_LIST', "get_hit_list"); // view name
define('CB_VIEW_RAID_LIST', "get_raid_list_v.2.0"); // view name
define('CB_VIEW_RAID_LIST_1', "get_raid_list_1"); // view name
define('CB_VIEW_RAID_LIST_2', "get_raid_list_2"); // view name
//define('CB_DOC_CHAT_GLOBAL', "chat_global");  // view document
//define('CB_VIEW_CHAT_GLOBAL', "chat_global"); // view name
//define('CB_DOC_CHAT_GUILD', "chat_guild");  // view document
//define('CB_VIEW_CHAT_GUILD', "chat_guild"); // view name
//define('CB_DOC_CHAT_PRIVATE', "chat_private");  // view document
//define('CB_VIEW_CHAT_PRIVATE', "chat_private"); // view name
define('CB_DOC_CATALOG', "catalog");  // view document

define('CB_DOC_GAME_SETTING', "game_settings");  // view document
define('CB_VIEW_GAME_SETTING', "game_settings");  // view name
// CACHE LOCKING
define('CACHE_LOCK_RETRIES', 600);
define('CACHE_LOCK_SLEEP', 15000);
define('CACHE_LOCK_EXPIRY', 10);

define('MAX_INS_RETRIES', 10);
define('MAX_INS_RETRIES_DELAY', 2000);
define('MAX_DEL_RETRIES', 10);

define('DO_ADD', 1);
define('DO_SUBTRACT', 2);
define('DO_REPLACE', 3);
define('DO_DELETE', 4);
define('DO_DELTA', 5);
define('DO_HONOR', 6);

define('COUCHEBASE_CAS_RETRIES_MAX', 500);

//// NEW INV SYSTEM
define('SDB_INV_PREFIX', 'koh_i');
define('SDB_ROW_COUNT', 'rows');
define('SDB_ATTRIBUTE_COUNT', 'attributes');
define('SDB_DOMAIN_SIZE_GB', 'size_gb');
define('SDB_USERS_TABLE', 'koh_users');
define('SDB_BATCH_PUT_RETRIES', 50);
define('SDB_SHARD_DOMAIN_COUNT', 30);

///////////////////// OPTIMIZATION SDB FOR TRACKING
define('TRACK_BOX_USAGE', false);
define('TRACK_TIME_USAGE', false); //profiler setting

define("CACHE_MEM_COUNTER", "counter");
define("CACHE_WAR_TICKER", CACHE_PREFIX . "ticker_counter");
define('VALID_IPS', 'valid_ips');

/* End of file constants.php */
/* Location: ./application/config/constants.php */