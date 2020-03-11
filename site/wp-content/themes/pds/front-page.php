<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paulodesa
 */

get_header();
?>

    <main id="main" class="site-main">

        <section id="intro" style="width: 100vw;height: 100vh;position: fixed;z-index:-1;left: 0;top: 0;">
            <div class="centered text-center">
                <p class="sub-heading">Seja bem vindo!</p>
                <h2 class="heading">Em que posso te ajudar?</h2>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 1803.068 1736.29" version="1.1"
                 viewBox="0 0 1803.068 1736.29"
                 style="fill: #7c7676;max-width: 60%;margin: auto; opacity: 0.25;position: fixed; top: 50%;left: 50%;transform: translate(-50%, -50%);z-index: -1">
                <g id="__id26_s8iwug9dm">
                    <path d="m544.45 80.302c7.56-5.075 14.178-13.995 24.407-11.432-5.206 11.458-17.03 17.789-22.942 28.723-30.01 78.625-85.549 81.018-88.446 117.77 22.837-13.289 43.948-29.56 67.466-41.882 7.586-3.532 13.838-9.234 18.547-16.088 53.151-72.119 140.48-86.977 227.51-65.765 4.787 0.549 6.226 4.813 7.351 8.842-13.498 1.883-27.232 1.229-40.678 3.218-53.959 15.914-68.478 87.253-155.81 73.194-12.243 0.366-24.224-3.165-36.388-2.982-26.251 12.959-79.269 46.251-91.611 59.173 8.763 4.709 18.913 3.296 28.462 2.799 14.937-1.805 26.866-11.51 39.893-18.102 43.083-22.453 45.915-16.571 103.62-9.417 20.718 4.186 41.908 0.628 62.809 1.7-0.392 1.282-1.177 3.898-1.57 5.206-11.772 4.133-24.302 4.683-36.493 6.697-24.407 9.104-45.282 26.709-70.814 32.935-49.886 1.099-99.485-6.645-149.32-4.84-33.798 27.572-66.288 57.054-94.174 90.748 20.456 13.076 56.471-26.812 73.064-37.304 14.283-10.542 32.098-14.859 49.599-15.199 88.839-7.812 41.185-1.526 96.215-13.472-0.052 1.727-0.131 5.18-0.157 6.906-10.83 5.232-22.759 7.691-33.615 12.792-20.055 10.957-48.892 44.061-68.486 46.564-146.09 22.524-128.77 15.315-137.7 25.114-28.321 34.787-63.951 90.237-67.884 103.91 29.264-0.474 48.501-51.268 76.857-65.818 35.553-19.864 51.47-9.106 120.23-42.954 0.209 1.674 0.602 5.023 0.785 6.697-10.673 9.862-25.846 13.42-35.734 24.328-23.032 25.287-34.008 46.536-54.7 54.752-128.13 46.473-118.41 39.631-124.76 53.915-16.507 36.545-32.699 73.692-41.908 112.83 22.236 0.807 34.25-51.768 59.251-77.38 26.029-22.523 60.795-30.319 88.576-50.096 8.371-5.807 16.271-12.269 24.695-18.024 0.209 3.427 1.831 7.482-1.308 10.15-8.109 9.339-19.672 15.251-26.63 25.715-13.865 20.928-21.32 46.59-40.207 63.934-35.233 22.735-104.08 63.669-112.43 73.77-8.45 34.609-13.158 69.977-17.553 105.29 17.2-2.124 19.516-51.89 41.646-81.513 21.294-23.962 51.744-36.702 75.156-58.231 5.938-5.467 6.331-15.12 13.891-19.175 0.889 12.033-8.763 20.954-10.987 32.255-15.799 74.634-31.745 69.065-99.145 134.07-6.932 6.906-15.434 12.321-21.085 20.431-1.894 22.761-1.004 92.644 4.996 119.34h4.264c5.049-8.659 9.47-18.286 9.234-28.514 0.364-72.172 14.132-64.155 66.864-122.84 7.926-6.932 10.411-17.422 12.792-27.18 1.125-0.366 3.322-1.073 4.447-1.439 1.439 11.693-5.781 21.869-5.755 33.38-3.816 75.602-12.911 46.519-88.446 168 4.552 38.952 15.382 77.145 27.441 114.47 0.785 4.787 8.58 2.119 8.371-1.988 4.186-20.038-0.602-40.338-2.459-60.324-0.654-6.985-4.107-14.1-1.334-21.058 9.104-33.066 34.348-58.048 48.134-88.838 3.505-6.723-1.125-17.422 6.069-21.582 10.474 133.54 11.947 50.741-45.256 208.68-1.229 4.343-3.819 8.894-2.564 13.498 13.289 37.094 32.098 71.887 51.168 106.23 1.046 0.314 3.113 0.968 4.133 1.308 1.073-11.563 2.276-23.884-2.694-34.74-28.945-67.144-11.129-65.891 13.472-146.7 2.616-9.836-1.256-19.96 1.099-29.822 3.715 5.52 6.697 11.72 6.801 18.521 1.558 22.956 28.857 73.332 15.853 103.78-12.557 34.138-18.626 70.134-26.814 105.42 28.452 45.771 72.587 99.086 84.208 106.94 2.919-29.234-34.781-62.933-35.812-93.991 0.706-29.089 8.711-57.499 10.438-86.51 1.229-9.234-3.636-17.501-4.63-26.447 12.112 5.624 10.699 21.974 17.213 32.098 42.32 63.096 31.52 113.71 25.349 179.53 0.052 3.636-2.145 8.345 1.386 11.092 10.692 10.659 81.637 78.382 95.849 78.008 0.345-24.9-34.919-54.897-50.122-76.308-15.173-28.54-8.005-61.841-12.53-92.5-0.628-9.967-9.077-17.239-9.496-27.232 11.536 8.371 14.885 23.23 25.087 32.83 19.332 19.175 32.752 43.399 43.53 68.198 6.749 21.608 7.56 44.419 11.092 66.655 3.064 48.397 5.639 39.8 19.358 50.383 28.776 17.945 58.127 35.42 89.257 48.971-0.863-3.401-0.209-7.508-2.694-10.228-14.649-17.318-36.362-26.16-52.921-41.201-19.956-27.359-29.921-90.784-38.167-110.63-3.741-6.723-9.548-11.955-13.289-18.678 9.653 0.811 14.519 9.941 20.561 16.271 7.06 8.499 43.098 29.944 63.28 67.178 18.527 41.393 32.335 102.94 48.264 109.22 37.801 16.062 76.883 29.299 116.78 39.135 0.392-1.596 1.177-4.787 1.596-6.357-10.067-16.01-41.584-25.765-70.5-42.091-31.718-17.783-29.627-48.881-52.633-82.717-6.435-10.49-20.875-13.865-24.826-26.238 14.257 1.988 24.512 13.027 36.728 19.594 13.708 8.449 29.325 13.42 42.457 22.811 41.384 33.746 58.362 88.629 100.24 121.82 16.937 4.307 84.856 14.838 97.052 12.661-0.255-20.216-44.077-19.731-76.02-38.821-27.625-18.39-33.118-57.42-63.359-72.828-4.604-2.59-8.685-6.043-11.432-10.569 13.158 1.073 25.009 7.848 37.644 11.327 17.919 6.723 38.167 7.534 54.412 18.416 35.943 24.093 52.45 67.387 87.033 93.023 5.807 2.773 12.74 1.23 19.018 1.753 7.56-0.654 16.35 1.648 22.785-3.479 11.484-7.455 18.416-19.646 27.938-29.142 65.456-84.496 62.609-63.087 110.39-80.414 12.531-4.159 24.721-10.124 37.984-11.484-4.996 9.81-17.108 11.955-24.485 19.463-18.547 18.678-26.447 45.91-47.767 62.208-20.64 14.388-46.8 16.35-68.957 27.468-5.101 1.988-7.769 6.88-10.673 11.17 5.964 4.787 13.498 1.23 20.326 1.203 86.612-10.482 76.63-10.311 88.289-21.242 31.705-31.182 49.546-73.404 80.912-104.87 14.074-14.309 33.877-19.803 50.593-30.083 12.086-6.958 22.837-16.428 36.336-20.692-0.078 1.674-0.235 5.023-0.314 6.697-10.202 8.057-21.503 15.748-27.729 27.546-11.144 17.736-15.853 38.69-27.363 56.217-19.302 31.034-86.305 39.419-92.422 65.556 22.559 2.003 102.06-29.401 124.18-39.161 33.081-46.544 21.233-114.44 99.668-167.11 10.307-6.618 14.1-21.922 27.389-23.57-3.636 8.606-12.452 14.1-14.754 23.36-17.498 65.824-22.473 85.539-35.551 105.34-16.062 14.728-37.042 23.413-51.822 39.71-2.851 3.165-3.61 7.482-4.709 11.458 31.64-11.065 97.354-51.076 103.72-59.513 3.775-12.43 6.054-59.441 12.635-92.134 4.395-21.32 16.245-40.05 27.808-58.179 8.397-13.917 22.366-23.544 30.005-38.01 3.375-6.645 7.534-12.975 13.211-17.867 0.445 1.282 1.334 3.819 1.779 5.101-20.499 26.566-4.117 39.395-16.062 96.215-1.831 10.333-6.409 20.169-13.708 27.781-43.359 47.402-41.329 51.75-42.378 66.995 17.57-5.5 74.858-57.346 97.811-80.911-3.532-15.67-2.407-31.81-5.101-47.584-3.298-47.076-7.488-61.471 15.46-116.31 5.206-13.446 15.853-24.145 19.594-38.219 2.904-6.566 3.008-16.873 11.824-18.233-16.251 37.078 14.911 96.34 2.093 130.04-10.464 25.349-31.287 47.14-33.118 75.523 13.938-4.689 65.204-74.312 83.475-103.25 0.768-16.925-16.002-75.203-17.501-82.56-7.575-35.478-17.669-23.313-6.854-76.778 4.913-24.283 10.181-16.934 17.03-66.21 1.334-0.471 3.95-1.386 5.258-1.831 0.026 8.633-2.407 17.37-0.34 25.924 8.842 28.488 22.34 55.589 28.095 84.993 4.238 25.584-9.13 49.023-17.396 72.253-0.523 8.685-2.537 18.835 2.956 26.317 20.719-33.536 37.984-69.14 52.502-105.79 3.218-5.729-0.759-11.772-2.328-17.318-12.661-32.883-24.616-66.21-41.097-97.392-20.499-32.037-1.975-61.192-4.813-107.96 1.334-0.183 3.976-0.602 5.284-0.811 0.157 5.807-0.078 11.667 0.785 17.422 13.289 34.19 43.373 60.533 49.86 97.523-2.028 18.589-14.958 87.382 3.192 79.604 4.531-13.741 34.337-109.22 25.506-120.67-72.892-113.58-75.738-91.526-83.24-133.75-2.747-11.903-0.549-24.328-3.505-36.205-1.7-9.417-7.037-19.515-2.04-28.776 3.688 9.601 4.918 20.692 12.347 28.409 14.937 16.428 31.758 31.078 46.643 47.558 38.904 47.689 10.821 71.432 30.214 103.12 1.151 2.878 3.139 3.636 5.991 2.25 3.85-18.189 7.668-85.19 4.63-119.34-83.164-85.375-101.21-68.384-119.84-152.48-2.773-11.824-11.249-21.739-11.615-34.217 7.979 5.127 8.711 15.748 16.193 21.372 24.119 21.372 55.694 34.112 75.68 60.193 19.837 30.459 21.324 72.978 37.617 75.052 0.069-32.322-15.701-101.03-15.957-103.54-36.728-27.127-76.778-49.285-114.68-74.607-17.893-18.338-25.244-44-39.998-64.588-8.921-10.045-20.431-17.605-28.488-28.462 1.465-1.491 2.956-2.956 4.447-4.447 59.865 49.613 102.14 43.8 125.1 86.013 8.849 12.446 28.441 62.184 45.413 58.571-10.882-42.248-27.232-83.214-47.323-121.9-35.106-16.245-72.514-27.127-108.72-40.73-8.92-3.584-19.201-5.441-25.95-12.818-14.78-15.042-26.997-32.333-41.463-47.637-8.894-9.287-21.869-12.661-31.836-20.457-3.008-1.857-2.276-5.886-3.035-8.79 15.356 4.421 28.252 14.937 43.948 18.443 25.741 8.371 53.575 10.856 77.616 24.041 32.507 17.75 46.096 64.557 77.38 66.053-17.475-37.042-42.169-70.343-66.838-102.91-6.549-11.668-55.477-12.253-139.72-26.029-15.916-2.653-42.956-28.571-59.722-41.725-10.804-8.476-24.93-9.758-37.016-15.565-3.636-1.308-4.866-5.258-6.305-8.397 15.8 0.837 30.371 8.554 46.25 8.868 22.445 2.982 45.204 2.904 67.675 5.572 47.172 6.419 59.7 54.15 105 54.072 0.052-6.435-4.787-10.804-8.633-15.277-26.892-27.598-53.679-55.746-84.731-78.688-51.823-0.821-141.05 8.979-154.08 3.767-18.521-6.618-35.263-17.135-52.659-26.107-14.492-9.417-32.673-6.121-48.526-11.667-0.157-1.596-0.497-4.84-0.68-6.461 86.683 3.413 93.914-11.393 129.36-6.278 43.778 10.221 63.751 44.738 103.33 30.24-14.764-16.278-70.109-48.656-89.413-59.173-12.526-2.162-61.741 12.674-101.63-4.604-31.025-14.597-49.808-45.91-80.179-61.37-16.559-8.973-35.996-3.218-53.496-8.502 8.763-13.211 26.944-10.176 40.417-14.1 168.17-12.448 182.35 71.011 209.77 85.542 20.326 11.719 40.521 23.727 59.696 37.277 3.793 2.773 7.9 5.023 12.347 6.645-5.05-35.395-58.339-42.755-85.123-108.96-9.347-23.885-24.404-24.756-25.323-37.827 9.967-0.732 16.402 7.612 23.936 12.635 12.792 10.385 29.639 13.289 43.085 22.602 40.756 24.742 49.815 93.085 60.769 124.99 8.45 10.647 21.503 16.454 30.842 26.317 17.108 14.205 32.778 29.979 48.918 45.256 6.985 7.299 13.237 15.46 21.582 21.32 1.188-42.599-58.442-68.831-65.32-117.64-2.171-17.605-5.101-37.591-20.248-49.075-8.476-8.79-22.602-13.237-26.16-25.846 12.033-2.878 19.28 7.665 26.761 14.911 17.631 18.338 40.417 30.685 58.231 48.84 45.527 48.713 35.189 113.46 40.626 145.42 21.791 27.18 43.451 54.569 61.868 84.234 4.055 5.912 6.697 13.42 13.629 16.69 1.979-35.332-37.199-62.159-37.199-116.99 0.052-17.056 0.052-34.452-5.755-50.697-6.703-18.199-30.48-32.851-31.81-45.073 2.956-0.157 5.938-0.314 8.92-0.392 7.351 7.665 13.917 16.036 19.934 24.773 19.672 25.009 48.683 44.524 57.708 76.517 8.371 38.036-2.956 76.674-1.491 115.02-2.639 28.824 15.77 36.363 51.377 136.29 1.36 0.34 4.055 0.994 5.415 1.334 2.123-39.05-26.363-69.596-12.766-121.51 2.537-15.565 6.592-31.313 4.343-47.166-5.258-21.503-21.608-37.905-28.514-58.728 3.113-0.026 7.665-2.564 9.993 0.732 14.231 17.213 22.654 38.167 34.452 56.949 12.164 22.131 25.479 45.361 25.741 71.337-1.596 41.672-16.847 80.912-26.343 121.09-4.68 19.307 11.058 38.772 18.181 111.78 1.543 0.392 4.63 1.151 6.2 1.543 2.537-26.84-6.618-53.784-0.733-80.519 4.866-24.93 21.896-45.387 27.075-70.238 3.479-23.622-11.903-44.262-13.865-67.256 1.805 0.026 5.467 0.052 7.272 0.078 6.521 9.248 37.961 92.292 29.717 139.35-13.665 46.121-46.206 89.856-51.377 110.92 4.656 44 2.302 88.367-1.413 132.34 20.825-1.952 6.348-68.502 39.815-113.43 45.346-63.466 21.742-65.565 26.264-112.7 1.7 0.157 5.101 0.471 6.775 0.628 6.461 19.672 5.807 40.704 7.377 61.135 3.401 17.527 2.433 35.446 2.538 53.209 1.295 31.963-30.006 67.37-53.653 97.183-27.74 35.816-32.757 28.008-35.865 59.565-4.552 29.586-13.315 58.284-19.829 87.425 13.524-2.593 16.463-45.896 35.943-72.828 12.903-22.678 47.809-34.306 56.871-66.262 3.61-13.289 4.656-27.206 9.13-40.286 2.067-3.872 8.319-0.445 7.299 3.584-2.328 23.334-9.627 45.962-11.51 69.401-13.435 54.016-10.357 49.041-43.033 78.348-17.893 16.454-37.591 30.737-56.871 45.492-8.031 5.467-9.888 15.617-13.237 24.093-9.627 28.226-24.328 54.36-35.682 81.801 23.032-1.396 26.33-70.6 76.752-85.202 58.504-19.012 42.953-50.907 61.318-60.455 1.386 5.912 0.654 12.007-1.7 17.605-48.106 118.67-60.392 97.467-146.05 144.16-3.431 4.38-33.178 60.119-78.322 112.38-0.706 1.753-2.093 5.232-2.773 6.958 34.498-10.525 37.941-53.545 80.702-72.174 16.533-6.461 34.949-8.449 49.965-18.469 27.097-18.265 15.977-14.011 40.757-48.291 1.7 0.052 5.075 0.157 6.775 0.209 1.203 16.585-11.589 29.063-18.835 42.797-49.853 78.267-41.4 63.6-162.19 109.27-7.351 2.93-15.696 4.447-21.346 10.464-67.181 71.052-84.079 69.899-86.562 83.763 39.266-8.057 56.976-52.241 95.77-61.03 20.195-5.023 42.248 3.035 61.658-6.383 10.595-6.461 18.652-16.245 28.54-23.648 5.049-3.192 7.482 5.153 4.604 8.397-9.212 14.956-61.759 65.934-89.701 78.165-28.965 13.698-115.43 10.694-125.93 18.39-28.174 20.352-57.708 38.952-88.76 54.621-4.866 2.537-10.124 4.813-13.001 9.784 7.665 0.262 15.617 0.916 23.099-1.308 24.852-6.357 40.573-31.339 66.524-34.949 21.189-1.439 42.693 2.511 63.646-1.988 33.72-6.481 16.665 0.141 56.112-24.773 1.282 0.811 3.819 2.433 5.101 3.27-4.5 13.76-18.286 20.928-29.325 28.88-28.88 20.012-58.964 43.817-95.666 45.099-112.05-6.262-109.64-8.436-120.41-2.302-25.715 11.772-52.241 21.712-79.133 30.397-8.162 2.695-16.585 4.735-24.25 8.633 22.756 16.047 57.808-8.194 79.708-15.356 13.446-4.159 26.552 2.851 39.422 5.912 18.312 5.232 37.591 3.636 56.4 3.27 17.318 0.575 30.842-11.955 47.035-15.931 0.916 1.046 2.721 3.139 3.61 4.212-10.281 11.615-25.27 17.37-39.37 22.942-33.536 13.001-67.675 28.174-104.38 27.729-70.389-8.696-89.145-23.481-104.51-27.834-97.058 25.105-109.68 12.649-120.33 24.25 10.568 3.322 21.66 8.083 32.909 4.944 17.161-2.433 35.002-9.627 52.136-3.453 9.313 3.034 16.873 9.6 25.82 13.446 19.094 9.223 55.597 15.636 99.746 6.828 0.785 1.229 2.38 3.688 3.165 4.918-12.007 10.124-28.645 10.098-43.373 12.531-101.04 18.333-103.33 8.978-137.97-6.88-18.94-9.234-37.147-20.064-53.706-33.118-6.906-1.073-13.917-0.314-20.823 0.026 5.703 7.979 15.513 11.327 22.968 17.422 78.487 59.169 76.587 96.966 148.27 97.418-33.17 11.484-68.747 17.292-103.85 15.356-19.421-91.267-73.854-130.25-93.154-127.89-47.397 14.259-76.242 78.149-87.87 128.34-35.263 0.811-70.945-3.976-104.14-16.036 74.629-1.188 73.797-42.024 152.96-100.09 5.86-4.709 14.178-7.115 17.213-14.571-7.717 0.34-16.847-3.087-23.151 2.904-19.253 14.833-40.757 26.526-62.835 36.545-33.432 18.181-72.933 9.47-108.48 3.715-18.678-5.546-39.37-3.244-56.819-12.871-0.759-2.537-1.36-5.101-1.779-7.691 14.833 1.203 29.377 6.2 44.367 4.813 15.879-2.171 32.229-1.988 47.506-7.455 17.291-4.892 30.764-19.829 49.389-20.483 15.042 0.732 29.56 5.415 44.445 7.22 8.711 1.125 16.899-2.485 25.035-4.944 0.131-1.125 0.392-3.401 0.523-4.526-40.181-4.526-80.31-10.699-119.55-20.849-31.235 15.12-65.477 22.811-99.668 27.703-39.867 1.962-76.857-15.539-113.4-28.985-10.856-4.944-22.576-9.313-30.947-18.181-3.218-2.694-2.067-9.496 3.139-6.331 26.382 9.317 23.204 18.756 88.602 14.362 17.867-1.753 35.002-14.126 53.209-7.9 28.547 8.253 36.566 24.802 72.75 17.998 0.811-1.334 2.433-4.002 3.244-5.337-35.08-9.6-69.401-22.183-102.42-37.513-9.548-5.441-20.718-3.061-31.13-2.642-23.753 2.904-47.82 1.229-71.52 4.447-14.989 1.884-30.319 0.576-44.733-3.95-29.159-10.139-85.44-50.829-94.671-61.658-1.57-3.244-1.936-10.856 3.375-10.229 16.446 10.109 28.603 30.996 107.54 25.924 40.403-3.752 57.384 44.28 100.9 36.257-2.511-2.904-5.467-5.258-8.868-6.88-32.359-17.239-63.908-36.1-93.677-57.473-19.698-6.043-40.966-4.212-61.213-7.691-51.747-3.219-68.694-4.648-111.34-44.785-15.251-14.78-32.83-27.677-43.896-46.172 0.68-1.936 2.014-5.781 2.694-7.717 12.714 6.488 20.614 19.306 33.17 26.029 21.712 9.13 46.224-0.89 68.067 7.9 34.374 12.086 51.561 52.921 89.23 57.996-1.962-3.662-4.447-6.985-7.769-9.47-28.017-22.367-54.438-46.695-78.845-72.933-10.055-12.295-113.63-36.067-140.4-61.135-23.648-22.602-39.71-51.508-56.217-79.368-4.316-7.9-11.249-18.05-2.904-25.715 19.048 19.96 15.344 35.545 47.977 53.836 17.318 9.757 38.167 10.464 55.249 20.745 30.418 16.795 43.261 63.029 73.665 67.806-6.226-10.176-14.885-18.521-22.21-27.886-102.22-135.45-12.217-61.203-140.97-131.48-24.106-13.521-39.784-46.568-56.557-81.435-5.467-13.132-14.519-26.055-10.935-41.018 12.975 10.647 12.714 30.528 25.819 41.358 14.806 16.716 39.266 16.768 56.269 30.214 28.955 21.704 33.667 68.1 55.877 76.491-0.785-3.819-1.779-7.586-3.715-10.987-40.185-80.062-34.457-89.854-43.582-95.352-91.79-68.674-91.969-75.82-100.92-120.44-6.473-48.635-14.465-64.204-11.589-79.577 1.596-0.026 4.787-0.078 6.383-0.131 5.624 20.143 5.023 42.954 18.573 60.036 13.708 19.489 36.728 29.953 49.285 50.357 21.301 34.339 19.163 66.772 33.903 68.486-8.371-32.438-17.736-64.797-21.634-98.177-1.481-18.19-41.02-45.537-78.348-107.96-14.126-27.049-9.574-58.597-6.985-87.739 3.741-20.745-0.968-43.19 8.266-62.783 1.753-0.052 5.232-0.105 6.958-0.131 1.386 19.044-3.898 37.827-2.433 56.845 8.817 45.85 42.533 54.017 50.122 115.1 3.476 20.998 4.245 51.29 17.396 51.377-1.962-35.342-6.383-70.84-2.851-106.31-0.209-11.51 4.29-24.224-2.197-34.714-46.286-87.849-62.201-102.99-39.004-178.98 5.677-18.442 9.287-37.722 18.286-54.961 1.91-3.872 5.964-5.781 9.365-8.109 1.491 21.529-13.786 40.626-13.838 62.103 2.224 28.723 22.89 51.456 28.069 79.316 4.731 54.2-7.902 65.304 1.386 80.414 7.702-9.485 0.212-10.954 21.294-94.541 4.107-19.881-4.813-38.899-9.784-57.708-23.44-96.3-24.141-93.722 20.928-173.67 7.848-12.949 13.655-27.389 24.171-38.533 2.799-0.732 5.65-1.177 8.58-1.308-4.63 23.779-26.473 40.757-28.435 65.425-1.256 27.232 11.327 53.444 7.612 80.781-0.994 28.462-17.867 54.333-14.649 83.24 1.23-0.183 3.715-0.549 4.97-0.732 10.778-36.859 27.755-71.599 44.524-106.02 12.518-25.15 2.092-82.49 2.616-104.77 0.879-41.426-7.8-48.704 48.683-104.82 11.406-11.406 18.704-26.343 30.921-37.016 2.694-0.889 5.467-1.543 8.319-1.883-0.706 4.002-0.235 8.816-3.741 11.693-35.254 37.581-29.234 32.417-33.38 87.687 1.694 46.156-37.387 80.666-36.885 113.45 10.927-2.4 1.016-6.1 75.026-98.831 5.598-22.357-1.834-76.102 23.622-123.89 12.53-21.634 33.223-36.676 52.764-51.534 13.263-9.156 23.439-21.922 35.969-31.941 3.165-2.956 7.639-3.113 11.641-4.081 0 1.91 0.026 5.755 0.026 7.691-10.385 9.81-23.361 16.847-32.281 28.174-13.995 19.384-8.214 45.57-20.483 65.608-18.682 33.429-55.19 56.112-56.635 91.245 8.45-4.813 14.205-12.949 21.006-19.698 13.629-13.42 27.023-27.127 41.855-39.292 11.484-11.353 25.636-19.646 36.833-31.261 12.8-22.018 14.934-102.41 69.951-131.03 11.856-6.72 25.563-10.042 36.315-18.727z"
                          style="fill: inherit;"></path>
                </g>
                <g id="__id27_s8iwug9dm">
                    <path d="m886.51 270.27c9.888-0.785 19.803-0.523 29.691 0.105 2.851 26.918-0.105 54.176 1.596 81.199 17.736-17.684 28.776-41.332 46.773-58.781-1.746 194.13 2.687 194.77-2.511 202.5-14.545 20.169-30.45 39.396-44.157 60.115-1.046 12.923-1.229 26.238 0.418 39.135 54.081-49.138 99.824-33.816 196.09-45.178 39.161-6.2 80.728-14.728 111.44-41.672 10.228-8.868 14.806-21.843 17.867-34.609 11.798-13.655 35.054-16.114 48.683-3.793 9.679 11.981 9.025 30.136 0.131 42.378-6.566 7.769-16.585 11.039-25.009 16.271 2.133 5.564 188.64 424.87 201.06 435.19-118.32 121.22-310 112.53-416.2-0.366 12.56-4.92-5.081 26.884 190.7-404.27 3.715-8.057 7.612-16.062 10.176-24.564-105.7 25.536-292.44 37.843-334.58 135.17-1.881 4.462-2.2 594.64-0.523 609.96 13.525-7.298 27.101-14.518 40.992-21.085-16.062 40.05-35.865 78.531-52.842 118.24-1.779 2.302-1.91 8.947-6.095 6.252-18.809-41.62-38.01-83.057-56.662-124.76 14.754 5.99 27.912 15.382 42.771 21.268 0.363-92.39 0.413-569.22-0.026-606.64-39.128-101.18-242.46-115.16-335.86-138.44 1.911 7.562-9.463-18.254 188.43 417.85 1.753 5.65 6.121 9.208 11.275 11.693-108.05 115.97-305.52 116.66-414.37-0.288 10.213-9.069 193.95-419.72 199.94-435.22-8.162-4.84-17.239-8.659-24.119-15.303-23.473-31.632 8.994-70.055 47.009-41.829 6.44 13.885 2.007 40.697 69.114 64.614 101.37 34.84 184.33-0.43 245.61 49.834 4.212 3.322 8.397 6.671 12.949 9.522 0.314-12.53 0.549-25.087 0.183-37.617-13.943-22.366-31.679-42.274-46.276-64.222-1.075-6.988-0.475-199.33-0.471-200.33 22.957 26.846 36.47 51.827 46.512 59.121 0.888-27.153 0.077-54.306 0.287-81.46m8.423 16.847c1.151 13.001-2.59 26.84 2.485 39.187 12.204-5.413 10.772 11.085 10.542-40.103-4.342 0.314-8.685 0.576-13.027 0.916m26.212 83.423c-6.331 7.037-4.133 17.239-4.97 25.872 1.334-0.366 3.95-1.099 5.284-1.465 9.287-11.065 17.161-23.36 26.238-34.661 7.168-8.188 4.107-19.777 3.898-29.639-11.066 12.556-20.039 26.787-30.45 39.893m-70.579-37.958c0 6.854-0.314 13.708 0.131 20.561 6.618 11.432 15.643 21.242 23.23 32.019 3.584 4.735 6.121 11.327 12.949 11.876-0.314-7.456 0.994-15.225-1.151-22.445-6.226-9.522-13.891-17.972-20.169-27.441-4.16-5.623-7.351-13.183-14.99-14.57m88.027 60.847c-7.089 10.359-15.67 19.672-22.209 30.397-0.732 6.095-0.497 12.269-0.497 18.416 1.36-0.602 4.055-1.779 5.415-2.354 39.239-53.696 30.283-35.005 30.947-61.553-6.54 2.93-9.575 9.653-13.656 15.094m-88.105-14.492c0.131 6.017-0.732 12.243 0.732 18.181 5.337 9.365 12.766 17.291 18.887 26.107 4.866 6.723 8.947 14.466 16.428 18.704 0.235-6.069 0.576-12.19-0.157-18.233-8.58-15.094-20.169-28.122-30.554-41.934-1.334-0.706-4.002-2.119-5.336-2.825m0.235 43.451c-0.314 6.514-0.576 13.08 0.052 19.594 5.912 9.025 13.211 17.082 19.018 26.186 4.499 5.991 8.345 13.969 16.585 15.173-0.131-5.807 0.968-11.746-0.262-17.475-27.16-38.63-29.345-40.67-35.393-43.478m83.318 21.372c-5.258 7.717-11.379 14.832-16.559 22.602-0.523 6.2-0.235 12.426-0.078 18.652 2.93-1.57 6.069-3.087 7.769-6.121 8.685-12.557 18.783-24.093 27.206-36.807 0.628-6.88 0.157-13.812-0.419-20.666-7.899 5.755-12.268 14.649-17.919 22.34m0.184 44.55c-5.912 8.214-12.897 15.696-17.762 24.616-0.994 5.546 0.602 11.144 1.099 16.664 12.557-8.45 18.73-23.544 28.88-34.557 7.874-7.272 6.017-18.286 5.572-27.86-7.875 5.206-12.06 13.943-17.789 21.137m-83.842-19.646c0.131 5.807-0.445 11.693 0.602 17.475 5.31 8.711 12.112 16.376 17.71 24.904 5.441 6.985 9.705 15.486 17.867 19.75-1.336-27.171 8.686-6.49-26.238-55.432-2.25-3.636-5.86-5.807-9.941-6.697m-489.42 466.66c-3.61 8.423-8.528 16.454-9.941 25.663 127.29 0.445 254.58 0.288 381.88 0.078-6.31-18.131-185.99-414.04-192.12-420.83-60.455 131.45-119.84 263.4-179.82 395.09m899.1-393.65c-198.15 436.6-187.53 410.88-188.79 419.44 127.29 0.209 254.58 0.183 381.88-0.026-2.951-10.541-110.38-244.56-186.65-413.19-1.307-3.009-2.406-6.697-6.435-6.226z"
                          style="fill: inherit;"></path>
                </g>
            </svg>
        </section>

        <section id="about" class="scroll-animations pt-75 pb-75">
            <div class="text-center">
                <p class="sub-heading">OAB/DF 64294</p>
                <h2 class="heading mb-30">Dr. Paulo Henrique de Sá</h2>

                <div class="about-card-wrapper mb-75 mt-75">
                    <div class="card clear-fix">
                        <div class="card-image animated invisible" data-class-in="fadeInLeft" data-class-out="">
                            <img src="https://www.stanchierifamilylaw.com//wp-content/themes/sfl2019/img/board-room.jpg"
                                 alt="" class="photo">
                        </div>
                        <div class="card-body animated invisible" data-class-in="fadeInRight" data-class-out="">
                            <h3>Sobre</h3>
                            <p>Eu ajudo consumidores que se sentiram prejudicados a encontrar uma solução jurídica e
                                satisfatória dentro de uma relação comercial.</p>
                            <p><a href="#">Conheça</a></p>
                        </div>
                    </div>
                </div>

                <div class="about-card-wrapper mb-75 mt-75">
                    <div class="card image-align-right clear-fix">
                        <div class="card-image animated invisible" data-class-in="fadeInRight" data-class-out="">
                            <img src="https://www.stanchierifamilylaw.com//wp-content/themes/sfl2019/img/board-room.jpg"
                                 alt="" class="photo">
                        </div>
                        <div class="card-body animated invisible" data-class-in="fadeInLeft" data-class-out="">
                            <h3>Serviços</h3>
                            <p>Eu ajudo consumidores que se sentiram prejudicados a encontrar uma solução jurídica e
                                satisfatória dentro de uma relação comercial.</p>
                            <p><a href="#">Veja todos</a></p>
                        </div>
                    </div>
                </div>

                <div class="about-card-wrapper mb-75 mt-75">
                    <div class="card clear-fix">
                        <div class="card-image animated invisible" data-class-in="fadeInLeft" data-class-out="">
                            <img src="https://www.stanchierifamilylaw.com//wp-content/themes/sfl2019/img/board-room.jpg"
                                 alt="" class="photo">
                        </div>
                        <div class="card-body animated invisible" data-class-in="fadeInRight" data-class-out="">
                            <h3>Orientação jurídica</h3>
                            <p>Eu ajudo consumidores que se sentiram prejudicados a encontrar uma solução jurídica e
                                satisfatória dentro de uma relação comercial.</p>
                            <p><a href="#">Veja todos</a></p>
                        </div>
                    </div>
                </div>

                <!--<p>Nos dias de hoje são inúmeras as transações comerciais ocorridas no dia a dia, técnicas para colocar o consumidor contra a parede e vender um determinado produto de forma a forçar com todos os argumentos possíveis a compra de um item, por vezes utilizando-se de práticas abusivas e desleais, o que acaba por colocar o consumidor em uma situação delicada. Sendo assim, nessa página você irá encontrar dicas, artigos e orientação jurídica especializada sobre seus direitos.</p>-->
            </div>
            <div class="invisible footer-sep" style="width: 100%; height: 1px;"></div>
        </section>

        <section id="social" style="padding: 75px 0; background: rgb(29, 28, 28); margin-bottom: 388px; min-height: 150px;">
            <div class="centered text-center">
                <h2 class="heading mb-30">Contatos</h2>

                <ul class="social-icons">
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.svg">
                        </a>
                    </li>
                </ul>
            </div>
        </section>

    </main><!-- #main -->

<?php
get_footer();
