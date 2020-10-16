const objDOMs = {

	dataInCircle: document.getElementById('data-in-circle'),
	TimeInCircle: document.querySelector('.time-in-circle'),
};

setInterval(function () {
	objDOMs.dataInCircle.textContent = date('date');
	objDOMs.TimeInCircle.textContent = date('timer');
}, 1000);

function date(where) {
	let date, day, month, year, dateOftheMonth, min, sec, hours;

	date = new Date();
	day = date.getDay();
	dateOftheMonth = date.getDate();
	month = date.getMonth();
	year = date.getFullYear();
	min = date.getMinutes();
	sec = date.getSeconds();
	hours = date.getHours();

	// console.log(date);
	let days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
	let months = [
		'Jan',
		'Feb',
		'Mar',
		'Apr',
		'May',
		'Jun',
		'Jul',
		'Aug',
		'Sep',
		'Oct',
		'Nov',
		'Dec',
	];

	let dayToString = () => {
		if (day === 0) {
			return days[day];
		} else {
			return days[day - 1];
		}
	};

	let monthToString = () => {
		return months[month];
	};

	min = min < 10 ? `0${min}` : min;
	sec = sec < 10 ? `0${sec}` : sec;

	let time = () => {
		if (hours < 12) {
			return `${((hours + 11) % 12) + 1}:${min}:${sec} AM`;
		} else {
			return `${((hours + 11) % 12) + 1}:${min}:${sec} PM`;
		}
	};

	// console.log(monthToString());
	// console.log(dayToString());
	// console.log(time());

	if (where === 'list') {
		return `${time()}, ${dayToString()} ${monthToString()} ${dateOftheMonth} ${year}`;
	} else if (where === 'date') {
		return ` ${monthToString()} ${dateOftheMonth} ${year}`;
	} else if (where === 'timer') {
		return `${time()}`;
	}
}



// rating
