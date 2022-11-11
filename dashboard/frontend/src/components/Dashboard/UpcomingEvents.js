import  { useEffect, useState } from 'react'
import { Card, CardBody } from 'reactstrap'
import { fetchAllEvents } from 'api/event'
import { Link } from 'react-router-dom'
import '../../assets/css/dashboard/recentblog.css'
import moment from 'moment'
import App from 'components/Calender/App'
const UpcomingEvents = () => {
  const [data, setData] = useState([])

  useEffect(() => {
    const fetchData = async () => {
      const allEvents = await fetchAllEvents()
      if (allEvents) {
        setData(allEvents.filter((event) => new Date() < new Date(event.startDate)))
      }
    }
    fetchData()
  }, [])

  console.log(data);

  return (
    <>
 <App/>
    </>
  )
}

export default UpcomingEvents
