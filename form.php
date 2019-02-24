<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ระบบเสนอหัวข้อโครงงาน</h1>
    <form action="project_data.php" method="get">
    <fieldset id="select1">
        <legend>ส่วนที่1 ข้อมูลผู้จัดทำโครงงาน</legend>
        <label for="sid">รหัสนักศึกษา</label><input type="text" name="sid">
        <label for="fname">ชื่อ</label><input type="text" name="fname">
        <label for="lname">นามสกุล</label><input type="text" name="lname"><br>
        <label for="program">สาขาวิชา</label>
        <select name="program">
            <option value="1">วิทยาการคอมพิวเตอร์</option>
            <option value="2">เทคโนโลยีสารสนเทศ</option>
            <option value="3">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
            <option value="4">ภูมิสารสนเทศ</option>
            <option value="5">คอมพิวเตอร์ศึกษา</option>
        </select>
        <label for="faculty">คณะ</label>
        <select name="faculty">
            <option value="1">วิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ</option>
            <option value="2">ครุศาสตร์</option>
        </select>
        <label for="std_year">ชั้นปี</label>
            <input type="radio" name="std_year" value="1"><label>ปี 1</label>
            <input type="radio" name="std_year" value="2"><label>ปี 2</label>
            <input type="radio" name="std_year" value="3"><label>ปี 3</label>
            <input type="radio" name="std_year" value="4"><label>ปี 4</label>
            <input type="radio" name="std_year" value="5"><label>ปี 5</label>
    </fieldset>
    <fieldset id="select2">
        <legend>ส่วนที่2 ข้อมูลโครงงาน</legend>
        <label for="prj_name_th">ชื่อโครงงาน(ไทย)</label><textarea name="prj_name_th"></textarea>
        <label for="prj_name_en">ชื่อโครงงาน(อังกฤษ)</label><textarea name="prj_name_en"></textarea>
        <label for="prj_type">ประเภทโครงงาน</label>
        <select name="prj_type">
            <option value="1">โครงงานพัฒนาสื่อเพื่อการศึกษา</option>
            <option value="2">โครงงานพัฒนาเครื่องมือ</option>
            <option value="3">โครงงานประเภทจำลองทฤษฎี</option>
            <option value="4">โครงงานประเภทการประยุกต์ใช้งาน</option>
            <option value="5">โครงงานพัฒนาเกม</option>
        </select>
        <label>เครื่องมือที่ใช้พัฒนา</label>
            <input type="checkbox" name="prj_tool[]" value="1"><label>HTML</label>
            <input type="checkbox" name="prj_tool[]" value="2"><label>CSS</label> 
            <input type="checkbox" name="prj_tool[]" value="3"><label>JavaScript</label>
            <input type="checkbox" name="prj_tool[]" value="4"><label>Bootstrap</label>
            <input type="checkbox" name="prj_tool[]" value="5"><label>Materrial Design</label>
            <input type="checkbox" name="prj_tool[]" value="6"><label>Angular</label>
            <input type="checkbox" name="prj_tool[]" value="7"><label>Resact</label>
            <input type="checkbox" name="prj_tool[]" value="8"><label>PHP</label>
            <input type="checkbox" name="prj_tool[]" value="9"><label>MySQL</label>
            <input type="checkbox" name="prj_tool[]" value="10"><label>ChartJS</label><br>
        <label>อาจารย์ที่ปรึกษา</label>
        <select name="prj_advisor">
            <option value="1">ผศ.บุญเรือน พฤกษศิธร</option>
            <option value="2">ผศ.ทิพย์วรรณ ฟูเฟื่อง</option>
        </select>
        </fieldset><br>
        <input type="submit" value="Go...">
    </form>
</body>
</html>