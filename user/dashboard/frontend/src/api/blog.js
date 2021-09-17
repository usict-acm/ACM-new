import { setBlogs } from 'redux/slices/blogSlice'

export const fetchUserBlogs = (body) => (dispatch) => {
  fetch(
    process.env.REACT_APP_BASE_URL + '/user/dashboard/backend/api.php?q=blogs',
    {
      method: 'POST',
      body: JSON.stringify(body),
    }
  )
    .then((res) => res.json())
    .then((res) => {
      if (res.message === 'success') {
        dispatch(setBlogs(res.blogs))
      } else {
        alert(res.error || 'process failed')
      }
    })
    .catch((err) => console.log(err.message))
}

export const addBlog = (body) => (dispatch) => {
  fetch(
    process.env.REACT_APP_BASE_URL +
      '/user/dashboard/backend/api.php?q=createBlog',
    {
      method: 'POST',
      body: JSON.stringify(body),
    }
  )
    .then((res) => res.json())
    .then((res) => {
      if (res.message === 'success') {
        dispatch(setBlogs(res.blogs))
      } else {
        alert(res.error || 'process failed')
      }
    })
    .catch((err) => console.log(err.message))
}