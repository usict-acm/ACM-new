import { setBlogs, selectBlogs } from 'redux/slices/blogSlice'

export const addBlog = (body) => (dispatch) => {
    // fetch(
    //     process.env.REACT_APP_BASE_URL + '/user/dashboard/backend/api.php?q=createBlog',
    //     {
    //       method: 'POST',
    //       body: JSON.stringify(body),
    //     }
    //   )
    //     .then((res) => res.json())
    //     .then((res) => {
    //       if (res.message === 'Blogs fetched successfully') {
    //         dispatch(setBlogs(res.blogs))
    //       } else {
    //         alert(res.error || 'Fetch Failed')
    //       }
    //     })
    //     .catch((err) => console.log(err.message))
    //   dispatch(setBlogs(body))
    //   console.log(selectBlogs)
    //   console.log(body)
}
