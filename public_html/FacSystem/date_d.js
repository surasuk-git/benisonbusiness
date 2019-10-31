function date_d(id)
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
        if(d<10)
        {
                d = "0"+d;
        }
        result = d;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_d("'+id+'");','1000');
        return true;
}