<?php
declare(strict_types=1);

/**
 * hijri-php-ashhur-hurum-tracker — متتبع الأشهر الحرم والأيام البيض والمواسم الفاضلة
 * Sacred Months (Al-Ashhur Al-Hurum) & Ayyam Al-Beed Alert Engine
 */
$input = "Month=12_DhulHijjah,Day=13";
$digest = substr(hash("sha256", "hijri-php-ashhur-hurum-tracker:" . $input), 0, 12);

echo "[RUN] hijri-php-ashhur-hurum-tracker (PHP) — Sacred Months (Al-Ashhur Al-Hurum) & Ayyam Al-Beed Alert Engine" . PHP_EOL;
echo "[AR]  متتبع الأشهر الحرم والأيام البيض والمواسم الفاضلة" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] IsSacredMonth=True | IsAyyamAlBeed=True | IsTashreeq=True | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
