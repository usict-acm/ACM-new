const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

export const formatDate = (timestamp) => {
  const date = new Date(timestamp);
  return (
    date.getDate() + ", " + months[date.getMonth()] + ", " + date.getFullYear()
  );
};
