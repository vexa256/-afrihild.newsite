(()=>{"use strict";var e={init:function(){!function(){var e=document.getElementById("kt_docs_fullcalendar_timezone_selector"),t=document.getElementById("kt_docs_fullcalendar_timezone"),i=moment().startOf("day"),r=i.format("YYYY-MM"),n=i.clone().subtract(1,"day").format("YYYY-MM-DD"),o=i.format("YYYY-MM-DD"),s=i.clone().add(1,"day").format("YYYY-MM-DD"),a=[{title:"All Day Event",start:r+"-01",description:"Toto lorem ipsum dolor sit incid idunt ut",className:"fc-event-danger fc-event-solid-warning"},{title:"Reporting",start:r+"-14T13:30:00",description:"Lorem ipsum dolor incid idunt ut labore",end:r+"-14",className:"fc-event-success"},{title:"Company Trip",start:r+"-02",description:"Lorem ipsum dolor sit tempor incid",end:r+"-03",className:"fc-event-primary"},{title:"ICT Expo 2017 - Product Release",start:r+"-03",description:"Lorem ipsum dolor sit tempor inci",end:r+"-05",className:"fc-event-light fc-event-solid-primary"},{title:"Dinner",start:r+"-12",description:"Lorem ipsum dolor sit amet, conse ctetur",end:r+"-10"},{id:999,title:"Repeating Event",start:r+"-09T16:00:00",description:"Lorem ipsum dolor sit ncididunt ut labore",className:"fc-event-danger"},{id:1e3,title:"Repeating Event",description:"Lorem ipsum dolor sit amet, labore",start:r+"-16T16:00:00"},{title:"Conference",start:n,end:s,description:"Lorem ipsum dolor eius mod tempor labore",className:"fc-event-primary"},{title:"Meeting",start:o+"T10:30:00",end:o+"T12:30:00",description:"Lorem ipsum dolor eiu idunt ut labore"},{title:"Lunch",start:o+"T12:00:00",className:"fc-event-info",description:"Lorem ipsum dolor sit amet, ut labore"},{title:"Meeting",start:o+"T14:30:00",className:"fc-event-warning",description:"Lorem ipsum conse ctetur adipi scing"},{title:"Happy Hour",start:o+"T17:30:00",className:"fc-event-info",description:"Lorem ipsum dolor sit amet, conse ctetur"},{title:"Dinner",start:s+"T05:00:00",className:"fc-event-solid-danger fc-event-light",description:"Lorem ipsum dolor sit ctetur adipi scing"},{title:"Birthday Party",start:s+"T07:00:00",className:"fc-event-primary",description:"Lorem ipsum dolor sit amet, scing"},{title:"Click for Google",url:"http://google.com/",start:r+"-28",className:"fc-event-solid-info fc-event-light",description:"Lorem ipsum dolor sit amet, labore"}],d=new FullCalendar.Calendar(t,{timeZone:"local",headerToolbar:{left:"prev,next today",center:"title",right:"dayGridMonth,timeGridWeek,timeGridDay,listWeek"},initialDate:o,navLinks:!0,editable:!0,selectable:!0,dayMaxEvents:!0,eventTimeFormat:{hour:"numeric",minute:"2-digit",timeZoneName:"short"},events:a});d.render(),$(e).on("change",(function(){d.setOption("timeZone","UTC"),d.getEvents().forEach((e=>{e.remove()})),a.forEach((e=>{var t,i;this.value<0?(t=moment(e.start).subtract(this.value.replace(/\D/g,""),"seconds").format(l(e.start)),i=e.end?moment(e.end).subtract(this.value.replace(/\D/g,""),"seconds").format(l(e.end)):t):(t=moment(e.start).add(this.value,"seconds").format(l(e.start)),i=e.end?moment(e.end).add(this.value,"seconds").format(l(e.end)):t),d.addEvent({title:e.title,start:t,end:i})})),d.render()}));const l=e=>e.includes("T")?"YYYY-MM-DDTHH:mm:ss":"YYYY-MM-DD"}()}};KTUtil.onDOMContentLoaded((function(){e.init()}))})();
//# sourceMappingURL=timezone.js.map