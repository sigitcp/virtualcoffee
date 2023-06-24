//    // Fungsi untuk mengupdate nilai visitor counter pada elemen HTML
//    function updateCounter(elementId, count) {
//     var counterElement = document.getElementById(elementId);
//     counterElement.innerText = count;
//   }

//   // Fungsi untuk mengambil jumlah pengunjung harian, mingguan, bulanan dari localStorage
//   function getCounterFromLocalStorage(counterType) {
//     var counter = localStorage.getItem(counterType);
//     return counter ? parseInt(counter) : 0;
//   }

//   // Fungsi untuk mengupdate visitor counter
//   function updateVisitorCounters() {
//     var currentTimestamp = new Date().getTime();
//     var oneDayMillis = 24 * 60 * 60 * 1000;
//     var oneWeekMillis = 7 * oneDayMillis;
//     var oneMonthMillis = 30 * oneDayMillis;

//     var dailyCount = getCounterFromLocalStorage('dailyCounter');
//     var weeklyCount = getCounterFromLocalStorage('weeklyCounter');
//     var monthlyCount = getCounterFromLocalStorage('monthlyCounter');

//     // Mengupdate jumlah pengunjung harian
//     if (!localStorage.getItem('lastVisitTimestamp') || (currentTimestamp - parseInt(localStorage.getItem('lastVisitTimestamp'))) >= oneDayMillis) {
//       dailyCount += 1;
//       localStorage.setItem('dailyCounter', dailyCount);
//       localStorage.setItem('lastVisitTimestamp', currentTimestamp);
//     }

//     // Mengupdate jumlah pengunjung mingguan
//     if (!localStorage.getItem('weeklyStartTimestamp') || (currentTimestamp - parseInt(localStorage.getItem('weeklyStartTimestamp'))) >= oneWeekMillis) {
//       weeklyCount = dailyCount;
//       localStorage.setItem('weeklyCounter', weeklyCount);
//       localStorage.setItem('weeklyStartTimestamp', currentTimestamp);
//     }

//     // Mengupdate jumlah pengunjung bulanan
//     if (!localStorage.getItem('monthlyStartTimestamp') || (currentTimestamp - parseInt(localStorage.getItem('monthlyStartTimestamp'))) >= oneMonthMillis) {
//       monthlyCount = dailyCount;
//       localStorage.setItem('monthlyCounter', monthlyCount);
//       localStorage.setItem('monthlyStartTimestamp', currentTimestamp);
//     }

//     // Mengupdate jumlah pengunjung online (pengunjung dengan IP unik)
//     var onlineVisitors = JSON.parse(localStorage.getItem('onlineVisitors')) || [];
//     var currentIP = '';

//     // Mendapatkan alamat IP pengunjung melalui API pihak ketiga
//     fetch('https://api.ipify.org?format=json')
//       .then(response => response.json())
//       .then(data => {
//         currentIP = data.ip;
//         var isNewVisitor = !onlineVisitors.includes(currentIP);

//         if (isNewVisitor) {
//           onlineVisitors.push(currentIP);
//           localStorage.setItem('onlineVisitors', JSON.stringify(onlineVisitors));
//         }

//         // Mengupdate tampilan visitor counter
//         updateCounter('daily-counter', dailyCount);
//         updateCounter('weekly-counter', weeklyCount);
//         updateCounter('monthly-counter', monthlyCount);
//         updateCounter('online-counter', onlineVisitors.length);
//       });
//   }

//   // Fungsi untuk memperbarui visitor counter setiap detik
//   setInterval(updateVisitorCounters, 1000);

// Fungsi untuk mengupdate nilai visitor counter pada elemen HTML
function updateCounter(elementId, count) {
    var counterElement = document.getElementById(elementId);
    if (counterElement) {
      counterElement.innerText = count;
    }
  }
  
  // Fungsi untuk mengambil jumlah pengunjung harian, mingguan, bulanan dari localStorage
  function getCounterFromLocalStorage(counterType) {
    var counter = localStorage.getItem(counterType);
    return counter ? parseInt(counter) : 0;
  }
  
  // Fungsi untuk mengupdate visitor counter
  function updateVisitorCounters() {
    var currentTimestamp = new Date().getTime();
    var oneDayMillis = 24 * 60 * 60 * 1000;
    var oneWeekMillis = 7 * oneDayMillis;
    var oneMonthMillis = 30 * oneDayMillis;
  
    var dailyCount = getCounterFromLocalStorage('dailyCounter');
    var weeklyCount = getCounterFromLocalStorage('weeklyCounter');
    var monthlyCount = getCounterFromLocalStorage('monthlyCounter');
  
    // Mengupdate jumlah pengunjung harian
    if (!localStorage.getItem('lastVisitTimestamp') || (currentTimestamp - parseInt(localStorage.getItem('lastVisitTimestamp'))) >= oneDayMillis) {
      dailyCount += 1;
      localStorage.setItem('dailyCounter', dailyCount);
      localStorage.setItem('lastVisitTimestamp', currentTimestamp);
    }
  
    // Mengupdate jumlah pengunjung mingguan
    if (!localStorage.getItem('weeklyStartTimestamp') || (currentTimestamp - parseInt(localStorage.getItem('weeklyStartTimestamp'))) >= oneWeekMillis) {
      weeklyCount = dailyCount;
      localStorage.setItem('weeklyCounter', weeklyCount);
      localStorage.setItem('weeklyStartTimestamp', currentTimestamp);
    }
  
    // Mengupdate jumlah pengunjung bulanan
    if (!localStorage.getItem('monthlyStartTimestamp') || (currentTimestamp - parseInt(localStorage.getItem('monthlyStartTimestamp'))) >= oneMonthMillis) {
      monthlyCount = dailyCount;
      localStorage.setItem('monthlyCounter', monthlyCount);
      localStorage.setItem('monthlyStartTimestamp', currentTimestamp);
    }
  
    // Mengupdate jumlah pengunjung online (pengunjung dengan IP unik)
    var onlineVisitors = JSON.parse(localStorage.getItem('onlineVisitors')) || [];
    var currentIP = '';
  
    // Mendapatkan alamat IP pengunjung melalui API pihak ketiga
    fetch('https://api.ipify.org?format=json')
      .then(response => response.json())
      .then(data => {
        currentIP = data.ip;
        var isNewVisitor = !onlineVisitors.includes(currentIP);
  
        if (isNewVisitor) {
          onlineVisitors.push(currentIP);
          localStorage.setItem('onlineVisitors', JSON.stringify(onlineVisitors));
        }
  
        // Mengupdate tampilan visitor counter
        updateCounter('daily-counter', dailyCount);
        updateCounter('weekly-counter', weeklyCount);
        updateCounter('monthly-counter', monthlyCount);
        updateCounter('online-counter', onlineVisitors.length);
      });
  }
  
  // Fungsi untuk memperbarui visitor counter setiap detik
  setInterval(updateVisitorCounters, 1000);


//   // Fungsi untuk mereset data visitor counter
// function resetVisitorCounters() {
//     localStorage.removeItem('dailyCounter');
//     localStorage.removeItem('weeklyCounter');
//     localStorage.removeItem('monthlyCounter');
//     localStorage.removeItem('lastVisitTimestamp');
//     localStorage.removeItem('weeklyStartTimestamp');
//     localStorage.removeItem('monthlyStartTimestamp');
//     localStorage.removeItem('onlineVisitors');
//   }
  
//   // Memanggil fungsi resetVisitorCounters() untuk mereset data visitor counter
//   resetVisitorCounters();