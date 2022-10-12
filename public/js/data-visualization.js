jQuery(() => {
    plotGraph(
        {
            url: '/admin/charts', 
            id: 'foodCanvas',
            label: 'Food Donations Per Month',
            q: 'food_donations'
    });
    plotGraph(
        {
            url: '/admin/charts', 
            id: 'clothesCanvas',
            label: 'Clothes Donations Per Month',
            q: 'clothes_donations'
    });
    plotGraph(
        {
            url: '/admin/charts', 
            id: 'shoesCanvas',
            label: 'Shoes Donations Per Month',
            q: 'shoes_donations'
    });
    plotGraph(
        {
            url: '/admin/charts', 
            id: 'fundsCanvas',
            label: 'Funds Donations Per Month',
            q: 'payments'
    });
})
function plotGraph(setting = {})
{
    $.ajax({
        url: window.location.origin + setting.url,
        type: 'GET',
        data: {q: setting.q},

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
                        label: setting.label + ' for year 2021',
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