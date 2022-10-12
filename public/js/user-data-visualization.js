jQuery(() => {
    plotGraph(
        {
            url: '/user/charts', 
            id: 'foodCanvas',
            label: 'Food that you Donations Per Month',
            q: 'food_donations'
    });
    plotGraph(
        {
            url: '/user/charts', 
            id: 'clothesCanvas',
            label: 'Clothes that you Donations Per Month',
            q: 'clothes_donations'
    });
    plotGraph(
        {
            url: '/user/charts', 
            id: 'shoesCanvas',
            label: 'Shoes that you Donations Per Month',
            q: 'shoes_donations'
    });
    plotGraph(
        {
            url: '/user/charts', 
            id: 'fundsCanvas',
            label: 'Funds that you Donations Per Month',
            q: 'payments'
    });
})
function plotGraph(setting = {})
{
    $.ajax({
        url: window.location.origin + setting.url,
        type: 'GET',
        data: {q: setting.q, specific: 1},

        success: function (response)
        {
          var data = JSON.parse(response);
         
            var months = [];
            var donation = [];
            //console.log(data.length)
             for (let index = 0; index < data.length; index++) {
                 months.push(data[index].month)
                 donation.push(data[index].donation)
             }
            //  console.log(donation);
             let date = new Date();

            var chartdata = {
                labels: months,
                datasets: [
                    {
                        label: setting.label + ' for year ' + date.getFullYear(),
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#800080',
                        hoverBorderColor: '#666666',
                        data: donation
                    }
                ]
            };

            var graphTarget = $("#"+setting.id);

            return new Chart(graphTarget, {
                type: 'bar',
                data: chartdata
            });
        }
    });
}