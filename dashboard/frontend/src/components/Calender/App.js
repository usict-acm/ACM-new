
import './App.css';
import { useState } from 'react';
import Calendar from 'react-calendar';
import { fetchAllEvents } from 'api/event'
import  { useEffect } from 'react'
import moment from 'moment'
import { Link } from 'react-router-dom'
import { Card, CardBody } from 'reactstrap'


function App() {
  const [data, setData] = useState([])

  useEffect(() => {
    const fetchData = async () => {
      const allEvents = await fetchAllEvents()
      if (allEvents) {
        setData(allEvents);
      }
    }
    fetchData()
  }, [])
  console.log(data);

  const [date, setDate] = useState(new Date());

  return (
    <div className='app'>

    <div className='calendar-container'>
      <Calendar
        onChange={setDate}
        value={date}

   
      />
    </div>
    
    


    <div className="times">

   {data.map((event) => {

    if (moment(event?.startDate).format('DD MMM, YY')===moment(date).format('DD MMM, YY')) {
    return <p>
    <Link to={`/event/${event.eventId}`} key={event.eventId}>
              <Card className='dashboardCard shadow-lg mb-2 marginup'>
                <CardBody className='dashboardCard__container'>
                  <div className='dashboardCard__date'>
                    <h2>{moment(event?.startDate).format('DD MMM, YY')}</h2>
                  </div>
                  <div className='dashboardCard__contents'>
                    <h2 id='bold'>
                      <span>{event.eventName}</span>
                    </h2>
                  </div>
                </CardBody>
              </Card>
            </Link>
   </p>  ;
  } 
     }) }
   
 </div>
  </div>
  );
}

export default App;
