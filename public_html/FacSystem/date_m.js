function date_m(id)
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
        h = date.getHours();
        if(month<10)
        {
                month = "0"+month;
        }
        result = month;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_m("'+id+'");','1000');
        return true;
}