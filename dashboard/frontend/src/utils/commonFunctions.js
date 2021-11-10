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
  const date = new Date(timestamp?.replace(/-/g, "/"));
  return (
    date.getDate() + ", " + months[date.getMonth()] + ", " + date.getFullYear()
  );
};

export const dateMonth = (timestamp) => {
  const date = new Date(timestamp?.replace(/-/g, "/"));
  return (
    date?.getDate() + " " + months[date?.getMonth()]?.slice(0,3)
  );
}


