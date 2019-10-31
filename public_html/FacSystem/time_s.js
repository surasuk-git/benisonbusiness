function time_s(id)
{
        lang:'th';
        date = new Date;
        year = date.getFullYear();
        years = year + 543;
        month = date.getMonth();
        months = new Array('มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
        d = date.getDate();
        day = date.getDay();
        days = new Array('อาทิตย์', 'จัทนร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์');
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        result = s;
        document.getElementById(id).innerHTML = result;
        setTimeout('time_s("'+id+'");','1000');
        return true;
}