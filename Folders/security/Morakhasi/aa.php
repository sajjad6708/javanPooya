<!DOCTYPE html>
<html>

<head>
       <title>Persian Date Sample</title>
       <meta charset="utf-8" />
</head>

<body> 
       salammmm
       <script>
function calculateTimeDifference(time1, time2) {
  // تبدیل دو ساعت به نمایش 24 ساعته
  const time1Parts = time1.split(':');
  const time2Parts = time2.split(':');
  const hours1 = parseInt(time1Parts[0], 10);
  const hours2 = parseInt(time2Parts[0], 10);
  const minutes1 = parseInt(time1Parts[1], 10);
  const minutes2 = parseInt(time2Parts[1], 10);

  // محاسبه اختلاف بین دو ساعت
  let hourDiff = hours2 - hours1;
  let minuteDiff = minutes2 - minutes1;

  // مدیریت اختلاف منفی
  if (hourDiff < 0) {
    hourDiff = 24 + hourDiff;
  }
  if (minuteDiff < 0) {
    minuteDiff = 60 + minuteDiff;
    hourDiff--; // کاهش یک ساعت
  }

  // تبدیل نتیجه به رشته
  const diffString = `${hourDiff.toString().padStart(2, '0')}:${minuteDiff
    .toString()
    .padStart(2, '0')}`;

  return diffString;
}

// مثال استفاده از تابع
const time1 = '14:30';
const time2 = '16:00';

const diff = calculateTimeDifference(time1, time2);
console.log(diff); // خروجی: 06:15

       </script>

</body>

</html>