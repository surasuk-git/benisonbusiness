function time_m(id)
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
        m = date.getMinutes('');
        if(m<10)
        {
                m = "0"+m;
        }
        result = m;
        document.getElementById(id).innerHTML = result;
        setTimeout('time_m("'+id+'");','1000');
        return true;
}